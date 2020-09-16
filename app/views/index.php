<?php require('partials/header.php'); ?>

<h1>Home</h1>
<?php
    foreach($query as $item) {
        echo '<li>'.$item->description.'</li>';
    }
?>

<?php require('partials/footer.php'); ?>