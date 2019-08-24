import { ADD_FILTER, REMOVE_FILTER } from "../constants";
import { load } from "redux-localstorage-simple";

let FILTERS = load({ namespace: "text-editor" });

if (!FILTERS || !FILTERS.filters || !FILTERS.filters.length) {
  FILTERS = {
    filters: []
  };
}

const filters = (state = FILTERS.filters, { id, filter, type }) => {
  switch (type) {
    case ADD_FILTER:
      return [
        ...state,
        {
          id,
          filter
        }
      ];
    case REMOVE_FILTER:
      return [...state].filter(filter => filter.id !== id);
    default:
      return state;
  }
};

export default filters;
