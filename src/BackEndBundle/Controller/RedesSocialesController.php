<?php

namespace BackEndBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BackEndBundle\Entity\RedesSociales;
use BackEndBundle\Form\RedesSocialesType;

/**
 * RedesSociales controller.
 *
 */
class RedesSocialesController extends Controller
{

    /**
     * Lists all RedesSociales entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackEndBundle:RedesSociales')->findAll();

        return $this->render('BackEndBundle:RedesSociales:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new RedesSociales entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new RedesSociales();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('redessociales_show', array('id' => $entity->getId())));
        }

        return $this->render('BackEndBundle:RedesSociales:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a RedesSociales entity.
     *
     * @param RedesSociales $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(RedesSociales $entity)
    {
        $form = $this->createForm(new RedesSocialesType(), $entity, array(
            'action' => $this->generateUrl('redessociales_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new RedesSociales entity.
     *
     */
    public function newAction()
    {
        $entity = new RedesSociales();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackEndBundle:RedesSociales:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RedesSociales entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:RedesSociales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RedesSociales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:RedesSociales:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing RedesSociales entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:RedesSociales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RedesSociales entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:RedesSociales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a RedesSociales entity.
    *
    * @param RedesSociales $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(RedesSociales $entity)
    {
        $form = $this->createForm(new RedesSocialesType(), $entity, array(
            'action' => $this->generateUrl('redessociales_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing RedesSociales entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:RedesSociales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RedesSociales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('redessociales_edit', array('id' => $id)));
        }

        return $this->render('BackEndBundle:RedesSociales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a RedesSociales entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackEndBundle:RedesSociales')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find RedesSociales entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('redessociales'));
    }

    /**
     * Creates a form to delete a RedesSociales entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('redessociales_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
