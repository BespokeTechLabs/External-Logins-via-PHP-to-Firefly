<?php
    // It is built upon a class within the following file.
    require_once('./login.php');

    // The class takes 4 parameters.
    //$username, $password, $loginPage, $nextPage

    // Your firefly login details
    $username = "username";
    $password = "password";

    // Your firefly login page with the prelogin pointed to the URL encoded $nextPage.
    $loginPage = "https://firefly.clevedonschool.org.uk/login/login.aspx?prelogin=https%3a%2f%2ffirefly.clevedonschool.org.uk%2fdashboard&kr=ActiveDirectoryKeyRing";
    $nextPage = "https://firefly.clevedonschool.org.uk/dashboard";

    // Create the class with the inputted values
    $firefly = new FireflyUserLogin($username, $password, $loginPage, $nextPage);

    // Check if login succeeded.
    if ($firefly->loginSuccess) {
        echo("<h1>Successfully logged in</h1>");
        echo('<img src="data:image/png;base64,'.$firefly->avatar.'" />');
        echo("<p>Username: ".$firefly->username."</br>");
        echo("Display Name: ".$firefly->fullname."</br>");

        if ($firefly->staff) {
            $staffMember = "YES";
        } else {
            $staffMember = "NO";
        }

        echo("Staff member: ".$staffMember."</br>");
        echo("</p>");
    } else {
        echo("<h1>Incorrect username or password for ".$firefly->username.".</h1>");
    }

?>

<!-- Make it look nice -->
<style type="text/css">
    body {
        font-family: "Helvetica", "Arial", Helvetica, Arial, sans-serif;
        background-image: url("http://www.bespoketechlabs.co.uk/images/bg.jpg");
        background-repeat: repeat;
        padding: 50px;
    }

    h1 {
        color:#cd2c65;
        font-weight:400;
        font-size:28px;
    }

    img {
        border-radius: 50%;
    }
</style>
