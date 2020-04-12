<?php
	include_once'Session.php';
	include 'Database.php';

class User{
	private $db;
	public  function __construct() {
		$this->db = new Database();
		
	}
	public function userRegistration($data){
		$name = $data['name'];
		$username = $data['username'];
		$email = $data['email'];
		$password = md5($data['password']);
		
		
		$chk_email = $this->emailCheck($email);
		
		if($name =="" OR $username == "" OR $email == "" OR $password==""){
			$msg = "<div class='alert alert-danger'><strong>Error ! Field must no empty .. 
			</strong></div>";
			return $msg;
		}
		
		if(strlen($username)<3){
			$msg = "<div class='alert alert-danger'><strong>Error ! Username is too short .. 
			</strong></div>";
			return $msg;
		}
		else if(preg_match('/[^a-z0-9_-]+i',$username)){
			$msg = "<div class='alert alert-danger'><strong>Error ! 
			</strong>User name must not be Only contain alphanumerical, dashes and underscore</div>";
			
		}
		
		if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
			$msg = "<div class='alert alert-danger'><strong>Error !  .. 
			</strong>The email address is not valid!</div>";
			return $msg;
		}
		if($chk_email ===true){
			$msg = "<div class='alert alert-danger'><strong>Error !  .. 
			</strong>The email address already exist!</div>";
			return $msg;
		}
		
		$sql = "INSERT INTO admin (name, username, email, password) VALUES(:name, :username,:email, :password)";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':name',$name);
		$query->bindValue(':username',$username);
		$query->bindValue(':email',$email);
		$query->bindValue(':password',$password);
		$query->execute();
		
		if($result){
			$msg = "<div class='alert alert-danger'><strong>Succsess ! Thank You .. 
			</strong></div>";
			return $msg;
		}
		
		else{
			$msg = "<div class='alert alert-danger'><strong>Error !  .. 
			</strong></div>";
			return $msg;
		}
	
	}
	
	
	
		
			
	
	public function emailCheck($email){
		$sql = "SELECT email FROM admin WHERE email = :email";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':email',$email);
		$query->execute();
		if($query->rowcount()>0){
			return true;
			
		}
		else{
			return false;
		}
	}
	
}

 ?>