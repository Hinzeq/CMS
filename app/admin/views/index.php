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
                                <th>Opublikowana</th>
                                <th>Data publikacji</th>
                                <th></th>
                            </tr>

                            <?php foreach($pages as $page): ?>
                                <tr>
                                    <td><?= $page->name; ?></td>
                                    <td>Tak</td>
                                    <td>data</td>
                                    <td><a class="btn btn-default" href="/admin/edit?url=<?= $page->url; ?>">Edytuj</a> <a class="btn btn-danger" href="#">Usuń</a></td>
                                </tr>
                            <?php endforeach; ?>

                            <!-- <tr>
                                <td>Strona główna</td>
                                <td>Tak</td>
                                <td>data</td>
                                <td><a class="btn btn-default" href="edit.html">Edytuj</a> <a class="btn btn-danger" href="#">Usuń</a></td>
                            </tr>
                            <tr>
                                <td>Oferta</td>
                                <td>Tak</td>
                                <td>data</td>
                                <td><a class="btn btn-default" href="edit.html">Edytuj</a> <a class="btn btn-danger" href="#">Usuń</a></td>
                            </tr>
                            <tr>
                                <td>O mnie</td>
                                <td>Tak</td>
                                <td>data</td>
                                <td><a class="btn btn-default" href="edit.html">Edytuj</a> <a class="btn btn-danger" href="#">Usuń</a></td>
                            </tr>
                            <tr>
                                <td>Kontakt</td>
                                <td>Tak</td>
                                <td>data</td>
                                <td><a class="btn btn-default" href="edit.html">Edytuj</a> <a class="btn btn-danger" href="#">Usuń</a></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

    <div class="container">
        <br/>
        <hr/>
    </div>
    
    <!-- <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Wpisy na blogu</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <th>Nazwa</th>
                            <th>Opyblikowana</th>
                            <th>Data publikacji</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>Strona główna</td>
                            <td>Tak</td>
                            <td>data</td>
                            <td><a class="btn btn-default" href="edit.html">Edytuj</a> <a class="btn btn-danger" href="#">Usuń</a></td>
                        </tr>
                        <tr>
                            <td>Oferta</td>
                            <td>Tak</td>
                            <td>data</td>
                            <td><a class="btn btn-default" href="edit.html">Edytuj</a> <a class="btn btn-danger" href="#">Usuń</a></td>
                        </tr>
                        <tr>
                            <td>O mnie</td>
                            <td>Tak</td>
                            <td>data</td>
                            <td><a class="btn btn-default" href="edit.html">Edytuj</a> <a class="btn btn-danger" href="#">Usuń</a></td>
                        </tr>
                        <tr>
                            <td>Kontakt</td>
                            <td>Tak</td>
                            <td>data</td>
                            <td><a class="btn btn-default" href="edit.html">Edytuj</a> <a class="btn btn-danger" href="#">Usuń</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> -->
</div>