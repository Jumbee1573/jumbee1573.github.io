import React, { Fragment, Component } from 'react';

const names = ['Alex', 'John', 'Rulf'];

const TAB_BTN = [
    {
        dataName: 1,
        text: 'Tab1',
        bla: {
            ag: 'la'
        }
    },
    {
        dataName: 2,
        text: 'Tab2',
        bla: {
            ag: 'la'
        }
    },
    {
        dataName: 3,
        text: 'Tab3',
        bla: {
            ag: 'la'
        }
    }
];

const tab = {
    dataName: 1,
    text: 'Tab1',
    bla: {
        ag: 'la'
    }
};

const test = {
    "books": {
        "book1": {
            "id": 1,
            "name": "Sample",
            "author": "Somebody",
            "genre": "Tales"
        },
        "book2": {
            "id": 2,
            "name": "Winter",
            "author": "Ted"
        }    
    },
    "trygh": {
        "wer": {
            "id": 3,
            "name": "Sample",
            "author": "Somebody",
            "genre": "Tales"
        },
        "bookwerg4": {
            "id": 4,
            "name": "Winter",
            "author": "Ted"
        }    
    }
}

class ListsAndKeys extends Component {

    state = {
        activeTab: 1,
    }

    handleTab = (e) => {
        this.setState({
            activeTab: +e.target.getAttribute('data-name'),
        })
    }

    render() {

        const { activeTab } = this.state;

        return (
            
            <Fragment>
                {Object.keys(test).map((item, index) =>
                    <Fragment>
                        <span key={index}>Есть объект: Book, в нем объект: {item} <br /></span>
                        <span key={index}>В объекте {item} есть объект: {
                            Object.keys(test.books).map((item, index) => 
                                <Fragment>
                                    <div key={index}>{item}</div>    
                                    {Object.keys(test.books[item]).map((item, index) => 
                                        <div key={index}>Свойства: {item}</div>    
                                    )}
                                </Fragment>
                            )
                              
                        }<br /></span>
                    </Fragment>
                )}


                {TAB_BTN.map(({ dataName, text, bla }) =>                
                    <button 
                        key={`${dataName}-${text}`}
                        data-name={dataName}
                        onClick={this.handleTab}
                    >{bla.ag}</button>
                )}
                {activeTab === 1 ? <span>One</span> : activeTab === 2 ? <span>Two</span> : <span>Three</span>}
                <ul>
                    {names.map((name, index) =>
                        <li key={index}>{name}</li>
                    )}
                </ul>
            </Fragment>
        );
    }

}

export default ListsAndKeys;