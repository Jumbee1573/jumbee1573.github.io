import React, { Component } from "react";
import { connect } from "react-redux";
import PropTypes from "prop-types";

import {
  addNote,
  removeNote,
  editNote,
  addFilter,
  removeFilter,
  changeFilter
} from "../../actions/actionCreator";

import NoteInput from "../../components/NoteInput/NoteInput";
import NoteList from "../../components/NoteList/NoteList";
import FilterHeader from "../../components/FilterHeader/FilterHeader";
import Footer from "../../components/Footer/Footer";

import "./TextEditor.scss";

class TextEditor extends Component {
  state = {
    noteText: ""
  };

  handleInputChange = ({ target: { value } }) => {
    this.setState({
      noteText: value
    });
  };

  addNote = ({ key }) => {
    const { noteText } = this.state;

    if (noteText.length > 3 && key === "Enter") {
      const { addNote, addFilter } = this.props;

      let noteArray = noteText.split(" ");
      let addToFilterItem = noteArray.filter(item => !item.indexOf("#"));

      for (let i = 0; i < addToFilterItem.length; i++) {
        addFilter(new Date().getTime(), addToFilterItem[i]);
      }

      addNote(new Date().getTime(), noteText);

      this.setState({
        noteText: ""
      });
    }
  };

  handleFiltration = (notes, filter) => {
    let filteredNotes = notes;
    if (filter === "all") return notes;
    notes.map(({ text }) => {
      if (text.indexOf(filter) !== -1) {
        filteredNotes = notes.filter(note => note.text === text);
      }
      return filteredNotes;
    });
    return filteredNotes;
  };

  render() {
    const { noteText } = this.state;
    const {
      notes,
      filters,
      filtration,
      removeNote,
      editNote,
      removeFilter,
      addFilter,
      changeFilter
    } = this.props;
    const isNotesExist = notes && notes.length > 0;
    const isFiltersExist = filters && filters.length > 0;
    const filteredNotes = this.handleFiltration(notes, filtration);

    return (
      <div className="note__wrapper">
        <NoteInput
          onKeyPress={this.addNote}
          onChange={this.handleInputChange}
          value={noteText}
        />
        {isNotesExist && (
          <NoteList
            notes={filteredNotes}
            removeNote={removeNote}
            editNote={editNote}
            addFilter={addFilter}
          />
        )}
        {isFiltersExist && (
          <FilterHeader title="Filters:" changeFilter={changeFilter} />
        )}
        {isFiltersExist && (
          <Footer
            filters={filters}
            removeFilter={removeFilter}
            changeFilter={changeFilter}
          />
        )}
      </div>
    );
  }
}

TextEditor.propTypes = {
  notes: PropTypes.array,
  filters: PropTypes.array,
  filtration: PropTypes.string,
  removeNote: PropTypes.func,
  editNote: PropTypes.func,
  addNote: PropTypes.func,
  addFilter: PropTypes.func,
  removeFilter: PropTypes.func,
  changeFilter: PropTypes.func
};

TextEditor.defaultProps = {
  notes: [],
  filters: [],
  filtration: [],
  removeNote: () => {},
  editNote: () => {},
  addNote: () => {},
  addFilter: () => {},
  removeFilter: () => {},
  changeFilter: () => {}
};

export default connect(
  ({ notes, filters, filtration }) => ({
    notes,
    filters,
    filtration
  }),
  {
    addNote,
    removeNote,
    editNote,
    addFilter,
    removeFilter,
    changeFilter
  }
)(TextEditor);
