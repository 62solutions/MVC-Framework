<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Default Template</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="/css/main.css" rel="stylesheet"> 

  </head>
  <body>
    <p>no menu</p>
    <div class="container">
        <h1>Default</h1>
        <?=$content?>
    </div>

     <?//= debug(vendor\core\Db::$countSql)?>
    <?//= debug(vendor\core\Db::$queries)?> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script> 
  </body>
</html>