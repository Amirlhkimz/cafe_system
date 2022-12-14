<?php
include('chipchip.php'); 
?>
<!DOCTYPE html>
<html>

<head>
     <title>SENARAI</title>
</head>
<style>
     * {
    margin: 0%;
    padding: 0%;
}
body{
     background-color: #2193b0;
}

iframe {
    position: absolute;
    border: none;
    height: 100vh;
}

table {
    font-family: verdana;
    font-size: 12px;
    font-weight: normal;
    text-align: center;

    width: 590px;
    margin: 0;
    border-collapse: collapse;
}


caption {
    font-size: 20px;
    font-weight: bold;
    color: rgb(255, 255, 255);
    padding: 8px;
}

.table-senarai {
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
    border: 2px solid rgb(0, 225, 255);
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

button {
    font-family: verdana;
    font-weight: bold;
    font-size: 11px;
    color: darkolivegreen;
    text-align: center;

    width: 90px;
    padding: 7px 8px 7px 32px;
    border: 1px solid darkolivegreen;
    border-radius: 7px;
    margin-top: 10px;
    background-position: 8px;
    background-repeat: no-repeat;
}

button:hover {
    background-color: darkgray;
}
</style>

<body>

     <!-- menu start -->
     <iframe class="menu" src="menu.html" frameborder="none"></iframe>

     <!-- header start -->
     <center>
          <div class="table-senarai">
               <table>
                    <caption>SENARAI MENU</caption>
                    <tr>
                         <th>Nombor</th>
                         <th>Nama Menu</th>
                         <th>Harga Menu</th>
                    </tr>
                    <?php 
        $sql = "select * from cafe";
        $data = mysqli_query($conn, $sql);		    
        while ($cafe = mysqli_fetch_array($data)) {
        ?>
                    <tr>
                         <td><?php echo $cafe ['nomenu']; ?></td>
                         <td>RM <?php echo $cafe ['harga']; ?></td>
                         <td>
                              <a href="menu_update.php?nomenu=<?php echo $cafe['nomenu'];?>">
                                   <img src=image/update.png height="20px" width="20px">
                              </a>
                              <a href="menu_delete.php?nomenu=<?php echo $cafe['nomenu'];?>">
                                   <img src=image/delete.png height="20px" width="20px">
                              </a>
                         </td>
                    </tr>
                    <?php } ?>
               </table>
          </div>

     </center>



</body>

</html>