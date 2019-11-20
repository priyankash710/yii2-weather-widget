<?php

use app\components\Wheather;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="site-index">

<?php echo Wheather::widget() ?>
</div>
