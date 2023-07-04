<?php


class Router {

	private $routes = [
		'robots\.txt'            => 'action_robots',
		'manifest\.json'         => 'action_manifest',
		'favicon\.ico'           => 'action_favicon',
		'google([\w]{16})\.html' => 'action_google_validation',
		'browserconfig\.xml'     => 'action_browserconfig',
		'serviceworker\.js'      => 'action_serviceworker',
		'message\/send\/'        => 'action_contacts_validate',
	];

	public function __construct() {

		$route = $_SERVER['REQUEST_URI'];

		if($route == '' || $route == '/') {
			Site::action_index();
			return true;
		}

		foreach($this->routes as $regex => $method_name) {

			if(preg_match('/' . $regex . '/', $route)) {
				Site::$method_name();
				return true;
			}

		}

		Site::action_index();
		return true;
	}

}