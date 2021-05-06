<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles/popups.css">
    <link rel="stylesheet" href="styles/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEOW</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="header">
                <h1 class="header__text">SssssS SsssssS</h1>
                <div class="header__text__transcript">My way to the IT: projects</div>
            </div>
        </header>
        <main>
            <div class="main">
                <div class="aside">
                    <h2>Aside</h2>
                </div>
                <div class="article">
                    <div class="main__article">
                        <img src="images/dogge.gif" height="390px" width="520px" alt="i'm dog">
                    </div>
                    <div class="article__blocks">
                        <button id="myBtn1">Reverse vowels</button>
                        <div class="article__block2" id="article__all__blocks"></div>
                        <div class="article__block3" id="article__all__blocks"></div>
                        <div class="article__block4" id="article__all__blocks"></div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer">
                <h4>Footer</h4>
            </div>
        </footer>
    </div>
    <div class="popup1" id="myPopup1">
        <div class="popup1body">
            <input type="image" class="close__popup1" src="images/close.png" alt="close">
            <p>It's my first algoritm: which reverses the vowel letters</p>
            <form class="form1" action="php/reverseVowels.php" method="post">
                <label>Text:</label>
                <textarea name="string" id="stringId" cols="40" rows="2"></textarea>
                <br />
                <input type="submit" name="done1" value="Готово">
            </form>
        </div>
    </div>
    <script src="scripts/popups.js"></script>
</body>

</html>