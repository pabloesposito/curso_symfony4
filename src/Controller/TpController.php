<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

  /**
     * @Route("/tp", name="tp")
     */
class TpController extends AbstractController{
    
    /**
     * @Route("/imprimir", name="imprimir")
     */
    public function imprimir(Request $request){
        
        $variable = "hola";
        return $this->render('imprimir.html.twig', ["variable" => $variable]);

    }

    

    
}