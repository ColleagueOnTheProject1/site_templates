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
	var scrollbar = $(this).find(".scollbar");//скроллбар
	if(scrollbar.height() == scroll.height()){
		kv = 0;
	}
	else if(scrolled.parent().height() - scrolled.outerHeight() >= 0){
		kv = 0;
	}
	else
		kv = ($('.scrolled').parent().height() - $('.scrolled').outerHeight())/ ($('.vScroll').height() - $('.scroll').height());
	//управление элементом scroll
	scroll.draggable({
		axis: "y",
		drag:scrollDrag,
		containment: "parent"			
	});

}
}
)(jQuery);