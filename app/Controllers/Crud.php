<?php

namespace App\Controllers;

use App\Models\modelcrud;

class crud extends BaseController
{
	public function index()
	{
		$crud = new modelcrud();
		$datos = $crud->listar();

		$data = ["datos" => $datos]; 
		$mensaje = session('mensaje');

		$data = [
					"datos" => $datos,
					"mensaje" => $mensaje
				];


		return view('listado', $data);
	}
	public function crear()
	{

		print_r($_POST);

		$datos = [
			"nombre" => $_POST['Nombre'],
			"correo" => $_POST['Correo'],
			"direccion" => $_POST['Direccion'],
			"foto" => $_POST['Foto2'],
			"genero" => $_POST['Genero'],

		];
		$Crud = new modelcrud();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0) {
			return redirect()->to(base_url() . '/')->with('mensaje', '1');
		} else {
			return redirect()->to(base_url() . '/')->with('mensaje', '0');
		}
	}

	public function actualizar()
	{
		$datos = [

			"id" => $_POST['id'],
			"nombre" => $_POST['Nombre'],
			"correo" => $_POST['Correo'],
			"direccion" => $_POST['Direccion'],
			"foto" => $_POST['Foto2'],
			"genero" => $_POST['Genero'],

		];
		$id = $_POST['id'];

		$Crud = new modelcrud();

		$respuesta = $Crud->actualizar($datos, $id);

		if ($respuesta) {
			return redirect()->to(base_url() . '/')->with('mensaje', '2');
		} else {
			return redirect()->to(base_url() . '/')->with('mensaje', '3');
		}
	}

	public function obtenerNombre($id)
	{
		$data = ["id" => $id];
		$Crud = new modelcrud();
		$respuesta = $Crud->obtenerNombre($data);

		$datos = ["datos" => $respuesta];

		return view('Actualizar', $datos);
	}

	public function eliminar($id)
	{
		$Crud = new modelcrud();
		$data = ["id" => $id];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta) {
			return redirect()->to(base_url() . '/')->with('mensaje', '4');
		} else {
			return redirect()->to(base_url() . '/')->with('mensaje', '5');
		}
	}
}
