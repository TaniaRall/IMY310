<?php
$PageTitle = "Login" ;
include "partials/menu.php";
?>
<form id="loginForm">
    <label for="userName">Username:</label>

    <input id="userName" type="text"/> <br>

    <label for="password">Password:</label>

    <input type="password" id="password"/>


    <input type="submit" value="Submit"/>
</form>
<?php include "partials/footer.php" ?>
