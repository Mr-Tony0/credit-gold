

/*
var one, num, sum, further, prevsum, prevnext; 
var next = document.getElementById('next')
var previous = document.getElementById('previous')
var numSlid;
$(next).on('click',function(){
	 one= $('.img.first');
	 num = $('.img.first').index();
	 sum = num + 1;
	if(sum > 3){
		sum=0;
	}
	numSlid = $('.slider__point.first').index();
	for(numSlid = 0; numSlid<=3;numSlid++){
			let id = document.getElementById('Check'+numSlid);
			if(sum==numSlid || numSlid == prevsum){
				id.style.background ="#64baf6";
			}
			if(sum !=numSlid){
				id.style.background ="#E6E6FA";
			}
		}
	further = $('.img').eq(sum);
	one.fadeOut(1000);
	one.removeClass('first');
	
if (sum ==($('.content:last').index()+1)){
		$('.img').eq(0).fadeIn(500);
		$('.img').eq(0).addClass('first');
	} else{
		further.fadeIn(500);
		further.addClass('first');
	}
	});
$(previous).on('click',function(){
	
	one= $('.img.first');
	num = $('.img.first').index();
	prevsum = num - 1;
	//prevsum = 
	prevnext = $('.img').eq(prevsum);
	if(prevsum < 0){
		prevsum = 3;	
	}
	//alert(prevsum)
	var numSlid2 = $('.slider__point.first').index();
	for(numSlid2 = 3; numSlid2>=0;numSlid2--){
		let id =  document.getElementById('Check'+numSlid2);
		if(numSlid2 == prevsum ){
			id.style.background ="#64baf6";
			
		}
		if(numSlid2 != prevsum){
			id.style.background ="#E6E6FA";
		}
	}
	one.fadeOut(500);
	one.removeClass('first');
	prevnext.fadeIn(500);
	prevnext.addClass('first');
});
var time = setInterval(function(){
	next.click()	
},5000)

$('.slider__point').on('click',function(){
		let element = this.id;
		alert(element);
		
	})



if(this.id == 'red'){
	alert('red');
*/
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