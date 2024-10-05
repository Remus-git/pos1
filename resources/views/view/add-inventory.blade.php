@extends('layouts.master')
@section('firstContent')
<div class="addItem w-4/5 h-full border shadow-lg rounded-lg p-7 ">
        <form class=" w-full" action="{{ url('/inventory/add') }}" method="post" enctype="multipart/form-data">
            @csrf 
            
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                    <input type = "file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
                </div>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-nowrap">Product Name</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="product name" required />
                </div>
                <div >
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Category</label>
                        <select name="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" require>
                            
                            @foreach($categories as $category)
                                <option value="{{$category->category}}">{{$category->category}}</option>
                            @endforeach
                            
                        </select>
                    
                </div>
                <div>
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                    <input type = "date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
                </div>  
                <div>
                    <label for="buying" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Buying</label>
                    <input type="number" name="buying" id="buying" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required />
                </div>
                <div>
                    <label for="selling" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selling</label>
                    <input type="number" name="selling" id="selling" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required />
                </div>
                <div>
                    <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required />
                </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>
@endsection