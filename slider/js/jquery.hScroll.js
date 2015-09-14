/*
! для использования подключаем сначало это
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"></script>

прокручивает страницу по вертикали
обработчик вешается на скролл скроллбара
и прокручивает страницу указанную в опциях
прокрутку можна вешать на компонент вида

<div class="">
	<div class="">
		<div class="scrolled"></div>
	</div>
	<div class="scrollbar">
		<div class="scroll"></div>
	</div>
</div>

*/
(function ($, s){
	$.fn.hScroll = function (){
	function scrollDrag(event, ui){
		scrolled.css({marginLeft:scroll.position().left * kv});
	}
	var kv;
	var scroll=$(this).find(".scroll");//ползунок скроллбара
	var scrolled = $(this).find(".scrolled");//страница которую надо прокручивать относительно родителя
	var scrollbar = $(this).find(".scrollbar");//скроллбар
	console.log(scrolled.parent().width(), scrolled.outerWidth());
	if(scrollbar.width() == scroll.width()){
		kv = 0;
	}
	else if(scrolled.parent().width() - scrolled.outerWidth() >= 0){
		kv = 0;
	}
	else
		kv = (scrolled.parent().width() - scrolled.outerWidth())/ (scrollbar.width() - scroll.width());
	if(kv == 0){
		scroll.hide();
	}
	else
	//управление элементом scroll
	{
		if(scrolled.mousewheel != undefined)
		scrolled.mousewheel(function(event, delta){
			var newleft;
			if (delta > 0)
				newleft = scroll.position().left - 30
			else
				newleft = scroll.position().left + 30;
			if(newleft < 0)
				scroll.css("left","0px")
			else if (newleft + scroll.width() > scrollbar.width()){
				scroll.css({left:scrollbar.width() - scroll.width() + 1});
			}else
				scroll.css("left",newleft + "px");
			scrollDrag(null, null);
		});
		scroll.draggable({
			axis: "x",
			drag:scrollDrag,
			containment: "parent"			
		});
	}

}
}
)(jQuery);