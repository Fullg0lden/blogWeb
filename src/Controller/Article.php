<?php
/**
 * Created by PhpStorm.
 * User: valen
 * Date: 11/02/2019
 * Time: 11:29
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Article
{
    /**
     * @Route("/Article")
     */
    public function coucou(){
        return new Response("The article is unavailable !");
    }
}