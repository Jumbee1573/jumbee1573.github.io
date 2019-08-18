import React from 'react';
import PropTypes from 'prop-types';

import './NoteInput.scss';

const NoteInput = ({ value, onChange, onKeyPress }) => (
    <div className="note__input_wrapper">
        <input
            className="note_input"
            placeholder="Enter a note"
            autoFocus
            onChange={onChange}
            value={value}
            onKeyPress={onKeyPress}
        />
    </div>
);

NoteInput.propTypes = {
    value: PropTypes.string,
    onChange: PropTypes.func,
    onKeyPress: PropTypes.func
}

NoteInput.defaultProps = {
    value: '',
    onChange: () => {},
    onKeyPress: () => {}
}

export default NoteInput;
