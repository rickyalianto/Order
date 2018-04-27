import React, {Component} from 'react';
import { Router, Route, Link } from 'react-router';

class Master extends Component {
    render(){
      return (
        <div>
            <nav className="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar navbar-default">
                <Link className="navbar-brand" to="/">
                    <img src="images/order-logo.png" width="35" height="35" alt=""/>
                </Link>
                <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>
                <div className="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul className="navbar-nav">
                        <li className="nav-item active">
                            <Link className="nav-link" to="display-item">Home <span className="sr-only">(current)</span></Link>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link" href="#">Insert</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div>
                {this.props.children}
            </div>
        </div>
      )
    }
  }
  export default Master;