<?php

class FotoController extends \BaseController {




	
	public function get_foto()
	{
		return View::make("pages.Evento");
	}

	
	public function post_foto()
	{
		$ideventocapturado=Input::get('captura');
        $foto = new Foto;
		$foto->idevento=$ideventocapturado;
        $foto->titulo=Input::get("titulo");            
        $foto->photo=Input::file("photo")->getClientOriginalName();//nombre original de la foto
        $foto->save();  
        
            return Redirect::to("verevento/$ideventocapturado");
    } 
    
	
	
	
	
	
	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}


}
