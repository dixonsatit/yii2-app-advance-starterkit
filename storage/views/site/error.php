<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error" style="padding-top:25%">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <div class="text-center">
        <?= nl2br(Html::encode($message)) ?>
    </div>
</div>
