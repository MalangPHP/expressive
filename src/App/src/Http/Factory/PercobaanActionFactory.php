<?php
/**
 * Created by PhpStorm.
 * User: asrulsibaoel
 * Date: 13/06/17
 * Time: 21:06
 */

namespace App\Http\Factory;

use App\Http\Action\PercobaanAction;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class PercobaanActionFactory
{

    public function __invoke(ContainerInterface $container)
    {
        return new PercobaanAction();
    }
}