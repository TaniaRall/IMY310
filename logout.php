<?php include('partials/head.php'); ?>
<?php
	$_SESSION['admin'] = false;
    session_destroy();
    session_start();
?>

<script type='text/javascript'>
window.location = "index.php";
</script>