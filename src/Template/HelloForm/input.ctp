<?php

echo $this->Form->create($form);
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->button('confirm', array('type' => 'submit', 'name' => '__confirm'));
echo $this->Form->end();
