<?php

namespace UserBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;
//use JMS\DiExtraBundle\Annotation as DI;
use Sinner\Phpseclib\Crypt\Crypt_RSA;
class SecurityController extends BaseController
{

    protected function renderLogin(array $data){
        $requestAttributes = $this->container->get('request')->attributes;

        if ('backend_login' === $requestAttributes->get('_route')) {
            $template = sprintf('BackEndBundle:Security:login.html.twig');
        }
        else {
            $template = sprintf('FOSUserBundle:Security:login.html.twig');
        }

        $form_register = $this->container->get('fos_user.registration.form');
        $data['form_register']=$form_register->createView();
        $data['register']=true;
        return $this->container->get('templating')->renderResponse($template, $data);
    }

    public function checkAction()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }
}
