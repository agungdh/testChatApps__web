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
		<input type="text" id="username">
		<br>

		<label>Message</label>
		<textarea id="message" rows="10" cols="50"></textarea>
		<br>

		<button onclick="send()">Send</button>
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

	<script type="text/javascript">
		var userID = <?php echo $this->session->user->id; ?>;
		var socket = io('localhost:3000');
	</script>

	<script type="text/javascript">
		function clear() {
			$("#message").val('');
		}

		function send() {
			data = {
				userID: userID,
				username: $("#username").val(),
				message: $("#message").val(),
			};

			socket.emit('sendChat', data);
			clear();
			return false;
		}
		
	    socket.on('receiveChat__' + userID, function(msg){
	      $('#chat').append(
	      	'<p>' + msg + '</p><br>'
	      	);
	    });	
	</script>
</body>
</html>