<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BotController extends Controller {

    /**
     * Matches /bot/*
     * 
     * @Route("/bot/{token}")
     */
    public function indexAction($token) {
        $this->json(['hello'=>'world']);
        return $this->json(['hello'=>'world']);
    }

}
