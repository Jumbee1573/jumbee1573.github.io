import React, { Component, Fragment } from 'react';

class Refs extends Component {
    
    state = {
        text: '',
        showText: '',
    }
    
    inputRef = React.createRef();

    componentWillMount() {
        console.log('cwm', this.inputRef);
    }

    componentDidMount() {
        console.log('cdm', this.inputRef);
    }

    change = () => {
        this.setState({
            text: this.inputRef.current.value,
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
                    <input ref={this.inputRef} type="text" onChange={this.change} value={text}/>
                    <button onClick={this.handleClick}>Show</button>
                </form>
                <h2>{showText}</h2> 
           </Fragment>
        );
    }
}

export default Refs;