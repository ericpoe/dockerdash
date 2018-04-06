<?php

namespace App\Controller;

use Docker\Docker;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * @Route("/docker")
 */
class DockerController extends Controller
{
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index() : JsonResponse
    {
        $docker = Docker::create();

        return $this->json($docker->systemInfo());
    }
}
