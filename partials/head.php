<?php if(!isset($PageTitle)) {
    $PageTitle = "Bacon Finder";
} ?>
<!DOCTYPE html>
<head>
    <title><?php echo($PageTitle) ?></title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<script src="script/jquery-1.11.2.min.js"></script>
<script src="script/script.js" type="text/javascript"></script>
    <meta charset="utf-8" />
<?php require_once('connection.php'); ?>
</head>
<!-- Merging -->