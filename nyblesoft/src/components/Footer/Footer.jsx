import React from 'react';
import PropTypes from 'prop-types';

import FiltersItem from '../FiltersItem/FiltersItem';

import './Footer.scss';

const Footer = ({ filters, removeFilter, changeFilter }) => (
    <ul className="filters__list">
        {filters.map(({ id, filter }) => (
            <FiltersItem 
                filter={filter} 
                key={id} 
                id={id} 
                removeFilter={removeFilter} 
                changeFilter={changeFilter} 
            />
        ))}
    </ul>
);

Footer.propTypes = {
    filters: PropTypes.array,
    removeFilter: PropTypes.func,
    changeFilter: PropTypes.func
}

Footer.defaultProps = {
    filters: [],
    removeFilter: () => {},
    changeFilter: () => {}
}

export default Footer;