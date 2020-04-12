<?php
	include_once'header.php';
	include 'User.php';
?>

<?php 
	$user = new User();
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($POST['register'])){
		$usrRegi = $user->userRegistration($_POST);
	}
?>

<div class="panel panel-default">
	<div class="panel-heading">
			<h2>User List <span class="pull-right"><a class="btn btn-primary" href="user_index.php">Back</a></span></h2>
	</div>
	<div class="panel-body">
		<div style="max-width:600px; margin:0 auto;">
		
<?php
	if(isset($usrRegi)){
		echo $usrRegi;
	}
 ?>
			<form action="" method="POST">
				<div class="form-group">
					<label for="name">Your Name</label>
					<input type="text" id="name" name="name" class="form-control"/>
				</div>
				
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" class="form-control" />
				</div>
				
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" class="form-control" />
				</div>
				
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id="email" name="password" class="form-control" />
				</div>
				<button type="submit" name="register"class="btn btn-success">Submit</button>
			</form>
		</div>
	</div>
</div>




<?php
	include_once'footer.php';
?>