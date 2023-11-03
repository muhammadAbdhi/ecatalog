
<?php 
$session = session();
if ($session->has('logged_in')) {
    echo "Anda sudah login";
    echo "</br>";
    echo '<a href="' . site_url('belajarlibrary/logout') . '" name="logout">Logout</a>';
}else{
    echo "Anda belum login";
    echo "</br>";
    echo '<a href="' . site_url('belajarlibrary/login') . '" name="login">Login</a>';
}

