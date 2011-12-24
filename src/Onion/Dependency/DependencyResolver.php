<?php
/*
 * This file is part of the Onion package.
 *
 * (c) Yo-An Lin <cornelius.howl@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Onion\Dependency;
use Onion\Dependency\DependencyManagger;

/**
 *
 * $dr = new DependencyResolver;
 * $dependencyQueue = $dr->resolve( Onion\Package\Package $package );
 *
 */
class DependencyResolver 
{
    public $pool;

    function __construct()
    {
        $this->pool = new DependencyManagger;
    }

    function resolve( \Onion\Package\Package $package )
    {

    }

}