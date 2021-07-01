<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @method render(string $string, array $array)
 * @Route ("/")
 */
class AccueilController extends AbstractController
{

    /**
     * @Route("/", name="accueil")
     */
    public function page_index() :Response
    {
        return $this->render('accueil/accueil.html.twig');
    }

}