<?php

namespace Moji\Bundle\CommentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render(
            'MojiCommentBundle:Default:index.html.twig'
        );
    }
}
