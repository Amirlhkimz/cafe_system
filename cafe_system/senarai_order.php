<?php
include('chipchip.php'); 
?>
<html>
<style>
    * {
        padding: 0%;
        margin: 0%;
    }

    body {
        background-color: #2193b0;
    }

    iframe {
        height: 100vh;
        position: absolute;
    }

    table {
        font-family: verdana;
        font-size: 12px;
        font-weight: normal;
        text-align: center;
        position: absolute;

        width: 590px;
        border-collapse: collapse;

        margin-left: 30%;
        margin-right: 30%;
        margin-top: 10%;
    }

    caption {
        font-size: 20px;
        font-weight: bold;
        color: rgb(255, 255, 255);
        padding: 8px;
    }
    .table-klien-senarai {
    position: absolute;
    margin-top: 15%;
    margin-left: 35%;
    margin-right: 35%;
    background-color: rgba(83, 83, 83, 0.587);
    border-radius: 15px 15px 0 0;
}

    td,
    th {
        padding: 8px;
        border: 2px rgb(0, 225, 255);
    }

    tr:nth-child(odd) {
        background-color: rgb(0, 151, 220);
    }

    tr:nth-child(even) {
        background-color: rgb(230, 243, 250);
    }

    th {
        font-weight: bold;
        color: white;
        background-color: rgb(34, 0, 207);
    }
</style>

<body>

    <!-- menu start -->
    <iframe class="menu" src="menu.html" frameborder="none"></iframe>
    <div class="table-klien-senarai">
        <table>
            <caption>SENARAI PELANGGAN</caption>
            <tr>
                <th>Bil</th>
                <th>No KP</th>
                <th>Nama</th>
                <th>No Tel</th>
            </tr>
            <?php
   $sql = "select * from klien order by namaklien ASC";
   $data = mysqli_query($conn, $sql);		
   $bil = 1;          
   while ($klien = mysqli_fetch_array($data)) {
   ?>
            <tr>
                <td><?php echo $bil; ?></td>
                <td><?php echo $klien['nokp']; ?></td>
                <td><?php echo $klien['namaklien']; ?></td>
                <td><?php echo $klien['notel']; ?></td>
                <td><?php echo $klien['alamat']; ?></td>
                <td>
                    <a href="klien_update.php?nokp=<?php echo $klien['nokp'];?>">
                        <img src=image/update.png> </a> <a href="klien_delete.php?nokp=<?php echo $klien['nokp'];?>">
                        <img src=image/delete.png> </a> </td> </tr> <?php $bil = $bil + 1; } ?> </table> </div> </body>
                            </html>