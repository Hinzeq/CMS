<?php require('partials/header.php'); ?>

    <div class="jumbotron text-center">
        <h1><?= $page['name']; ?></h1>
    </div>
<?php
    if($_SERVER['REQUEST_URI'] == '/') {
        echo '<div class="container-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-content">
                        <a href="http://localhost:8888/o-mnie">
                            <h2>O mnie</h2>
                            <p>Zapoznaj się z podstawowymi informacjami o mnie. Kim jestem, co lubię robić, czego oczekuję od życia.</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="top-content">
                        <a href="http://localhost:8888/informacje-o-stronie">
                            <h2>O stronie</h2>
                            <p>Jest to prosty system CMS oparty na wzorcu projektowym MVC napisanym w PHP. Więcej informacji znajdziesz tutaj...</p>
                        </a>        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gradient text-center"></div>';
    }
?>

    <div class="container container-content">
        <div class="row">
            <span><?= $page['content']; ?></span>
        </div>
    </div>

<?php require('partials/footer.php'); ?>