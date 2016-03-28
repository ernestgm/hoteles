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

use BackEndBundle\Entity\Hofacilidades;
use BackEndBundle\Form\HofacilidadesType;

/**
 * Hofacilidades controller.
 *
 */
/**
 * @Route("hofacilidades")
 */
class HofacilidadesController extends Controller
{

    /**
     * @Route("/", name="hofacilidades")
     */
    public function indexAction()
    {
        return $this->render('BackEndBundle:Hofacilidades:index.html.twig');
    }

    /**
     * Lists all hofacilidades entities.
     *
     * @Rest\Get(name="hofacilidades_data", path="/data", defaults={"_format" = "json"})
     * @Rest\View()
     */
    public function getDataAction(Request $request)
    {
        $limit = $request->query->getInt('limit', 10);
        $page = $request->query->getInt('page', 1);
        $sorting = $request->query->get('sorting', array());
        $filters = $request->query->get('filter', array());

        $resultPager = $this->getDoctrine()->getManager()
            ->getRepository('BackEndBundle:Hofacilidades')
            ->findAllPaginated($limit, $page, $sorting, $filters)
        ;

        $pagerFactory = new PagerfantaFactory();

        return $pagerFactory->createRepresentation(
            $resultPager,
            new Routes('hofacilidades_data', array(
                'limit' => $limit,
                'page' => $page,
                'sorting' => $sorting
            ))
        );
    }
    /**
     * Creates a new Hofacilidades entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hofacilidades();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hofacilidades_show', array('id' => $entity->getId())));
        }

        return $this->render('BackEndBundle:Hofacilidades:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hofacilidades entity.
     *
     * @param Hofacilidades $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hofacilidades $entity)
    {
        $form = $this->createForm(new HofacilidadesType(), $entity, array(
            'action' => $this->generateUrl('hofacilidades_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hofacilidades entity.
     *
     */
    public function newAction()
    {
        $entity = new Hofacilidades();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackEndBundle:Hofacilidades:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hofacilidades entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Hofacilidades')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hofacilidades entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Hofacilidades:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hofacilidades entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Hofacilidades')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hofacilidades entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Hofacilidades:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hofacilidades entity.
    *
    * @param Hofacilidades $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hofacilidades $entity)
    {
        $form = $this->createForm(new HofacilidadesType(), $entity, array(
            'action' => $this->generateUrl('hofacilidades_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hofacilidades entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Hofacilidades')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hofacilidades entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hofacilidades_edit', array('id' => $id)));
        }

        return $this->render('BackEndBundle:Hofacilidades:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hofacilidades entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackEndBundle:Hofacilidades')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hofacilidades entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hofacilidades'));
    }

    /**
     * Creates a form to delete a Hofacilidades entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hofacilidades_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
