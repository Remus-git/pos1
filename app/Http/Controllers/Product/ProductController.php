<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\inventory;
use App\Models\Category;
use App\Models\Service;
use App\Models\Sale;

class ProductController extends Controller
{   
    
    public function index(){
        $param = isset($_GET['category'])? htmlspecialchars($_GET['category']) : 'all';

        if ($param == 'all') {
            $data = inventory::all(); 
        }else{
            $data = inventory::where('category',$param)->get();
        }
        
        return view('view.home',['products'=>$data]);
    }

    public function search(Request $request){
        
        $query = $request->input('query');
        if($query){
            $data = inventory::where('name', 'like' , "%{$query}%")
            ->orWhere('category','like',"%{$query}%")
            ->get();
        }else{
            $data = inventory::all();
        }
        
        return view('view.home',['products'=>$data]);
    }

    public function inventory(){
        $data = inventory::latest()->paginate(8);
        return view('view.inventory',['products'=>$data]);
    }
    public function addInventory(){
        $data = Category::all();
        return view('view.add-inventory',['categories'=>$data]);
    }
    public function inventorySearch(Request $request){

        $query = $request->input('query');
        if($query){
            $data = inventory::where('name', 'like' , "%{$query}%")
            ->orWhere('category','like',"%{$query}%")
            ->limit(5)
            ->get();
        }else{
            $data = inventory::all();
        }

        return view('view.inventory',['products'=>$data]);
    }
    public function sale(){
        $data = Sale::latest()->paginate(8);
        return view('view.sale',['sales'=>$data]);
    }
    public function service(){
        $data = Service::latest()->paginate(5);
        return view('view.service',['services'=>$data]);
    }
    public function serviceSearch(Request $request){

        $query = $request->input('query');
        if($query){
            $data = Service::where('name', 'like' , "%{$query}%")
            ->orWhere('description','like',"%{$query}%")
            ->orWhere('phone','like',"%{$query}%")
            ->limit(5)
            ->get();
        }else{
            $data = Service::all();
        }

        return view('view.service',['services'=>$data]);
    }

    public function addService(){
        return view('view.add-service');
    }
    public function chart(){
        return view('view.chart');
    }
}
