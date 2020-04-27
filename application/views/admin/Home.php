<!-- Selamat Datang di Reflection Photography -->

<div class="collapse navbar-collapse" id="navbarSupportedContent" >
	<span style="text-align: right !important;">Hi Admin!</span>
</div>
</div>
</nav>

<h3 class="mb-4">Selamat Datang di Reflection Photography</h3>
<script type="text/javascript">
	$(function () 
	{
		Highcharts.chart('aset', 
		{
			chart: {
				type: 'column'
			},
			title: {
				text: 'Data Pemesanan'
			},
			xAxis: {
				type: 'category'
			},
			yAxis: {
				title: {
					text: 'Total Pemesanan'
				}

			},
			legend: {
				enabled: false
			},
			plotOptions: {
				series: {
					borderWidth: 0,
					dataLabels: {
						enabled: true,
						format: '{point.y} pemesanan'
					}
				}
			},

			tooltip: {
				headerFormat: '<span style="font-size:11px"></span><br>',
				pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
			},

			series: [{
				colorByPoint: true,
				data: [
				<?php foreach ($pemesanan as $key => $value): ?>
				{
					name: '<?php echo $value['nama_paket'] ?>',
					y: <?php echo $value['jumlah_paket'] ?>,
					drilldown: '<?php echo $value['nama_paket'] ?>'
				},
			<?php endforeach ?>
			]
		}],
	});
	});
</script>
<div id="aset" style="min-width: 310px; height: 400px;margin: 0 auto"></div>
