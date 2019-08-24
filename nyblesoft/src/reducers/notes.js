import { ADD_NOTE, REMOVE_NOTE, EDIT_NOTE } from "../constants";
import { load } from "redux-localstorage-simple";

let NOTES = load({ namespace: "text-editor" });

if (!NOTES || !NOTES.notes || !NOTES.notes.length) {
  NOTES = {
    notes: []
  };
}

const notes = (state = NOTES.notes, { id, text, type }) => {
  switch (type) {
    case ADD_NOTE:
      return [
        ...state,
        {
          id,
          text
        }
      ];
    case REMOVE_NOTE:
      return [...state].filter(note => note.id !== id);
    case EDIT_NOTE:
      return [...state].map(note => {
        if (note.id === id) {
          note.text = text;
        }
        return note;
      });
    default:
      return state;
  }
};

export default notes;
