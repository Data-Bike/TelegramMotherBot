<?php

// src/AppBundle/Controller/LuckyController.php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BotController {

    /**
     * Matches /bot/*
     * 
     * @Route("/bot/{token}")
     */
    public function indexAction($token) {
        $number = mt_rand(0, 100);
        return new Response($token);
    }

}
