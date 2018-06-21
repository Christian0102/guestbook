<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Register';
?>

<h1><?= Html::encode($this->title) ?></h1>


<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= Html::submitButton('Register') ?>
<?php ActiveForm::end(); ?>
