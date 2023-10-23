<?php
namespace OCA\HelloWorld\Controller;

use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\IRequest;

class PageController extends Controller {
    public function __construct($appName, IRequest $request) {
        parent::__construct($appName, $request);
    }

    /**
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
    public function show(?string $getParameter) {
        if ($getParameter === null) {
            $getParameter = "";
        }
        
        return new TemplateResponse('hello_world', 'index', ['myMessage' => $getParameter]);
    }
}