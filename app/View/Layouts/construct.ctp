<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body >
       <?php echo($this->Html->image('wait.jpg',array('style'=>"margin-left:auto;margin-right:auto; display:block;"))); ?>
       <div style="margin-left:auto;margin-right:auto; display:table;">


      <?php echo($this->Html->link('connect',array('controller'=>'users','action'=>'login'))); ?>
       </div>
    </body>
</html>
