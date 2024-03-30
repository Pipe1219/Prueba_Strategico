<?php
require_once 'models/Calculadora.php';

class CalculadoraController{

	protected $modelo;

    public function __construct() {
        $this->modelo = new Calculadora;        
    }
    
    public function Index(){
        require_once 'views/Calculadora.php';
    }

    public function sumar(){
		try
		{			
            $data = json_decode(file_get_contents('php://input'), true);            
			$this->modelo->numero1 = $data['numero1'];
			$this->modelo->numero2 = $data['numero2'];			
			$result = ($this->modelo->numero1 + $this->modelo->numero2);			
			echo json_encode($result);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
    public function restar(){
		try
		{			
            $data = json_decode(file_get_contents('php://input'), true);            
			$this->modelo->numero1 = $data['numero1'];
			$this->modelo->numero2 = $data['numero2'];			
			$result = ($this->modelo->numero1 - $this->modelo->numero2);			
			echo json_encode($result);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function multiplicar(){
		try
		{			
            $data = json_decode(file_get_contents('php://input'), true);            
			$this->modelo->numero1 = $data['numero1'];
			$this->modelo->numero2 = $data['numero2'];			
			$result = ($this->modelo->numero1 * $this->modelo->numero2);			
			echo json_encode($result);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function dividir(){
		try
		{			
            $data = json_decode(file_get_contents('php://input'), true);            
			$this->modelo->numero1 = $data['numero1'];
			$this->modelo->numero2 = $data['numero2'];			

			if($this->modelo->numero2 == 0){		
				echo "NO SE PUEDE DIVIDIR POR CERO.";
			}	else {
				$result = ($this->modelo->numero1 / $this->modelo->numero2);			
				echo json_encode($result);		
			}			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}
