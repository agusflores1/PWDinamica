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
	
	
	/**
 * Verifica el token del captcha y regresa true o false
 * true en caso de que el usuario haya pasado la prueba
 * false en caso contrario
 * 
 */
function verificarToken($token, $claveSecreta)
{
    # La API en donde verificamos el token
    $url = "https://www.google.com/recaptcha/api/siteverify";
    # Los datos que enviamos a Google
    $datos = [
        "secret" => $claveSecreta, //	Obligatorio. La clave compartida entre tu sitio y reCAPTCHA.
        "response" => $token,  //Obligatorio. Es el token de respuesta del usuario que proporciona la integración de cliente de reCAPTCHA en tu sitio.
    ];
    // Crear opciones de la petición HTTP
    $opciones = array(
        "http" => array(
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "POST",
            "content" => http_build_query($datos), # Agregar el contenido definido antes
        ),
    );
    # Preparar petición
    $contexto = stream_context_create($opciones);
    # Hacerla
    $resultado = file_get_contents($url, false, $contexto); //
    # Si hay problemas con la petición (por ejemplo, que no hay internet o algo así)
    # entonces se regresa false. Este NO es un problema con el captcha, sino con la conexión
    # al servidor de Google
    if ($resultado === false) {
        # Error haciendo petición
        return false;
    }
    //echo $resultado;

    # En caso de que no haya regresado false, decodificamos con JSON

    $resultado = json_decode($resultado);
    # La variable que nos interesa para saber si el usuario pasó o no la prueba
    # está en success

    # "success": true|false,
    #"challenge_ts": timestamp,  // timestamp of the challenge load (ISO format yyyy-MM-dd'T'HH:mm:ssZZ)
    #"hostname": string,         // the hostname of the site where the reCAPTCHA was solved
    #"error-codes": [...]        // optional #


    $pruebaPasada = $resultado->success;
    # Regresamos ese valor, y listo (sí, ya sé que se podría regresar $resultado->success)
    return $pruebaPasada;
    
   
}

}
?>