<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="kalkulator.css">
</head>
<body>
    <h1 class="a">KALKULATOR SEDERHANA</h1>
    <h4 class="b">by ihsan</h4>
    <div class="c">

        <form action="" method="GET">
            <label for="number">Bilangan Ke Satu</label><br>
            <input type="number" id="bil1" name="bil1" autocomplete="off" placeholder="Masukkan"><br><br>
            
            <label for="number">Bilang Ke Dua</label><br>
            <input type="number" id="bil2" name="bil2" autocomplete="off" placeholder="Masukkan"><br><br>
            
            <select name="operation" id="">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="result" id="submit">
            <br>
            <br>
            
<?php 
     if (isset($_GET["result"])){

    
        $bil1 = $_GET["bil1"];
        $bil2 = $_GET["bil2"];
        $operasi = $_GET["operation"];
        
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
                echo "<input type='text' value='$hasil'  readonly>";
                break;
            case 'kurang':
                $hasil = $bil1 - $bil2;
                echo "<input type='text' value='$hasil'  readonly>";
                break;
            case 'kali':
                $hasil = $bil1 * $bil2;
                echo "<input type='text' value='$hasil'  readonly>";
                break;
            case 'bagi':
                if($bil2 != 0){
                $hasil = $bil1 / $bil2;
                echo "<input type='text' value='$hasil'  readonly>";
                } 
                else {
                echo "Error! Pembagian dengan angka nol tidak bisa dilakukan.";
                }
        }
    }
?>
    </form>
</div>
</body>
</html>