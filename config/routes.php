<?php
/**
 * Setup routes with a single request method:
 *
 * $app->get('/', App\Action\HomePageAction::class, 'home');
 * $app->post('/album', App\Action\AlbumCreateAction::class, 'album.create');
 * $app->put('/album/:id', App\Action\AlbumUpdateAction::class, 'album.put');
 * $app->patch('/album/:id', App\Action\AlbumUpdateAction::class, 'album.patch');
 * $app->delete('/album/:id', App\Action\AlbumDeleteAction::class, 'album.delete');
 *
 * Or with multiple request methods:
 *
 * $app->route('/contact', App\Action\ContactAction::class, ['GET', 'POST', ...], 'contact');
 *
 * Or handling all request methods:
 *
 * $app->route('/contact', App\Action\ContactAction::class)->setName('contact');
 *
 * or:
 *
 * $app->route(
 *     '/contact',
 *     App\Action\ContactAction::class,
 *     Zend\Expressive\Router\Route::HTTP_METHOD_ANY,
 *     'contact'
 * );
 */



$app->get('/', App\Http\Action\HomePageAction::class, 'home');
$app->get('/api/ping', App\Http\Action\PingAction::class, 'api.ping');
$id = ['id' => '[a-z]{2,3}([-_][a-zA-Z]{2}|)'];

$app->get('/percobaan/{id}', [
    \App\Http\Action\CheckIfExistMiddlewareAction::class,
    \App\Http\Action\PercobaanAction::class,
], 'api.percobaan')->setOptions($id);
