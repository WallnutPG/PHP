<!DOCTYPE html>
<html lang="en">
    
    <html>
    <head>
        <title>Kalkulator</title>
        <style type="text/css">
            body{
                background: black;
            }
            </style>
            </head>
            <body>
        </body>
    </html>

</head>
<body>
<link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Rancho&effect=neon">
    <h1><center><div class="font-effect-neon">KALKULATOR</div></h1>
    <form>
        <center><input type="number" name="a" placeholder="Bilangan a" value="<?php echo @$_GET['a'] ?>">
        <select name="operator">
            <option <?php echo !@$_GET['operator'] ? 'selected' : '' ?> disabled>Pilih Operator</option>
            <option <?php echo @$_GET['operator'] === '+' ? 'selected' : '' ?> value="+">+</option>
            <option <?php echo @$_GET['operator'] === '-' ? 'selected' : '' ?> value="-">-</option>
            <option <?php echo @$_GET['operator'] === '*' ? 'selected' : '' ?> value="*">x</option>
            <option <?php echo @$_GET['operator'] === '/' ? 'selected' : '' ?> value="/">:</option>
        </select>

        <input type="number" name="b" placeholder="Bilangan b" value="<?php echo @$_GET['b'] ?>">

        <center><div style="margin-top: 1rem">
            <button type="button" onclick="location.href = '?'">Clear</button>
            <button type="submit">Hitung</button>
        </div>
    </form>
    <?php
    if ($_GET):
        $a = (double) @$_GET['a'];
        $b = (double) @$_GET['b'];
        $operator = @$_GET['operator'];
        
        switch ($operator) {
            case '+':
                $hasil = $a + $b;
                break;
            case '-':
                $hasil = $a - $b;
                break;
            case '*':
                $hasil = $a * $b;
                break;
            case '/':
                $hasil = $a / $b;
                break;
        }
        ?>
        <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Rancho&effect=neon">
        <h2><center><div style="margin-top: 1rem">
        <font color='white'><div class="font-effect-neon">Hasil : <strong><?php echo $hasil ?></strong></h2>
        </div>
        <?php
    endif; ?>
</body>
</html>
