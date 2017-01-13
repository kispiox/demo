<?php

/**
 * Kispiox - A lightweight application framework
* www.bueller.ca/kispiox
*
* DemoController.php
* @copyright Copyright (c) 2016 Matt Ferris
* @author Matt Ferris <matt@bueller.ca>
*
* Licensed under BSD 2-clause license
* www.bueller.ca/kispiox/license
*/

namespace Kispiox\Demo;

use Kispiox\Controller;

class DemoController extends Controller
{
    /**
     * Handle requests for '/'. Simply return HTML content in
     * 'private/views/default.html'.
     *
     * @return Psr\Http\Message\ResponseInterface The generated response
     */
    public function defaultAction()
    {
        return $this->htmlResponse(file_get_contents('private/views/default.html'));
    }
}

