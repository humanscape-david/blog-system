<?php
class Board extends Controller
{
	public function index()
	{
		require 'application/views/_templates/header.php';
		require 'application/views/board/index.php';
		require 'application/views/_templates/footer.php';
	}
	public function write()
	{
		require 'application/views/_templates/header.php';
		require 'application/views/board/write.php';
		require 'application/views/_templates/footer.php';
	}
	public function view($idx)
	{
		require 'application/views/_templates/header.php';
		require 'application/views/board/view.php';
		require 'application/views/_templates/footer.php';
	}
}
