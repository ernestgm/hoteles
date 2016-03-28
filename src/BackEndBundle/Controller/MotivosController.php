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

use BackEndBundle\Entity\Motivos;
use BackEndBundle\Form\MotivosType;

/**
 * Motivos controller.
 *
 */
/**
 * @Route("motivos")
 */
class MotivosController extends Controller
{

    /**
     * @Route("/", name="motivos")
     */
    public function indexAction()
    {
        return $this->render('BackEndBundle:Motivos:index.html.twig');
    }

    /**
     * Lists all Motivos entities.
     *
     * @Rest\Get(name="motivos_data", path="/data", defaults={"_format" = "json"})
     * @Rest\View()
     */
    public function getDataAction(Request $request)
    {
        $limit = $request->query->getInt('limit', 10);
        $page = $request->query->getInt('page', 1);
        $sorting = $request->query->get('sorting', array());
        $filters = $request->query->get('filter', array());

        $resultPager = $this->getDoctrine()->getManager()
            ->getRepository('BackEndBundle:Motivos')
            ->findAllPaginated($limit, $page, $sorting, $filters)
        ;

        $pagerFactory = new PagerfantaFactory();

        return $pagerFactory->createRepresentation(
            $resultPager,
            new Routes('motivos_data', array(
                'limit' => $limit,
                'page' => $page,
                'sorting' => $sorting
            ))
        );
    }
    /**
     * Creates a new Motivos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Motivos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('motivos_show', array('id' => $entity->getId())));
        }

        return $this->render('BackEndBundle:Motivos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Motivos entity.
     *
     * @param Motivos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Motivos $entity)
    {
        $form = $this->createForm(new MotivosType(), $entity, array(
            'action' => $this->generateUrl('motivos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Motivos entity.
     *
     */
    public function newAction()
    {
        $entity = new Motivos();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackEndBundle:Motivos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Motivos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Motivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Motivos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Motivos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Motivos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Motivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Motivos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Motivos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Motivos entity.
    *
    * @param Motivos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Motivos $entity)
    {
        $form = $this->createForm(new MotivosType(), $entity, array(
            'action' => $this->generateUrl('motivos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Motivos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Motivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Motivos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('motivos_edit', array('id' => $id)));
        }

        return $this->render('BackEndBundle:Motivos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Motivos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackEndBundle:Motivos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Motivos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('motivos'));
    }

    /**
     * Creates a form to delete a Motivos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('motivos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
