<?php
/**
 * Created by PhpStorm.
 * User: asrulsibaoel
 * Date: 13/06/17
 * Time: 20:50
 */

namespace App\Http\Action;


use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Template\TemplateRendererInterface;

class PercobaanAction implements MiddlewareInterface
{

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        return new JsonResponse([
            'percobaan' => 'coba saja'
        ]);
    }


}