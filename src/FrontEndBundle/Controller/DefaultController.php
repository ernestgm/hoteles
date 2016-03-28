<?php

namespace FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('FrontEndBundle:Default:index.html.twig');
    }

    /**
     * @Route("/change_currency/{_currency}/{route}/{routeParams}", name="change_currency")
     */

    public function changeCurrencyAction($_currency, $route, $routeParams = null)
    {
        $routeParams = empty($routeParams) ? array() : json_decode(urldecode($routeParams), true);

        $request = $this->container->get('request');
        $router = $this->container->get('router');

        if ($currency = $request->getSession()->get('_currency')) {
            $request->getSession()->set('_currency', $_currency);
        }

        return new RedirectResponse($router->generate($route, $routeParams));
    }


}
