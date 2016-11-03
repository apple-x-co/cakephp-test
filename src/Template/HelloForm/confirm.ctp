<?php

echo $this->Form->create($form);
echo $this->Form->value('name');
echo $this->Form->value('email');
echo $this->Form->button('input', array('type' => 'submit', 'name' => '__input'));
echo $this->Form->button('register', array('type' => 'submit', 'name' => '__register'));
echo $this->Form->end();
