/*компонент выбора варианта
состоит из input, .items(список вариантов), и поверхности перекрывающей input
items состоит из массива элементов с классом option
пример
<div class="select">
	<input readonly/>
	<div class="items">
		<div class="option">1</div>
		<div class="option">2</div>
		<div class="option">3</div>
		<div class="option">4</div>
		<div class="option">5</div>
		<div class="option">6</div>
	</div>
	<div class="sf"></div>
</div>
v.0.3 - слушатель вешается только на тот элемент у которого есть items
*/
(function ($, s){
	$.fn.setSelect = function(options){
		if(this.length > 1){
			for(var i = 0; i < this.length; i++)
			{
				$(this[i]).setSelect(options);
			}
			return;
		}
		var settings = {
			hideObjects:""//классы идентификаторы или типы объектов которые надо скрыть при крике на данный элемент
			}
		var el = this;
		var items = el.find(".items");
		if(!items[0])
			return;
		settings = $.extend(true, {}, settings, options);
		el.click(function(event){	
			if(settings.hideObjects !="")
				$(settings.hideObjects).hide();
			items.show();
			event.stopPropagation ? event.stopPropagation() : (event.cancelBubble=true);
		});
		if(items.find(".option")[0]){
			items.find(".option").click(function(event){
				el.find("input").val($(this).text());
				items.hide();
				event.stopPropagation ? event.stopPropagation() : (event.cancelBubble=true);
			});
			items.find(".option:eq(0)").click();
		}
		$(window).click(function(){
			items.hide();
		});		
	}
})(jQuery);