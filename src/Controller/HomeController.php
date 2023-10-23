<?php
namespace App\Controller;

use App\Entity\SuperHero;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    #[Route('/test', name: 'homepage')]
    public function index(): Response
    {
        $superman = new SuperHero();
        $superman->setNom("Superman")->setForce(100);

        $batman = new SuperHero();
        $batman->setNom("Batman")->setForce(100);

        $aquaman = new SuperHero();
        $aquaman->setNom("Aquaman")->setForce(100);

        $wonderWoman = new SuperHero();
        $wonderWoman->setNom("WonderWoman")->setForce(100);

        $heroes = [];
        $heroes[] = $superman;
        $heroes[] = $batman;
        $heroes[] = $aquaman;
        $heroes[] = $wonderWoman;

        $dateCourante = date("d/m/Y");

        return $this->render('truc.html.twig', [
            'heroes' => $heroes,
            "maDate" => $dateCourante,
        ]);
    }

    #[Route('/truc', name: 'truc')]
    public function truc():Response{
        $superman = new SuperHero();
        $superman->setNom("Superman")->setForce(100);
        return $this->json($superman);
    }
}
