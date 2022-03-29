<?php

class User {
   protected $user_id;
   protected $username;
   protected $email;
   protected $password;
   protected $name;

   public function loginUser($input){

   }

   public function logoutUser(){
      $this->unsetUserSession();
   }

   public function registerUser($input){

   }


   protected function setUserSession(){
 	 $_SESSION['is_logged_in'] = true;
      	 $_SESSION['user_id'] = $this->user_id;
	 $_SESSION['email'] = $this->email;
	 $_SESSION['name'] = $this->name;	 
	 return;      
   }

   protected function unsetUserSession(){
      session_unset();
      session_destroy();
   }


   public function getUserIdFromEmail($email){

   }

	
}
?>