

<header>
            <div class="header">
                <h1 class="header__text">SssssS SsssssS</h1>
                <div class="header__text__transcript">Welcome</div>
                <a href = "/" class = "backToMain">Main</a>
            </div>
        </header>
        <main>
<div class="mainSignUp">
                
<h2>Register</h2>  
        <div class="signUpForm">
            <form action="../php/register.php" method="post" class="form_reg" >
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя">
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
                <button class="btn btn-success" type="submit">Зарегистрироваться</button>
            </form>
        <div class="errorSignUp">
        <?php if($_COOKIE["errorLogin"] != ''): ?>
        Недопустимая длина логина!(От 4 до 20 символов)
        <?php elseif($_COOKIE["errorName"] != ''): ?>
        Недопустимая длина имени!(От 2 до 25 символов)
        <?php elseif($_COOKIE["errorPass"] != ''): ?>
        Недопустимая длина пароля!(От 4 до 20 символов)
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