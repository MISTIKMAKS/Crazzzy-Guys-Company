<?php
    $redirect_id = $_GET['redirectId'];
    $user_id = $_GET['userId'];
    if ($redirect_id == 1) {
?>
        <script type="text/javascript">
            window.location.href = 'sign_in_redirect.php?userId=' + <?php echo $user_id ?>;
        </script>
<?php
    }
    else {

    }
?>