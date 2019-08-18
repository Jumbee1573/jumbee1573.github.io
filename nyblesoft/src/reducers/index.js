import { combineReducers } from 'redux';

import notes from './notes';
import filters from './filters';
import filtration from './filtration';

const rootReducer = combineReducers({ notes, filters, filtration });

export default rootReducer;