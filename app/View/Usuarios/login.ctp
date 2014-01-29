<?php

echo $this->Form->create('Usuario');
echo $this->Form->input('email');
echo $this->Form->input('senha', array('type'=>'password'));
echo $this->Form->end('Enviar');

?>