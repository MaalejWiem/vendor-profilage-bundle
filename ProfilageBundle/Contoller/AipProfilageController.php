<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Aip\ProfilagedBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\StreamedResponse;


class AipProfilageController extends Controller
{
                /**
                  * @Route("/hello/world/{node}", name="claro_hello_world")
                */  
    public function fileAction()
    {
         return new Response('<html><body>Hello World!</body></html>');
    }
}
