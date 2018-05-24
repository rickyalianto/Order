import React, {Component} from 'react';
import ReactDom from 'react-dom';
import Axios from 'axios';

class Order extends Component {
    constructor() {
        super();
        this.state = { data: []};
    }

    componentWillMount() {
        Axios.get('/api/orders').then(Response => {
            this.setState({ data: Response.data });
            console.log(this.state);
        }).catch(error => {
            console.log(error);
        });
    }

    render() {
        var audienses = this.state.data.map((value, index) => (
            <div>{ value.name }</div>
        ));

        return (
            <div>
                { audienses }
            </div>
        )
    }
}
if(document.getElementById('app')) {
    ReactDom.render(<Order />, document.getElementById('app'));
}