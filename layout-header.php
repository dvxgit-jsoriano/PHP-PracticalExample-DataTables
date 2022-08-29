<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><?php echo $app_header ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if($base=="index.php") echo "active"; else echo ""; ?>" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($base=="basic-table.php") echo "active"; else echo ""; ?>" href="basic-table.php">Basic Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($base=="basic-datatable.php") echo "active"; else echo ""; ?>" href="basic-datatable.php">Basic Datatable</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($base=="json-data.php") echo "active"; else echo ""; ?>" href="json-data.php">JSON Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($base=="server-side.php") echo "active"; else echo ""; ?>" href="server-side">Server-Side</a>
                </li>
            </ul>
        </div>
    </div>
</nav>