<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <?php foreach($nav as $part) : ?>
            <li><a href="<?= $part->name; ?>"><?= $part->nav_name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

