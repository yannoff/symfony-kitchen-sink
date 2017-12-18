<?php

use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\WebServerBundle\WebServerBundle;
use Symfony\Bundle\WebProfilerBundle\WebProfilerBundle;

return [
    FrameworkBundle::class   => ['all' => true],
    WebServerBundle::class   => ['dev' => true],
    WebProfilerBundle::class => ['dev' => true, 'test' => true],
    TwigBundle::class        => ['all' => true],
];
