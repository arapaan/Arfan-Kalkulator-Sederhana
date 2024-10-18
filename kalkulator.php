<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="kalkulator.php" method="post">
    <div>
        <input type="number" placeholder="Masukkan angka 1" name="angka1" required>
    </div>
    <div>
        <input type="number" placeholder="Masukkan angka 2" name="angka2" required>
    </div>
    <div>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </div>
    <div>
        <input type="submit" name="hitung" value="hitung"></input>
    </div>
    </form>
</body>
</html>

<?php
    if(isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        $hasil = 0;

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                $hasil = $angka1 / $angka2;
                break;
            default:
                $hasil = "hasil tidak ada";
                break;
        }
        echo"<h2>hasil dari $angka1 $operator $angka2 = $hasil</h2>";
    };
?>