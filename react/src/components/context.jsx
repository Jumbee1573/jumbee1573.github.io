import React, { Component, Fragment } from 'react';

// const LevelThree = ({ title }) => <h1>{ title }</h1>

// const LevelTwo = ({ title }) => <LevelThree title = { title }/>

// const LevelOne = ({ title }) => <LevelTwo title = { title }/>

// class Context extends Component {
//     render() {
//         return (
//             <LevelOne title = "simple title"/>
//         );
//     }
// }

// export default Context;

const TitleContext = React.createContext();

const LevelThree = () => (
    <TitleContext.Consumer>
        {({title, subTitle, click, counter}) => (
            <Fragment>
                <span>{counter}</span>
                <h1 onClick={click}>{title}</h1>
                <h2>{subTitle}</h2>
            </Fragment>
        )}
    </TitleContext.Consumer>
)

const LevelTwo = () => <LevelThree />

const LevelOne = () => <LevelTwo />

class Context extends Component {

    state = {
        counter: 0,
    }

    click = () => {
        this.setState({
            counter: ++this.state.counter
        })
    }

    render() {
        return (
            <TitleContext.Provider value={ {title: 'Simple Title', subTitle: 'Sub Title', click: this.click, counter: this.state.counter} } >
                <LevelOne />
            </TitleContext.Provider>
        );
    }
}

export default Context;