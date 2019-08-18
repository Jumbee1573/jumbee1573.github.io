import React, { Fragment, Component } from 'react';
import '../styles/style.css';

const Columns = () => (
    <Fragment>
        <td style={{color: 'red', textTransform: 'uppercase'}}>Inline styles</td>
        <td className="title">Imported styles</td>
    </Fragment>
);

const Table = () => (
    <table>
        <tbody>
            <tr>
                <Columns />
            </tr>
        </tbody>
    </table>
);

export default Table;