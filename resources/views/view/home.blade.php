@extends('layouts.master')
@section('searchbar')
    @include('partials.searchbar')
@endsection
@section('firstContent')

    <div class="menu w-full h-full bg-gray-100 mt-4  rounded-2xl p-4 overflow-hidden">
                    <div class="typeCategory flex w-full gap-9">
                        <div class="categories rounded-lg  w-1/12 text-center p-1 bg-purple-500 text-white">
                        <a href=""> <h4>All</h4></a>
                        </div>
                        <div class="categories border border-gray-300 rounded-lg  w-auto text-center p-1">
                            <a href=""><h4>Phones</h4></a>
                        </div>
                        <div class="categories border border-gray-300 rounded-lg  w-auto text-center p-1">
                            <a href=""><h4>Covers</h4></a>
                        </div>
                        <div class="categories border border-gray-300 rounded-lg  w-auto text-center p-1">
                            <a href=""><h4>Chargers</h4></a>
                        </div>
                        <div class="categories border border-gray-300 rounded-lg  w-auto text-center p-1">
                            <a href=""><h4>Tempered Glass</h4></a>
                        </div>
                        <div class="categories border border-gray-300 rounded-lg  w-auto text-center p-1">
                            <a href=""><h4>Others</h4></a>
                        </div>
                    </div>
                    <div class="mainMenu w-full h-full  mt-3 overflow-scroll scrollbar-hide flex flex-wrap">
                        @foreach($products as $product)
                                        <div id="addCart" class="relative flex flex-col h-3/6 bg-white shadow-sm border border-slate-200 rounded-lg w-1/5 ">
                                            <div class="relative p-2.5 h-full overflow-hidden rounded-xl bg-clip-border">
                                                
                                                <img src='{{asset("uploads/inventory/$product->image")}}' alt="card-image"
                                                class="h-full w-full object-cover rounded-md ">
                                            </div>
                                            <div class="p-3">
                                                    <div class=" flex items-center justify-between">
                                                        <p class="text-slate-800 text-xs font-semibold">
                                                            {{$product->name}}
                                                        </p>
                                                        <p class="text-cyan-600 text-xs font-semibold">
                                                            {{$product->selling}}
                                                        </p>
                                                    </div>
                                                    <button class="rounded-md w-full mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700 focus:shadow-none active:bg-cyan-700 hover:bg-cyan-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" id="addCart">
                                                        Add to Cart
                                                    </button>
                                            </div>
                                        </div>
                        @endforeach
                    </div>
                </div>
@endsection

@section('secondContent')
    <div class="menuDetails p-3 pt-7 w-2/5 h-full  divide-y-2 divide-dotted ">
                    <h1 class=" text-2xl font-bold">Details</h1>
                    <div class="selected w-full h-1/3 justify-self-center overflow-y-scroll scrollbar-hide mt-4">
                        <div class="selectedItem shadow-lg w-full h-2/5  mt-2 rounded-md p-2 border border-purple-200">
                            <div class="selectedImg"></div>
                            <div class="selectedDetails ">
                                <div class="selectedHeader">
                                    <h1 class="  font-bold ">iPhone 11</h1>
                                </div>
                                <div class="selectedQtyPrc flex w-full mt-1">
                                    <div class="qtyController w-full">
                                        <!-- Input Number -->
                                            <div class=" inline-block  rounded-lg dark:bg-neutral-900 dark:border-neutral-700" data-hs-input-number="">
                                                <div class="flex items-center gap-x-1.5">
                                                    <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                        </svg>
                                                    </button>
                                                    <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none dark:text-white" style="-moz-appearance: textfield;" type="number" aria-roledescription="Number field" value="0" data-hs-input-number-input="">
                                                    <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                                        <svg class="shrink-0 size-3.5 text-purple-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                    </div>
                                    <div class="subTotal">
                                        <h3 class="font-bold">8000Ks</h3>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="selectedItem shadow-lg w-full h-2/5  mt-2 rounded-md p-2 border border-purple-200">
                            <div class="selectedImg"></div>
                            <div class="selectedDetails ">
                                <div class="selectedHeader">
                                    <h1 class="  font-bold ">iPhone 11</h1>
                                </div>
                                <div class="selectedQtyPrc flex w-full mt-1">
                                    <div class="qtyController w-full">
                                        <!-- Input Number -->
                                            <div class=" inline-block  rounded-lg dark:bg-neutral-900 dark:border-neutral-700" data-hs-input-number="">
                                                <div class="flex items-center gap-x-1.5">
                                                    <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                        </svg>
                                                    </button>
                                                    <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none dark:text-white" style="-moz-appearance: textfield;" type="number" aria-roledescription="Number field" value="0" data-hs-input-number-input="">
                                                    <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                                        <svg class="shrink-0 size-3.5 text-purple-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                    </div>
                                    <div class="subTotal">
                                        <h3 class="font-bold">8000Ks</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="selectedItem shadow-lg w-full h-2/5  mt-2 rounded-md p-2 border border-purple-200">
                            <div class="selectedImg"></div>
                            <div class="selectedDetails ">
                                <div class="selectedHeader">
                                    <h1 class="  font-bold ">iPhone 11</h1>
                                </div>
                                <div class="selectedQtyPrc flex w-full mt-1">
                                    <div class="qtyController w-full">
                                        <!-- Input Number -->
                                            <div class=" inline-block  rounded-lg dark:bg-neutral-900 dark:border-neutral-700" data-hs-input-number="">
                                                <div class="flex items-center gap-x-1.5">
                                                    <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                        </svg>
                                                    </button>
                                                    <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none dark:text-white" style="-moz-appearance: textfield;" type="number" aria-roledescription="Number field" value="0" data-hs-input-number-input="">
                                                    <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                                        <svg class="shrink-0 size-3.5 text-purple-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                    </div>
                                    <div class="subTotal">
                                        <h3 class="font-bold">8000Ks</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="selectedItem shadow-lg w-full h-2/5  mt-2 rounded-md p-2 border border-purple-200">
                            <div class="selectedImg"></div>
                            <div class="selectedDetails ">
                                <div class="selectedHeader">
                                    <h1 class="  font-bold ">iPhone 11</h1>
                                </div>
                                <div class="selectedQtyPrc flex w-full mt-1">
                                    <div class="qtyController w-full">
                                        <!-- Input Number -->
                                            <div class=" inline-block  rounded-lg dark:bg-neutral-900 dark:border-neutral-700" data-hs-input-number="">
                                                <div class="flex items-center gap-x-1.5">
                                                    <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                        </svg>
                                                    </button>
                                                    <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none dark:text-white" style="-moz-appearance: textfield;" type="number" aria-roledescription="Number field" value="0" data-hs-input-number-input="">
                                                    <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                                        <svg class="shrink-0 size-3.5 text-purple-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                    </div>
                                    <div class="subTotal">
                                        <h3 class="font-bold">8000Ks</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="voucher mt-2 divide-y divide-dotted ">
                        <div class="voucherSubTotal">
                            <div class="totalItem flex justify-between mt-2 ">
                                <label for="totalItem" class=" text-gray-500">Item</label>
                                <div class="itemCount">
                                    <h3 class=" font-semibold">4(Items)</h3>
                                </div>
                            </div>
                            <div class="subTotal flex justify-between mt-2 ">
                                <label for="subTotal" class=" text-gray-500">Subtotal</label>
                                <div class="subtotalAmts">
                                    <h3 class=" font-semibold">8000ks</h3>
                                </div>
                            </div>
                            <div class="discount flex justify-between mt-2 ">
                                <label for="discount" class=" text-gray-500">Discount</label>
                                <div class="discountAmt">
                                    <h3 class=" font-semibold">0%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="Total flex justify-between mt-5 ">
                            <label for="total" class="font-semibold">Total</label>
                            <div class="totalAmt">
                                <h2 class=" font-semibold">980,000ks</h2>
                            </div>
                        </div>
                    </div> 
                    <div class="processTran w-full h-1/3">
                        <button type="button"  class=" w-4/5 h-10 rounded-md bg-purple-500 text-white font-semibold align-middle">
                            Process Transaction
                        </button>
                    </div>
        </div>
@endsection