<?php require('partials/header.php'); ?>

    <br/>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                    <h3 class="panel-title">Strony</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <th>Nazwa</th>
                                <th></th>
                            </tr>

                            <?php foreach($pages as $page): ?>
                                <tr>
                                    <td><?= $page->name; ?></td>
                                    <td><a class="btn btn-default" href="/admin/edit?url=<?= $page->url; ?>">Edytuj</a> 
                                    <a class="btn btn-danger <?= ($page->url == '') ? 'disabled' : ''; ?>" href="/admin/delete?url=<?= $page->url; ?>">Usuń</a></td>
                                    
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                          
</body>
</html>