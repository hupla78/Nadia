

<div class="decal">

<?php

echo $this->Form->create('User');?>

<div class="log">
<?php
echo $this->Form->input('username');?>



<?php
echo $this->Form->input('password');?>
</div>



<?php
echo $this->Form->submit('Connection',array('class'=>'button'));
echo $this->Form->end();?>


</div>
