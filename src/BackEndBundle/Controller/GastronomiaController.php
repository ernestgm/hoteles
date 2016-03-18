<?php

namespace BackEndBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BackEndBundle\Entity\Gastronomia;
use BackEndBundle\Form\GastronomiaType;

/**
 * Gastronomia controller.
 *
 */
class GastronomiaController extends Controller
{

    /**
     * Lists all Gastronomia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackEndBundle:Gastronomia')->findAll();

        return $this->render('BackEndBundle:Gastronomia:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Gastronomia entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Gastronomia();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('gastronomy_show', array('id' => $entity->getId())));
        }

        return $this->render('BackEndBundle:Gastronomia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Gastronomia entity.
     *
     * @param Gastronomia $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Gastronomia $entity)
    {
        $form = $this->createForm(new GastronomiaType(), $entity, array(
            'action' => $this->generateUrl('gastronomy_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Gastronomia entity.
     *
     */
    public function newAction()
    {
        $entity = new Gastronomia();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackEndBundle:Gastronomia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Gastronomia entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Gastronomia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gastronomia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Gastronomia:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Gastronomia entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Gastronomia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gastronomia entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Gastronomia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Gastronomia entity.
    *
    * @param Gastronomia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Gastronomia $entity)
    {
        $form = $this->createForm(new GastronomiaType(), $entity, array(
            'action' => $this->generateUrl('gastronomy_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Gastronomia entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Gastronomia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gastronomia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('gastronomy_edit', array('id' => $id)));
        }

        return $this->render('BackEndBundle:Gastronomia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Gastronomia entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackEndBundle:Gastronomia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Gastronomia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('gastronomy'));
    }

    /**
     * Creates a form to delete a Gastronomia entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gastronomy_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
