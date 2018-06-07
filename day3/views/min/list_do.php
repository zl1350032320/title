<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\min */
/* @var $form ActiveForm */
?>
<div class="min-list">

    <?php $form = ActiveForm::begin(); ?> 
        <table border="2" >
        	<tr>
        		<td>id</td>
        		<td>姓名</td>
        		<td>年龄</td>
        		<td>邮箱</td>
        	</tr>
        	<?php foreach ($data as $key => $v) {?>
        		<tr>
        			<td><?= $v->id?></td>
        		</tr>
        	<?php }?>
        <?php endforeach ?>
        </table>
    <?php ActiveForm::end(); ?>

</div><!-- min-list -->
