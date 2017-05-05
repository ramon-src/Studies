// The client ID is obtained from the Google Developers Console
// at https://console.developers.google.com/.
// If you run this code from a server other than http://localhost,
// you need to register your own client ID.
var OAUTH2_CLIENT_ID = 'AIzaSyDC2hJjgy7C97kGS-GfhMK2O1tLg7Wcjhk';
var OAUTH2_SCOPES = [
    'https://www.googleapis.com/auth/youtube'
];

// Upon loading, the Google APIs JS client automatically invokes this callback.
googleApiClientReady = function() {
    gapi.auth.init(function() {
        window.setTimeout(checkAuth, 1);
    });
}

// Attempt the immediate OAuth 2.0 client flow as soon as the page loads.
// If the currently logged-in Google Account has previously authorized
// the client specified as the OAUTH2_CLIENT_ID, then the authorization
// succeeds with no user intervention. Otherwise, it fails and the
// user interface that prompts for authorization needs to display.
function checkAuth() {
    gapi.auth.authorize({
        client_id: OAUTH2_CLIENT_ID,
        scope: OAUTH2_SCOPES,
        immediate: true
    }, handleAuthResult);
}

// Handle the result of a gapi.auth.authorize() call.
function handleAuthResult(authResult) {
    if (authResult && !authResult.error) {
        // Authorization was successful. Hide authorization prompts and show
        // content that should be visible after authorization succeeds.

        loadAPIClientInterfaces();
    } else {
        // Make the #login-link clickable. Attempt a non-immediate OAuth 2.0
        // client flow. The current function is called when that flow completes.
        $('#login-link').click(function() {
            gapi.auth.authorize({
                client_id: OAUTH2_CLIENT_ID,
                scope: OAUTH2_SCOPES,
                immediate: false
            }, handleAuthResult);
        });
    }
}

// Load the client interfaces for the YouTube Analytics and Data APIs, which
// are required to use the Google APIs JS client. More info is available at
// http://code.google.com/p/google-api-javascript-client/wiki/GettingStarted#Loading_the_Client
function loadAPIClientInterfaces() {
    gapi.client.load('youtube', 'v3', function() {
        handleAPILoaded();
    });
}
function handleAPILoaded()
{
    alert("x");
    $.ajax({
        method: "GET",
        url: "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=PL3dIVMpwlNmpsfuRFO37xBALGHReOWYwq&key=AIzaSyDC2hJjgy7C97kGS-GfhMK2O1tLg7Wcjhk",
        success: function (response) {
            console.log(response);
        }
    });
}
//
// function handleAPILoaded() {
//     requestUserUploadsPlaylistId();
// }
//
// // Call the Data API to retrieve the playlist ID that uniquely identifies the
// // list of videos uploaded to the currently authenticated user's channel.
// function requestUserUploadsPlaylistId() {
//     // See https://developers.google.com/youtube/v3/docs/channels/list
//     //https://www.googleapis.com/youtube/v3/playlistItems
//     var request = gapi.client.youtube.channels.list({
//         mine: true,
//         part: 'contentDetails'
//     });
//     request.execute(function(response) {
//         playlistId = response.result.items[0].contentDetails.relatedPlaylists.uploads;
//         requestVideoPlaylist(playlistId);
//     });
// }