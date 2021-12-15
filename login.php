
<section class="signup-form">
<h2>Log ind</h2>

<div class="signup-form-form">
<form action="includes/login.inc.php" method="post">

    <input type="email" name="email" placeholder="Email...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit" name="submit">Log ind</button>

</form>

</div>
<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Udfyld alle felter!</p>";
        }
    
    else if ($_GET["error"] == "wrongLogin") {
        echo "<p>Forkert login information</p>";
    }
    
    
}
?>

</section>