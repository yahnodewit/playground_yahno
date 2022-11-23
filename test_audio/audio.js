/*var song = '<?php echo $songfile;?>';

var wavesurfer = WaveSurfer.create({
	container: '#waveform',
	waveColor: 'violet',
	progressColor: 'purple'
});

wavesurfer.load('/media/allthat.mp3');*/


function renderWaveForm(url, parentSelector) {
	var domEl = document.createElement('div')
	document.querySelector(parentSelector).appendChild(domEl)

	var wavesurfer = WaveSurfer.create({
		container: domEl,
		waveColor: 'red',
		progressColor: 'purple',
		hideScrollbar: true
	});
	wavesurfer.load(url);
	console.log('hey');

	return wavesurfer;
}

var fromPHP = "<?php echo $songs_to_json ?>";

for (i = 0; i < fromPHP.length; i++) {

	var yourValue = fromPHP[i];
	console.log(yourValue);


}
renderWaveForm('/media/allthat.mp3', '#waveform');
renderWaveForm('/media/dreams.mp3', '#waveform');