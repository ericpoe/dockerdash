<?php

namespace App\Controller;

use Docker\Docker;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/containers")
 */
class ContainerController extends Controller
{
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index() : JsonResponse
    {
        $docker = Docker::create();

        return $this->json($docker->containerList(["all" => true, "size"=>true]));
    }
}
