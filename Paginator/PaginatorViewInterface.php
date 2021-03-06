<?php
/*
 * This file is part of the Qimnet CRUD Bundle.
 *
 * (c) Antoine Guigan <aguigan@qimnet.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Qimnet\PaginatorBundle\Paginator;

interface PaginatorViewInterface
{
    public function getIterator();
    public function getPage();
    public function getLastPage();
    public function getResultCount();
    public function getMaxPerPage();
}
