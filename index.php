<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Nortesoft\Page;
use \Nortesoft\Model\User;
use \Nortesoft\PageAdmin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Page();

	$page->setTpl("index");
    
	
});

$app->get('/admin', function() {

	$page = new PageAdmin();

	$page->setTpl("index");
    
	
});


/*$app->get('/login', function() {

	$pageLogin = new Page([
		"header" => "false",
		"footer" => "false"
	]);

	$pageLogin->setTpl("login");
});

$app->post('/login', function() {

	User::login($_POST["login"], $_POST["password"]);

	header(location("Location: index"));

	$pageLogin = new Page([
		"header" => "false",
		"footer" => "false"
	]);

	$pageLogin->setTpl("login");
});*/

$app->run();

 ?>