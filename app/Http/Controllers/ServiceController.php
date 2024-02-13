<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('service.index',['services' => $services]);
        // return view('service.index', ['service' => $serviceData]);

        
        
    }
    public function create(){
        return view('service.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'category' => 'required',
            'cout' => 'required',


        ]);

        Service::create($data);
        
        return redirect('/service');



    }
    
    }
}
