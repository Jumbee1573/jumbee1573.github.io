import React, { Component, Fragment } from 'react';

class Form extends Component {
    
    state = {
        text: '',
        showText: '',
    }

    change = (e) => {
        this.setState({
            text: e.target.value,
        })
    }

    handleClick = (e) => {
        e.preventDefault();
        const {text, showText} = this.state;

        this.setState({
            text: '',
            showText: text,
        });
    }

    render() {

        const { text, showText } = this.state;

        return (
           <Fragment>
                <form action="">
                    <input type="text" onChange={this.change} value={text}/>
                    <button onClick={this.handleClick}>Show</button>
                </form>
                <h2>{showText}</h2> 
           </Fragment>
        );
    }
}

export default Form;