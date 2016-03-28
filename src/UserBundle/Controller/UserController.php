<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Hateoas\HateoasBuilder;
use Hateoas\Representation\Factory\PagerfantaFactory;
use Hateoas\Configuration\Route as Routes;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;

use JMS\DiExtraBundle\Annotation as DI;
use UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


/**
 * @Route("user")
 */

class UserController extends Controller
{

    /**
     * @Route("/index", name="user_index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('UserBundle:User:index.html.twig');
    }

    /**
     * @Route("/modal_user", name="modal_add_user")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function modalAddAction()
    {
        $em = $this->get('doctrine')->getEntityManager();
        $roleRepository = $em->getRepository('UserBundle:Role');
        $roles = $roleRepository->findAll();
        //$form = $this->container->get('fos_user.registration.form');

        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('name', 'text')
            ->add('lastname', 'text')
            ->add('email', 'email')
            ->add('user_roles', 'entity', array(
                'class' => 'UserBundle\Entity\Role',
                'multiple'=> true,
                'property' => 'name',
            ))
            ->add('password', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'label.password_not_match',
                'first_options' => array('label' => 'label.password'),
                'second_options' => array('label' => 'label.repeat_password'),
            ))->getForm();

        return $this->render('UserBundle:User:modalAdd.html.twig',array(
            'form'=>$form->createView()
        ));
    }

    /**
     * Lists all gastronomia entities.
     *
     * @Rest\Get(name="user_data", path="/data", defaults={"_format" = "json"})
     * @Rest\View()
     */
    public function getDataAction(Request $request)
    {
        $limit = $request->query->getInt('limit', 10);
        $page = $request->query->getInt('page', 1);
        $sorting = $request->query->get('sorting', array());
        $filters = $request->query->get('filter', array());

        $resultPager = $this->getDoctrine()->getManager()
            ->getRepository('UserBundle:User')
            ->findAllPaginated($limit, $page, $sorting, $filters)
        ;

        $pagerFactory = new PagerfantaFactory();

        return $pagerFactory->createRepresentation(
            $resultPager,
            new Routes('user_data', array(
                'limit' => $limit,
                'page' => $page,
                'sorting' => $sorting
            ))
        );
    }

    /**
     * @Route("/user/save_user", name="user_save_user")
     * @param Request $request
     * @return JsonResponse
     */
    public function saveAction(Request $request){
        $em = $this->get('doctrine')->getEntityManager();
        $user = new User();

        $user_exit = $this->getDoctrine()->getManager()
            ->getRepository('UserBundle:User')->findByEmail($request->request->get('email'));




            if (!$user_exit) {
                $user->setName($request->request->get('name'));
                $user->setLastName($request->request->get('lastname'));
                $user->setUsername($request->request->get('email'));
                $user->setEmail($request->request->get('email'));
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($user, $request->request->get('password_first'));
                $user->setPassword($encoded);
                $user->setEnabled(true);
                $roles = $request->request->get('roles');
                foreach ($roles as $rol){
                    $role[] = $this->getDoctrine()->getManager()
                        ->getRepository('UserBundle:Role')->findOneBy(['id' => $rol]);
                }
                //dump($role);die;
                ($role) ? ($user->setUserRoles($role)) : ($user->setUserRoles(array()));
                $em->persist($user);
                $em->flush();
            } else {
                return new JsonResponse(['success' => false, 'sms' => 'El usuario ya Existe']);
            }

        return new JsonResponse(['success' => true, 'sms' => 'El usuario se ha adicionado correctamente']);
    }

    /**
     * @Route("/user/edit_user", name = "user_edit_user")
     * @param Request $request
     * @return JsonResponse
     */
    public function editAction(Request $request){
            $user = $this->getDoctrine()->getManager()
                ->getRepository('UserBundle:User')->findById($request->request->get('id'));
            $editar = true;

            $user_exit = $this->getDoctrine()->getManager()
                ->getRepository('UserBundle:User')->findByEmail($request->request->get('email'));

            if ($user_exit){
                if ($user_exit->getId() != $user->getId())
                    $editar = false;
            }

        if ($editar){
            $password = $user->getPassword();
            $user->setUsername($request->request->get('username'));
            $user->setEmail($request->request->get('email'));
            $encoder = $this->container->get('security.password_encoder');

            if($request->request->get('plainPassword1') != null){
                $encoded = $encoder->encodePassword($user,$request->request->get('plainPassword1'));
            }else{
                $encoded = $password;
            }

            $user->setPassword($encoded);
            $roles=$request->request->get('role');

            ($roles != '') ? ($user->setRoles($roles)) : ($user->setRoles(array()));

            $this->user_repository->save($user);
            return new JsonResponse(['success' => true, 'sms' => 'Editado correctamente']);

        }else{
            return new JsonResponse(['success' => false, 'sms' => 'El usuario ya Existe']);
        }
    }

    /**
     * @Route("/user/delete_user", name = "user_delete_user")
     * @return RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction(Request $request){
        $em = $this->get('doctrine')->getEntityManager();
        $id = $request->request->get('id');
        $user = $this->getDoctrine()->getManager()
            ->getRepository('UserBundle:User')->findById($id);
        $em->remove($user);
        $em->flush();
        return new JsonResponse(['success' => true, 'sms' => 'El usuario ha sido eliminado satisfactoriamente']);
    }

    /**
     * @Route("/user/{id}/change_status", name="user_change_status")
     * @param Request $request
     * @ParamConverter("user", class="UserBundle\Entity\User")
     * @param User $user
     * @return JsonResponse
     */
    public function changeStatusAction(Request $request, User $user){
        if($request->getMethod() == 'POST'){
            $em = $this->get('doctrine')->getEntityManager();
            $userRepository = $em->getRepository('UserBundle:User');
            $enabled = $request->request->get('enabled');

            $enabled = ($enabled == 'true') ? (true) : (false);
            $user->setEnabled($enabled);
            $userRepository->save($user);
            if($enabled){
               return new JsonResponse(['success' => true, 'sms' => 'Usuario habilitado']);
            }
            return new JsonResponse(['success' => true, 'sms' => 'Usuario deshabilitado']);
        }
    }
}
