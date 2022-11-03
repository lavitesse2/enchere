import axios from 'axios';
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ModalEncherir from './modalArticle/ModalEncherir';

class TableAction extends Component {


    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="btn-group" role="group" >
                <button type="button"
                    className="btn btn-primary"
                    data-toggle="modal"
                    data-target="#modalenchere"
                    onClick={()=>{ this.getArticleDetails(this.props.eachRowId)}}
                >
                    Enchérir

                </button>

                <ModalEncherir modalId={this.props.eachRowId } />

                <button type="button" className="btn btn-secondary">Middle</button>
                <button type="button" className="btn btn-danger">Right</button>


            </div>

        )
    }
}

export default TableAction;