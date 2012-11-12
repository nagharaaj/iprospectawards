<script type="text/javascript">
	$(['../img/ipg/submission-cat.png','../img/ipg/submission-cat_01.png','../img/ipg/submission-cat_02.png','../img/ipg/submission-cat_03.png','../img/ipg/submission-cat_04.png']).preload();
</script>

<div id="categories-selector-container">
	<div id="categories-selector" class="default">
		<a id="pioneering" href="../submission/form1/pioneering"></a>
		<a id="ambitiously" href="../submission/form1/ambitiously"></a>
		<a id="digital" href="../submission/form1/digital"></a>
		<a id="cultivating" href="../submission/form2/cultivating"></a>
	</div>
</div>

<script type="text/javascript">
$('#pioneering').mouseover(function (e) {
	$(this).parent().removeClass('default');
	$(this).parent().addClass('pioneering');
});
$('#pioneering').mouseout(function (e) {
	$(this).parent().removeClass('pioneering');
	$(this).parent().addClass('default');
});

$('#ambitiously').mouseover(function (e) {
	$(this).parent().removeClass('default');
	$(this).parent().addClass('ambitiously');
});
$('#ambitiously').mouseout(function (e) {
	$(this).parent().removeClass('ambitiously');
	$(this).parent().addClass('default');
});

$('#digital').mouseover(function (e) {
	$(this).parent().removeClass('default');
	$(this).parent().addClass('digital');
});
$('#digital').mouseout(function (e) {
	$(this).parent().removeClass('digital');
	$(this).parent().addClass('default');
});

$('#cultivating').mouseover(function (e) {
	$(this).parent().removeClass('default');
	$(this).parent().addClass('cultivating');
});
$('#cultivating').mouseout(function (e) {
	$(this).parent().removeClass('cultivating');
	$(this).parent().addClass('default');
});
</script>