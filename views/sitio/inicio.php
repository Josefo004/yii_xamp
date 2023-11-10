<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
?>
<h1>Hola Usuario</h1>

<?php
if ($resultado) {
    echo Html::tag('div', Html::encode($resultado), ['class'=>'alert alert-danger']);
}

?>

<?php $formulario = ActiveForm::begin(); ?>
<?= $formulario->field($modelo,'valorA')?>
<?= $formulario->field($modelo,'valorB')?>
<div class="form-group">
    <?= Html::submitButton('Enviar', ['class'=>'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>