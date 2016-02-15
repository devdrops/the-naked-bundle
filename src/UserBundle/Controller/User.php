<?php

namespace UserBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\EngineInterface;

class User
{
    protected $templating;
    
    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }

    public function index()
    {
        return new Response(
            $this->templating->render('UserBundle::index.html.twig')
        );
    }
    
    public function greeting($name)
    {
        return new Response(
            $this->templating->render(
                'UserBundle::greeting.html.twig',
                [ 'name' => $name ]
            )
        );
    }
}
