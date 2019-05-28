<?php
/**
 * Created by PhpStorm.
 * User: David Sättler
 * Date: 28. 5. 2019
 * Time: 19:27
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    public function homepage(){
        return new Response('Hello World!');
    }
}