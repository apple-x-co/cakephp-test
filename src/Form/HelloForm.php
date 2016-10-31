<?php
/**
 * Created by PhpStorm.
 * User: kouhei
 * Date: 2016/10/31
 * Time: 19:38
 */

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class HelloForm extends Form
{
    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('name', 'string')
            ->addField('email', ['type' => 'string']);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('name', 'length', [
            'rule' => ['minLength', 10],
            'message' => '名前は必須です'
        ])->add('email', 'format', [
            'rule' => 'email',
            'message' => '有効なメールアドレスが要求されます',
        ]);
    }

    protected function _execute(array $data)
    {
        return true;
    }
}
