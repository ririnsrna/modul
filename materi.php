<?php include "koneksi.php";
if(isset($_POST['simpan'])){
    mysqli_query($con,"insert into tb_materi values ('','$_POST[kd_materi]','$_POST[judul_materi]','$POST[isi_materi]','$POST[penulis]','$POST[tgl_upload])");
    echo "<script>alert('Data Tersimpan');</script>";
}
?>
<h2><center>MATERI</center></h2> 
<h2><center>PT INDIGO SOULUSI TEKNOLOGI</center></h2>
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
    <tr style="background-color: #FF6600;
            color: white;">
        <td>No</td>
        <td>kd Materi</td>
        <td>Judul Materi</td>
        <td>Isi Materi</td>
        <td>Penulis</td>
        <td>Tanggal Upload</td>
        <td>action</td>
</tr>
<?php
$sql=mysqli_query ($con,"select * from tb_materi");
$no=0;
while($data=mysqli_fetch_array($sql)){
    $no++;
    ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data ['kd_materi']?></td>
        <td><?php echo $data ['judul_materi']?></td>
        <td><?php echo $data ['isi_materi']?></td>
        <td><?php echo $data ['penulis']?></td>
        <td><?php echo $data ['tgl_upload']?></td>
        <td><a href="?edit&id=<?php echo $data['kd_materi']?>">Edit</a>
        <a href="?hapus&id=<?php echo $data['kd_materi']?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table>