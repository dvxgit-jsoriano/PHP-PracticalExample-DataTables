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
                Example - JSON Data
            </div>
            <div class="card-body">
                <h6 class="mb-4 fst-italic">This example fetched data from a test API and showing processing in the beginning.</h6>
                <table id="table_json" class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Role</th>
                        <th>Position</th>
                        <th>Action(s)</th>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            loadData();
        });
        
        function loadData() {
            $("#table_json").DataTable({
                processing: true,
                ajax: {
                    url: "https://mocki.io/v1/1c9561cd-8dbc-4055-afaf-20261c34fd9f",
                    type: "GET",
                    // You can pass parameter using data option in json format in ajax.
                    /* data: {
                        id: 1
                    }, */
                },
                columns: [
                    { data : "id" },
                    { data : "first_name" },
                    { data : "last_name" },
                    { data : "role" },
                    { data : "position" },
                    { data : "id" }
                ],
                columnDefs: [
                    {
                        targets: [5],
                        render: function (data, type, row) {
                            return `<button class="btn btn-success" onclick="alert('Selected ID is ${data}');">Info</button>`;
                        },
                    }
                ]
            });
        }
    </script>
</body>

</html>