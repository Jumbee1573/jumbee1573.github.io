import React, { Component } from 'react';

function Welcome() {
    return <h1>Hello!</h1>
}

class SuperWelcome extends Component {
    render() {
        return <h1>Hello!</h1>
    }
}

function Components() {
    return(
        <div>
            <Welcome />
            <SuperWelcome />
        </div>  
    )
}

export default Components;