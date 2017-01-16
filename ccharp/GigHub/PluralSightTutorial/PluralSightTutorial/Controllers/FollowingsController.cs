using Microsoft.AspNet.Identity;
using PluralSightTutorial.Dtos;
using PluralSightTutorial.Models;
using System.Linq;
using System.Web.Http;

namespace PluralSightTutorial.Controllers
{
    // This limit to only users
    [Authorize]
    public class FollowingsController : ApiController
    {
        private ApplicationDbContext _context;

        public FollowingsController()
        {
            //Inject the dbContext to use the models
            _context = new ApplicationDbContext();
        }

        [HttpPost]
        public IHttpActionResult Follow(FollowingDto dto)
        {
            /*
             * We inject the Dto as a parameter, this class is a pattern that receives
             * the requests from a ajax and can manipulate too.             
             */

            var userId = User.Identity.GetUserId();

            /*
             * Check if the user (follower) is already following an artist
             * So we check in Model Followings, if has any userId (follower)
             * with the status like followee, in other words this user was following a artist
             * AND the followee is the followe from the request
             */
            if (_context.Followings.Any(f => f.FolloweeId == userId && f.FolloweeId == dto.FolloweeId))
                return BadRequest("Following already exists.");


            var following = new Following
            {
                FollowerId = userId,
                FolloweeId = dto.FolloweeId
            };

            _context.Followings.Add(following);
            _context.SaveChanges();

            return Ok();
        }
    }
}
