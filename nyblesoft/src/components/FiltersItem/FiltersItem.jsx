import React from "react";
import PropTypes from "prop-types";

import "./FiltersItem.scss";

const FiltersItem = ({ filter, id, removeFilter, changeFilter }) => (
  <li className="filters__list_item">
    <span
      onClick={() => changeFilter(filter)}
      className="filters__list_item-text"
    >
      {filter}
    </span>
    <i onClick={() => removeFilter(id, filter)} className="fa fa-times"></i>
  </li>
);

FiltersItem.propTypes = {
  filter: PropTypes.string,
  id: PropTypes.number,
  removeFilter: PropTypes.func,
  changeFilter: PropTypes.func
};

FiltersItem.defaultProps = {
  filter: "",
  id: 0,
  removeFilter: () => {},
  changeFilter: () => {}
};

export default FiltersItem;
