<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends AbstractController
{
    public function index() {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('admin.html.twig');
    }
}
