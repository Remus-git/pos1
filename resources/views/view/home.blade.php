@extends('layouts.master')
@section('searchbar')
    @include('partials.searchbar')
@endsection
@section('firstContent')
    <div data-value="{{$products}}" class="hidden" id = "items"></div>
    <div class="menu w-full h-full bg-gray-100 mt-4  rounded-2xl p-4 overflow-hidden">
                   
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
                        <div id="root" class="w-full h-full mt-3"></div>
                </div>
@endsection

@section('secondContent')
    <div class="menuDetails p-3 pt-7 w-2/5 h-full  divide-y-2 divide-dotted ">
    
                    <h1 class=" text-2xl font-bold">Details</h1>
                    <div class="selected w-full h-2/4 justify-self-center overflow-y-scroll scrollbar-hide mt-4">
                        <div id="selectedItems"></div>
                    </div>
                    <div id="subtotal"></div>
                    
        </div>
@endsection