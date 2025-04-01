<?php

namespace App\Controller; 

use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    
class Controlleur extends AbstractController
{
    #[Route("/", name : "index")]
    public function index(): Response
    {
        return $this->render("secretaire/index.html.twig");
    }

    #[Route("/add-paddrents/", name : "add-pardents")]
    public function addPadrent(): Response
    {
        return $this->render("secretddaire/add-parendts.html.twig");
    }

    #[Route("/add-parents/", name : "add-parents")]
    public function addParent(): Response
    {
        return $this->render("secretaire/add-parents.html.twig");
    }



    #[Route("/add-teacher/", name : "add-teacher")]
    public function addTeacher(): Response
    {
        return $this->render("secretaire/add-teacher.html.twig");
    }

    #[Route("/admit-form/", name : "admit-form")]
    public function admitForm(): Response
    {
        return $this->render("secretaire/admit-form.html.twig");
    }

    #[Route("/all-parents/", name : "all-parents")]
    public function allParents(): Response
    {
        return $this->render("secretaire/all-parents.html.twig");
    }

    #[Route("/all-student/", name : "all-student")]
    public function allStudent(): Response
    {
        return $this->render("secretaire/all-student.html.twig");
    }

    #[Route("/all-teacher/", name : "all-teacher")]
    public function allTeacher(): Response
    {
        return $this->render("secretaire/all-teacher.html.twig");
    }

    #[Route("/exam-grade/", name : "exam-grade")]
    public function examGrade(): Response
    {
        return $this->render("secretaire/exam-grade.html.twig");
    }

    #[Route("/exam-schedule/", name : "exam-schedule")]
    public function examSchedule(): Response
    {
        return $this->render("secretaire/exam-schedule.html.twig");
    }

    #[Route("/index3/", name : "index3")]
    public function index3(): Response
    {
        return $this->render("secretaire/index3.html.twig");
    }

    #[Route("/index4/", name : "index4")]
    public function index4(): Response
    {
        return $this->render("secretaire/index4.html.twig");
    }

    #[Route("/index5/", name : "index5")]
    public function index5(): Response
    {
        return $this->render("secretaire/index5.html.twig");
    }

    #[Route("/parents-details/", name : "parents-details")]
    public function parentsDetails(): Response
    {
        return $this->render("secretaire/parents-details.html.twig");
    }

    #[Route("/student-details/", name : "student-details")]
    public function studentDetails(): Response
    {
        return $this->render("secretaire/student-details.html.twig");
    }

    #[Route("/student-promotion/", name : "student-promotion")]
    public function studentPromotion(): Response
    {
        return $this->render("secretaire/student-promotion.html.twig");
    }

    #[Route("/teacher-details/", name : "teacher-details")]
    public function teacherDetails(): Response
    {
        return $this->render("secretaire/teacher-details.html.twig");
    }
}

?>