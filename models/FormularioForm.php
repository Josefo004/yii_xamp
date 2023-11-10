<?php

namespace app\models;

use Yii;
use yii\base\Model;

class FormularioForm extends Model {
    public $valorA;
    public $valorB;

    public function rules()  {
        return [
            [['valorA', 'valorB'], 'required'],
            [['valorA', 'valorB'], 'number'],
        ];
    }
}
