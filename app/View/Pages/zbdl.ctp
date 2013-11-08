			<h3>裝備掉落</h3>
			<hr />

			<div class="table-responsive">
				<table class="table text-center">
					<thead>
						<tr>
							<th class="text-center">城市</th>
							<th class="text-center">主將</th>
							<th class="text-center">備註</th>
							<th class="text-center" style="width: 12%">武器</th>
							<th class="text-center" style="width: 12%">寶物</th>
							<th class="text-center" style="width: 12%">飾品</th>
							<th class="text-center" style="width: 12%">護甲</th>
							<th class="text-center" style="width: 12%">坐騎</th>
							<th class="text-center" style="width: 12%">頭部</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td rowspan="2">上黨</td>
							<td rowspan="2">曹奐</td>
							<td rowspan="2"></td>
							<?php echo zbtd('開嶺坎山刀',		'于吉',		115,	'cheng'); ?>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<?php echo zbtd('鑲金龍骨盔',		'曹睿',		115,	'cheng'); ?>
						</tr>
						<tr>
							<?php echo zbtd('皇帝吳王劍',		'曹植',		115,	'zi'); ?>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<?php echo zbtd('滾銀骨牙盔',		'朱靈',		115,	'zi'); ?>
						</tr>
						<tr>
							<td>許昌</td>
							<td>曹操</td>
							<td></td>
							<?php echo zbtd('鵲畫弓',		'張遼',		110,	'zi'); ?>
							<?php echo zbtd('白虎嘯天鼓',		'郭淮',		110,	'cheng'); ?>
							<?php echo zbtd('秘銀印',		'夏侯淵',	110,	'cheng'); ?>
							<?php echo zbtd('威鋼鎧',		'徐晃',		110,	'zi'); ?>
							<?php echo zbtd('雪蹄青驄馬',		'郭嘉',		110,	'cheng'); ?>
							<?php echo zbtd('鎦金盔',		'曹丕',		110,	'zi'); ?>
						</tr>
						<tr>
							<td>江陵</td>
							<td>劉備</td>
							<td></td>
							<?php echo zbtd('王雙大刀',		'馬超',		110,	'cheng'); ?>
							<?php echo zbtd('木牛流馬',		'張飛',		110,	'zi'); ?>
							<?php echo zbtd('茄形墜角',		'星彩',		110,	'zi'); ?>
							<?php echo zbtd('雲紋鎧',		'諸葛亮',	110,	'cheng'); ?>
							<?php echo zbtd('灰影',			'關索',		110,	'zi'); ?>
							<?php echo zbtd('琥珀瑪瑙盔',		'黃忠',		110,	'cheng'); ?>
						</tr>
						<tr>
							<td>柴桑</td>
							<td>孫堅</td>
							<td></td>
							<td></td>
							<?php echo zbtd('陷陣戰鼓',		'孫尚香',	105,	'zi'); ?>
							<td></td>
							<?php echo zbtd('狻猊鎧',		'淩統',		105,	'cheng'); ?>
							<?php echo zbtd('紫犀',			'吳國太',	105,	'zi'); ?>
							<?php echo zbtd('風翅金盔',		'周瑜',		105,	'cheng'); ?>
						</tr>
						<tr>
							<td>下邳</td>
							<td>呂布</td>
							<td></td>
							<?php echo zbtd('龍鱗刀',		'張邈',		105,	'zi'); ?>
							<?php echo zbtd('獸面寶甲',		'陳宮',		105,	'cheng'); ?>
							<?php echo zbtd('蟬翼屏',		'呂玲綺',	105,	'zi'); ?>
							<td></td>
							<?php echo zbtd('踏雪火龍駒',		'貂禪',		105,	'cheng'); ?>
							<td></td>
						</tr>
						<tr>
							<td>洛陽</td>
							<td>司馬懿</td>
							<td></td>
							<?php echo zbtd('丈八長標',		'司馬昭',	105,	'cheng'); ?>
							<td></td>
							<?php echo zbtd('五色銀鱗網',		'張春華',	105,	'cheng'); ?>
							<?php echo zbtd('精鐵鎧',		'曹休',		105,	'zi'); ?>
							<td></td>
							<?php echo zbtd('飛鳳盔',		'杜預',		105,	'zi'); ?>
						</tr>
					</tbody>
				</table>
			</div>

<?php
function zbtd($name, $hero, $lvl, $color) {
	return '<td class="zb-' . $color . '"><span data-toggle="tooltip" data-placement="bottom" title="' . $hero . '，' . $lvl . '">' . $name . '</span></td>';
}
?>

<?php echo $this->Html->css('style.zbdl', array('block' => 'style')); ?>
<?php echo $this->Html->script('application.zbdl', array('block' => 'script')); ?>