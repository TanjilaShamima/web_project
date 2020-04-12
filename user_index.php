<?php 
	include 'header.php';
	include 'User.php';
	$user = new User();
	
?>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>User List <span class="pull-right"><strong>Welcome !</strong>Dear</span></h2>
		</div>
		<div class="panel-body">
		<table class="table table-striped">
			<th width="20%">Serial No</th>
			<th width="20%">Name</th>
			<th width="20%">Username</th>
			<th width="20%">Email</th>
			<th width="20%">Action</th>
			
			<tr>
				<td>01</td>
				<td>Tanjila Shamima</td>
				<td>shamima</td>
				<td>tanjila15-829@diu.edu.bd</td>
				<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
			</tr>
			
			<tr>
				<td>02</td>
				<td>Shahid-ul Islam</td>
				<td>shahid</td>
				<td>shahid15-885@diu.edu.bd</td>
				<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
			</tr>
			
			<tr>
				<td>03</td>
				<td>Nazmul Himel</td>
				<td>himel</td>
				<td>nazmul5-851@diu.edu.bd</td>
				<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
			</tr>
			
			<tr>
				<td>04</td>
				<td>Tanjila</td>
				<td>tanjila</td>
				<td>tanjilashamima17115829@gmail.com</td>
				<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
			</tr>
			
			<tr>
				<td>05</td>
				<td>Shamima</td>
				<td>shamu</td>
				<td>tanjila15-829@diu.edu.bd</td>
				<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
			</tr>
		</table>
		</div>
	</div>
	
	
	<?php 
	include_once'footer.php';
	?>
	
	
</body>
</html>