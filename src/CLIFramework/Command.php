<?php
/*
 * This file is part of the CLIFramework package.
 *
 * (c) Yo-An Lin <cornelius.howl@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace CLIFramework;

use CLIFramework\CommandInterface;

class Command implements CommandInterface
{
    public $dispatcher;

    function __construct($dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    function execute($context)
    {

    }
}