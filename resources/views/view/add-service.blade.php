@extends('layouts.master')
@section('firstContent')
<div class="addService w-4/5 h-full border shadow-lg rounded-lg p-7 ">
        
        <form class=" w-full"  action="{{ url('/service/add') }}" method="post">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <!-- <div>
                    <label for="Date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                    <input type = "date" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required name=""/>
                </div> -->
                <div>
                    <label for="customer_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-nowrap">Name</label>
                    <input type="text" id="customer_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Customer Name" required name="name"/>
                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-nowrap">Description</label>
                    <input type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="description" required name="description"/>
                </div>
                <div>
                    <label for="faulty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-nowrap">Faulty</label>
                    <input type="text" id="faulty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="reason of failure" required name="faulty"/>
                </div> 
                <div>
                    <label for="passcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Passcode</label>
                    <input type="string" id="passcode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="000000" required name="passcode"/>
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                    <input type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678"  required name="phone"/>
                </div>
                <div>
                    <label for="belongings" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-nowrap">Belongings</label>
                    <input type="text" id="belongings" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Belongings" required name="belongings"/>
                </div>
                <div>
                    <label for="prepaid" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prepaid Amount</label>
                    <input type="number" id="prepaid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required name="prepaid"/>
                </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

</div>
@endsection