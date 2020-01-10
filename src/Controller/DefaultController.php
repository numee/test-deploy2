<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'HOURRAA',
        ]);
    }

    /**
     * @Route("/test/", name="test")
     */
    public function test()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'HOURRAA',
        ]);
    }
}
