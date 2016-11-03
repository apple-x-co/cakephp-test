<?php

echo $this->Form->create($form);
echo '名前：' . $this->request->data['name'];
echo 'メール：' . $this->request->data['email'];
echo $this->Form->hidden('name');
echo $this->Form->hidden('email');
echo $this->Form->button('input', array('type' => 'submit', 'name' => '__input'));
echo $this->Form->button('register', array('type' => 'submit', 'name' => '__register'));
echo $this->Form->end();
