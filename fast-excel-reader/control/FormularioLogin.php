<?php
class FormularioLogin{
	public function verificarPass($datos,$usuarios){
		$retorno= 'Error: Usuario o contraseña incorrectos.';
		$usuarioIngresado= $datos["usuario"];
		$claveIngresada=$datos["password"];
		foreach ($usuarios as $usuarioExistente) {
			if ($usuarioExistente['usuario'] === $usuarioIngresado && $usuarioExistente['password'] === $claveIngresada) 
				$retorno= '¡Bienvenido, ' . $usuarioIngresado . '!';
		}
		return $retorno;
	}
	
	
} 
?>