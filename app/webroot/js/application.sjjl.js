$(document).ready(function() {
	$('select').change(function(e) {
		e.preventDefault();

		var id = $(this).prop('id');
		var val = $(this).val();

		$.each($('tbody tr'), function(k, v) {
			var row = $(this).find('td:eq(1)').html();
			if (row == '四半') {
				if (id == 'siban1')
					$(this).find('td:eq(4)').html(val);
				else if (id == 'siban2')
					$(this).find('td:eq(5)').html(val);
			} else if (row == '五星') {
				if (id == 'wuxing1')
					$(this).find('td:eq(4)').html(val);
				else if (id == 'wuxing2')
					$(this).find('td:eq(5)').html(val);
			} else if (row == '五半') {
				if (id == 'wuban1')
					$(this).find('td:eq(4)').html(val);
				else if (id == 'wuban2')
					$(this).find('td:eq(5)').html(val);
			}
		});

		calcSjjl();
	});

	function calcSjjl() {
		$.each($('tbody tr'), function(k, v) {
			var tqf = $(this).find('td:eq(2)').html();
			var twj = $(this).find('td:eq(3)').html();
			var sqf = $(this).find('td:eq(4)').html();
			var swj = $(this).find('td:eq(5)').html();
			$(this).find('td:eq(6)').html(Math.max(((tqf - sqf) / (twj - swj) * 100), 0).toFixed(2) + '%');
		});
	}

	calcSjjl();
});