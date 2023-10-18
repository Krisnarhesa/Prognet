<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Tugas JavaScript | Krisnarhesa</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="img/prognet.png" alt="" width="30" height="24" class="d-inline-block align-text-top"> Pemrograman Internet
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nvbar" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nvbar active" href="#form">Delete Student Response Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Form -->
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="text-center">
                        <div class="col">
                            <h1 class="h2">Delete Response Data Form</h1><br>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-50">

<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm']) && $_POST['confirm'] == 'Yes') {
        // Proses penghapusan data
        $sql = "DELETE FROM tb_formulir WHERE id = $id";

        if ($koneksi->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert"> Data Sucessfully Deleted</div>';
            echo '<script>window.location = "listdataform.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
        }
    } else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm']) && $_POST['confirm'] == 'No') {
        // Jika pengguna memilih "No", arahkan kembali ke listdataform.php
        echo '<script>window.location = "listdataform.php";</script>';
    } else {
        // Menampilkan konfirmasi
        echo '<div class="alert alert-warning" role="alert"> Are you sure want to delete this data?</div>';
        echo '<form method="POST">';
        echo '<input type="submit" name="confirm" value="Yes" class="btn btn-danger"> ';
        echo '<input type="submit" name="confirm" value="No" class="btn btn-primary">';
        echo '</form>';
    }
} else {
    echo "<p>Invalid request.</p>";
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_formulir WHERE id = $id";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<div class="container mt-5">';
        echo '<table class="table table-borderless table-white">';
        echo '<tbody>';
        
        // Tabel untuk menampilkan data sebagai baris
        displayDataRow("Full Name", $row["Fullname"]);
        displayDataRow("Nick Name", $row["NickName"]);
        displayDataRow("NIM", $row["Nim"]);
        displayDataRow("Faculty", $row["Faculty"]);
        displayDataRow("Email", $row["Email"]);
        displayDataRow("Password", $row["Password"]);
        displayDataRow("Date Of Birth", $row["Date_of_birth"]);
        displayDataRow("Address", $row["Address"]);
        displayDataRow("Gender", $row["Gender"]);
        displayDataRow("Experience", $row["Experience"]);
        displayDataRow("Describe Yourself", $row["Describe_yourself"]);
        displayDataRow("Favorite Color", $row["Favorite_color"]);
        displayDataRow("Skills Range", $row["Skills_range"]);
        displayDataRow("Profile Picture", $row["Profile_picture"]);
        displayDataRow("Terms", $row["Terms"]);

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo "<p>Data not found.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}

function displayDataRow($label, $value) {
    echo '<tr class="">';
    echo '<td> <strong>' . $label . '</strong> </td>';
    echo '<td> :' . $value . '</td>';
    echo '</tr>';
}


$koneksi->close();
?>

</div>
                        </div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#22303c" fill-opacity="1" d="M0,288L0,96L110.8,96L110.8,256L221.5,256L221.5,192L332.3,192L332.3,160L443.1,160L443.1,224L553.8,224L553.8,288L664.6,288L664.6,64L775.4,64L775.4,128L886.2,128L886.2,96L996.9,96L996.9,288L1107.7,288L1107.7,192L1218.5,192L1218.5,256L1329.2,256L1329.2,96L1440,96L1440,320L1329.2,320L1329.2,320L1218.5,320L1218.5,320L1107.7,320L1107.7,320L996.9,320L996.9,320L886.2,320L886.2,320L775.4,320L775.4,320L664.6,320L664.6,320L553.8,320L553.8,320L443.1,320L443.1,320L332.3,320L332.3,320L221.5,320L221.5,320L110.8,320L110.8,320L0,320L0,320Z"></path></svg>
    </section>
    <!-- footer -->
    <footer class="p-3 text-center fs-5">
        <p>©2023 | krisnarhesa</p>
    </footer>
    <!-- akhir footer -->
</body>
</html>