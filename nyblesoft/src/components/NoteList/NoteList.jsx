import React from 'react';
import PropTypes from 'prop-types';

import NoteItem from '../NoteItem/NoteItem';

import './NoteList.scss';

const NoteList = ({ notes, removeNote, editNote, addFilter }) => (
    <ul className="note__list">
        {notes.map(({ id, text }) => (
            <NoteItem 
                key={id} 
                id={id} 
                text={text} 
                removeNote={removeNote} 
                editNote={editNote} 
                addFilter={addFilter} 
            />
        ))}
    </ul>
);

NoteList.propTypes = {
    notes: PropTypes.array,
    removeNote: PropTypes.func,
    editNote: PropTypes.func,
    addFilter: PropTypes.func
}

NoteList.defaultProps = {
    notes: [],
    removeNote: () => {},
    editNote: () => {},
    addFilter: () => {}
}

export default NoteList;