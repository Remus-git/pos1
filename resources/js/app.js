import React from 'react';
import ReactDOM from 'react-dom/client';
import Welcome from '../example';

const root = ReactDOM.createRoot(document.getElementById('root'));
let productList = document.getElementsByClassName("addCart");
for (var i=0; i < productList.length; i++) {
    productList[i].onclick = function(){
          
        root.render(<Welcome />);
    }
};


