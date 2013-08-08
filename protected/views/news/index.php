 <?php
/* @var $this NewsController */

$this->breadcrumbs=array(
    'News',
);
?>

<table class="table">
	
		<?php
		foreach ($news as $value) {
			$url=$this->createUrl('view', array('id'=>$value['id']));
			echo '<tr>';
			echo '<td><a href='.$url.'>'.$value['title'].'</a>'.'</td>';
			echo '<td>'.$value['created_at'].'</td>';
			echo '</tr>';
		}
		?>
</table>