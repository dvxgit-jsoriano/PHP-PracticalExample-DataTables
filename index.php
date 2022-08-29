<?php
include "common.php";

// We'll get the base filename or page name that will be loaded
$base = basename(__FILE__);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $app_title; ?></title>

    <?php include "common-styles.php"; ?>

    <?php include "common-scripts.php"; ?>
</head>

<body>

    <?php include "layout-header.php" ?>

    <div class="container mt-2">
        <div class="card">
            <div class="card-header">
                Home Page
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <button id="menu-basic" class="btn btn-primary" type="button">Basic Table Only</button>
                    <button id="menu-datatable" class="btn btn-secondary" type="button">Basic Datatable</button>
                    <button id="menu-json" class="btn btn-success" type="button">JSON Data</button>
                    <button id="menu-server" class="btn btn-warning" type="button">Server-Side</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#menu-basic").click(function (e) { 
                e.preventDefault();
                window.location.href = "basic-table.php";                
            });
            $("#menu-datatable").click(function (e) { 
                e.preventDefault();
                window.location.href = "basic-datatable.php";                
            });
            $("#menu-json").click(function (e) { 
                e.preventDefault();
                window.location.href = "json-data.php";                
            });
            $("#menu-server").click(function (e) { 
                e.preventDefault();
                window.location.href = "server-side.php";                
            });
        });
    </script>

</body>
</html>