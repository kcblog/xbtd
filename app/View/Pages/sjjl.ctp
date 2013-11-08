<?php
$rows = array(
	array('韓馥',	'四半',	2,	9),
	array('何進',	'四半',	5,	13),
	array('程普',	'四半',	8,	20),
	array('夏侯惇',	'四半',	9,	25),
	array('司馬懿',	'四半',	13,	33),
	array('呂布',	'五星',	2,	6),
	array('孫堅',	'五星',	3,	20),
	array('劉備',	'五星',	7,	34),
	array('曹操',	'五星',	10,	48),
	array('曹奐',	'五星',	12,	56),
	array('劉禪',	'五星',	14,	64),
	array('孫皓',	'五星',	16,	72),
	array('陳叔寶',	'五半',	1,	7),
	array('李軌',	'五半',	2,	13),
	array('蕭銑',	'五半',	3,	22),
);
?>
			<h3>刷將機率</h3>
			<hr />

			<form class="form-horizontal" id="sjjl">
				<div class="form-group">
					<label for="siban1" class="col-md-2 control-label">四半全法數量：</label>
					<div class="col-md-2">
						<select class="form-control" id="siban1">
<?php
for ($i = 0; $i <= 13; $i++) {
?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
}
?>
						</select>
					</div>
					<label for="wuxing1" class="col-md-2 control-label">五星全法數量：</label>
					<div class="col-md-2">
						<select class="form-control" id="wuxing1">
<?php
for ($i = 0; $i <= 16; $i++) {
?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
}
?>
						</select>
					</div>
					<label for="wuban1" class="col-md-2 control-label">五半全法數量：</label>
					<div class="col-md-2">
						<select class="form-control" id="wuban1">
<?php
for ($i = 0; $i <= 3; $i++) {
?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
}
?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="siban2" class="col-md-2 control-label">四半武將數量：</label>
					<div class="col-md-2">
						<select class="form-control" id="siban2">
<?php
for ($i = 0; $i <= 33; $i++) {
?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
}
?>
						</select>
					</div>
					<label for="wuxing2" class="col-md-2 control-label">五星武將數量：</label>
					<div class="col-md-2">
						<select class="form-control" id="wuxing2">
<?php
for ($i = 0; $i <= 72; $i++) {
?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
}
?>
						</select>
					</div>
					<label for="wuban2" class="col-md-2 control-label">五半武將數量：</label>
					<div class="col-md-2">
						<select class="form-control" id="wuban2">
<?php
for ($i = 0; $i <= 22; $i++) {
?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
}
?>
						</select>
					</div>
				</div>
			</form>

			<hr />

			<div class="table-responsive">
				<table class="table table-hover text-center">
					<thead>
						<tr>
							<th class="text-center">已過主將</th>
							<th class="text-center">最高星級</th>
							<th class="text-center">全法總數</th>
							<th class="text-center">武將總數</th>
							<th class="text-center">全法數量</th>
							<th class="text-center">武將數量</th>
							<th class="text-center">全法概率</th>
						</tr>
					</thead>
					<tbody>
<?php
foreach ($rows as $row) {
?>
						<tr>
							<td><?php echo $row[0]; ?></td>
							<td><?php echo $row[1]; ?></td>
							<td><?php echo $row[2]; ?></td>
							<td><?php echo $row[3]; ?></td>
							<td>0</td>
							<td>0</td>
							<td><?php echo sprintf('%.2f', $row[2] / $row[3] * 100); ?>%</td>
						</tr>
<?php
}
?>
					</tbody>
				</table>
			</div>

<?php echo $this->Html->script('application.sjjl', array('block' => 'script')); ?>