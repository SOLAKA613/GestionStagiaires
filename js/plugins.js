$(document).ready(function(){
	$('.carousel').carousel({
		interval:5001
	});
	//Show Color Option Div When Click On the Gear
	
	$(".gear-check").click(function()
	{
		
		$(".color-option").fadeToggle(); /*afficher et cacher le texte qui accompagnier l'icon voir(lafin de video 36)*/
	});
    //Change theme color On click	
	
	 var colorLi=$(".color-option ul li");
	 
	 colorLi
	.eq(0).css("backgroundColor","#E41B17").end()
	.eq(1).css("backgroundColor","#1e11c5").end()
    .eq(2).css("backgroundColor","#e0d31f").end()
	.eq(3).css("backgroundColor","#d87a27");
	
   colorLi.click(function()
   {
	$("link[href*='theme']").attr("href",$(this).attr("data-value"));//[href*='theme']:cherecher sur une pherase contient le mot 'theme' voir le video 38 l'instant 12.47
	
	//console.log()   
   });
	});
