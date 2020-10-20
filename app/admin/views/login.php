<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to admin panel</title>

    <!-- fontes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/public/css/admin/login.css">

    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Panel administracyjny - logowanie</h1>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="row">
                <form id="login" action="" method="post">
                    <div class="form-group ">
                        <label for=""><b>Login:</b></label>
                        <input type="text" class="form-control" placeholder="Podaj login" name="login">
                    </div>

                    <div class="form-group">
                        <label for=""><b>Hasło:</b></label>
                        <input type="password" class="form-control" placeholder="Podaj hasło" name="password">
                    </div>

                    <button type="submit" form="login" class="btn btn-primary">Zaloguj</button>
                </form>
        </div>
    </div>
    
</body>
</html>