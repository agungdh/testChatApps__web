<!DOCTYPE html>
<html>
<head>
	<title>Test Chat</title>
</head>
<body>
	<div id="link">
		<a href="<?php echo base_url('welcome/logout'); ?>">Logout</a>
		<br>
		<p>Username: <?php echo $this->session->user->username; ?></p>
		<p>Nama: <?php echo $this->session->user->name; ?></p>
	</div>

	<div id="form">
		<label>To Username</label>
		<input type="text" name="username">
		<br>

		<label>Messages</label>
		<textarea name="messages" rows="10" cols="50"></textarea>
		<br>
	</div>

	<hr>

	<div id="chat">
		
	</div>
	<!-- jQuery -->
	<script type="text/javascript" src="<?php echo base_url('assets/jquery-3.3.1.min.js'); ?>"></script>
	<!-- Socket IO Dev -->
	<script type="text/javascript" src="<?php echo base_url('assets/socket.io.dev.js'); ?>"></script>
	<!-- Socket IO -->
	<!-- <script type="text/javascript" src="<?php echo base_url('assets/socket.io.js'); ?>"></script> -->
</body>
</html>