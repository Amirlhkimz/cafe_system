<?php include('chipchip.php');

if (isset($_POST['nomenu'])) {
    $nomenu=$_POST['nomenu'];
    $namamenu=$_POST['namamenu'];
    $harga=$_POST['harga'];
    $sql="insert into homestay values ('$nomenu', '$namamenu', $harga)";
    $result=mysqli_query($conn, $sql);
    if ($result) echo "<script>alert('Rekod berjaya ditambah')</script>";
    else echo "<script>alert('Rekod tidak berjaya ditambah')</script>";
    echo "<script>window.location='homestay_senarai.php'</script>";
}

?><html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0%;
        padding: 0%;
    }

    body {
        background: linear-gradient(45deg, #2193b0, #2c3e50);
    }

    iframe {
        position: absolute;
        border: none;
        height: 100vh;
    }

    .tambah-homestay {
        position: absolute;
        margin-top: 15%;
        margin-left: 35%;
        margin-right: 35%;
    }

    h3 {
        font-family: verdana;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        color: white;
        text-indent: 20px;

        padding: 5px 22px;
        border-radius: 10px 10px 0 0;
        background-color: #296FF9;
    }

    h3.tajuk {

        font-size: 24px;
        border-radius: 0px;
        padding: 15px;
    }

    form {

        padding: 30px;
        background: rgba(255, 255, 255, 0.25);
        border-radius: 0 0 16px 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    button {
        font-family: verdana;
        font-weight: bold;
        font-size: 11px;
        text-align: center;
        background-color: #C2EFEB;

        width: 90px;
        padding: 7px 8px 7px 32px;
        border: 1px solid #6EA4BF;
        border-radius: 7px;
        margin-top: 10px;
        background-position: 8px;
        background-repeat: no-repeat;
    }

    button.add {
        background-image: url(image/save.png);
    }



    button:hover {
        background-color: darkgray;
    }
</style>

<body>
            <center>
                <div class="tambah-homestay">
                    <h3 class="menu">TAMBAH MENU BARU</h3>
                    <form action="tambah.php" method="post" class="homestay">
                        <table>
                            <tr>
                                <td>Nombor Menu</td>
                                <td><input type="text" name="nomenu"></td>
                            </tr>
                            <tr>
                                <td>Nama Menu</td>
                                <td><input type="text" name="namamenu"></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><input type="text" name="harga"></td>
                            </tr>
                        </table><button class="add" type="submit">Tambah</button>
                    </form>
                </div>
            </center><iframe class="menu" src="menu.html" frameborder="none"></iframe>
</body>

</html>