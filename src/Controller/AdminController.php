<?php
namespace App\Controller;

use App\Entity\InternshipApplication;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends AbstractController
{
    public function index() {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $applications = $this->getDoctrine()->getRepository(InternshipApplication::class)->findAll();

        return $this->render('admin/admin.html.twig', [
            'users' => $users,
            'applications' => $applications
        ]);
    }
}
