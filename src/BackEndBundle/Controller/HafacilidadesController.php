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

use BackEndBundle\Entity\Hafacilidades;
use BackEndBundle\Form\HafacilidadesType;

/**
 * Hafacilidades controller.
 *
 */
/**
 * @Route("hafacilidades")
 */
class HafacilidadesController extends Controller
{

    /**
     * @Route("/", name="hafacilidades")
     */
    public function indexAction()
    {
       return $this->render('BackEndBundle:Hafacilidades:index.html.twig');
    }

    /**
     * Lists all hafacilidades entities.
     *
     * @Rest\Get(name="hafacilidades_data", path="/data", defaults={"_format" = "json"})
     * @Rest\View()
     */
    public function getDataAction(Request $request)
    {
        $limit = $request->query->getInt('limit', 10);
        $page = $request->query->getInt('page', 1);
        $sorting = $request->query->get('sorting', array());
        $filters = $request->query->get('filter', array());

        $resultPager = $this->getDoctrine()->getManager()
            ->getRepository('BackEndBundle:Hafacilidades')
            ->findAllPaginated($limit, $page, $sorting, $filters)
        ;

        $pagerFactory = new PagerfantaFactory();

        return $pagerFactory->createRepresentation(
            $resultPager,
            new Routes('hafacilidades_data', array(
                'limit' => $limit,
                'page' => $page,
                'sorting' => $sorting
            ))
        );
    }
    /**
     * Creates a new Hafacilidades entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hafacilidades();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hafacilidades_show', array('id' => $entity->getId())));
        }

        return $this->render('BackEndBundle:Hafacilidades:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hafacilidades entity.
     *
     * @param Hafacilidades $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hafacilidades $entity)
    {
        $form = $this->createForm(new HafacilidadesType(), $entity, array(
            'action' => $this->generateUrl('hafacilidades_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hafacilidades entity.
     *
     */
    public function newAction()
    {
        $entity = new Hafacilidades();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackEndBundle:Hafacilidades:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hafacilidades entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Hafacilidades')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hafacilidades entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Hafacilidades:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hafacilidades entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Hafacilidades')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hafacilidades entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Hafacilidades:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hafacilidades entity.
    *
    * @param Hafacilidades $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hafacilidades $entity)
    {
        $form = $this->createForm(new HafacilidadesType(), $entity, array(
            'action' => $this->generateUrl('hafacilidades_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hafacilidades entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Hafacilidades')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hafacilidades entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hafacilidades_edit', array('id' => $id)));
        }

        return $this->render('BackEndBundle:Hafacilidades:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hafacilidades entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackEndBundle:Hafacilidades')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hafacilidades entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hafacilidades'));
    }

    /**
     * Creates a form to delete a Hafacilidades entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hafacilidades_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
