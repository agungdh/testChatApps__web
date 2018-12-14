<?php
$alert = $this->session->toAlert;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post" action="<?php echo base_url('welcome/doLogin') ?>">
		<label>Username</label>
		<input type="text" name="username">
		<br>
		
		<label>Password</label>
		<input type="password" name="password">
		<br>

		<input type="submit" value="GAS !!!">
	</form>

	<?php
	if ($alert) {
		?>
		<script type="text/javascript">
			alert('<?php echo $alert; ?>');
		</script>
		<?php
	}
	?>
</body>
</html>