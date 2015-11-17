<?php
class Home extends Controller
{
	public function index()
	{	
		$name = "홍길동";
		require 'application/views/_templates/header.php';
		require 'application/views/home/index.php';
		require 'application/views/_templates/footer.php';
	}
}
