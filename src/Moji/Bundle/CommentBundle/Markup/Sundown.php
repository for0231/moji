<?php

namespace Moji\Bundle\CommentBundle\Markup;

use FOS\CommentBundle\Markup\ParserInterface;
use Sundown\Markdown;

class Sundown implements ParserInterface
{
    private $parser;

    protected function getParser()
    {
        if (null === $this->parser) {
            $this->parser = new Markdown(\Sundown\Render\HTML, array(
                'autolink' => true,
                'filter_html' => true,
            ));
        }

        return $this->parser;
    }

    public function parse($raw)
    {
        $raw = strip_tags($raw);

        return $this->getParser()->render($raw);
    }
}
