<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index()
    {
        $html = <<<EOT
        <html>
            <body>Hello World</body>
        </html>
EOT;
        return new Response($html);
    }
}
