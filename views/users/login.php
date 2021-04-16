<?php include_once "views/templates/header.php"; ?>

<h1>Login Form</h1>
<div id="error">
    <h3 style="color: red"><?=$error;?></h3>
</div>
<form method="post">
    Username:<input type="text" name="username" value="<?php echo $_POST['username'] ?? '' ?>"/> <br/>
    Password: <input type="password" name="password"/> <br/>
    <input type="submit" name="login" value="Login"/>
</form>
<?php include_once "views/templates/footer.php"; ?>
