<?php
use yii\helpers\Html;
?>
<?= Html::encode($message) ?>

<div style = "background: #cccccc; width: 100px; height: 100px; border: solid 2px #eeeeee;">rrrrrrrrrrrrrrr</div>
ytreytreytr
<br>

<script>

function goto_new()
	{
		document.location.href = '/yii/web/index.php?r=site%2Fnew';
	}

function goto_about()
	{
		document.location.href = '/yii/web/index.php?r=site%2Fabout';
	}
</script>

<input type = "button" value = "6437654" onclick = "goto_new()">

<input type = "button" value = "rrrrrrrr" onclick = "goto_about()">

<a href = '/yii/web/index.php?r=site%2Fabout'>new</a> 


<?php

$load_new = require_once(__DIR__.'/new.php');

?>