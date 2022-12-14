<?php
include('chipchip.php'); 
if (isset($_POST['nokp'])) {
	$nokp = $_POST['nokp'];
	$tarikh_masuk = $_POST['tarikh_masuk'];
	$tarikh_keluar= $_POST['tarikh_keluar'];
    $norumah = $_POST['norumah'];
    $sql = "insert into sewaan value (NULL,'$tarikh_masuk', '$tarikh_keluar', 
        '$norumah', '$nokp')";	
    $result = mysqli_query($conn, $sql);
    if ($result)
        echo "<script>alert('Berjaya membuat tempahan')</script>";
    else 
        echo "<script>alert('Tidak berjaya membuat tempahan')</script>";
    echo "<script>window.location='sewaan_senarai.php'</script>";	
}
?>

<html>
<style>

</style>
<body>
<h3 class="sewaan">Bayaran</h3>
<form class="sewaan" action="pembayaran.php" method="post" >
    <table>
    <tr>
    <td>Nama Pembeli</td>
    <td>
        <select name="nokp">
        <option></option>
        <?php
            $sql = "select * from klien";
            $data = mysqli_query($conn, $sql);
            while ($klien = mysqli_fetch_array($data)) {
                echo "<option value='$klien[nokp]'>$klien[namaklien]</option>";		
            }
        ?>
        </select>
    </td>
    </tr>

    <tr>
    <td>Menu</td>
    <td>
        <select name="nomenu">
        <option></option>
        <?php
            $sql = "select * from homestay";
            $data2 = mysqli_query($conn, $sql);
            while ($rumah = mysqli_fetch_array($data2))   {
                echo "<option value='$menu[nomenu]'>$menu[nomenu]</option>";		
           }
        ?>
        </select>
    </td>
    </tr>
    <tr>
        <td>PEMBAYARAN TUNAI SAHAJA</td>
        <td><input type="date" name="tarikh_masuk"></td>
    </tr>

</table>
<button class="tempah" type="submit">Submit</button>   
</form>	
</body>
</html>
