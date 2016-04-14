<?php
namespace Cubanacan\WSBundle\DependencyInjection;


//header ('Content-type: text/html; charset=utf-8');

/**
 * Description of UtilService
 *
 * @author obretau
 */
class UtilService {
    
    public function __construct(){
    }
    
    /**
     * Funcion que valida una url
     *
     * @param type $url
     * @return bool 
     */
    public function validateUrl($url)
    {
        //Las proximas 3 lineas se hacen para verificar que no vengan caracteres extraños(" "","";") en la url
        $urlOriginal = $url;
        $url = str_replace(array(' ', ',',';'), "bad",$url);
        if(stripos($url, "localhost") > 0)
                return true;
        if(strlen($url) == strlen($urlOriginal))
        {
            $regex = "/^(http|https):\/\/([a-z0-9][a-z0-9_-]*(?:\.[a-z0-9][a-z0-9_-]*)+):?(\d+)?\/?/i";
            return (bool)preg_match($regex, $url);
        }
        return false;
    }
    
    public function getDataServer($url,$arrayParam,$user=null, $pass=null,$language="es",$authType = CURLAUTH_BASIC ){
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Accept-Language", $language));
        curl_setopt($curl, CURLOPT_HTTPAUTH, $authType);
        curl_setopt($curl, CURLOPT_USERPWD, $user.':'.$pass);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $arrayParam);



        $response = curl_exec($curl);
        $info= curl_getinfo($curl);
        curl_close($curl);

        $code=$info['http_code'];
        if($code==401){
            $this->output->writeln('<error>Your key havent access ('.$code.').</error>');
            return new JsonResponse(['success' => false, 'msg' => 'Your key havent access ('.$code.')']);
        }
        if($code==204){
            return new JsonResponse(['success' => false, 'msg' => 'No content ('.$code.')']);
        }

        return $response;
    }
    /*
     * Genera un codigo aleatorio, de una longitud con un posible vocabulario que viene por parámetro
     */
    public function randString($length = 5, $letters = null) {
           
        //Si no nos especifican lo contrario usaremos un conjunto de letras por defecto
        if(!isset($letters) || strlen($letters) == 0){
            $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; //Por defecto usaremos todas estas letras
            //$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; //Por defecto usaremos todas estas letras
        }
        
        $str = ''; //Cadena resultante
        $max = strlen($letters)-1;

        for($i=0; $i<$length; $i++){
            $str .= $letters[rand(0,$max)]; //Hasta que tengamos $length caracteres agregamos una letra al hazar del conjunto $letters
        }
        return $str;
    }
    
    /*
     * Genera digitos numerales aleatorios, por defecto 4
     */
    public function randNumber($length = 4) 
    {
        return $this->randString($length, "0123456789");
    }
    
    /*
     * Genera letras aleatorias, por defecto 4
     */
    public function randLetters($length = 4) 
    {
        return $this->randString($length, "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
    }
}

?>
