<?php
namespace Base\Factory;

use Base\Controller\ScriptController;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * ScriptControllerFactory builds a ScriptController injecting into it
 * ApiManager service.
 *
 * @author pols12
 */
class ScriptControllerFactory implements FactoryInterface {
    
    public function __invoke(ContainerInterface $serviceLocator, $requestedName, array $options = null) {
        $api = $serviceLocator->get('Omeka\ApiManager');
        
        return new ScriptController($api);
    }

}
