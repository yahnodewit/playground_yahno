<?php $songs = ["allthat.mp3", "dreams.mp3"];?>
	<?php $i = 0;?>
	<?php foreach ($songs as $song):?>
		<?php $songfile = $song ?>
	<?php endforeach?>

	<audio controls>
  		<source src="/media/allthat.mp3" type="audio/mp3">
	</audio>