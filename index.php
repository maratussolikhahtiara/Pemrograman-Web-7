<html>
<head>
	<title>Membuat Login Dengan PHP</title>	
</head>
<body>
	<h3>Halaman Login </h3> 
	<form method="post" action="login.php" > <!--membuat form dengan method post, ketika form dikirim akan mengeksekusi file login.php -->	
		<table> <!-- membuat tabel yang berisi text username dan password-->
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td> <!--membuat input type text dengan nama username -->
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td> <!--membuat input type password dengan nama password -->
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td> <!--membuat input type submit untuk mengirimkan form -->
			</tr>
		</table>
	</form>
</body>
</html>