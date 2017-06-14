<?php
/**
 * Created by PhpStorm.
 * User: asrulsibaoel
 * Date: 14/06/17
 * Time: 14:50
 */

namespace App\Http\Factory;


use App\Http\Action\CheckIfExistMiddlewareAction;
use Interop\Container\ContainerInterface;

class CheckIfExistMiddlewareActionFactory
{

    function __invoke(ContainerInterface $container)
    {
        // TODO: Implement __invoke() method.

        return new CheckIfExistMiddlewareAction();
    }
}