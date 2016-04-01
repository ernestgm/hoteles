<?php

namespace Cubanacan\WSBundle\Controller;

use Cubanacan\WSBundle\WSClass\BackendWebServices;
use Cubanacan\WSBundle\WSClass\Customer;
use Cubanacan\WSBundle\WSClass\TpvRequest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

//header ('Content-type: text/html; charset=utf-8');

/**
 * Webservices controller.

 * @Route("/")
 *
 */

class WebServicesController extends Controller
{
    /**
     * Action que sera llamado desde el frontend para consumir los webservices
     *
     * @Route("/webservice")
     */
    public function webserviceAction(Request $request)
    {
        //TODO: Agregar cabecera Allow origins
        $functionName = $request->request->get('functionName');
        $paramsJson = $request->request->get('paramsJson');
        $language = $request->headers->get("Accept-Language");
        $webServicesObject = $this->get("cubanacan.wsService");

        //dump($functionName);die;

        $reflector = new \ReflectionObject($webServicesObject);

        if ($reflector->hasMethod($functionName)) {
            $method = $reflector->getMethod($functionName);
            $result = $method->invoke($webServicesObject, $paramsJson);
            return new Response($result);
        }
        else {
            $param = array('functionName' => $functionName,
                'paramsJson' => $paramsJson);

            //Add authorization and proxy request
            $result = $this->get("cubanacan.wsService")->sendPost($param, $language);
            //dump($result);die;
            return new Response($result);
        }
    }
}
