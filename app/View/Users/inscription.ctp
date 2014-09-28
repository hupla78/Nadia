
<?php

echo $this->Form->create('User');

echo $this->Form->input('username');
echo $this->Form->input('email');


echo $this->Form->input('password');
echo $this->Form->input('passwordVerif');

echo $this->Form->end('inscription');

?>