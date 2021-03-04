
<html>
<head>
    <title>Kalkulator Biasa | Jago Ngoding</title>
</head>
<body>
    <h1>Kalkulator - Web 2</h1>
    <form>
        <input type="number" name="a" value="<?php echo @$_GET['a'] ?>">

        <select name="operator">
            <option <?php echo !@$_GET['operator'] ? 'selected' : '' ?> disabled>== Pilih ==</option>
            <option <?php echo @$_GET['operator'] === '+' ? 'selected' : '' ?> value="+">+</option>
            <option <?php echo @$_GET['operator'] === '-' ? 'selected' : '' ?> value="-">-</option>
            <option <?php echo @$_GET['operator'] === '*' ? 'selected' : '' ?> value="*">*</option>
            <option <?php echo @$_GET['operator'] === '/' ? 'selected' : '' ?> value="/">/</option>
        </select>

        <input type="number" name="b" value="<?php echo @$_GET['b'] ?>">

        <div style="margin-top: 10px">
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

    <div style="margin-top: 15px">
    Hasil: <strong><?php echo $hasil ?></strong>
    </div>
    <?php
      endif; 
    ?>
</body>
</html>