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

use BackEndBundle\Entity\Gastronomia;
use BackEndBundle\Form\GastronomiaType;

/**
 * Gastronomia controller.
 *
 */
/**
 * @Route("gastronomia")
 */
class GastronomiaController extends Controller
{

    /**
     * @Route("/", name="gastronomia")
     */
    public function indexAction()
    {
        return $this->render('BackEndBundle:Gastronomia:index.html.twig');
    }

    /**
     * Lists all gastronomia entities.
     *
     * @Rest\Get(name="gastronomia_data", path="/data", defaults={"_format" = "json"})
     * @Rest\View()
     */
    public function getDataAction(Request $request)
    {
        $limit = $request->query->getInt('limit', 10);
        $page = $request->query->getInt('page', 1);
        $sorting = $request->query->get('sorting', array());
        $filters = $request->query->get('filter', array());

        $resultPager = $this->getDoctrine()->getManager()
            ->getRepository('BackEndBundle:Gastronomia')
            ->findAllPaginated($limit, $page, $sorting, $filters)
        ;

        $pagerFactory = new PagerfantaFactory();

        return $pagerFactory->createRepresentation(
            $resultPager,
            new Routes('gastronomia_data', array(
                'limit' => $limit,
                'page' => $page,
                'sorting' => $sorting
            ))
        );
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
