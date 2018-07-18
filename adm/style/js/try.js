;(function($, window, document) {
	$('document').ready(function () {
		$('#datepicker_theme').change(function(){
			var $sheet = $('link[data-marttiphpbb-jqueryuidatepicker]');
			var theme_link = $sheet.data('marttiphpbb-jqueryuidatepicker');
			theme_link += $(this).val() + '/theme.css';
			$sheet.attr('href', theme_link);
		});

		$('#try_theme').datepicker();
	});
})(jQuery, window, document);
