<?php

namespace BackEndBundle\Controller;

use Hateoas\HateoasBuilder;
use Hateoas\Representation\Factory\PagerfantaFactory;
use Hateoas\Configuration\Route as Routes;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


use BackEndBundle\Entity\Comentarios;
use BackEndBundle\Form\ComentariosType;



/**
 * Comentarios controller.
 *
 */

/**
 * @Route("comments")
 */
class ComentariosController extends Controller
{



    /**
     * @Route("/", name="comments")
     */
    public function indexAction()
    {
        return $this->render('BackEndBundle:Comentarios:index.html.twig');
    }

    /**
     * Lists all Comentarios entities.
     *
     */
    /**
     * @Rest\Get(name="comments_data", path="/data", defaults={"_format" = "json"})
     * @Rest\View()
     */
    public function getDataAction(Request $request)
    {
        $limit = $request->query->getInt('limit', 10);
        $page = $request->query->getInt('page', 1);
        $sorting = $request->query->get('sorting', array());
        $filters = $request->query->get('filter', array());

        $productsPager = $this->getDoctrine()->getManager()
            ->getRepository('BackEndBundle:Comentarios')
            ->findAllPaginated($limit, $page, $sorting, $filters)
        ;

        $pagerFactory = new PagerfantaFactory();

        return $pagerFactory->createRepresentation(
            $productsPager,
            new Routes('comments_data', array(
                'limit' => $limit,
                'page' => $page,
                'sorting' => $sorting
            ))
        );
    }

    /**
     * Creates a new Comentarios entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Comentarios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('comments_show', array('id' => $entity->getId())));
        }

        return $this->render('BackEndBundle:Comentarios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Comentarios entity.
     *
     * @param Comentarios $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Comentarios $entity)
    {
        $form = $this->createForm(new ComentariosType(), $entity, array(
            'action' => $this->generateUrl('comments_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Comentarios entity.
     *
     */
    public function newAction()
    {
        $entity = new Comentarios();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackEndBundle:Comentarios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Comentarios entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Comentarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comentarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Comentarios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Comentarios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Comentarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comentarios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Comentarios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Comentarios entity.
    *
    * @param Comentarios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Comentarios $entity)
    {
        $form = $this->createForm(new ComentariosType(), $entity, array(
            'action' => $this->generateUrl('comments_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Comentarios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Comentarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comentarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('comments_edit', array('id' => $id)));
        }

        return $this->render('BackEndBundle:Comentarios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Comentarios entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackEndBundle:Comentarios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Comentarios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('comments'));
    }

    /**
     * Creates a form to delete a Comentarios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comments_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
