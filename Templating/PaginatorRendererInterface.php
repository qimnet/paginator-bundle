<?php
/*
 * This file is part of the Qimnet CRUD Bundle.
 *
 * (c) Antoine Guigan <aguigan@qimnet.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Qimnet\PaginatorBundle\Templating;
use Qimnet\PaginatorBundle\Paginator\PaginatorViewInterface;

interface PaginatorRendererInterface
{
    public function render(PaginatorViewInterface $pagination, $route, array $routeParameters=array(), array $options=array());
}
