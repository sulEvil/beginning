<header>
            <div class="header">
                <h1 class="header__text">Привет <?=$_COOKIE['user']?></h1>
                <div class="header__text__transcript">Welcome</div>
                <a href = "index.php?page=logIn" class="logIn">logIn</a>
                <a href = "index.php?page=signUp" class="signUp">signUp</a>
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
                    <?php
                    if($_COOKIE['user'] != ''):
                        ?>
                        <button id="myBtn1">Reverse vowels</button>
                        <div class="article__block2" id="article__all__blocks"></div>
                        <div class="article__block3" id="article__all__blocks"></div>
                        <div class="article__block4" id="article__all__blocks"></div>
                    <?php
                    else:
                        ?>
                        <div class="article__block1" id="article__all__blocks">Please LogIn</div>
                        <div class="article__block2" id="article__all__blocks">Please LogIn</div>
                        <div class="article__block3" id="article__all__blocks">Please LogIn</div>
                        <div class="article__block4" id="article__all__blocks">Please LogIn</div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
</main>
<footer>
            <div class="footer">
                <a href="../php/exit.php" class="logOut">LogOut</a>
            </div>
        </footer>