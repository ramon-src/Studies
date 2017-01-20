import React from "react";

export default class Todo extends React.Component {
    render() {
        const {id, text, complete} = this.props;

        return (
            <li class="list-group-item">{ text }</li>
        );
    }
}