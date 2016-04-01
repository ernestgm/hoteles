<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/8/2015
 * Time: 1:51 PM
 */

namespace Cubanacan\WSBundle\WSClass;


use Hermes\GeneralBundle\DependencyInjection\EntityService;
use Hermes\GeneralBundle\DependencyInjection\UtilService;

class BackendWebServices{

    /*
     * @Description Metodo para loguear al customer en el portal
     * @Parameter $user Usuario del customer
     * @Parameter $pass Contraseña del customer
     * @Return Usuario logueado en el sistema o error de usuario o contrasenna incorrectos
     */
    public function login(){
        /*$request = $this->getRequest();
        return $this->get("cubanacan.wsService")->login($email, $password);*/
    }

    /*
     * @Description Metodo para registrar al customer en el portal
     * @Parameter $user Usuario del customer
     * @Parameter $pass Contraseña del customer
     * @Return Usuario logueado en el sistema o error de usuario o contrasenna incorrectos
     */
    public function register($params){
       /* $name = $params->name;
        $lastname = $params->lastname;
        $email = $params->email;
        $address = $params->address;
        $language = $params->language;
        $country = $params->language;

        $customer = new Customer();
        $form = $this->createForm(new CustomerType(), $customer);
        $form->bind($request);
        $customer->setCountry($request->get('countryws'));
        $customer->setLanguage($request->get('languagews'));

        if ($form->isValid()) {
            $customer->setPassword($this->get("securityService")->
            encriptPassword($customer->getPassword())) ;

            $customerResponse = $this->get("cubanacan.wsService")
                ->registerCustomer($customer);

            if(!$customerResponse->isOk())
                $this->get('messageService')->sendFlagMessage(1, $customerResponse->getError());
            else{
                $request->getSession()->set("customer", $customerResponse->getCustomer());
            }
            return $this->redirect($this->generateUrl('hotel_portal_main'));
        }
        return $this->returnView($form);*/
    }

    /*
     * @Description Metodo para realizar el pago
     * @Return Datos del pago realizado
     */
    public function pay($params){

        $param  = array("functionName"=>'getHotelServices',
            'paramsJson'=>$this->hotelId);
        try{
            $response = $this->sendPost($param);
        }
        catch(\Exception $e){}
        return null;
    }


}