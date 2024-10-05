<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\inventory;
use App\Models\Category;
use App\Models\Service;

class ProductController extends Controller
{   
    
    public function index(){
        $data = inventory::all();
        return view('view.home',['products'=>$data]);
    }
    public function inventory(){
        $data = inventory::all();
        return view('view.inventory',['products'=>$data]);
    }
    public function addInventory(){
        $data = Category::all();
        return view('view.add-inventory',['categories'=>$data]);
    }
    public function sale(){
        return view('view.sale');
    }
    public function service(){
        $data = Service::latest()->paginate(5);
        return view('view.service',['services'=>$data]);
    }
    public function addService(){
        return view('view.add-service');
    }
    public function chart(){
        return view('view.chart');
    }
}
