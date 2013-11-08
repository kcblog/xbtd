			<h3>技能升級</h3>
			<hr />

			<div class="table-responsive">
				<table class="table table-hover text-center">
					<thead>
						<tr>
							<th class="text-center">等級</th>
							<th class="text-center">一級</th>
							<th class="text-center">二級</th>
							<th class="text-center">三級</th>
							<th class="text-center">四級</th>
							<th class="text-center">五級</th>
						</tr>
					</thead>
					<tbody>
<?php
$tlvl1 = $tlvl2 = $tlvl3 = $tlvl4 = $tlvl5 = 0;

for ($i = 1; $i <= 10; $i++) {
	$lvl1 = $i * $i * 100;
	$lvl2 = $i * $i * 100 * 1.5;
	$lvl3 = $i * $i * 100 * 2;
	$lvl4 = $i * $i * 100 * 2.5;
	$lvl5 = $i * $i * 100 * 3;

	if ($i > 1) {
		$tlvl1 += $lvl1;
		$tlvl2 += $lvl2;
		$tlvl3 += $lvl3;
		$tlvl4 += $lvl4;
		$tlvl5 += $lvl5;
	}
?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo number_format($lvl1); ?>
							<td><?php echo number_format($lvl2); ?>
							<td><?php echo number_format($lvl3); ?>
							<td><?php echo number_format($lvl4); ?>
							<td><?php echo number_format($lvl5); ?>
						</tr>
<?php
}
?>
					</tbody>
					<tfoot>
						<tr>
							<td>總共</td>
							<td><?php echo number_format($tlvl1); ?>
							<td><?php echo number_format($tlvl2); ?>
							<td><?php echo number_format($tlvl3); ?>
							<td><?php echo number_format($tlvl4); ?>
							<td><?php echo number_format($tlvl5); ?>
						</tr>
					</tfoot>
				</table>
			</div>