function updateSelection(){
	var imgs = $("#slider1 img");
	var currentBF = $("#slider1 img.select").attr("bigPhoto");
	for (var i = 0;i < imgs.length;i++)
	{
		if(imgs.eq(i).attr("bigPhoto") == currentBF)
			imgs.eq(i).addClass("select")
	}
}function getDelta(e){
    var evt = window.event || e;
    evt = evt.originalEvent ? evt.originalEvent : evt;
    return evt.detail ? evt.detail*(-40) : evt.wheelDelta
}
function setSlider(){
	var slider1 = $("#slider1").lightSlider({
	  gallery:true,
	  item:3,
	  loop:true,
	  vertical:true,
	  pager:false,
	  verticalHeight:303,
	  onAfterSlide:updateSelection,
	  slideMargin:0	
	 });
	$(".slider1 .lSSlideOuter").append($(".slider1 .lSAction"));
	$(".slider1 .photo img").attr("src", $("#slider1 .active img").attr("bigPhoto"));
	// Mousewheel navigation
	$("#slider1").bind("mousewheel DOMMouseScroll", function(e, delta){
		console.log("ok");
		e.preventDefault();
		var delta = getDelta(e);
		if (delta > 0) {
			console.log("scrolling up !");
			slider1.goToPrevSlide();
		}
		else {
			console.log("scrolling down !");
			slider1.goToNextSlide();
		}
	});
	$("#slider1 img").click(function(){
		var opacity = 0;
		$(".slider1 .photo").css("background-image", "url(" + $(".slider1 .photo img").attr("src") + ")");
		$(".slider1 .photo img").css("opacity",opacity);
		$(".slider1 .photo img").attr("src", $(this).attr("bigPhoto"));
		$("#slider1 img").removeClass("select");
		$(this).addClass("select");
		var timer = setInterval(function(){
			opacity += 0.2;
			if (opacity >= 1)
			{
				opacity = 1;
				clearInterval(timer);
			}
			$(".slider1 .photo:eq(0) img").css("opacity",opacity);
		}, 50);
	});
}
$(window).load(function(){
		if($("#slider1")[0])
			setSlider();
});