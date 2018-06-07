<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\min */
/* @var $form ActiveForm */
?>
<div class="min-list">

    <?php $form = ActiveForm::begin(); ?> 
        <?= $form->field($model, 'name')->hint('请输入姓名') ?>
        <?= $form->field($model, 'pwd')->hint('请输入密码')->passwordInput() ?>
        <?= $form->field($model, 'age')->hint('请输入年龄')->dropDownList(['请选择'=>'请选择','15'=>15,'16'=>16,'17'=>17]) ?>
        <?= $form->field($model, 'email')->hint('请输入邮箱') ?>
        <?= $form->field($model, 'img')->hint('请输入图片')->fileInput() ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- min-list -->
