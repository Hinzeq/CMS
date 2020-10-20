    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Główna</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">

                    <?php foreach($nav as $part) : ?>
                        <li class="nav-item action">
                            <a class="nav-link" href="<?= $part->url; ?>"><?= $part->name; ?></a>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </nav>
