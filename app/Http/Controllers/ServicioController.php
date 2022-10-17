<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    // public static $servicios = [
    //     ["id"=>"1", "name"=>"Prostata", "price"=>"100000", "fast"=>"0"],
    //     ["id"=>"2", "name"=>"Orina", "price"=>"20000", "fast"=>"1"],
    // ];

    public function index()
    {
        $viewData = [];
        $viewData["servicios"] = Servicio::all();
        return view('welcome')->with("viewData", $viewData);
    }
}
