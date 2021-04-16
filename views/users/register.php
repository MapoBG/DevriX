<?php include_once "views/templates/header.php"; ?>
    <h1>Register Form</h1>
    <div id="error">
        <h3 style="color: red"><?=$error;?></h3>
    </div>
    <form method="post">
        Username:<input type="text" name="username" value="<?php echo $_POST['username'] ?? '' ?>"/> <br/>
        Password:<input type="password" name="password"/> <br/>
        Confirm Password:<input type="password" name="rePass"/> <br/>
        <input type="submit" name="register" value="Register"/>
    </form>
<?php include_once "views/templates/footer.php"; ?>
