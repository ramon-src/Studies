import React from "react";

export default class Article extends React.Component {
    render() {
        const {title, description} = this.props;

        const containerStyle = {
            border: "1px solid #E1E1E1",
            padding: "0px 0px 20px 15px",
            marginBottom: "15px"
        }

        return (
            <div class="col-md-4">
                <div style={containerStyle}>
                    <h2>{ title }</h2>
                    <p>{ description }</p>
                    <a href="" class="btn btn-default">More Info</a>
                </div>
            </div>
        );
    }
}