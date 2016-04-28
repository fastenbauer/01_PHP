<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>01_PHP</title>
        <link href="assets/datatables.min.css" rel="stylesheet" />
        <link href="bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="bootstrap/bootstrap.min.css" rel="stylesheet" />
        <link href="bootstrap/bootstrap-theme.css" rel="stylesheet" />
        <link href="bootstrap/bootstrap-theme.min.css" rel="stylesheet" />
        <link href="css/main.css" rel="stylesheet" />
    </head>
    <body>
        <hr />
        <div class="header">
            <button class="btn btn-info" type="button" id="btn-view-data">
                <span class="glyphicon glyphicon-refresh"></span> &nbsp; View Data
            </button>

            <button class="btn btn-info" type="button" id="btn-add-data">
                <span class="glyphicon glyphicon-plus"></span> &nbsp; Add Data
            </button>
        </div>
        <hr />

        <div class="content-loader">
            <?php require 'viewData.php' ?>
        </div>

        <script src="assets/jquery-2.2.1.min.js"></script>
        <script src="assets/datatables.min.js"></script>
        <script src="bootstrap/bootstrap.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <script src="bootstrap/npm.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
