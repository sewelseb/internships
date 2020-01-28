<?php


namespace App\Controller;

use App\Entity\InternshipApplication;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class InternshipApplyController extends AbstractController
{
    public function index(Request $request)
    {
        $internshipApplication = $this->createInternshipApplication($request);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($internshipApplication);
        $entityManager->flush();


        return $this->json($request->request);
    }

    /**
     * @param Request $request
     * @return InternshipApplication
     */
    public function createInternshipApplication(Request $request): InternshipApplication
    {
        $internshipApplication = new InternshipApplication();
        $internshipApplication->setEmail($request->request->get('email'));
        $internshipApplication->setLocation($request->request->get('location'));
        $internshipApplication->setStudies($request->request->get('studies'));
        return $internshipApplication;
    }
}