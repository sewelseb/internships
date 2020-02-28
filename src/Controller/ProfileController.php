<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProfileController extends AbstractController
{
    public function index() {
        $this->denyAccessUnlessGranted('ROLE_USER');


        return $this->render('profile.html.twig', [
            'user' => $this->getUser()
        ]);
    }

    /**
     * @Route("/editProfile", name="edit_profile")
     */
    public function editProfile(Request $request) {
        $this->denyAccessUnlessGranted('ROLE_USER');
        dump($request->request);

        $user = $this->getUser();

        $user->setFirstname($request->request->get('firstname'));
        $user->setLastname($request->request->get('lastname'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute("Profile");
    }
}