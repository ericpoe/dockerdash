<?php

namespace App\Controller;

use Docker\Docker;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/containers")
 */
class ContainerController extends Controller
{
    /**
     * @Route("/", methods={"GET"})
     */
    public function index() : JsonResponse
    {
        $docker = Docker::create();

        return $this->json($docker->containerList(["all" => true, "size"=>true]));
    }
}
