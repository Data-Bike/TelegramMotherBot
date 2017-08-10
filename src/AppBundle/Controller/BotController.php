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
    public function indexAction($token,Request $request) {
        /* @var $logger \Psr\Log\LoggerInterface */
        $logger=$this->get('logger');
        
        $logger->info($request->get('data'));
        return $this->json(['hello'=>"$token"]);
    }

}
