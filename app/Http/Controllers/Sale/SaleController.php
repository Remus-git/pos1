<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\inventory;

class SaleController extends Controller
{
    public function insert(){
        $items = json_decode($_GET['items'],true);
        foreach ($items as $item) {
            $data = inventory::where('id',$item["id"])->get();
            $itemLeft = $data[0]['quantity'] - $item["quantity"];
            inventory::where('id',$item["id"])->update(['quantity'=>$itemLeft]);
            $sale = new Sale;
            $sale->name = $item["name"];
            $sale->category = $item["category"];
            $sale->quantity = $item["quantity"];
            $sale->total = $item["quantity"] * $item["selling"];
            $sale->save();
            return back();
        }   
        
    }

}
