<?php
?>
<?php

$master ="Операции со своими крокодилами";

?>
<?

include("header.php");

?>

<?

include("footer.php");

?>

<?php

if ($master == "Операции со своими крокодилами")
{

    echo "<p>Распоряжение своими крокодилами</p>";

}

else

{

    echo "<p><a href=\"file2.php\" title=\"Операции со своими крокодилами\">Распоряжение своими крокодилами</a></p>";

}

define('MAX_UPLOADED_SIZE', 30000);

$baseGalleryPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'files';
$webGalleryPath = 'files';


if (!empty($_FILES)) {

    $fullGalleryPath = $baseGalleryPath . DIRECTORY_SEPARATOR . 'gallery1' . DIRECTORY_SEPARATOR;


    $allowMimeTypes = [
        'image/jpeg',
        'image/png',
        'image/gif',
    ];
    $mimeContType = mime_content_type($_FILES['fname1']['tmp_name']);

    if (!in_array($mimeContType, $allowMimeTypes)) {
        echo 'Error: wrong MIME content type: ' . $mimeContType . '. Only the following types are allowed: ' . var_export($allowMimeTypes, 1) . '<br>';
        exit;
    }

    if ($_FILES['fname1']['error'] !== 0) {
        echo 'Error uploading file: ' . var_export($_FILES['fname1']['error'], 1) . '<br>';
        exit;
    }

    if ($_FILES['fname1']['size'] > MAX_UPLOADED_SIZE) {
        echo 'Uploaded image file size: ' . $_FILES['fname1']['size'] . ' is greater than: ' . MAX_UPLOADED_SIZE . '<br>';
        exit;
    }

    if (move_uploaded_file($_FILES['fname1']['tmp_name'], $fullGalleryPath . $_FILES['fname1']['name'])) {
        // OK
    } else {
        echo 'Error: can`t move temporary file: ' . $_FILES['fname1']['tmp_name'] . ' to file on server: ' . $fullGalleryPath . $_FILES['fname1']['name'];
        exit;
    }
}

function readDirectoryImages($folder) {
    global $webGalleryPath;
    $dirGalleryName = basename($folder);
    if (!empty($folder)) {
        $dh = opendir($folder);
        $thumbsHtml = '<p>Displaying images in folder: ' . $folder . '</p>';
        if ($dh) {
            while (false !== ($dirEntry = readdir($dh))) {
                $ext = strtolower(substr($dirEntry, -3));
                if ($ext == 'jpeg' || $ext == 'jpg' || $ext == 'png' || $ext == 'gif') {
                    $thumbsHtml .= '<img width="150" src="' . $webGalleryPath . DIRECTORY_SEPARATOR . $dirGalleryName . DIRECTORY_SEPARATOR . $dirEntry . '" alt="' . $dirEntry . '"><br>';
                }
            }
            closedir($dh);
        }
        echo $thumbsHtml;
    }
}

function readGalleries() {
    global $baseGalleryPath;
    $dh = opendir($baseGalleryPath);
    $resHtml = '';
    if ($dh) {
        while (false !== ($dirEntry = readdir($dh))) {
            if ($dirEntry !== '.' && $dirEntry !== '..') {
                $resHtml .= readDirectoryImages($baseGalleryPath . DIRECTORY_SEPARATOR . $dirEntry) . '<br>';
            }
        }
        closedir($dh);
    }
    echo $resHtml;
}
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
<h3 align="center"><a href="index.php" title="Главная страница">Главная</a>|
    <a href="file1.php" title="Отдать нам свои деньги">Буду клиентом</a>|
    <a href="file3.php" title="Рассчитаться за покупку">Операции он-лайн</a>|
    <a href="file4.php" title="Скорая помощь клиенту">Кто-нибудь сделайте что-нибудь</a></h3>

<h3 align="center"><a href="orderescort.php" title=""><span class="letter">К</span>упить крокодила</a></h3>

<form method="post" action="" enctype="multipart/form-data">
    <div align="center"><label for="fname1">Выберите картинку для загрузки *: </label><input required type="file" name="fname1"></div>
    <input type="submit" value="Upload file">
    <div align="center">* - обязательно заполнить</div>
</form>

<hr>

<?=readGalleries()?>


<p><img src="1.jpg" alt="Let's go!"></p>

</body>

</html>