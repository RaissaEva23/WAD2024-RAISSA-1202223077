<?php

include("dbconnection.php");

// buatkan function addStudent()
function addStudent()
{
    // variabel global
    global $conn;

    // Silakan buat variabel di bawah dengan data yang diambil dari form
    $nama = $_POST ["nama"];
    $nim = $_POST ["nim"];
    $jurusan = $_POST ["jurusan"];
    $angkatan = $_POST ["angkatan"];

    // Periksa apakah NIM sudah ada
    $query = "SELECT nim FROM tb_student WHERE nim = '$nim'";
    $ret = mysqli_query($conn, $query);
    

    if (mysqli_num_rows($ret) == 0) {
        // Masukkan data ke tabel tb_student
        $query = "INSERT INTO tb_student (nama, nim, jurusan, angkatan) VALUES 
        ('$nama', '$nim', '$jurusan', '$angkatan')";
        $result = mysqli_query($conn, $query);

        /**
         * Buatlah logika untuk Memeriksa hasil dari operasi penambahan data mahasiswa.
         * 
         * Jika operasi berhasil, menampilkan pesan bahwa mahasiswa telah ditambahkan
         * dan mengarahkan pengguna ke halaman 'add-students.php'.
         * Jika operasi gagal, menampilkan pesan kesalahan.
         * Jika NIM sudah ada, menampilkan pesan bahwa NIM sudah ada.
         */
        if ($result){
            echo "
            <script>
                alert ('Data Filed');
                document.location.herf = add-student.php;
                </script>";
                exit;
        }
        
    }
}

function editStudent($id) {
    global $conn;

    // Ambil input dari form dan simpan dalam variabel
if (isset($_POST["create"])){     
    $nama = $_POST ["nama"];
    $nim = $_POST ["nim"];
    $jurusan = $_POST ["jurusan"];
    $angkatan = $_POST ["angkatan"];

    // Update data mahasiswa berdasarkan ID
    $query = "INSERT INTO tb_student (nama, nim, jurusan, angkatan) VALUE 
        ('$nama', '$nim', '$jurusan', '$angkatan')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Student data has been updated.")</script>';
        echo "<script>window.location.href ='manage-students.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}
}

?>