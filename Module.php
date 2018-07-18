<?php
namespace Base;

use Omeka\Module\AbstractModule;

class Module extends AbstractModule {

	/**
	 * Returns configuration to merge with application configuration
	 *
	 * @return array|\Traversable
	 */
	public function getConfig(){
		return include __DIR__ . '/config/module.config.php';
	}

}