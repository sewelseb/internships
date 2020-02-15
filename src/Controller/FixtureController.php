<?php
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class FixtureController extends AbstractController
{
    public function index() {
        $userRepo = $this->getDoctrine()
            ->getRepository(User::class);
        $user = $userRepo->findOneBy([
            'email' => "sewelseb@hotmail.com"
        ]);
        /** @var User $user*/
        $user->setRoles(['ROLE_ADMIN']);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->render('fixture.html.twig');
    }
}