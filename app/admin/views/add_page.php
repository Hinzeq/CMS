<?php require('partials/header.php'); ?>

        <div class="container justify-content-center d-flex">
            <div class="row">
                <form action="/admin/add" method="POST">
                    <div class="modal-header">
                        <h4>Dodaj stronę</h4>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for=""><b>Nazwa strony:</b> <sub>pole wymagane</sub></label>
                            <input type="text" class="form-control" placeholder="Nazwa strony" name="name">
                            <input type="text" class="form-control" placeholder='Adres url (adres po "/")' name="url">
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label for=""><b>Sekcja head:</b></label>
                            <input type="text" class="form-control form-area-style" placeholder="Meta tytuł" name="meta_title">
                            <input type="text" class="form-control form-area-style" placeholder="Meta opis" name="meta_desc">
                            <input type="text" class="form-control form-area-style" placeholder="Słowa kluczowe" name="keywords">
                            <input type="text" class="form-control form-area-style" placeholder="Canonical adres" name="canonical">
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label for=""><b>Opis strony:</b> <sub>pole wymagane</sub></label>
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                        <hr/>
                        <div class="checkbox">
                            <label for="">
                                <input type="checkbox" name="meta_index" checked> Index<br/>
                                <input type="checkbox" name="meta_follow" checked> Follow
                            </label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-default" type="button"><a href="/admin">Wróć do menu</a></button>
                        <button class="btn btn-primary" type="submit">Opublikuj</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>

        <script>
            CKEDITOR.replace( 'content' );
        </script>

</body>
</html>