<?php
/**
 * @author Eugene Terentev <eugene@terentev.net>
 * @var string $maintenanceText
 * @var int|string $retryAfter
 */
?>
<div id="maintenance-content" style="margin-top: 20%">
    
    <h1 class="text-center">
        <?php echo Yii::t('common', $maintenanceText, [
            'retryAfter' => $retryAfter,
            'adminEmail' => Yii::$app->params['adminEmail']
        ]) ?>
        </h1>
        <p class="text-center">
    </p>
</div>