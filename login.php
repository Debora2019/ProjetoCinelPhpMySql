<?php

//login

echo '
        <form class="form_login" method="POST" action="login_verificacao.php">
            <h3>Login</h3><hr><br>
            Para entrar no fórum, necessita de introduzir o seu username e password.
            Se não tens conta de utilizador, pode criar um <a href="signup.php"> nova conta de utilizador</a><br><br>
        
            Username:<br><input type="text" size="20" name="text_utilizador"><br><br>
            Password:<br><input type="password" size="20" name="text_password"><br><br>
            <input type="submit" name="btn_submit" value="Entrar">
            </form>        
';
?>