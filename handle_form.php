<html>
    <head>
        <title>Form Feedback</title>
    </head>
    <body>
    <?php #Script handle form 

    if (strlen($_POST["name"]) >0) {
        $_POST["name"] = $_POST["name"];
    }
    else{
        $_POST["name"] = null;

        echo '<p><b> You Forgot to Enter Your Name! </b></p>';
    }

    ?>
    </body>
</html>