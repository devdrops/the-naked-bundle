<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class Home
{
    public function index()
    {
        return new Response('Home page :D');
    }
}
