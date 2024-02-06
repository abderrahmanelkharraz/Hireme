<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        return view('service.index');
    }
    public function create(){
        return view('service.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'id' => 'required',
            'title' => 'required',
            'description' => 'nullable',
            'category' => 'required',
            'cout' => 'required|decimal:2',


        ]);

        $newService = Service::create($data);
        
        return redirect(route('service.index'));


    }
}
