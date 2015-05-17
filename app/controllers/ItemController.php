<?php

class ItemController extends \BaseController {

	


	 
	 /*public function mostrarItems()
	 {
		$items=Item::all();
		//obtengo todos los items y los paso a la vista
		return View::make('item.lista', array('items'=>$items)); 
		//despues del make, los argumentos son('view o sea el blade de la vista', 'lo que se pasa')
	 }*/
	 
	 public function get_item()
	 {
		return View::make('pages.itempop');
	 }
	 
	public function agregar()
	{
		$ideventocapturado=Input::get('captura');
		
				$item = new Item;
				$item->idevento =$ideventocapturado;
				$item->nombre = Input::get('nombre');
				$item->cantidad = Input::get('cantidad');
				
			$item->save();
			return Redirect::to("verevento/$ideventocapturado")->with('item', 'Item ingresado correctamente');
		
	}
	
	/*public function delete_item($id)
	{
	//
	}

	
	public function show_item($id)
	{
		//
	}*/


	


}
