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
        
        // The TemplateResponse loads the 'index.php' defined in our app's 'templates' folder
        // Any get parameters that were supplied by the browser when loading the 
        return new TemplateResponse('hello_world', 'index', ['myMessage' => $getParameter]);
    }
}