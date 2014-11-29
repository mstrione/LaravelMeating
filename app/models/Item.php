<?php 
class Item extends Eloquent { 
	//declaro la tabla que usa el modelo
    protected $table = 'items';
	
	//declaro los campos con los que se puede crear el objeto desde el formulario
	protected $fillable = array('descripcion', 'cantidad');
	//fillable son los campos "llenables"
//---------------------------------------------------
	//COMO ME RELACIONO CON OTRA TABLA
	public function eventos()
	{
		//creo una relacion con el modelo del evento
		return $this->hasMany('Evento','evento');
		//esto me dice, que la tabla de items se relaciona
		//con la tabla evento, a traves de la clave evento, la cual es la clave primaria de la tabla evento 
		//y aqui es la foranea.
	}
//------------------------------------------------	
	
	public static function agregarItem($input)
	//esta funcion va a RECIBIR COMO PARAMETRO TODA LA INFO DEL FORMULARIO para crear el Item
	{
		$respuesta = array();
		
		//declaro las reglas para validar el nombre del item y la cantidad
		$reglas=array(
			'descripcion'=>array('required', 'max:30',  'alpha_num'),
			'cantidad'=>array('required','numeric'),
			);
			
		$validator= Validator::make($input, $reglas);
		
		//ahora verifico que los datos cumplan con la validacion
		if ($validator->fails())
		{
			//si no cumple las reglas, se devuelven los errores al controlador
			$respuesta['mensaje']=$validator;
			$respuesta['error']=true;
			
		}else{
			// en caso de que se cumplan las reglas se crea el objeto Item
			
			$item=static::create($input);
			
			//ahora retorno un mensaje de exito al controlador
			$respuesta['mensaje']='Item creado!';
			$respuesta['error']=false;
			$respuesta['data']= $item;
			}
		return $respuesta;
			
		
	}
	
}
?>