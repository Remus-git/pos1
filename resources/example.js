
import React, { useState } from 'react'; 

import ReactDOM from 'react-dom/client';

let a = ["hellp","sfsdf","serf"];
const root = ReactDOM.createRoot(document.getElementById('root'));
let productList = document.getElementsByClassName("addCart");
let parentElement;
let object;
let total = 0;
let selectedItems = [];


const ListComponent = (name,selling) => { 
  
    return ( 
      
                <div class="selectedItem shadow-lg w-full h-2/5  mt-2 rounded-md p-2 border border-purple-200">
                    <div class="selectedImg"></div>
                    <div class="selectedDetails ">
                        <div class="selectedHeader">
                            <h1 class="  font-bold ">{name}</h1>
                        </div>
                        <div class="selectedQtyPrc flex w-full mt-1">
                            
                            <div class="subTotal">
                                <h3 class="font-bold">{selling}</h3>
                            </div>
                        </div>
                    </div>
                </div>
      
    ); 
    
}; 


function Welcome() {    
    
    selectedItems.map((item)=>(
        total += item.selling
    ))
    console.log(total);
    
    return (
    
            <div>
                {
                    selectedItems.map(item=>(
                       
                            <div class="selectedItem shadow-lg w-full h-2/5  mt-2 rounded-md p-2 border border-purple-200">
                                <div class="selectedDetails ">
                                    <div class="selectedHeader">
                                        <h1 class="  font-bold ">{item.name}</h1>
                                    </div>
                                    <div class="selectedQtyPrc flex w-full mt-1">
                                        <div class="qtyController w-full">
                                            <div class=" inline-block  rounded-lg dark:bg-neutral-900 dark:border-neutral-700" data-hs-input-number="">
                                                <div class="flex items-center gap-x-1.5">
                                                    <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                        </svg>
                                                    </button>
                                                    <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none dark:text-white"  type="number"  value="0"/>
                                                    <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                        <svg class="shrink-0 size-3.5 text-purple-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="subTotal">
                                            <h3 class="font-bold">{item.selling}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                    ))
                }
                <div>
                    <h1>

                    </h1>
                </div>
            </div>
        
    );      
        

}



for (var i=0; i < productList.length; i++) {
    
    productList[i].addEventListener('click',function () {
        parentElement = this.parentNode;
        object = parentElement.getAttribute('data-value');
        object = JSON.parse(object);
        selectedItems.push(object);
        
        root.render(<Welcome/>)
        
        
    })
};

export default Welcome;