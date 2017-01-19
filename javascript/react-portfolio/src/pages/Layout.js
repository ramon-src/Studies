import React from 'react';
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Layout/Nav";
import Archives from "./Archives";
import Settings from "./Settings";

export default class Layout extends React.Component {
    navigate() {
        console.log(this.props.router);
        this.props.router.push("/")
    }
    constructor() {
        super();
        this.state = {
            title: "Welcome"
        };
    }

    changeTitle(title) {
        this.setState({title});
    }

    render() {
        const {router} = this.props;

        const containerStyle = {
            marginTop: "60px"
        }

        return (
            <div>
                <Nav location={router}/>

                <div class="container" style={containerStyle}>
                    <div class="row">
                        <div class="col-lg-12">
                            <Header changeTitle={this.changeTitle.bind(this)} title={this.state.title}/>

                            {this.props.children}

                            <Footer/>
                        </div>

                    </div>
                </div>
            </div>
        );
    }
}