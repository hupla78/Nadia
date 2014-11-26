<?php debug($boutique);?>
<br>
<div class="row panel panel-noborder">
<?php foreach ($boutique as $keii):?>

<?php echo $this->element('rendu-article',array('key'=>$keii));?>

<?php endforeach;?>
</div>

