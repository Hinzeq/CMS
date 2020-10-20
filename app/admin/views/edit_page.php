<?php require('partials/header.php'); ?>

        <div class="container justify-content-center d-flex">
            <div class="row">
                <form action="/admin/edit?url=<?= $edit['url']?>" method="POST">
                    <div class="modal-header">
                        <h4>Edytuj stronę</h4>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for=""><b>Nazwa strony:</b> <sub>pole wymagane</sub></label>
                            <input type="text" class="form-control form-area-style" <?php if($_GET['url'] == "") echo 'disabled'; ?>  placeholder="Nazwa strony" name="name" <?php if(isset($edit['name'])) echo "value='".$edit['name']."'"; ?>>
                            <input type="text" class="form-control form-area-style" <?php if($_GET['url'] == "") echo 'disabled'; ?> name="url" <?php if(isset($edit['url'])) echo "value=".$edit['url']; ?>>
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label for=""><b>Sekcja head:</b></label>
                            <input type="text" class="form-control form-area-style" placeholder="Meta tytuł" name="meta_title" <?php if(isset($edit['meta_title'])) echo "value='".$edit['meta_title']."'"; ?>>
                            <input type="text" class="form-control form-area-style" placeholder="Meta opis" name="meta_desc" <?php if(isset($edit['meta_desc'])) echo "value='".$edit['meta_desc']."'"; ?>>
                            <input type="text" class="form-control form-area-style" placeholder="Słowa kluczowe" name="keywords" <?php if(isset($edit['keywords'])) echo "value='".$edit['keywords']."'"; ?>>
                            <input type="text" class="form-control form-area-style" placeholder="Canonical adres" name="canonical" <?php if(isset($edit['canonical'])) echo "value='".$edit['canonical']."'"; ?>>
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label for=""><b>Opis strony:</b> <sub>pole wymagane</sub></label>
                            <textarea name="content" class="form-control"><?php if(isset($edit['content'])) echo $edit['content']; ?></textarea>
                        </div>
                        <hr/>
                        <div class="checkbox">
                            <label for="">
                                <input type="checkbox" name="meta_index" <?= ($edit['meta_index'] == 1) ? "checked": ""; ?>> Index<br/>
                                <input type="checkbox" name="meta_follow" <?= ($edit['meta_follow'] == 1) ? "checked": ""; ?>> Follow
                            </label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-default" type="button"><a href="/admin">Wróć do menu</a></button>
                        <button class="btn btn-primary" type="submit">Zapisz</button>
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