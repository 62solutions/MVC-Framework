<div class="container">

<div id="answer"></div>

<button class="btn-default" id="send">Кнопка</button>

  <?php 

  new \fw\widgets\menu\Menu([
   // 'tpl' => WWW . '/menu/my_menu.php',
    'tpl' => WWW . '/menu/select.php' ,
    'container' => 'select',
    'class' => 'my_menu',
    'table' => 'categories',
    'cache' => 60,
    //'cacheKey' => 'menu_select', 

  ]); ?> 

  <?php    ?>
    <?php if(!empty($posts)): ?>
      
     <?php foreach($posts as $post): ?>
        <div class="panel panel-default">
            <div class="panel-heading"><?=$post['title']?></div>
                <div class="panel-body">
                    <?=$post['text']?>
                </div>
            </div>
     <?php endforeach; ?>
    <?php endif; ?>

</div>

<script src="/js/test.js"></script>

<script>
      $('#send').click(function(){
        $.ajax({
          url: '/main/test',
          type: 'post',
          data: {'id': 1},
          success: function(res){

     
          },
          error: function(){
            alert('Error');
          }
        })
      });
    </script>