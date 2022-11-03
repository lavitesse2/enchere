import React, { Component } from 'react';
import TableAction from './TableAction';

class TableRow extends Component {


    constructor (props){
        super(props);
    }

    render() {
        return (
            <tr>
                <th>{ this.props.data.NomArticle}</th>
                <td>{ this.props.data.PrixArticle}</td>
                <td>{ this.props.data.DateCloture}</td>
                <td>
                    <TableAction eachRowId= { this.props.data.id} />
                </td>
            </tr>
        )
    }
}

export default TableRow;