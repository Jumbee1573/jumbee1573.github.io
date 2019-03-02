import React, { Fragment, Component } from 'react';

const ValidationMsg = ({ val }) => {
    if(val >= 10) {
        return <h2>Value more than 10</h2>
    } else {
        return <h3>Less than <em>10</em></h3>
    }
}

class ConditionalRendering extends Component {

    state = {
        activeTab: 1,
    }

    handleTab = (e) => {
        this.setState({
            activeTab: +e.target.getAttribute('data-name'),
        })
    }

    render() {
        console.log(this.state);
        // const val = 11;
        const {activeTab} = this.state;
        return (
            <Fragment>
                <button data-name={1} onClick={this.handleTab}>Tab1</button>
                <button data-name={2} onClick={this.handleTab}>Tab2</button>
                <button data-name={3} onClick={this.handleTab}>Tab3</button>
                {activeTab === 1 ? <span>1</span>: activeTab === 2 ? <span>2</span> : <span>3</span>}
            </Fragment>
        //   <div>
        //       {/* {val >= 10 ? <h2>Value more than 10</h2> : <h3>Less than <em>10</em></h3>} */}
        //       {/* <ValidationMsg val={val} /> */}
        //   </div>
        );
    }
}

export default ConditionalRendering;