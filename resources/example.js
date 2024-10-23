
    import React, { useEffect } from 'react';   
    import  { useState } from 'react'; 
    import ReactDOM from 'react-dom/client';
    import axios from 'axios';

    
    const root = ReactDOM.createRoot(document.getElementById('root'));
    const selected = ReactDOM.createRoot(document.getElementById('selectedItems'))
    const subtotal = ReactDOM.createRoot(document.getElementById('subtotal'));
    const initialItemsDiv = document.getElementById('items')
    const initialItems = initialItemsDiv.getAttribute('data-value');
    const state ={
        selectedItems:[],
    };
    let primaryItem ;
    
    const addItemToCart = (item) => { 
        const existingItem = state.selectedItems.find(selected => selected.id === item.id);
        if (existingItem) {
            if(existingItem.quantity >= item.quantity){
                existingItem.quantity = item.quantity;
                alert("You only have " + item.quantity + "pcs in your inventory")
                return
            }
            existingItem.quantity += 1;
        } else {
            const newItem = { ...item, quantity: 1 };
           state.selectedItems.push(newItem)
        }
        
        selected.render(<SelectedItem selectedItems={state.selectedItems} inventoryItem={item}/>)
        subtotal.render(<SubTotal selectedItems={state.selectedItems}/>)
    };
    const remove = (item)=>{
        const inc = state.selectedItems.find((selected)=>selected.id == item.id);
        state.selectedItems = state.selectedItems.filter((item)=>{
            return item.id !== inc.id
        })
        selected.render(<SelectedItem selectedItems={state.selectedItems}/>)
        subtotal.render(<SubTotal selectedItems={state.selectedItems}/>)
    }
    const decreasement = (item)=>{
        
        const inc = state.selectedItems.find((selected)=>selected.id == item.id);
        if(inc.quantity == 1){
            state.selectedItems = state.selectedItems.filter((item,b)=>{
                return item.id !== inc.id
            })
        }
        inc.quantity -=1;
        selected.render(<SelectedItem selectedItems={state.selectedItems}/>)
        subtotal.render(<SubTotal selectedItems={state.selectedItems}/>)
        
    }
    const increasement = (item,inventoryItem)=>{
        const inv = primaryItem.find((selected)=>selected.id == item.id);
        const inc = state.selectedItems.find((selected)=>selected.id == item.id);
        if(inc.quantity == inv.quantity){
            inc.quantity = inv.quantity
            alert("You only have " + inv.quantity + "pcs in your Inventory")
        }else{
        inc.quantity +=1;}

        selected.render(<SelectedItem selectedItems={state.selectedItems}/>)
        subtotal.render(<SubTotal selectedItems={state.selectedItems}/>)
    }
    const post =()=>{
        const encodedArray = encodeURIComponent(JSON.stringify(state.selectedItems));
        const url = `http://127.0.0.1:8000/sale/insert?items=${encodedArray}`;
        window.location.href = url;
        console.log(url)
    }
    function Welcome() {
        const [items,setItems] = useState([]);  
        useEffect(() => {
            const parsedItem = JSON.parse(initialItems || '[]');
            setItems(parsedItem)
        }, []);
        
        primaryItem = items;
        console.log(primaryItem)
        return (
        <div className="mainMenu w-full h-full  mt-3 overflow-scroll scrollbar-hide flex flex-wrap">
            {items.map(item => (
            
        <div key={item.id} className="relative flex flex-col h-3/6 bg-white shadow-sm border border-slate-200 rounded-lg w-1/5">
            <div className="relative p-2.5 h-full overflow-hidden rounded-xl bg-clip-border">
                <img src={item.image} alt="card-image" className="h-full w-full object-cover rounded-md" />
            </div>
            <div className="p-3">
                <div className="flex items-center justify-between">
                    <p className="text-slate-800 text-xs font-semibold">{item.name}</p>
                    <p className="text-cyan-600 text-lg font-bold">{item.selling}</p>
                </div>
                <button onClick={()=>addItemToCart(item)} className="rounded-md w-full mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700 focus:shadow-none active:bg-cyan-700 hover:bg-cyan-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none addCart" type="button" id="addCart">
                    Add to Cart
                </button>
            </div>
        </div>
    ))}
        </div>
        )
    }
    const SelectedItem =(props)=>{
        
        const inventoryItem = props.inventoryItem;
        const selectedItems= props.selectedItems;
        return (
            <div>                 
                    {   
                        selectedItems.map(item=>(
                                
                                <div key={item.id}  className="selectedItem shadow-lg w-full h-2/5  mt-2 rounded-md p-2 border border-purple-200">
                                    <div className="selectedDetails ">
                                        <div className="selectedHeader flex justify-between">
                                            <h1 className="  font-bold ">{item.name}</h1>
                                            <button  type='button' onClick={()=>remove(item)}><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ff1414" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="lucide lucide-trash-2"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg></button>
                                        </div>
                                        <div className="selectedQtyPrc flex w-full mt-1">
                                            <div className="qtyController w-full">
                                                <div className=" inline-block  rounded-lg dark:bg-neutral-900 dark:border-neutral-700" data-hs-input-number="">
                                                    <div className="flex items-center gap-x-1.5">
                                                        <button type="button" onClick={()=>decreasement(item)} className="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                            <svg className="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"  strokeLinecap="round" strokeLinejoin="round">
                                                                <path d="M5 12h14"></path>
                                                            </svg>
                                                        </button>
                                                        <h1  className="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none dark:text-white">{item.quantity}</h1>
                                                        <button type="button" onClick={()=>increasement(item,inventoryItem)} className="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                            <svg className="shrink-0 size-3.5 text-purple-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"  strokeLinecap="round" strokeLinejoin="round">
                                                                <path d="M5 12h14"></path>
                                                                <path d="M12 5v14"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div className="subTotal">
                                                <h3 className="font-bold">{item.selling * item.quantity}ks</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                        ))
                    }
            </div>   
        )
    }
    function SubTotal(props){
            let total = 0;
            let qty = 0;
            props.selectedItems.map((item)=>{
                total += item.selling * item.quantity;
                qty += item.quantity;
            }        
        )
            return (
                <div className="voucher mt-2 divide-y divide-dotted ">
                                <div className="voucherSubTotal">
                                    <div className="totalItem flex justify-between mt-2 ">
                                        <label  className=" text-gray-500">Item</label>
                                        <div className="itemCount">
                                            <h3 className=" font-semibold">{qty}(Items)</h3>
                                        </div>
                                    </div>
                                    <div className="subTotal flex justify-between mt-2 ">
                                        <label  className=" text-gray-500">Subtotal</label>
                                        <div className="subtotalAmts">
                                            <h3 className=" font-semibold">{total}</h3>
                                        </div>
                                    </div>
                                    <div className="discount flex justify-between mt-2 ">
                                        <label  className=" text-gray-500">Discount</label>
                                        <div className="discountAmt">
                                            <h3 className=" font-semibold">10%</h3>
                                        </div>
                                    </div>
                                </div>
                                <div className="Total flex justify-between mt-5 ">
                                    <label ass="font-semibold">Total</label>
                                    <div className="totalAmt">
                                        <h2 className=" font-semibold">{total-(total*0.1)}</h2>
                                    </div>
                                </div>
                                <div className="processTran w-full h-1/4">
                        <button type="button" onClick={()=>post()}  className=" w-4/5 h-10 rounded-md bg-purple-500 text-white font-semibold align-middle">
                            Process Transaction
                        </button>
                    </div>
                            </div> 
            )
        }


    root.render(<Welcome/>)
    

    export default Welcome;
