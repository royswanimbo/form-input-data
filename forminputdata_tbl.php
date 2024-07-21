<?php
$koneksi=mysqli_connect("localhost","root","","omyy_tbl");
if (isset($_POST["tblsubmit"])) {
$nim= $_POST["fnim"];
$nama= $_POST["fnama"];
$semester= $_POST["fsemester"];
$prodi= $_POST["fprodi"];
$kelas= $_POST["fkelas"];
$nohp= $_POST["fnohp"];

$query="INSERT INTO omyy_tbl VALUES ('$nim','$nama','$semester','$prodi','$kelas','$nohp')";
mysqli_query($koneksi,$query);
}
?>

<html>

<head>
    
    <title>FROM INPUT DATA </title>
</head>

<body>
    <table border='1' align="center cellspacing=" 0" <tr>
        <td>
            <form method="post" name form omyy_tbl"action="">
                <table>
                    <tr>
                        <td colspan="3 align=" center height="24">
                            <b>INPUT DATA MAHASISWA </b>
                        </td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td align="center">:</td>
                        <td><input type="text" name="fnim" required> </td>
                    </tr>

                    <tr>
                        <td>NAMA</td>
                        <td align="center">:</td>
                        <td><input type="text" name="fnama" required> </td>
                    </tr>

                    <tr>
                        <td>SEMESTER</td>
                        <td align="center">:</td>
                        <td><input type="text" name="fsemester" required> </td>
                    </tr>

                    <tr>
                        <td>PRODI</td>
                        <td align="center">:</td>
                        <td><input type="text" name="fprodi" required> </td>
                    </tr>

                    <tr>
                        <td>KELAS</td>
                        <td align="center">:</td>
                        <td><input type="text" name="fkelas" required> </td>
                    </tr>

                    <tr>
                        <td>NOHP</td>
                        <td align="center">:</td>
                        <td><input type="text" name="fnohp" required> </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"><button type="submit" name="tblsubmit">SIMPAN</button>
                        </td>

                        <td>
                            <button type="reset" name="tblreset">BATAL</button>
                        </td>
                    </tr>
                </table>
            </form>

</html>