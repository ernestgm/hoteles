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

use Cubanacan\WSBundle\WSClass\TpvRequest;
use Symfony\Component\Config\Definition\Exception\Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


use BackEndBundle\Entity\Hotel;
use BackEndBundle\Form\HotelType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Hotel controller.
 *
 */
/**
 * @Route("hotel")
 */
class HotelController extends Controller
{

    /**
     * @Route("/", name="hotel")
     */
    public function indexAction()
    {
        return $this->render('BackEndBundle:Hotel:index.html.twig');
    }

    /**
     * Lists all Hotel entities.
     *
     * @Rest\Get(name="hotel_data", path="/data", defaults={"_format" = "json"})
     * @Rest\View()
     */
    public function getDataAction(Request $request)
    {
        $limit = $request->query->getInt('limit', 10);
        $page = $request->query->getInt('page', 1);
        $sorting = $request->query->get('sorting', array());
        $filters = $request->query->get('filter', array());

        $resultPager = $this->getDoctrine()->getManager()
            ->getRepository('BackEndBundle:Hotel')
            ->findAllPaginated($limit, $page, $sorting, $filters)
        ;

        $pagerFactory = new PagerfantaFactory();

        return $pagerFactory->createRepresentation(
            $resultPager,
            new Routes('hotel_data', array(
                'limit' => $limit,
                'page' => $page,
                'sorting' => $sorting
            ))
        );
    }

    /**
     * Creates a new Hotel entity.
     *
     */
    /**
     * @Route("/create", name="hotel_create")
     */
    public function createAction(Request $request)
    {
        $entity = new Hotel();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hotel_show', array('id' => $entity->getId())));
        }

        return $this->render('BackEndBundle:Hotel:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hotel entity.
     *
     * @param Hotel $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hotel $entity)
    {
        $form = $this->createForm(new HotelType(), $entity, array(
            'action' => $this->generateUrl('hotel_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hotel entity.
     *
     */
    /**
     * @Route("/new", name="hotel_new")
     */
    public function newAction()
    {
        $entity = new Hotel();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackEndBundle:Hotel:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hotel entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Hotel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hotel entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Hotel:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hotel entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Hotel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hotel entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Hotel:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hotel entity.
    *
    * @param Hotel $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hotel $entity)
    {
        $form = $this->createForm(new HotelType(), $entity, array(
            'action' => $this->generateUrl('hotel_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hotel entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Hotel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hotel entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hotel_edit', array('id' => $id)));
        }

        return $this->render('BackEndBundle:Hotel:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hotel entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackEndBundle:Hotel')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hotel entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hotel'));
    }

    /**
     * Creates a form to delete a Hotel entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hotel_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    /**
     * @Route("/ws_get_hotels", name="ws_get_hotels")
     */
    public function getWsAllHotelAction(Request $request){
        $functionName = 'getHotelsDetails';
        $paramsJson = $request->request->get('paramsJson');
        $webServicesObject = $this->get("cubanacan.wsService");

        $reflector = new \ReflectionObject($webServicesObject);

        if ($reflector->hasMethod($functionName)) {
            $method = $reflector->getMethod($functionName);
            $result = $method->invoke($webServicesObject, $paramsJson);
            return new Response($result);
        }
        else {
            $param = array('functionName' => $functionName,
                'paramsJson' => $paramsJson);

            //Add authorization and proxy request
            $result = $this->get("cubanacan.wsService")->sendPost($param);

            return new Response($result);
        }
    }
}
