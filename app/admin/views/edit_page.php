<?php require('partials/header.php'); ?>

<div class="container justify-content-center d-flex">
            <div class="row">
                <form action="">
                    <div class="modal-header">
                        <h4>Edytuj stronę</h4>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for=""><b>Przyjazny adres url:</b></label>
                            <input type="text" class="form-control" placeholder="Nazwa strony">
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label for=""><b>Sekcja head:</b></label>
                            <input type="text" class="form-control form-area-style" placeholder="Meta tytuł">
                            <input type="text" class="form-control form-area-style" placeholder="Meta opis">
                            <input type="text" class="form-control form-area-style" placeholder="Słowa kluczowe">
                            <input type="text" class="form-control form-area-style" placeholder="Canonical adres">
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label for=""><b>Opis strony:</b></label>
                            <textarea name="editor1" class="form-control"></textarea>
                        </div>
                        <hr/>
                        <div class="checkbox">
                            <label for="">
                                <input type="checkbox" name="" id="" checked> Index<br/>
                                <input type="checkbox" name="" id="" checked> Follow
                            </label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-default" type="button">Wróć do menu</button>
                        <button class="btn btn-primary" type="submit">Opublikuj</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>

        <script>
        CKEDITOR.replace( 'editor1' );
    </script>