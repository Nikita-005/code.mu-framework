<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class UserController extends Controller
	{
		private $users;
		
		public function __construct()
		{
            $this->users = [
                1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
                2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
                3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
                4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
                5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
            ];
                }
		
		public function show($params)
		{
            echo $this->users[ $params['id']]['name'], '<br>'; 
            echo $this->users[ $params['id']]['age'], '<br>'; 
            echo $this->users[ $params['id']]['salary'], '<br>'; 
            
		}

		public function all()
		{
            foreach($this->users as $user){
                echo $user['name'], '<br>'; 
                echo $user['age'], '<br>'; 
                echo $user['salary'], '<br>','<br>','<br>'; 
            }
		}

        

		public function first($params)
		{
            foreach(array_slice($this->users,0,$params['id']) as $user){
                echo $user['name'], '<br>'; 
                echo $user['age'], '<br>'; 
                echo $user['salary'], '<br>','<br>','<br>'; 
            }
		}


		public function info($params)
		{

            switch($params['key']){
                case  'name':
                    echo $this->users[$params['id']]['name'], '<br>'; 
                    break;
                case  'age':
                    echo $this->users[ $params['id']]['age'], '<br>'; 
                    break;
                case  'salary':
                    echo $this->users[ $params['id']]['salary'], '<br>'; 
                    break;
            }
		}


    }
?>