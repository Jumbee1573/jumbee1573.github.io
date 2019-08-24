import React from "react";
import PropTypes from "prop-types";

import "./FilterHeader.scss";

const FilterHeader = ({ title, changeFilter }) => (
  <div className="filter-header__wrapper">
    <span className="filter-header__title">{title}</span>
    <button
      onClick={() => changeFilter("all")}
      className="filter-header__button"
    >
      All notes
    </button>
  </div>
);

FilterHeader.propTypes = {
  title: PropTypes.string,
  changeFilter: PropTypes.func
};

FilterHeader.defaultProps = {
  title: "",
  changeFilter: () => {}
};

export default FilterHeader;
