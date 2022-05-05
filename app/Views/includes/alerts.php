<?php

if (isset($_SESSION["message"])) {
    $message = $_SESSION["message"];

?>

    <div class="container my-2">
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Alert!</strong> <?php echo $message ?>.
        </div>
    </div>


<?php

    unset($_SESSION["message"]);
}

?>