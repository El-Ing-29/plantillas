<?php namespace App\Controllers;

class PersonaController extends BaseController
{
	public function index()
	{

	
		$vistas =   view('plantilla/header').
					view('plantilla/menu').
					view('persona').
					view('plantilla/footer');
		return $vistas;
	}

	public function destiladas()
	{

		
		$vistas = view('plantilla/header').
					view('plantilla/menu').
					view('B-Destiladas').
					view('plantilla/footer');
		return $vistas;
	}
	public function fermentadas()
	{

		
		$vistas = view('plantilla/header').
					view('plantilla/menu').
					view('B-Fermentadas').
					view('plantilla/footer');
		return $vistas;
	}

	public function fortificadas()
	{

		
		$vistas = view('plantilla/header').
					view('plantilla/menu').
					view('B-Fortificadas').
					view('plantilla/footer');
		return $vistas;
	}
	

	

}
