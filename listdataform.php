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
                        <a class="nav-link nvbar active" href="#form">List Student Response Data Form</a>
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
                            <h1 class="h2">List Student Response Data Form</h1><br>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-50">
                        <?php
include 'koneksi.php';
$sql = "SELECT id, Fullname, Nim FROM tb_formulir";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $tableHtml = '<table class="table table-white" >';
    $tableHtml .= '<thead>';
    $tableHtml .= '<tr><th <th class="text-center">No</th><th class="text-center">Nama</th><th class="text-center">NIM</th><th class="text-center">Action</th></tr>';
    $tableHtml .= '</thead>';
    $tableHtml .= '<tbody>';
    $counter = 1;
    while ($row = $result->fetch_assoc()) {
        $tableHtml .= '<tr>';
        $tableHtml .= '<td class="text-center">' . $counter . '</td>';
        $tableHtml .= '<td class="text-center">' . $row['Fullname'] . '</td>';
        $tableHtml .= '<td class="text-center">' . $row['Nim'] . '</td>';
        $tableHtml .= '<td class="text-center">
<a href="detail.php?id=' . $row['id'] . '" class="btn btn-primary btn-sm" role="button">Detail</a>
<a href="edit.php?id=' . $row['id'] . '" class="btn btn-success btn-sm" role="button">Edit</a>
<a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm" role="button">Delete</a>
                      </td>';
        $tableHtml .= '</tr>';
        $counter++;
    }
    $tableHtml .= '</tbody>';
    $tableHtml .= '</table>';
} else {
    $tableHtml = "<p>No data available.</p>";
}
$koneksi->close();
?>

<!-- Tampilkan tabel dan tombol dalam HTML -->
<div class="container mt-4">
    <?php echo $tableHtml; ?>
</div>
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
