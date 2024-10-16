@extends('layouts.master')
@section('searchbar')
    @include('partials.searchbar')
@endsection
@section('firstContent')

    <div class="menu w-full h-full bg-gray-100 mt-4  rounded-2xl p-4 overflow-hidden">
                    <div id="productList" class="hidden">
                        <?php
                            
                            echo htmlspecialchars($products);
                        ?>
                    </div>
                    <div class="typeCategory flex w-full gap-9">
                        <div class="categories rounded-lg  w-1/12 text-center p-1 bg-purple-500 text-white">
                        <a href="home?category=all"> <h4>All</h4></a>
                        </div>
                        <div class="categories border border-gray-300 rounded-lg  w-auto text-center p-1">
                            <a href="home?category=Phone"><h4>Phones</h4></a>
                        </div>
                        <div class="categories border border-gray-300 rounded-lg  w-auto text-center p-1">
                            <a href="home?category=Cover"><h4>Covers</h4></a>
                        </div>
                        <div class="categories border border-gray-300 rounded-lg  w-auto text-center p-1">
                            <a href="home?category=Charger"><h4>Chargers</h4></a>
                        </div>
                        <div class="categories border border-gray-300 rounded-lg  w-auto text-center p-1">
                            <a href="home?category=Tempered Glass"><h4>Tempered Glass</h4></a>
                        </div>
                        <div class="categories border border-gray-300 rounded-lg  w-auto text-center p-1">
                            <a href="home?category=Others"><h4>Others</h4></a>
                        </div>
                    </div>
                    <div class="mainMenu w-full h-full  mt-3 overflow-scroll scrollbar-hide flex flex-wrap">
                        @foreach($products as $product)
                                        <div id="" class="relative flex flex-col h-3/6 bg-white shadow-sm border border-slate-200 rounded-lg w-1/5 ">
                                            <div class="relative p-2.5 h-full overflow-hidden rounded-xl bg-clip-border">
                                                
                                                <img src='{{asset("uploads/inventory/$product->image")}}' alt="card-image"
                                                class="h-full w-full object-cover rounded-md ">
                                            </div>
                                            <div class="p-3" data-value = "{{$product}}">
                                                    <div class=" flex items-center justify-between">
                                                        <p class="text-slate-800 text-xs font-semibold">
                                                            {{$product->name}}
                                                        </p>
                                                        <p class="text-cyan-600 text-xs font-semibold">
                                                            {{$product->selling}}
                                                        </p>
                                                    </div>
                                                    <button  class="rounded-md w-full mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700 focus:shadow-none active:bg-cyan-700 hover:bg-cyan-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none addCart" type="button" id="addCart">
                                                        <div>{{$product->id}}</div>
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
                        <div id="root"></div>
                    </div>
                    <div id="subtotal"></div>
                    <div class="processTran w-full h-1/3">
                        <button type="button"  class=" w-4/5 h-10 rounded-md bg-purple-500 text-white font-semibold align-middle">
                            Process Transaction
                        </button>
                    </div>
        </div>
@endsection