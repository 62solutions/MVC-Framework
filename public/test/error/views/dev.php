<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>

<h1>Произошла ошибка</h1>
<p><b>Код ошибки:</b><?= $errno ?></p>  
<p><b>Текст ошибки:</b><?= $errstr ?></p>  
<p><b>Файл, в котором ошибка:</b><?= $errfile ?></p> 
<p><b>Строка, в которой ошибка:</b><?= $errline ?></p> 

</body>
</html>