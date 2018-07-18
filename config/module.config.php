<?php
namespace Base;
use Zend\Router\Http\Literal;

return [
//// View //////
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
	),
//// Controllers //////
	'controllers' => [
		'factories' => [
			Controller\ScriptController::class => Factory\ScriptControllerFactory::class,
		]
	],
//// Router ////////
	'router' => [
		// Open configuration for all possible routes
		'routes' => [
			// Define a new route called "myroute"
			'myroute' => [
				// Define the routes type to be "Zend\Mvc\Router\Http\Literal", which is basically just a string
				'type' => Literal::class,
				// Configure the route itself
				'options' => [
					// Listen to "/base" as uri
					'route' => '/base',
					// Define default controller and action to be called when this route is matched
					'defaults' => [
						'controller' => Controller\ScriptController::class,
						'action'     => 'display',
					]
				]
			]
		]
	]
 ];
