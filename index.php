<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles/popups.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/tests.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEOW</title>
</head>

<body>
    <div class="container">
    <?php    
        $page = $_GET["page"];
        if (!isset($page)) {
            require("templates/main.php");
        } elseif ($page == "signUp") {
            require("templates/signUp.php");
        } elseif ($page == "logIn") {
            require("templates/logIn.php");
        } elseif ($page == "tests") {
            require("templates/tests.php");
        }
        ?>    
        
    </div>
    <div class="popup1" id="myPopup1">
        <div class="popup1body">
            <input type="image" class="close__popup1" src="images/close.png" alt="close">
            <p>It's my first algoritm: which reverses the vowel letters</p>
                <form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
                    <legend>Input Your Text</legend>
                    <label for="text">Text:</label><input id="text" name="text" value="" type="text">    
                    <input value="Send" type="submit">
                </form>
            <div class="request1"></div>
        </div>
    </div>
    <script type="text/javascript" src="scripts/popups.js"></script>
    <script type="text/javascript" src="scripts/jquery-3.6.0.min.js"></script>
</body>

</html>