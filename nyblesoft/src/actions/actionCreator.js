import { 
    ADD_NOTE, 
    REMOVE_NOTE, 
    EDIT_NOTE, 
    ADD_FILTER, 
    REMOVE_FILTER,
    CHANGE_FILTER
} from '../constants';

export const addNote = (id, text) => ({
    type: ADD_NOTE,
    id,
    text
});

export const removeNote = id => ({
    type: REMOVE_NOTE,
    id
});

export const editNote = (id, text) => ({
    type: EDIT_NOTE,
    id,
    text
});

export const addFilter = (id, filter) => ({
    type: ADD_FILTER,
    id,
    filter
});

export const removeFilter = (id, filter) => ({
    type: REMOVE_FILTER,
    id,
    filter
});

export const changeFilter = activeFilter => ({
    type: CHANGE_FILTER,
    activeFilter
});