<?php 

/**
* 
*/
class Revista extends Controller
{
	
	public function index($numero="Ninguna",$nombre="")
	{	
		echo $nombre;
		if (file_exists("../app/res/revistas/".$numero)){
			$this->view('revista/index',[$numero]);
		} else {
			$this->view('error/noexiste');
		}
		
	}	


}


 ?>