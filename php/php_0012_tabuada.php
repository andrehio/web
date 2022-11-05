<!DOCTYPE html>
<html>

<body>
    <form name="form" method="get">
        <Label>Informe um número de 1 a 10: </Label>
        <input type="text" value="" name="numero" />
        <input type="submit" value="Calcular" />
    </form>
    <?php
    $numero = (int)$_GET ["numero"];
    for ($i=0; $i < 11; $i++){
        echo "$i x $numero = " .$i*$numero."<br>";
    }
    ?>
</body>

</html>