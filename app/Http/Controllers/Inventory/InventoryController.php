<?php

namespace App\Http\Controllers\Inventory;

use App\Models\Inventory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventoryController extends Controller
{   
    public function store(){
        $inventory = new Inventory;
        if(request()->hasfile('image'))
        {
            $file = request()->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/inventory', $filename);
            $imgFile = "uploads/inventory/$filename";
            echo $imgFile;
            $inventory->image = $imgFile;
        }else{
            $inventory->image = "image";
        }
        
        $inventory->name = request()->name;
        $inventory->category = request()->category;
        $inventory->date = request()->date;
        $inventory->buying = request()->buying;
        $inventory->selling = request()->selling;
        $inventory->quantity = request()->quantity;
        
        $inventory->save();
        return redirect('inventory');
    }
}
