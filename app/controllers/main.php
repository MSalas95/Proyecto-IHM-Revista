<?php 

/**
* 
*/
class Main extends Controller
{
	
	public function index()
	{	
		$str_datos = file_get_contents("http://localhost/ihm/app/res/content/revistas.json");
		$datos = json_decode($str_datos,true);
		$dt = json_encode($datos);

		
		$libreria = "";

		for ($i=0; $i < count($datos); $i++) { 
			$id=$datos[$i]["id"];
			$libreria .= 
			'
				<div class="caja" id="'.($i+1).'" onmouseover="abrir('.($i+1).');" >
	      			<div class="item">
	       				<div class="lomo"></div>
	        			<div class="portada" onclick="prueba('.$i.');">
	        				<img class="imgp"  src="revistas/'.$id.'/1.jpg">	
	        			</div>
	      			</div>
	    		</div>
			';
		}


		$this->view('main/index',[$datos,$libreria]);
	}

	public function comite()
	{
		$this->view('main/comite');
	}

	public function normas(){
		
		$this->view('main/normas');
	}

}
 ?>