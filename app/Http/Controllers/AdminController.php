<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\TitularModel;
use App\PresidenteModel;

class AdminController extends Controller
{
    public function index(){
    	
    	if (Auth::check()) {
    		$notificaciones = \App\ActividadModel::orderBy('created_at','desc')->get();
    		$entidades = \App\EntidadModel::all();
		    return view('admin.admin', compact('notificaciones','entidades'));
		}
		else{
			return redirect('login');
		}
	}
	
	public function getTitulares(){
		
    	if (Auth::check()) {
    		$notificaciones = \App\ActividadModel::orderBy('created_at','desc')->get();
			$titulares = TitularModel::all();
			$entidades = \App\EntidadModel::all();
			return view('admin.entidades.lista_titulares', compact('titulares','notificaciones', 'entidades'));
		}else{
			return redirect('login');
		}
	}

	public function getPresidentes(){
		
    	if (Auth::check()) {
    		$notificaciones = \App\ActividadModel::orderBy('created_at','desc')->get();
			$presidentes = PresidenteModel::all();
			$entidades = \App\EntidadModel::all();
			return view('admin.entidades.lista_presidentes', compact('presidentes','notificaciones', 'entidades'));
		}else{
			return redirect('login');
		}
	}

}
