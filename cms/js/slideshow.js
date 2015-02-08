
$(document).ready(function(){
	$('#slide').cycle({
		fx:	'scrollLeft', 
    timeout: 5000,
    before:  onBefore, 
    after:   onAfter 
		});
	});
function onBefore() { 
    $('.sombra').css('background-color','#faca10');
} 
function onAfter() { 
    $('.sombra').css('background-color','#ceceff');
}
