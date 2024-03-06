 <?php
    session_start();
    if (isset($_GET['x']) && $_GET['x'] == 'home') {
        $page = "home.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'Reservasi') {
        $page = "Reservasi.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'Laporan') {
        if ( $_SESSION['level_warongwarem'] == 1){
            $page = "Laporan.php";
            include "main.php";
        } else {
            $page = "home.php";
            include "main.php";
        }
    } elseif (isset($_GET['x']) && $_GET['x'] == 'meja') {
        $page = "meja.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
        if ( $_SESSION['level_warongwarem'] == 1) {
            $page = "user.php";
            include "main.php";
        } else {
            $page = "home.php";
            include "main.php";
        }
        
    } elseif (isset($_GET['x']) && $_GET['x'] == 'feedback') {
        $page = "feedback.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
        include "login.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
        include "prosses/prosses_logout.php";
    } else {
        $page = "home.php";
        include "main.php";
    }

    ?>
         