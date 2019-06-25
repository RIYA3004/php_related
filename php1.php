<?php
$heading='Welcome';
$fruits=array('Apple','Mango','Cherry');
?>
<h1><?php echo $heading; ?></h1>
<?php 
foreach($fruits as $fruit){
	echo '<h1>'.$fruit.'<br>';
}
?>
<ul>
<?php 
foreach($fruits as $fruit) : ?>
<li><h1><?php echo $fruit; ?></h1></li>
<?php endforeach;?>
</ul>