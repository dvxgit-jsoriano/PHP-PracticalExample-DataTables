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
                Example - Basic Table
            </div>
            <div class="card-body">
                <h6 class="mb-4 fst-italic">This example shows simple datatable without any options.</h6>
                <table id="table_datatable" class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Role</th>
                        <th>Position</th>
                        <th>Action(s)</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ali</td>
                            <td>Frederick</td>
                            <td>Administrator</td>
                            <td>Manager</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 1');">Info</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Estella</td>
                            <td>Flowers</td>
                            <td>Administrator</td>
                            <td>HR</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 2');">Info</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Willie</td>
                            <td>Richars</td>
                            <td>Employee</td>
                            <td>Employee</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 3');">Info</button></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Dona</td>
                            <td>Fry</td>
                            <td>Employee</td>
                            <td>Employee</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 4');">Info</button></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Jan</td>
                            <td>Bender</td>
                            <td>Employee</td>
                            <td>Employee</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 5');">Info</button></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mark</td>
                            <td>Gonzaga</td>
                            <td>Employee</td>
                            <td>Employee</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 6');">Info</button></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Jordan</td>
                            <td>Cole</td>
                            <td>Employee</td>
                            <td>Employee</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 7');">Info</button></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Sam</td>
                            <td>Morales</td>
                            <td>Employee</td>
                            <td>Mechanic</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 8');">Info</button></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Sander</td>
                            <td>Kannaghan</td>
                            <td>Employee</td>
                            <td>Painter</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 9');">Info</button></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Tony</td>
                            <td>Katagalugan</td>
                            <td>Employee</td>
                            <td>Cook</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 10');">Info</button></td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>Lavar</td>
                            <td>Baltog</td>
                            <td>Employee</td>
                            <td>Cook</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 11');">Info</button></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Conor</td>
                            <td>Castor</td>
                            <td>Employee</td>
                            <td>Laiason</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 12');">Info</button></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Sugar</td>
                            <td>Alarcon</td>
                            <td>Employee</td>
                            <td>Cook</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 13');">Info</button></td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Terry</td>
                            <td>Manzano</td>
                            <td>Administrator</td>
                            <td>Manager</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 14');">Info</button></td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Peter</td>
                            <td>Bautista Sr.</td>
                            <td>Employee</td>
                            <td>Delivery</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 15');">Info</button></td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Renmark</td>
                            <td>Estrada</td>
                            <td>IT</td>
                            <td>Senior Developer</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 16');">Info</button></td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Mary Joy</td>
                            <td>Portis</td>
                            <td>Employee</td>
                            <td>IT Staff</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 17');">Info</button></td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Zandro</td>
                            <td>Peregrin</td>
                            <td>Administrator</td>
                            <td>HR</td>
                            <td><button class="btn btn-success" onclick="alert('Selected ID is 18');">Info</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#table_datatable").DataTable();
        });
    </script>

</body>

</html>