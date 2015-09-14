/*достает ссылку из элемента навигационной панели и ставит ее картинкой слайда
слайдер должен содержать классы:
- bigIcon для слайда
- smallIcons для навигационной панели
- img для элемента навигационной панели
*/
(function ($, s){
	$.fn.simpleSlider = function (){
	function setSlide(e){			
		bigIcon.css("background-image", "url(" + $(this).attr("href") + ")");
		bigIcon.attr("href", $(this).attr("big-href"));
		console.log($(this).attr("href"));
		e.preventDefault();
	}
	var el=this;
	var bigIcon;
	bigIcon = $(this).find(".bigIcon");
	$(this).find(".smallIcons .img").click(setSlide);
}
}
)(jQuery);