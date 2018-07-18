<?php

namespace Base\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Omeka\Api\Manager as ApiManager;
use Omeka\Api\Representation\ItemRepresentation;

/**
 * Lets execute any code, e.g. to interact with Omeka’s API.
 */
class ScriptController extends AbstractActionController {
	
	/** @var ApiManager Omeka Api service. */
    protected $api;
    
    public function __construct(ApiManager $api) {
        $this->api = $api;
    }
    
    /**
     * Insert an Item in DB.
	 * @todo Create the method.
     * @return ViewModel
     */
    public function addAction() {
    }
    
	/**
	 * Displays an item representation as JSON-LD.
	 * It is the default configured action when visiting /base URL.
	 * @return ViewModel
	 */
    public function displayAction() {
        $itemId = 4;
		
        /* @var $item ItemRepresentation */
		$item = $this->api->read('items', $itemId)->getContent();
		$json = json_encode($item);
        
        return [
            'content' => $json, //the variable $content will be available in display.phtml partial
        ];
    }
}
