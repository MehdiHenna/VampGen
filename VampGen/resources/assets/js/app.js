$(document).ready(function (){
	console.log('hello !');
	$('.talent').on('change', function(){
		console.log('Sir yes Sir !');
		var value = $(this).val();
		alert(value);
	});
});