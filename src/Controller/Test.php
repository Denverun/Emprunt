<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class Test
{
    /**
 * @Route("/{max}", name="app_lucky_number")
 */
    public function identity(int $max): Response{
        return new Response(
            '<html><body>Le nombre entré est : '.$max.'</body></html>');
    }

}