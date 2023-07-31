<?php include "koneksi.php";
if(isset($_POST['simpan'])){
    mysqli_query($con,"insert into tb_jabatan values ('','$_POST[kd_jabatan]','$_POST[jabatan]','$_POST[tugas]','$_POST[penulis]','$_POST[tgl_upload])");
    echo "<script>alert('Data Tersimpan');</script>";
}
?>
<h2><center>DAFTAR JABATAN</center></h2> 
<h2><center>PT INDIGO SOULUSI TEKNOLOGI</center></h2>
</table>
</form> <br><br>

<form method="post">
    <table style="float:right" border="1">
        <tr>
            <td><input type="text" name="tcari" placeholder="ketik jabatan yang ingin dicari" required></td>
            <td><input type="submit" name="cari" value="cari" required></td></tr>
            </table>
</form> <br><br>

            <?php include "koneksi.php"; ?>
            <table border="1" width="100%">
    <style>
        table { border-collapse: collapse;
        }
        table, th, td {
            border: 1 px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        </style>
    <tr style="background-color: #4CAF50;
            color: white;">
        
        <td>Kode Jabatan</td>
        <td>Jabatan</td>
        <td>Tugas</td>
        <td>Penulis</td>
        <td>Tanggal Upload</td>
        <td>action</td>
</tr>
<?php
if(isset($_POST['cari'])){
$sql=mysqli_query ($con,"select * from tb_jabatan where jabatan like '%$_POST[tcari]%'");
}else{
    $sql=mysqli_query ($con,"select * from tb_jabatan");
}
$no=0;
while($data=mysqli_fetch_array($sql)){
    $no++;
    ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data ['jabatan']?></td>
        <td><?php echo $data ['tugas']?></td>
        <td><?php echo $data ['penulis']?></td>
        <td><?php echo $data ['tgl_upload']?></td>
        <td><a href="?edit&id=<?php echo $data['kd_jabatan']?>">Edit</a>
        <a href="?hapus&id=<?php echo $data['kd_jabatan']?>">Hapus</a>

</td>
</tr>
<?php } ?>
</table>
</form>



