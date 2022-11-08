<?php
    class user{
        public $username = 'kusal';
        protected $email = 'kae@gmail.com';
        public $password = 'kist123';


        
        public function login()
        {
            echo $this->username . 'has logged in';
        }
        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
            return $this->email = $email;
        }
    }

    class Admin extends user
    {
        public $role = 'super admin';

        public function getEmail()
        {
            echo '<br>User logged in' . $this->email;
        }
    }
       
    
       
        $user = new user();
       // $user->username = 'hd';
        $user->login();
        echo "<br>";

        $user->setEmail('hello@gmail.com');
        echo $user->getEmail();
        
        echo '<br>';
        echo '<br>';
        echo 'admin information <br>';
        $admin= new Admin();
        $admin->login();
        echo '<br>';
        echo '<br>';
        echo $admin->setEmail('hack@gmail.com');

    
?>