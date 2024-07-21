<?php
$koneksi=mysqli_connect("localhost","root","","inputdata_omy");
if (isset($_POST["tblsubmit"])) {
$nim= $_POST["fnim"];
$nama= $_POST["fnama"];
$semester= $_POST["fsemester"];
$prodi= $_POST["fprodi"];

$query="INSERT INTO tbl_mahasiswa VALUES ('$nim','$nama','$semester','$prodi')";
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
            <form method="post" name form tbl_mahasiswa"action="">
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
                        <td colspan="2" align="center"><button type="submit" name="tblsubmit">SIMPAN</button>
                        </td>

                        <td>
                            <button type="reset" name="tblreset">BATAL</button>
                        </td>
                    </tr>
                </table>
            </form>

</html>