<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class TestController extends Controller
	{
		public function act()
		{
			$this->title = 'Действие act контроллера test';
			return $this->render('test/act', [
				'var1' => 'eee',
				'var2' => 'bbb',
				'var3' => 'kkk',
			]);
		}
		
		public function act2()
		{
			echo 'act2';
		}
		public function act3()
		{
			echo 'act3';
		}
	}
?>