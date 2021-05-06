<header>
            <div class="header">
                <h1 class="header__text">SssssS SsssssS</h1>
                <div class="header__text__transcript">My way to the IT: projects</div>
                <a href = "/" class = "backToMain">Main</a>
            </div>
        </header>
        <main>
<div class="mainLogIn">
    <h2>Authorization</h2>  
        <div class="LogInForm">
            <form action="../php/auth.php" method="post" class="form_auth" >
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">                
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
                <button class="btn btn-success" type="submit">Авторизоваться</button>
            </form>
            <div class="errorLogIn"><?php 
            if($_COOKIE["loginerror"] != ''):
            ?>
            Такой пользователь не найден!           
            <?php elseif($_COOKIE["succesfulreg"] != ''):
            ?>
            Вы успешно зарегистрировались!
             <?php endif; ?>
            </div>
        </div>
</div>

</main>
<footer>
            <div class="footer">
                <h4>Footer</h4>
            </div>
        </footer>