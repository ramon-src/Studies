import React from 'react';
import Article from "../components/Article";

export default class Archives extends React.Component {
    render() {
        const Articles = [
            "Some Article",
            "Some Other Article",
            "Yet Another Article",
            "Still More",
        ].map((title, i) => <Article key={ i } title={ title }/>);

        return (
            <div>
                <div class="row">{ Articles }</div>
            </div>
        );
    }
}