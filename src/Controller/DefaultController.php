<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default_index", methods={"GET"})
     */
    public function index() : Response
    {
        return $this->render('Default/index.html.twig');
    }

    /**
     * @Route("/calc/{one}/{two}", name="default_calc", methods={"GET"})
     */

    public function calc($one, $two) : Response
    {
        $calcul = ($one + $two);

        //$em = $this->getDoctrine()


        return $this->render('Default/calc.html.twig', [
            'calcul' => $calcul
        ]);
    }

    /**
     * @Route("/{name}", name="default_name", methods={"GET"})
     */
    public function name($name) : Response
    {
        return $this->render('Default/name.html.twig', [
            'name' => $name
        ]);
    }
}