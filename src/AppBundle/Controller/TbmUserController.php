<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TbmUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tbmuser controller.
 *
 * @Route("tbmuser")
 */
class TbmUserController extends Controller
{
    /**
     * Lists all tbmUser entities.
     *
     * @Route("/", name="tbmuser_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tbmUsers = $em->getRepository('AppBundle:TbmUser')->findAll();

        return $this->render('tbmuser/index.html.twig', array(
            'tbmUsers' => $tbmUsers,
        ));
    }

    /**
     * Creates a new tbmUser entity.
     *
     * @Route("/new", name="tbmuser_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tbmUser = new Tbmuser();
        $form = $this->createForm('AppBundle\Form\TbmUserType', $tbmUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tbmUser);
            $em->flush();

            return $this->redirectToRoute('tbmuser_show', array('id' => $tbmUser->getId()));
        }

        return $this->render('tbmuser/new.html.twig', array(
            'tbmUser' => $tbmUser,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tbmUser entity.
     *
     * @Route("/{id}", name="tbmuser_show")
     * @Method("GET")
     */
    public function showAction(TbmUser $tbmUser)
    {
        $deleteForm = $this->createDeleteForm($tbmUser);

        return $this->render('tbmuser/show.html.twig', array(
            'tbmUser' => $tbmUser,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tbmUser entity.
     *
     * @Route("/{id}/edit", name="tbmuser_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TbmUser $tbmUser)
    {
        $deleteForm = $this->createDeleteForm($tbmUser);
        $editForm = $this->createForm('AppBundle\Form\TbmUserType', $tbmUser);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tbmuser_edit', array('id' => $tbmUser->getId()));
        }

        return $this->render('tbmuser/edit.html.twig', array(
            'tbmUser' => $tbmUser,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tbmUser entity.
     *
     * @Route("/{id}", name="tbmuser_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TbmUser $tbmUser)
    {
        $form = $this->createDeleteForm($tbmUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tbmUser);
            $em->flush();
        }

        return $this->redirectToRoute('tbmuser_index');
    }

    /**
     * Creates a form to delete a tbmUser entity.
     *
     * @param TbmUser $tbmUser The tbmUser entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TbmUser $tbmUser)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tbmuser_delete', array('id' => $tbmUser->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
