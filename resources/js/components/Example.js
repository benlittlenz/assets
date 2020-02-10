import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import SyntaxHighlighter from 'react-syntax-highlighter';
import { docco } from 'react-syntax-highlighter/dist/esm/styles/hljs';

class Example extends Component {
    constructor(props) {
        super(props);
        console.log(props)

        this.state = {
            code : props.tsid
        }
        console.log(this.state)
    }
    
    render() {
        return (
            <div>

                <h1></h1>
            </div>
        );
    }
}

export default Example;

// We only want to try to render our component on pages that have a div with an ID
// of "example"; otherwise, we will see an error in our console
if (document.getElementById('example')) {
    // find element by id
    const element = document.getElementById('example')

    // create new props object with element's data-attributes
    // result: {tsId: "1241"}
    const props = Object.assign({}, element.dataset)
    ReactDOM.render(<Example {...props} />, element);
    //console.log(props)
}