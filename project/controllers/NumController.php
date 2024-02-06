<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class NumController extends Controller
	{
		public function sum($params)
		{
			var_dump(array_sum($params)); // ['var1' => 'eee', 'var2' => 'bbb']
		}

	}
?>