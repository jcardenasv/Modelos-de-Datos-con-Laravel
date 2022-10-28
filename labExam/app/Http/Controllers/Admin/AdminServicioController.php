<?php

namespace App\Http\Controllers\Admin;

use App\Models\Servicio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminServicioController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Página de Administración - Servicios";
        $viewData["servicios"] = Servicio::all();
        return view('admin.servicio.index')->with("viewData", $viewData);
    }
}
