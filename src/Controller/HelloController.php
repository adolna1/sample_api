<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/", name="blog_list")
     * @param LoggerInterface $logger
     * @return Response
     */
    public function indexAction(LoggerInterface $logger)
    {
        $logger->info('test log');
        return $this->render('hello.html.twig');
    }
}