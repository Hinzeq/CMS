<?php require('partials/header.php'); ?>

    <div class="jumbotron text-center">
    <h1><?= $page['name']; ?></h1>
        <p>paragraf - jakiś losowy tekst</p>
    </div>

    <!-- <div class="container-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-top-content">
                        <h2>About</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="right-top-content">
                        <h2>Title heading</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container-photo">
        <div class="container">
            <div class="row">
                <p>testtest</p>
            </div>
        </div>
    </div> -->

    <div class="container container-content">
        <div class="row">
            <p><?= $page['content']; ?></p>
        </div>
    </div>

<?php require('partials/footer.php'); ?>