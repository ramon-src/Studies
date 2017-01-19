import React from 'react';

export default class Archives extends React.Component {
    render() {
        const {article} = this.props.params;
        const { date, filter } = this.props.location.query;
        return (
            <div>
                <h1>Archives ({article})</h1>
                <h4>Date: {date}, Filter: {filter}</h4>
            </div>
        );
    }
}