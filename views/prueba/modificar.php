<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Modificar una nueva película';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin() ?>
    <?= $form->field($peliculasForm, 'titulo') ?>
    <?= $form->field($peliculasForm, 'anyo') ?>
    <?= $form->field($peliculasForm, 'duracion') ?>
    <?= $form->field($peliculasForm, 'genero_id')->dropDownList($listaGeneros) ?>
    <div class="form-group">
        <?= Html::submitButton('Modificar película', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Cancelar', ['prueba/listado'], ['class' => 'btn btn-danger']) ?>
    </div>
<?php ActiveForm::end() ?>