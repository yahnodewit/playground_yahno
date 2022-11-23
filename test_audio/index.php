<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>waveforms</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php $songs = ["allthat.mp3", "dreams.mp3"];?>
	<?php $songs_to_json=json_encode((array)$song);?>
	<div id="waveform"></div>


	<script src="//cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.0.52/wavesurfer.min.js"></script>
	<script src="https://unpkg.com/wavesurfer.js"></script>
	<script src="audio.js"></script>
</body>
</html>