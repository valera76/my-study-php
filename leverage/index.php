<html>
<head></head>
<body>
    <table border="1">
        <tr>
        <th>По правилам более точного григорианского календаря, который сегодня принят в большинстве нерелигиозных организаций, високосным годом считается, тот год, который: делиться без остатка на 4 и при этом не делиться на 100, либо же просто делиться без остатка на 400.</th>        
        </tr>
    </table>
    <br>
    <br>
<?php
    $year = (int)$_GET['year'];


if ($lev = $year % 4 == 0 && $lev = $year % 100 != 0 || $lev = $year % 400 == 0) {
echo 'The year ' . $_GET['year'] . ' is leap';
}    
else
{
echo 'The year ' . $_GET['year'] . ' is not leap';
}

?>
</body>
</html>
