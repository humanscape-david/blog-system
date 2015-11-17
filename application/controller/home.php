<?php
class Home extends Controller
{
	public function __construct()
	{
		// 생성자에서 선언한 변수를 클래스 내에서 왜 못쓰지?
	}
	public function index()
	{	
		$controller = new Controller();
		$name = $controller->name;
		$intro = $controller->intro;
		require 'application/views/_templates/header.php';
		require 'application/views/home/index.php';
		require 'application/views/_templates/footer.php';
	}
}