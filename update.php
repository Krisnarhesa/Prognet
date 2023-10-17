<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $fullName = isset($_POST["FullName"]) ? $_POST["FullName"] : "";
    $nickName = isset($_POST["NickName"]) ? $_POST["NickName"] : "";
    $nim = isset($_POST["Nim"]) ? $_POST["Nim"] : "";
    $faculty = isset($_POST["Faculty"]) ? $_POST["Faculty"] : "";
    $email = isset($_POST["Email"]) ? $_POST["Email"] : "";
    $password = isset($_POST["Password"]) ? $_POST["Password"] : "";
    $dateOfBirth = isset($_POST["DateOfBirth"]) ? $_POST["DateOfBirth"] : "";
    $address = isset($_POST["Address"]) ? $_POST["Address"] : "";
    $gender = isset($_POST["Gender"]) ? $_POST["Gender"] : "";
    $experience = isset($_POST["Experience"]) ?  $_POST['Experience'] : [];
    $description = isset($_POST["Textarea"]) ? $_POST["Textarea"] : "";
    $favoriteColor = isset($_POST["Color"]) ? $_POST["Color"] : "";
    $Skill = isset($_POST["Range"]) ? $_POST["Range"] : "";
    $File = isset($_POST["File"]) ? $_POST["File"] : "";
    $personalTerms= isset($_POST["PersonalTerms"]) ? 'Accept' : 'Denied';

    // Query update
    $sql = "UPDATE tb_formulir SET
            FullName = '$fullName',
            NickName = '$nickName',
            Nim = '$nim',
            Faculty = '$faculty',
            Email = '$email',
            Password = '$password',
            Date_of_birth = '$dateOfBirth',
            Address = '$address',
            Gender = '$gender',
            Experience = '$experience',
            Describe_yourself = '$description',
            Favorite_color = '$favoriteColor',
            Skills_range = '$Skill',
            Profile_picture = '$File',
            Terms = '$personalTerms'
            WHERE id = $id";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>
        alert('Data Succesfully Updated');
        window.location.href = 'detail.php?id=" . $id . "';
    </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "Invalid request.";
}

$koneksi->close();
?>