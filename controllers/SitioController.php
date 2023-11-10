<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\FormularioForm;

class SitioController extends Controller {

    public function actionInicio(){
        $modelo = new FormularioForm;
        if ($modelo->load(Yii::$app->request->post()) && $modelo->validate()) {
            $resultado = ("El resultado es: ".$modelo->valorA+$modelo->valorB);
            return $this->render('inicio', ['resultado'=>$resultado, 'modelo' => $modelo]);            
        }
        return $this->render('inicio', ['resultado'=>false, 'modelo' => $modelo]);        
    }
}



