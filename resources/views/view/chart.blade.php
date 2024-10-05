@extends('layouts.master')

@section('searchbar')
    <div class="chartHeader">
        <h1 class=" text-3xl text-violet-600 font-bold ">Balance</h1>
        <h1 class=" text-4xl text-violet-700 font-bold ">56,800,000KS</h1>
    </div>
    
@endsection
@section('firstContent')
  <div class="chartMainContainer w-full h-full flex">
    <div class="saleOverview w-3/12 h-full gap-2">
        <div class="yesterdaySaleContainer w-full h-1/5 bg-cyan-200 rounded-lg flex-col p-2">
            <h1 class="text-1xl font-bold text-white">Yesterday's Sale</h1>
            <div class="yesterdaySale flex gap-y-10 pt-2">
                <svg xmlns="http://www.w3.org/2000/sg" class=" text-white" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-dollar-sign"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                <h1 class=" text-2xl text-white font-semibold">980,000ks</h1>
            </div>
        </div>
         <div class="yesterdaySaleContainer w-full h-1/5 bg-violet-300 rounded-lg flex-col p-2">
            <h1 class="text-1xl font-bold text-white">Yesterday's Divices Sale</h1>
            <div class="yesterdaySale flex gap-y-10 pt-2">
                <svg xmlns="http://www.w3.org/2000/sg" class=" text-white" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-dollar-sign"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                <h1 class=" text-2xl text-white font-semibold">980,000ks</h1>
            </div>
        </div>
        <div class="yesterdaySaleContainer w-full h-1/5 bg-green-300 rounded-lg flex-col p-2">
            <h1 class="text-1xl font-bold text-white">Yesterday's Service</h1>
            <div class="yesterdaySale flex gap-y-10 pt-2">
                <svg xmlns="http://www.w3.org/2000/sg" class=" text-white" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-dollar-sign"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                <h1 class=" text-2xl text-white font-semibold">980,000ks</h1>
            </div>
        </div>
        <div class="totalSaleAndService w-full h-auto bg-gray-100 rounded-lg p-2">
            <div>
                <h1 class="text-1xl font-bold text-gray-600">Sales</h1>
            </div>
            <div class="totalSaleDetails flex gap-x-5">
                <div class="totalSales">
                    <h2 class="text-1xl font-semibold text-gray-600">Total Sales</h2>
                    <h2 class="text-2xl font-semibold text-gray-600">95,999</h2>
                </div>
                <div class="totalSalesMonth">
                    <h2 class="text-1xl font-semibold text-gray-600">This Month</h2>
                    <h2 class="text-2xl font-semibold text-gray-600">67,12</h2>
                </div>
                <div class="totalSalesToday">
                    <h2 class="text-1xl font-semibold text-gray-600">Today</h2>
                    <h2 class="text-2xl font-semibold text-gray-600">400</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="chartContainer w-4/5 h-full ">
        
    </div>
  </div>

@endsection