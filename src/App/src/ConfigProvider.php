<?php

namespace App;



use App\Http\Action\CheckIfExistMiddlewareAction;
use App\Http\Action\HomePageAction;
use App\Http\Action\PercobaanAction;
use App\Http\Action\PingAction;
use App\Http\Factory\CheckIfExistMiddlewareActionFactory;
use App\Http\Factory\HomePageFactory;
use App\Http\Factory\PercobaanActionFactory;

/**
 * The configuration provider for the App module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates'    => $this->getTemplates(),
        ];
    }

    /**
     * Returns the container dependencies
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            'invokables' => [
                PingAction::class => PingAction::class,
            ],
            'factories'  => [
                HomePageAction::class => HomePageFactory::class,
                PercobaanAction::class => PercobaanActionFactory::class,
                CheckIfExistMiddlewareAction::class => CheckIfExistMiddlewareActionFactory::class
            ],
        ];
    }

    /**
     * Returns the templates configuration
     *
     * @return array
     */
    public function getTemplates()
    {
        return [
            'paths' => [
                'app'    => [__DIR__ . '/../templates/app'],
                'error'  => [__DIR__ . '/../templates/error'],
                'layout' => [__DIR__ . '/../templates/layout'],
            ],
        ];
    }
}
