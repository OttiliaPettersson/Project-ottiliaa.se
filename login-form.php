<?php session_start(); ?>
 
<!-- Inloggningsformulär -->
<form action="login.php" method="post">
    <!-- Ditt inloggningsformulär här -->
    <label>UserName:</label><input type="text" name="username" class="box"/><br /><br />
    <label>Password:</label><input type="password" name="password" class="box" /><br/><br />
    <input type="submit" value="Submit" /><br />
</form>