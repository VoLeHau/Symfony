<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class testController {

    #[Route('/')]
    public function homepage(){
        // die('aaa');

        return new Response('Title : Vo Le Hau');
    }
}