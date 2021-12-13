
<section class="signup-form">
<h2>Opret profil</h2>

<div class="signup-form-form">
<form action="includes/signup.inc.php" method="post">

    <input type="text" name="name" placeholder="Full name...">
    <input type="text" name="email" placeholder="Email...">
    <input type="password" name="pwd" placeholder="Password...">
    <input type="password" name="pwdrepeat" placeholder="Repeat password...">
    <button type="submit" name="submit">Opret profilen</button>

</form>

</div>

<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Udfyld alle felter!</p>";
        }
    
    else if ($_GET["error"] == "invaliduid") {
        echo "<p>Skriv fulde navn</p>";
    }
    
    else if ($_GET["error"] == "invalidemail") {
        echo "<p>Skriv gyldig email</p>";
    }
    
    else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords passer ikke</p>";
    }
    
    else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Noget gik galt, prøv igen</p>";
    }

    else if ($_GET["error"] == "none") {
        echo "<p>Du er nu tilmeldt!</p>";
    }
}
?>

</section>

