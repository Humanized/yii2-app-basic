<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
//TODO: bugfix
/* @var $user common\models\User */
//TODO: Remove hardcode
$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['/account/confirm', 'token' => $user->password_reset_token]);
?>
<div class="confirm-account">
    <p><?= Yii::t('mail', 'salutation') ?>,</p>
    <p><?= Yii::t('mail', 'confirmation') ?>:</p>
    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
    <p><?= Yii::t('mail', 'signature') ?></p>

</div>
