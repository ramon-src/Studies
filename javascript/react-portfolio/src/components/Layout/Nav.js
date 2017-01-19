import React from 'react';
import { IndexLink, Link } from "react-router";

export default class Nav extends React.Component {
    constructor() {
        super();
        this.state = {
            collapsed: true
        };
    }

    toggleCollapse() {
        const collapsed = !this.state.collapsed;
        this.setState({collapsed});
    }

    render() {
        const {location} = this.props.location;
        const {collapsed} = this.state;

        const infoClass = location.pathname === "/" ? "active" : "";
        const archivesClass = location.pathname.match(/^\/archives/) ? "active" : "";
        const settingsClass = location.pathname.match(/^\/settings/) ? "active" : "";
        const navClass = collapsed ? "collapse" : "";

        return (
            <div>
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" onClick={this.toggleCollapse.bind(this)}
                                    data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Brand</a>
                        </div>

                        <div class={"navbar-collapse " + navClass } id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class={infoClass}>
                                    <IndexLink to="/" onClick={this.toggleCollapse.bind(this)}>
                                        Info <span class="sr-only"></span>
                                    </IndexLink>
                                </li>
                                <li class={archivesClass}>
                                    <Link to="archives" onClick={this.toggleCollapse.bind(this)}>
                                        Archives <span class="sr-only"></span>
                                    </Link>
                                </li>
                                <li class={settingsClass}>
                                    <Link to="settings" onClick={this.toggleCollapse.bind(this)}>Settings</Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        );
    }
}

