<?php
namespace OCA\HelloWorld\AppInfo;

use OCP\AppFramework\App;
use OCP\Util;

class Application extends App {
    public const APP_ID = 'hello_world';
    public function __construct() {
		parent::__construct(self::APP_ID);

        Util::addScript('hello_world', 'my_script');
    }
}
