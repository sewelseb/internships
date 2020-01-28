<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProfileController extends AbstractController
{
    public function index() {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('profile.html.twig');
    }
}