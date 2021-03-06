<?php 

/**
* 
*/
class App
{
	
	protected $controller = 'main';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{	

		$url = $this->parseUrl();		
		

		if (file_exists('../app/controllers/' . $url[0] . '.php')) // verifica si el controlador existe
		{
			$this->controller = $url[0];
			unset($url[0]);
		}

		require_once '../app/controllers/' . $this->controller . '.php';

		$this->controller = new $this->controller;

		if (isset($url[1])) 
		{	

			if (method_exists($this->controller, $url[1])) // verifica si el metodo dentro del controlador existe
			{	

				$this->method = $url[1];
				unset($url[1]);

			}
		}

		$this->params = $url ? array_values($url) : [];

		
		
		call_user_func_array([$this->controller,$this->method], $this->params);

	}

	public function parseUrl()
	{
		if (isset($_GET['url'])) 
		{	
			return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
		}
	}

}


