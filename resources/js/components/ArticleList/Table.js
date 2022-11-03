import axios from 'axios';
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import TableRow from './TableRow';

class Table extends Component {

  constructor(props) {
    super(props);

    this.state = {
      articles: [],
    }
  }


  componentDidMount() {
    this.getArticleList();
  }


  getArticleList = () => {
    let seft = this;
    axios.get('/get/article/list').then(function (response) {
      seft.setState(
        {
          articles: response.data
        }
      )
    });
  }

  render() {

    return (
      <div className="container">
        <div className="row justify-content-center">
          <div className="col-md-8">
            <div className="card">

              <table className="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Date Limite</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  {
                    this.state.articles.map(function(x,i){
                      return   <TableRow key={i} data={x} />
                    })
                  }
                
                </tbody>
              </table></div>
          </div>
        </div>
      </div>
    );
  }
}


export default Table;
