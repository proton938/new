<?php
use yii\helpers\Html;

?>

<strong>
<p style = "font-size: 30px;">
<?= Html::encode($message) ?>
</p>
</strong>

<div style = "background: red; width: 100px; height: 200px; border: solid 2px #eeeeee;">mmmmmmmmmmmmm</div>

<script>

function goto_say()
	{
		document.location.href = '/yii/web/index.php?r=site%2Fsay';
	}

</script>

<input type = "button" value = "say" onclick = "goto_say()">


<?php
use yii\widgets\Pjax;
?>

<?php Pjax::begin(); ?>

<script>
	function rmv()
		{
			document.getElementById('dinam_content').innerHTML = '000000000000';
			$('#load_content').load('/yii/views/site/load_temp.html');
		}
</script>

<div id = "dinam_content">tretre</div>
<div id = "load_content">load me</div>

<input type = "button" value = "заменить" onclick = "rmv()">

<?php Pjax::end(); ?>