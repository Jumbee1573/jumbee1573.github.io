import React, { Component } from "react";
import PropTypes from "prop-types";

import "./NoteItem.scss";

class NoteItem extends Component {
  state = {
    editText: "",
    isFlagEdit: false
  };

  handleFlagChange = () => {
    this.setState({
      isFlagEdit: !this.state.isFlagEdit
    });
  };

  handleEditChange = () => {
    const { editText } = this.state;

    if (editText.length > 3) {
      const { id, addFilter, editNote } = this.props;

      editNote(id, editText);

      const editArray = editText.split(" ");
      const addToFilterItem = editArray.filter(item => !item.indexOf("#"));

      for (let i = 0; i < addToFilterItem.length; i++) {
        addFilter(id, addToFilterItem[i]);
      }
    }
    return editText;
  };

  handleInputChange = ({ target: { value } }) => {
    this.setState({
      editText: value
    });
  };

  render() {
    const { id, text, removeNote } = this.props;
    const { isFlagEdit } = this.state;

    return (
      <li className="note__list_item" id={id}>
        {isFlagEdit ? (
          <input
            type="text"
            defaultValue={text}
            onChange={this.handleInputChange}
            className="note__list_item-input"
            autoFocus
          />
        ) : (
          <span className="note__list_item-text">{text}</span>
        )}
        <span className="note__list_item-icon">
          {isFlagEdit ? (
            <i
              onClick={() => {
                this.handleEditChange();
                this.handleFlagChange();
              }}
              className="fa fa-save"
            ></i>
          ) : (
            <i onClick={this.handleFlagChange} className="fa fa-edit"></i>
          )}
          <i onClick={() => removeNote(id)} className="fa fa-times"></i>
        </span>
      </li>
    );
  }
}

NoteItem.propTypes = {
  id: PropTypes.number,
  text: PropTypes.string,
  removeNote: PropTypes.func,
  editNote: PropTypes.func
};

NoteItem.defaultProps = {
  id: 1,
  text: "",
  removeNote: () => {},
  editNote: () => {}
};

export default NoteItem;
