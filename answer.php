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
                        <a class="nav-link nvbar active" href="#form">Form Response</a>
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
                            <h1 class="h2">FORM DATA RESPONSE</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-50">
                        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = isset($_POST["inputFullName"]) ? $_POST["inputFullName"] : "";
    $nickName = isset($_POST["inputNickName"]) ? $_POST["inputNickName"] : "";
    $email = isset($_POST["inputEmail"]) ? $_POST["inputEmail"] : "";
    $password = isset($_POST["inputPassword"]) ? $_POST["inputPassword"] : "";
    $dateOfBirth = isset($_POST["inputDateOfBirth"]) ? $_POST["inputDateOfBirth"] : "";
    $address = isset($_POST["inputAddress"]) ? $_POST["inputAddress"] : "";
    $gender = isset($_POST["inputGender"]) ? $_POST["inputGender"] : "";
    $interest = isset($_POST["inputInterest"]) ? $_POST["inputInterest"] : "";
    $experience = isset($_POST["inputExperience"]) ?  $_POST['inputExperience'] : [];
    $File = isset($_POST["inputFile"]) ? $_POST["inputFile"] : "";
    $description = isset($_POST["inputTextarea"]) ? $_POST["inputTextarea"] : "";
    $favoriteColor = isset($_POST["inputColor"]) ? $_POST["inputColor"] : "";
    $skillsRange = isset($_POST["inputRange"]) ? $_POST["inputRange"] : "";
    $personalTerms= isset($_POST["inputPersonalTerms"]) ? 'Yes' : 'No';
    
}
?>

                            <!-- Tabel untuk menampilkan data -->
                            <div class="container mt-5">
                                <table class="table table-bordered table-white">
                                    <tbody>
                                        <tr class="text-center">
                                            <th>Field</th>
                                            <th>Value</th>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Full Name</td>
                                            <td><?php echo $fullName; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Nick Name</td>
                                            <td><?php echo $nickName; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Email</td>
                                            <td><?php echo $email; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Password</td>
                                            <td><?php echo $password; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Date Of Birth</td>
                                            <td><?php echo $dateOfBirth; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Address</td>
                                            <td><?php echo $address; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Gender</td>
                                            <td><?php echo $gender; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Interest</td>
                                            <td><?php echo $interest; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Experience</td>
                                            <td><?php echo $experience; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Profile Picture</td>
                                            <td><?php echo $File; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Describe Yourself</td>
                                            <td><?php echo $description; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Favorite Color</td>
                                            <td><?php echo $favoriteColor; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Skills Range</td>
                                            <td><?php echo $skillsRange; ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Terms</td>
                                            <td><?php echo $personalTerms; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#22303c" fill-opacity="1" d="M0,288L0,96L110.8,96L110.8,256L221.5,256L221.5,192L332.3,192L332.3,160L443.1,160L443.1,224L553.8,224L553.8,288L664.6,288L664.6,64L775.4,64L775.4,128L886.2,128L886.2,96L996.9,96L996.9,288L1107.7,288L1107.7,192L1218.5,192L1218.5,256L1329.2,256L1329.2,96L1440,96L1440,320L1329.2,320L1329.2,320L1218.5,320L1218.5,320L1107.7,320L1107.7,320L996.9,320L996.9,320L886.2,320L886.2,320L775.4,320L775.4,320L664.6,320L664.6,320L553.8,320L553.8,320L443.1,320L443.1,320L332.3,320L332.3,320L221.5,320L221.5,320L110.8,320L110.8,320L0,320L0,320Z"></path></svg>
    </section>
</body>
</html>
