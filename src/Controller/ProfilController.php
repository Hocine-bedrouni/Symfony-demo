<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\component\routing\Annotation\Route;

/**
 * @Route("/profil")
 * @method render(string $string, array $array)
 * @package App\Controller
 */

class ProfilController extends AbstractController
{

    /**
     * @Route("/detail", name="profil")
     */
    public function detail() :Response
    {
        $info = [1,'Fugazi',1884,'Fugazi.jpeg', 'EMI', 'Prog',14.99,7];
        //affichage de la page d'accueil
        return $this->render('profil/detail.html.twig',[
            'informations'=>$info
        ]);

    }
}