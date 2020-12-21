var element = document.getElementById('click');
$('.navigation').hide();
var click2 = 0
element.onclick = function(){
	click2++
	$('.navigation').show();
	//$('header').style.boxshadow = 'none';
	click = 0
		if(click2 == 2){
			$('.navigation').hide();
			click2 = 0;
		}
	$(window).resize(function() { 
		if(document.body.clientWidth>750){
			$('.navigation').hide();
			click2 = 0
		}
	})
}
$('#about').on('click', function(){
	$("html,body").animate({scrollTop:3500},500);
})
$('#aboutMobile').on('click', function(){
	$("html,body").animate({scrollTop:5000},500);
})