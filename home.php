<html>
<body>

<form action="home.php" method="post">
Username: <input type="text" name="username"><br><br>
FirstName: <input type="text" name="firstname"><br><br>
LastName: <input type="text" name="lastname"><br><br>
E-mail: <input type="text" name="email"><br><br>
Phone No: <input type="text" name="phone"><br><br><br>
<input type="submit" >
</form>

</body>
</html>

<html>
<body>

Welcome <?php echo $_POST["username"]; ""?><br><br>
Your email address is: <?php echo $_POST["email"]; ?><br><br>
What will you like to do : <?php echo $_POST["firstname"], " ", $_POST["lastname"]; ?>

</body>
</html>