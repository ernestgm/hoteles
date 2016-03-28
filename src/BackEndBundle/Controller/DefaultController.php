<?php

namespace BackEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="backend_home")
     */
    public function indexAction(Request $request)
    {
        return $this->render('BackEndBundle:Skeleton:index.html.twig');
    }

    /**
     * @Route("/dashboard", name="backend_dashboard")
     */
    public function dashboardAction(Request $request)
    {
        return $this->render('BackEndBundle:Skeleton:dashboard.html.twig');
    }

    /**
     * @Route("/hello", name="backend_hello")
     */
    public function helloAction(Request $request)
    {
        return $this->render('BackEndBundle:Default:index.html.twig');
    }

}
