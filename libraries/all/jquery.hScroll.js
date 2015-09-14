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
	$.fn.vScroll = function (){
	function scrollDrag(event, ui){
		scrolled.css({marginTop:scroll.position().top * kv});
	}
	var kv;
	var scroll=$(this).find(".scroll");//ползунок скроллбара
	var scrolled = $(this).find(".scrolled");//страница которую надо прокручивать относительно родителя
	var scrollbar = $(this).find(".scrollbar");//скроллбар
	if(scrollbar.height() == scroll.height()){
		kv = 0;
	}
	else if(scrolled.parent().height() - scrolled.outerHeight() >= 0){
		kv = 0;
	}
	else
		kv = (scrolled.parent().height() - scrolled.outerHeight())/ (scrollbar.height() - scroll.height());
	if(kv == 0){
		scroll.hide();
	}
	else
	//управление элементом scroll
	{
		scrolled.mousewheel(function(event, delta){
			var newTop;
			if (delta > 0)
				newTop = scroll.position().top - 30
			else
				newTop = scroll.position().top + 30;
			if(newTop < 0)
				scroll.css("top","0px")
			else if (newTop + scroll.height() > scrollbar.height()){
				scroll.css({top:scrollbar.height() - scroll.height() + 1});
			}else
				scroll.css("top",newTop + "px");
			scrollDrag(null, null);
		});
		scroll.draggable({
			axis: "y",
			drag:scrollDrag,
			containment: "parent"			
		});
	}

}
}
)(jQuery);