import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class MyPortal extends Component {

    el = document.createElement('div');

    componentDidMount() {
        document.body.appendChild(this.el);
    }

    componentWillUnmount() {
        document.body.removeChild(this.el);
    }

    render() {
        return (
            ReactDOM.createPortal(this.props.children, this.el)
        );
    }
}

class Portal extends Component {

    state = {
        counter: 0,
    }

    handleClick = () => {
        this.setState(({ counter }) => ({
            counter: counter + 1,
        }));
    }

    render() {
        return (
            <div onClick={this.handleClick}>
                <span>Text</span>
                <span>{this.state.counter}</span>
                <MyPortal>
                    <div>Portal</div>
                    <button>+1</button>
                </MyPortal>
            </div>
        );
    }
}

export default Portal;