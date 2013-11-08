$(document).ready(function() {
	$('#btnCalculate').click(function(e) {
		e.preventDefault();

		var bingli = $('#bingli').val();
		var zhili = $('#zhili').val();
		var jineng = $('#jineng').val();
		var zhenfa = $('#zhenfa').val();

		var diyiji = (bingli * jineng / 100 + zhili / 3).toFixed(0);
		var dierji = (diyiji * zhenfa / 100).toFixed(0);
		var zongji = diyiji * 1 + dierji * 1;

		$('#diyiji').val(diyiji);
		$('#dierji').val(dierji);
		$('#zongji').val(zongji);
	});
});