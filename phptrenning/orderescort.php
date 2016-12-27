<?php
?>

<?

include("header.php");

?>

<?

include("footer.php");

?>

<html>

<head>

    <meta charset="UTF-8">
    <title>Crocodile-MINI</title>
    <style>
        P {
            text-indent: 20px;
            text-align: center;
            color: rgb(13, 20, 151);
        }
        .letter {
            color: #051297;
            font-size: 200%;
        }
         h1 {
             background: #D9FFAD; /* Цвет фона под заголовком */
             color: green; /* Цвет текста */
             padding: 2px; /* Поля вокруг текста */
         }
    </style>

</head>

<body bgcolor="#f0fff0">
<h3 align="center"><a href="index.php" title="Главная страницаи">Главная</a>|
    <a href="file2.php" title="Операции со своими крокодилами">Распоряжение своими крокодилами</a>|
    <a href="file3.php" title="Рассчитаться за покупку">Операции он-лайн</a>|
    <a href="file4.php" title="Скорая помощь клиенту">Кто-нибудь сделайте что-нибудь</a></h3>

<h1 align="center"><span class="letter">К</span>упить крокодила</h1>

<form action="servissorder.php" method="GET">
    <table border="0" align="center">
        <tr bgcolor="green">
            <td width="150" align="center">Наименование</td>
            <td width="150" align="center">Количество</td>
        </tr>
        <tr>
            <td>Синий крокодил</td>
            <td align="center"><input type="text" name="agreementqty" size="100" maxlength="100"  /> </td>
        </tr>
        <tr>
            <td>Зеленый крокодил</td>
            <td align="center"><input type="text" name="audiyqty" size="100" maxlength="100"  /> </td>
        </tr>
        <tr>
            <td>Розовый крокодил</td>
            <td align="center"><input type="text" name="salaryqty" size="100" maxlength="100"  /> </td>
        </tr>
        <tr>
            <td>Хотите получать огромное количество спама от нас?</td>
            <td>
                <select name="find">
                    <option value="a">Да, мечтаю ежечасно!</option>
                    <option value="b">Нет, мне некогда чистить свою почту от спама.</option>
                    <option value="c">Я вышлю вам мейл человека, которому вы все это высылайте.</option>
                    <option value="d">Я тот человек, которому кто-то шлет спам от вас!</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Оформить заказ" /></td>
        </tr>
    </table>
</form>

<h2 align="center"><span class="letter">Д</span>оставка крокодилов</h2>
<p style="font-size:120%"><span class="letter">Н</span>аши крокодилы очень воспитаны и вежливы. Но согласитесь, не совсем удобно (хотя и весело) тащить их в метро. Они застряют в турникетах, облизываются на других пассажиров.</p>
<p><img src="4.JPG" alt="Delivery"></p>
<p style="font-size:120%"><span class="letter">А</span> представьте что Вы купили их несколько десятков...</p>
<h2 align="center"><span class="letter">П</span>роще заказать доставку у нас</h2>

<table border="0" cellpadding="3" align="center">
    <tr>
        <td bgcolor="#808080" width="150" align="center">Расстояние, км.</td>
        <td bgcolor="#808080" width="150" align="center">Стоимость, $</td>
    </tr>
<?php
$distance= 50;

while ($distance <= 250){
    echo "<tr>
        <td align=\"right\">".$distance."</td>
        <td align=\"right\">".($distance/10)."</td>
        </tr>\n";
    $distance += 50;
}
?>
</table>

<h1 align="center">С нашими ценами на доставку мы быстрее избавим Вас от Ваших денег!</h1>

<p><img src="1.jpg" alt="Let's go!"></p>

</body>

</html>