<?php

echo $this->Form->create($hello_form);
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->button('Submit');
echo $this->Form->end();
