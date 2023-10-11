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
                        <a class="nav-link nvbar active" href="#form">Form</a>
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
                            <h1 class="h2">DATA ENTRY FORM</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-50">
                            <form method="post" action="answer.php" name="Data Form" >
                                <div class="col-12 mb-3">
                                    <div class="alert alert-info alert-dismissible fade show d-none my-alert" role="alert">
                                        <strong>Your Message Has Been Successfully Submitted!</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <div class="col-12 mb-3">
                                    <label for="inputFullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="inputFullName" id="inputFullName" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputNickName" class="form-label">Nick Name</label>
                                    <input type="text" class="form-control" name="inputNickName" id="inputNickName" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputEmail" class="form-label">Gmail</label>
                                    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="example@gmail.com" required />
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="inputPassword" id="inputPassword" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputDateOfBirth" class="form-label">Date Of Birth</label>
                                    <input type="date" class="form-control" name="inputDateOfBirth" id="inputDateOfBirth"  required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="inputAddress" id="inputAddress" required/>
                                </div>
                                <div>
                                    <label for="inputGender" class="form-label">Gender</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inputGender" id="inputMaleGender" value="Male" />
                                    <label class="form-check-label" for="inputMaleGender"> Male </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inputGender" id="inputFemaleGender" value="Female" />
                                    <label class="form-check-label" for="inputFemaleGender"> Female </label>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputInterest" class="form-label">Interest</label>
                                    <select id="inputInterest" name="inputInterest" class="form-select" required >
                                        <option selected>Choose..</option>
                                        <option>Hiking</option>
                                        <option>Traveling</option>
                                        <option>Reading</option>
                                        <option>Gaming</option>
                                        <option>Sports</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="inputExperience" class="form-label">Experience</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="inputExperience" id="Volunteer" value="Volunteer"/>
                                    <label class="form-check-label" for="Volunteer">Volunteer</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="inputExperience" id="Internship" value="Internship" />
                                    <label class="form-check-label" for="Internship">Internship</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="inputExperience" id="Workshop" value="Workshop"/>
                                    <label class="form-check-label" for="Workshop">Workshop</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="inputExperience" id="Training" value="Training"/>
                                    <label class="form-check-label" for="Training">Training</label>
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <label for="inputTextarea" class="form-label">Describe Yourself</label>
                                    <textarea class="form-control" name="inputTextarea" id="inputTextarea" placeholder="Describe here" required rows="4"></textarea>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputFile" class="form-label">Upload Your Profile Picture</label>
                                    <input type="file" class="form-control" name="inputFile" id="inputFile" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputColor" class="form-label">Favorite Color</label>
                                    <input type="color" class="form-control" name="inputColor" id="inputColor" />
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputRange" class="form-label">skills Range</label>
                                    <input type="range" class="form-control" name="inputRange" id="inputRange" min="0" max="100" step="1" />
                                </div>
                                <div class="form-check form-switch" class="col-12 mb-3">
                                    <input class="form-check-input" type="checkbox" name="inputPersonalTerms" id="inputPersonalTerms" required>
                                    <label class="form-check-label" for="inputPersonalTerms">I Agree to the Terms and Conditions</label>
                                </div>
                                <div class="col-12 mb-3">
                                    <button type="reset" class="w-100 btn btn-danger btn-reset">Reset</button>
                                </div>
                                <div>
                                    <button class="w-100 btn btn-success btn-kirim" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#22303c" fill-opacity="1" d="M0,288L0,96L110.8,96L110.8,256L221.5,256L221.5,192L332.3,192L332.3,160L443.1,160L443.1,224L553.8,224L553.8,288L664.6,288L664.6,64L775.4,64L775.4,128L886.2,128L886.2,96L996.9,96L996.9,288L1107.7,288L1107.7,192L1218.5,192L1218.5,256L1329.2,256L1329.2,96L1440,96L1440,320L1329.2,320L1329.2,320L1218.5,320L1218.5,320L1107.7,320L1107.7,320L996.9,320L996.9,320L886.2,320L886.2,320L775.4,320L775.4,320L664.6,320L664.6,320L553.8,320L553.8,320L443.1,320L443.1,320L332.3,320L332.3,320L221.5,320L221.5,320L110.8,320L110.8,320L0,320L0,320Z"></path></svg>
            </section>
<!-- Akhir Form -->

    <!-- JavaScript untuk Form Submit
    <script>
        const form = document.forms['Data Form'];
        const btnKirim = document.querySelector('.btn-kirim');
        const myAlert = document.querySelector('.my-alert');
    
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            myAlert.classList.toggle('d-none');
            form.reset();
    
            // Tutup alert secara otomatis setelah 3 detik (3000 milidetik)
            setTimeout(() => {
                myAlert.classList.add('d-none');
                window.location.href = "answer.php"; // Mengarahkan kembali ke form.php setelah menampilkan pesan sukses
            }, 3000);
        });
    </script> -->
    
</body>
</html>
