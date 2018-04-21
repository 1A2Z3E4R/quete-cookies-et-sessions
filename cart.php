<?php
session_start();

if (isset($_GET["vider"]))  {
    unset($_SESSION['list']);
}

if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container">
    <div class="row">
        <h3>Mon panier</h3>

        <a href="cart.php?vider=1">Vider le panier</a>

        <hr>
        <?php
        if (isset($_SESSION["list"]))
        {
            $cookie1 = [];
            $cookie2 = [];
            $cookie3 = [];
            $cookie4 = [];
            foreach ($_SESSION["list"] as $value){
                //echo $value . "<br>";
                switch ($value) {
                    case '46':
                        $cookie1[] = $value ;
                        break;
                    case '36':
                        $cookie2[] = $value ;
                        break;
                    case '58':
                        $cookie3[] = $value ;
                        break;
                    case '32':
                        $cookie4[] = $value ;
                        break;
                }

            }
            if (count($cookie1) > 0) {
                echo count($cookie1) .' Pecan nuts' .'<br/>';
            }

            if (count($cookie2) > 0) {
                echo count($cookie2) .' Chocolate chips' .'<br/>';
            }

            if (count($cookie3) > 0) {
                echo count($cookie3) .' Chocolate cookie' .'<br/>';
            }

            if (count($cookie4)) {
                echo count($cookie4) .' M&M\'s© cookies' .'<br/>';
            }
        }


        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

