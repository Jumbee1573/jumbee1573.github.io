import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
// import Components from './components/Components.jsx';
// import State from './components/State.jsx';
// import Props from './components/Props.jsx';
// import {CounterButton, Counter, Button} from './components/Props2.jsx'; //<CounterButton child={<Button />}><Counter /></CounterButton>
// import Events from './components/Events.jsx';
// import ConditionalRendering from './components/conditionalRendering.jsx';
// import ListsAndKeys from './components/ListsAndKeys.jsx';
// import Form from './components/Forms.jsx';
// import Refs from './components/Forms.jsx';
// import HOCs from './components/HOCs.jsx';
// import Portal from './components/portals.jsx';
// import Context from './components/context.jsx';
import API from './components/API.jsx';

// import Table from './components/fragmentAndCss.jsx';
import * as serviceWorker from './serviceWorker';

ReactDOM.render(<API />, document.getElementById('root'));

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: http://bit.ly/CRA-PWA
serviceWorker.unregister();
