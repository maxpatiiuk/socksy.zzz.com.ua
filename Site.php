<?php


class Site {

	public static function action_index() {

		require_once 'index_module.php';

	}

	public static function action_contacts_validate() {

		header('Content-Type: application/json; charset=utf-8');

		if(!array_key_exists('email',$_POST) || !preg_match('/^[^{}^%@\s]{0,50}@[^{}^%@\s.]{0,50}(.[^{}^%@\s]{0,50})+$/',$_POST['email'])){
			echo json_encode(['error'=>'Вкажіть правильну електрнну адресу']);
			die();
		}

		if(!array_key_exists('msg',$_POST) || strlen($_POST['msg']) == 0){
			echo json_encode(['error'=>'Вкажіть повідомлення']);
			die();
		}

		if(strlen($_POST['msg']) > 5000){
			echo json_encode(['error'=>'Максимальна довжина повідомленння: 5000']);
			die();
		}

		if(!array_key_exists('msg',$_POST) || strlen($_POST['msg']) == 0){
			echo json_encode(['error'=>'Вкажіть повідомлення']);
			die();
		}

		if(!array_key_exists('name',$_POST) || strlen($_POST['name']) == 0)
			$name = '';
		else if(strlen($_POST['name']) > 1000)
			$name = substr($_POST['name'],0,1000);
		else
			$name = $_POST['name'];

		$email = $_POST['email'];
		$msg = $_POST['msg'];

		mail(Config::_REAL_EMAIL_,'Нове запитання на сайті '.Config::_NAME_,'Нове запитання на сайті '.Config::_LINK_.'<br><br>Ім\'я: ' . $name . '<br>E-mail: ' . $email . '<br>Msg: ' . $msg,'From: ' . Config::_EMAIL_. "\r\n" .
			'Reply-To: ' . Config::_EMAIL_ . "\r\n" .
			"MIME-Version: 1.0\r\n".
			"Content-Type: text/html; charset=UTF-8\r\n".
			'X-Mailer: PHP/' . phpversion());

		echo json_encode(['error' => '0']);
	}

	public static function use_min() {

		if(!Config::_DEVELOPMENT_)
			return '.min';
		else
			return '';

	}

	public static function action_robots() {

		header('Content-Type: text/plain');
		//TODO: fill in the urls
		if(Config::_SEO_)
			echo 'User-agent: *
	Disallow:
	';
		else
			echo 'User-agent: *
	Disallow: /';
	}

	public static function action_manifest() {

		header('Content-Type: application/json; charset=utf-8');

		echo '{
	  "name": "' . Config::_TITLE_ . '",
	  "short_name": "' . Config::_NAME_ . '",
	  "theme_color": "' . Config::_BRAND_COLOR_ . '",
	  "background_color": "' . Config::_BACKGROUND_COLOR_ . '",
	  "display": "browser",
	  "Scope": "/",
	  "start_url": "/",
	  "icons": [
	    {
	      "src": "public/images/icons/android-icon-72x72.png",
	      "sizes": "72x72",
	      "type": "image/png"
	    },
	    {
	      "src": "public/images/icons/android-icon-96x96.png",
	      "sizes": "96x96",
	      "type": "image/png"
	    },
	    {
	      "src": "public/images/icons/android-icon-128x128.png",
	      "sizes": "128x128",
	      "type": "image/png"
	    },
	    {
	      "src": "public/images/icons/android-icon-144x144.png",
	      "sizes": "144x144",
	      "type": "image/png"
	    },
	    {
	      "src": "public/images/icons/apple-icon-152x152.png",
	      "sizes": "152x152",
	      "type": "image/png"
	    },
	    {
	      "src": "public/images/icons/android-icon-192x192.png",
	      "sizes": "192x192",
	      "type": "image/png"
	    }
	  ],
	  "splash_pages": null
	}';
	}

	public static function action_favicon() {

		header('Content-Type: image/x-icon');
		echo file_get_contents(Site::server_link('public/images/icons/favicon.ico'));

	}

	public static function server_link($path) {

		return ROOT . $path;

	}

	public static function action_google_validation() {

		header('Content-Type: text/html');

		if($_SERVER['REQUEST_URI'] == '/' . Config::_GOOGLE_SITE_VERIFICATION_)
			echo 'google-site-verification: ' . Config::_GOOGLE_SITE_VERIFICATION_;
		else {
			http_response_code(404);
			die();
		}
	}


	//PRIVATE

	public static function action_browserconfig() {

		//TODO: browserconfig.xml
		header('Content-Type: application/xml; charset=utf-8');

		echo '<?xml version = "1.0" encoding = "utf-8"?>
			<browserconfig>
				<msapplication>
					<tile>
						<square70x70logo src="/ms-icon-70x70.png" />
						<square144x144logo src="/android-icon-144x144.png" />
						<square150x150logo src="/ms-icon-150x150.png" />
						<square310x310logo src="/ms-icon-310x310.png" />
						<TileColor>' . Config::_BRAND_COLOR_ . '</TileColor>
					</tile>
				</msapplication>
			</browserconfig>';
	}

	public static function action_serviceworker() {

//TODO:: serviceworker
		header('Content-Type: application/javascript');

		echo file_get_contents(Site::server_link('public/scripts/serviceworker' . self::use_min() . '.js'));

	}

}