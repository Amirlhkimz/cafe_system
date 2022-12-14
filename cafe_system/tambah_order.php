<?php
include('chipchip.php'); 
if (isset($_POST['nomenu'])) {
$nomenu = $_POST['nomenu'];
$namamenu = $_POST['namamenu'];
$harga = $_POST['harga'];
    $sql = "insert into klien (nomenu, namamenu, harga)
    values ('$nomenu', '$namamenu','$harga')";
    $result = mysqli_query($conn, $sql);
    if ($result)
        echo "<script>alert('Berjaya Tambah Order')</script>";
    else 
        echo "<script>alert('Tidak Berjaya Tambah Order')</script>";
    echo "<script>window.location = 'senarai_order.php'</script>";
}
?>

<html>
<style>
    * {
        padding: 0%;
        margin: 0%;
    }

    iframe {
        height: 100%;
        position: absolute;
    }
    .form-tambah{
        position: absolute;
        margin-left: 25%;
        margin-right: 25%;
        margin-top: 15%;
    }
</style>

<body>
    <!-- menu start -->
    <iframe class="menu" src="menu.html" frameborder="none"></iframe>

    <!-- form tambah mula -->
    <div class="form-tambah">
    <h3 class="klien">TAMBAH MENU</h3>
    <form action="senarai_order.php" method="POST" class="klien">
        <table>
            <tr>
                <td class=warna>Nombor Menu </td>
                <td> <input type="text" name="nomenu" placeholder="001"> </td>
            </tr>
            <tr>
                <td class=warna> Nama Menu </td>
                <td> <input type="text" name="namamenu" placeholder="Ayam Merah"> </td>
            </tr>
            <tr>
                <td class=warna> Harga </td>
                <td> <input type="text" name="harga" placeholder="RM 00.00"></td>
            </tr>
        </table>
        <button class="save" type="submit">Simpan</button>
    </form></div>

    <script>
        function semak() {
            var id = document.getElementById("id").value;
            if (id === "")
                alert("Sila masukkan nondp");
            else if (id.length > 8)
                alert("Sila masukkan id tidak lebih dari 8 aksara");
        }
    </script>
</body>

</html>