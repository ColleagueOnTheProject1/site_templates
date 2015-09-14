<?php
$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'].'';

// Инициализация
require_once $_SERVER['DOCUMENT_ROOT'].'/editor/system/library.php';
if(_LIBRARY !== 1) exit();
// Инициализация

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="design/styles.css" type="text/css">
	<meta name="viewport" content="width=1200">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="/design/styles.css" type="text/css">
	<base href="http://<?php echo $parameters['parameter_url']; ?>/" />
	<script type="text/javascript" src="http://api-maps.yandex.ru/2.0/?coordorder=longlat&load=package.full&wizard=constructor&lang=ru-RU"></script>
	<meta name="viewport" content="width=1200">
	<meta name="description" content="<?php get_description($id); ?>" />
	<meta name="keywords" content="<?php echo $parameters['project_keywords']; ?>" />
	<title><?php if($current_id['page_title'] != '') echo $current_id['page_title']; else echo 'TurbinoFF'; ?></title>


	<!-- Add jQuery library -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="/js/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="/js/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add fancyBox - button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-buttons.css?v=2.1.5" />
	<script type="text/javascript" src="/js/jquery.fancybox-buttons.js?v=2.1.5"></script>

	<!-- Add fancyBox - thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-thumbs.css?v=2.1.5" />
	<script type="text/javascript" src="/js/jquery.fancybox-thumbs.js?v=2.1.5"></script>

	<!-- Add fancyBox - media helper (this is optional) -->
	<script type="text/javascript" src="/js/jquery.fancybox-media.js?v=1.0.0"></script>

	<script type="text/javascript">
		function callback(parameter) {
			var callback_tag = document.getElementById(parameter);
			if (callback_tag.style.display == '') {
				callback_tag.style.display = 'none';
				return;
			}
			callback_tag.style.display = '';
		}


		function toBlock(block){
			$('html, body').animate({scrollTop: $("#"+block).offset().top}, 2500);
		}

		$(document).ready(function(){

			$("a[rel=group]").fancybox({
				prevEffect		: 'none',
				nextEffect		: 'none',
				closeBtn		: false,
				helpers		: {
					title	: { type : 'inside' },
					buttons	: {position: 'bottom'}
				}
			});
			$("a[rel=group2]").fancybox();
		});
	</script>
</head>
 <body>
  <script type="text/javascript">
			ymaps.ready(function() {
				var map = new ymaps.Map("ymaps-map-container", {center: [38.651444,55.793306], zoom: 16, type: "yandex#map"});
				map.controls.add("zoomControl");
				map.geoObjects.add(new ymaps.Placemark([38.651444,55.793306], {balloonContent: ""}, {preset: "twirl#lightblueDotIcon"}));
			});
	</script>
	<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" style="position: fixed; background: url(design/pixel80.png); z-index: 9999; display: none;" id="infograph"><tr><td align="center" valign="middle">
<div class="form_block">
<a style="background:url(design/plast_bann_ui_14.png) no-repeat; width:15px; height:16px; position:absolute; display:block; margin:-36px 0 0 270px; cursor: pointer;" onClick="callback('infograph');"></a>

<h2>Обратный звонок</h2>
<form id="form_4" name="form4" action="" method="POST" enctype="application/x-www-form-urlencoded" >

<input name="name4" type="text" onFocus="this.title=(this.title ? this.title : this.value); this.value=(this.value==this.title ? '' : this.value);" onBlur="this.value=(this.value=='' ? this.title : this.value);" style=" background: #fff; float: left; width: 208px; height: 28px; margin: 14px 0px 4px 20px; padding: 0 10px 0 10px;" value="Ваше имя" />
<input name="phone4" type="text" onFocus="this.title=(this.title ? this.title : this.value); this.value=(this.value==this.title ? '' : this.value);" onBlur="this.value=(this.value=='' ? this.title : this.value);" style=" background: #fff; float: left; width: 208px; height: 28px; margin: 4px 0px 4px 20px; padding: 0 10px 0 10px;" value="Ваш телефон или эл. почта" />
<textarea name="message4" onFocus="this.title=(this.title ? this.title : this.value); this.value=(this.value==this.title ? '' : this.value);" onBlur="this.value=(this.value=='' ? this.title : this.value);" style="background: #fff; float: left; width: 208px; height: 112px; margin: 4px 0px 4px 20px; padding: 8px 10px 0 10px;">Ваше сообщение</textarea>

<div class="null"></div>

<div style="background: url(design/button_2.png) center no-repeat; width: 107px; height: 32px; cursor: pointer; color:#fff; font-size:15px; text-align:center; padding:10px 0 0 0; text-shadow:#ca6c00 1px 1px 1px; margin: 8px auto 0px auto; cursor: pointer;" onclick="document.getElementById('form_4').submit(); return false;">Отправить</div>

<input type="hidden" name="call_back_hidden4" value="1" />
</form>
<div class="null"></div>
</div>
</td></tr>
</table>

	<div id="Top"></div>
	<div id="Left">
	</div>
	<div id="Right"></div>
	<div id="Content" class="uppercase">
		<div class="inlineR">
			<div id="Block3" >
				<div id="Block1"></div>
				<div id="Block2"></div>
				<a href="/"><div id="Icon1"></div></a>
				<ul id="Block4" class="text1 a1">
					<a href="/o-kompanii/"><li>О компании</li></a>
					<a href="/informaciya/"><li>Информация</li></a>
					<a href="/nashi-uslugi/"><li>Наши услуги</li></a>
					<a href="/kontakty/"><li>Контакты</li></a>
				</ul>
			</div>
			<div>
				<div class="inlineR">
					<div id="Block7" class="inlineR a1">
						<div id="Block5"></div>
						<form action="/search/" name="search_form" method="get" enctype="application/x-www-form-urlencoded" id="search_form">
							<input id="Input1" type="text" name="search_phrase" class="text2 uppercase" placeholder="введите название запчасти">
							<a id="Block6" class="text22" href="javascript:void(0);" onclick="$('#search_form').submit();">поиск</a>
						</form>
					</div>
					<div id="phone"></div>
					<font id="Block8" class="text3" style="margin-left: 7px; margin-right: -21px;">+7 495 669 90 45<br>+7 965 403 81 70</font>
				</div>
				<div class="null"></div>
				<div id="Block9" >
					<font class="text4">Запасные части<br></font>
					<font class="text4">для коммерческои<br></font>
					<font class="text4">техники FORD</font>
				</div>
			</div>
		</div>
		<div class="null"></div>
		<!--текст и фон текста скрыты так как на картинках текст нарисован
		при смене картинок убрать класс hide1
		-->
		<div id="Block13" class="text15 block31 font1 vAlignA hide1">
			<a href="/katalog/">
				<div id="Block10">
					<font>каталог<br>запчастей</font>
					<div id="Icon14"></div>
				</div>
			</a>
			<div class="shift7"></div>
			<a href="/diagnostika/">
				<div id="Block11">
					<font>диагностика</font>
					<div id="Icon14"></div>
				</div>
			</a>
			<div class="shift7"></div>
			<a href="">
				<div id="Block12">
					<font>заголовок<br>баннера</font>
					<div id="Icon14"></div>
				</div>
			</a>
		</div>
		<div id="Block14">
			<?
			$query = "SELECT * FROM data WHERE data_parent = '1414150251' and data_visible = '1' ORDER BY data_order ASC";
			$result = mysql_query($query);
			if($result !== false && mysql_num_rows($result)>0){
				$arKat = array();
				while($data = mysql_fetch_assoc($result)) {
					$arKat[] = $data;
				}
			}
			?>
			<ul id="Block30" class="ul1 li1 text14 a14 noUnderlineAll">
				<?foreach($arKat as $el){?>
					<li><a href="<?=$el['data_url']?>/"><?=$el['data_title']?></a></li>
				<?}?>
			</ul>
			<div class="table">
				<div id="Frame1" class="shiftR1">
					<font class="text10"><b>Последние новости</b></font>
					<?
					$query = "SELECT * FROM data WHERE data_parent = '1414150218' and data_visible = '1' ORDER BY RAND() LIMIT 2";
					$result = mysql_query($query);
					if($result !== false && mysql_num_rows($result)>0){
						$arNews = array();
						while($el = mysql_fetch_assoc($result)) {
							$arNews[] = $el;
						}
					}
					if(count($arNews)>0){
					foreach($arNews as $el){?>
						<div class="block19"></div>
						<div class="text8 lowercase">
							<font class="text9"><?=ru_date($el['data_id'])?></font>
							<div class="shift2"></div>
							<font class="uppercase"><?=text_clear($el['data_title'], 40)?></font>
							<div class="shift2"></div>
							<?=text_clear($el['data_title'], 150)?>
						</div>
					<?}}?>

				</div>
				<a href="/novosti/">
					<div id="Block20" class="text22">все новости</div>
				</a>
			</div>

		</div>
		<div class="fromRight">
			<?if ($_SERVER['REQUEST_URI'] == '/') {?>
				<div id="Block15" class="text6">
					<b>каталог</b>
					<div id="Block16" class="text7">
						<a href="/katalog/dvigatel/" style="text-decoration: none; color: inherit;"><div id="Icon11">Двигатель</div></a>
						<a href="/katalog/kabina-rama/" style="text-decoration: none; color: inherit;"><div id="Icon12">Кабина / рама</div></a>
						<a href="/katalog/podveska/" style="text-decoration: none; color: inherit;"><div id="Icon13">Подвеска</div></a>
					</div>
					<a class="noUnderline" href="/katalog/">
						<div id="Block17" class="text22">Весь каталог</div>
					</a>
				</div>
			<?}?>
			<div class="null"></div>
			<?if ($_SERVER['REQUEST_URI'] == '/') {?>
			<div id="Block21" class="text5 a5">
				<font class="text6"><b>О нас</b></font>
				<br><br>
				<p class="lowercase">
					<?
					$query = "SELECT * FROM data WHERE data_id = '1382451336' and data_visible = '1'";
					$result = mysql_query($query);
					if($result !== false && mysql_num_rows($result)>0){
						while($el = mysql_fetch_assoc($result)) {
							echo $el['data_text'];
						}
					}
					?>
				</p>
			</div>
			<?}else{get_content($global_url);}?>
		</div>
		<div id="Frame2" class="  text11">
			<div id="Block26"></div>
			<div id="Block28" class="shift3">
				<form id="form_5" name="form5" action="" method="POST" enctype="application/x-www-form-urlencoded" >
					<div id="Block22" class="text3 bg1">оформить заказ</div>
					<div class="block18"></div>
					<div class="fromLeft">
						<font id="Block23" class="bg1">ваше имя</font>
					</div>
					<input name="name4" id="Input2" class="fromLeft">
					<div id="Block27" class="fromLeft">
						<font id="Block25" class="bg1">E-mail</font>
					</div>
					<input name="phone4" id="Input4" class="fromLeft">
					<br>
					<div class="block18"></div>
					<div class="fromLeft">
						<font id="Block24" class="bg1">ваш вопрос</font>
					</div>
					<textarea name="message5" id="Input3" class="fromLeft"></textarea>
					<a href="javascript:void(0);" onclick="document.getElementById('form_5').submit(); return false;">
						<div id="Icon2"></div>
					</a>
					<input type="hidden" name="call_back_hidden5">
				</form>
			</div>
		</div>
		<div class="null"></div>
	</div>
	<div class="null"></div>
	<div id="Bottom" class="shift5">
		<div class="content2 shift8">
			<font class=" text12  a12 noUnderlineAll tableHCenter">
				<a href="/">turbinoff.ru</a>&nbsp&nbsp
				<a href="javascript:void(0);" onclick="callback('infograph')">Написать нам</a>&nbsp&nbsp
				<a href="">Правила использования материалов</a>&nbsp&nbsp
				© turbinoff.ru - Все права защищены
			</font>
			<div id="Block29" class="tableHCenter"></div>
			<font class="shift6 text13 tableHCenter lowercase">
				<a class="text13" href="http://multzavod.ru">Разработка, сопровождение и продвижение сайтов</a> — мультимедийная компания «Мультзавод»
			</font>
		</div>
	</div>
 </body>
</html>
