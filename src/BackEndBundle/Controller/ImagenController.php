<?php

namespace BackEndBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BackEndBundle\Entity\Imagen;

/**
 * Imagen controller.
 *
 */
class ImagenController extends Controller
{

    /**
     * Lists all Imagen entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackEndBundle:Imagen')->findAll();

        return $this->render('BackEndBundle:Imagen:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Imagen entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Imagen')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Imagen entity.');
        }

        return $this->render('BackEndBundle:Imagen:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
