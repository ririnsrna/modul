<?php include "koneksi.php";
if(isset($_POST['simpan'])){
    mysqli_query($con,"insert into tb_user values ('','$_POST[kd_jabatan]','$_POST[nama_user]','$_POST[jk]','$_POST[alamat]','$_POST[kd_jabatan])");
    echo "<script>alert('Data Tersimpan');</script>";
}
?>
<h2><center>BIODATA</center></h2> 
<h2><center>PT INDIGO SOULUSI TEKNOLOGI</center></h2>
</table>
</form> <br><br>
<?php include "koneksi.php"; ?>
<table border="1" width="100%">
<style>
        table { border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        </style>
    <tr style="background-color: #0066FF;
            color: white;">
        <td>No</td>
        <td>kd User</td>
        <td>Nama User</td>
        <td>Jk</td>
        <td>Alamat</td>
        <td>Kd Jabatan</td>
        <td>action</td>
</tr>
<?php
$sql=mysqli_query ($con,"select * from tb_user");
$no=0;
while($data=mysqli_fetch_array($sql)){
    $no++;
    ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data ['kd_user']?></td>
        <td><?php echo $data ['nama_user']?></td>
        <td><?php echo $data ['jk']?></td>
        <td><?php echo $data ['alamat']?></td>
        <td><?php echo $data ['kd_jabatan']?></td>
        <td><a href="?edit&id=<?php echo $data['kd_jabatan']?>">Edit</a>
        <a href="?hapus&id=<?php echo $data['kd_jabatan']?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table>