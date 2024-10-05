<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function add(){
        $service = new Service;
        $service->name = request()->name;
        $service->description = request()->description;
        $service->faulty = request()->faulty;
        $service->passcode = request()->passcode;
        $service->phone = request()->phone;
        $service->belongings = request()->belongings;
        $service->prepaid = request()->prepaid;
        $service->code = "$service->id";
        $service->save();
        return view('view.service');
    }
}
