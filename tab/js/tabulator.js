/*панель переключения вкладок
имеет вид
<div class="tabulator1">
	<div class="tabs">
		<div class="item">
		</div>
		<div class="item">
		</div>
	</div>
	<div class="items">
		<div class="item active">	
		</div>
		<div class="item">		
		</div>
	</div>
</div>
где tabs - вкладки, tab - вкладка, 
items - элементы которые переключаются при переключении вкладок
*/
(function($, s){
	$.fn.tabulator = function(){	
		if(this.length > 1){
			for(var i = 0; i < this.length; i++)
			{
				$(this[i]).tabulator();
			}
			return;
		}		
		var el = this;
		var tab = $(el).find(".tab");
		var tabs = $(el).find(".tabs");
		var item = $(el).find("> .items > .item");
		tab.click(function(){
			tab.removeClass("active");
			$(this).addClass("active");
			item.removeClass("active");
			item.eq([$(this).index()]).addClass("active");
		});	
		$(tab[0]).click();
	}
})(jQuery)