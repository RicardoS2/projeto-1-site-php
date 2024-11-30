<?php
$pages = [
    'home' => 'Página inicial',
    'produtos' => 'Lista de produtos',
    'contato' => 'Oioi',
    'login' => '
    <div class="login-container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input class="loginuser" type="text" placeholder="Username">
            <br> <br>
          
            <input class="loginpasword"type="password" placeholder="Password" >
             <br> <br>
            <button type="submit">Login</button>
        </form>
    </div>
    ',
];

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (!array_key_exists($page, $pages)) {
    $page = 'home';
}
?>