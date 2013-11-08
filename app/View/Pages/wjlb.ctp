<?php
$data = array(
	'五星' => array(
		'謀士' => array(
			'左慈' => '陽炎',
			'于吉' => '颶風',
			'曹奐' => '落石',
			'甄宓' => '落石',
			'郭嘉' => '落石',
			'荀彧' => '颶風',
			'諸葛亮' => '落石',
			'徐庶' => '落石',
			'法正' => '颶風',
			'龐統' => '陽炎',
			'魯肅' => '軍樂',
			'陸遜' => '陽炎',
			'貂蟬' => '落石',
			'司馬懿' => '落石',
		),
		'揮砍' => array(
			'曹操' => '無雙',
			'郭淮' => '復仇',
			'馬超' => '突進',
			'趙雲' => '無雙',
			'關羽' => '武聖',
			'淩統' => '衝鋒',
			'孫策' => '制霸',
			'孫尚香' => '享樂',
			'呂布' => '霸者',
			'呂玲綺' => '焰擊',
		),
		'重擊' => array(
			'曹仁' => '橫掃',
			'許褚' => '無雙',
			'徐晃' => '忠魂',
			'張郃' => '破軍',
			'關索' => '突擊',
			'劉備' => '仁德',
			'張飛' => '連擊',
			'星彩' => '奇謀',
			'呂蒙' => '武亂',
			'周泰' => '武奮',
			'甘甯' => '強襲',
			'夏侯惇' => '無雙',
		),
		'突刺' => array(
			'典韋' => '不屈',
			'夏侯淵' => '神射',
			'張遼' => '奇襲',
			'曹丕' => '火神',
			'曹洪' => '王佑',
			'魏延' => '戰勝',
			'黃忠' => '烈弓',
			'薑維' => '鬼才',
			'孫堅' => '據守',
			'孫權' => '喪志',
			'徐盛' => '齊發',
			'黃蓋' => '天命',
			'周瑜' => '連營',
			'太史慈' => '貫穿',
			'夏侯霸' => '制霸',
		),
	),
	'四半' => array(
		'謀士' => array(
			'陳宮' => '鼓舞',
			'張春華' => '颶風',
			'司馬昭' => '颶風',
			'賈充' => '落石',
			'杜預' => '陽炎',
			'楊修' => '陽炎',
			'馬謖' => '颶風',
			'黃月英' => '陽炎',
			'鄧芝' => '回復',
			'費禕' => '颶風',
			'盧植' => '落石',
			'荀攸' => '颶風',
			'陳琳' => '颶風',
			'許攸' => '颶風',
			'田豐' => '陽炎',
			'賈詡' => '回復',
		),
		'揮砍' => array(
		),
		'重擊' => array(
		),
		'突刺' => array(
		),
	),
	'四星' => array(
		'謀士' => array(
		),
		'揮砍' => array(
		),
		'重擊' => array(
		),
		'突刺' => array(
		),
	),
);
?>
			<h3>武將列表</h3>
			<hr />

			<ul class="nav nav-tabs">
<?php
$i = 0;
$contents = '';

foreach ($data as $star => $types) {
	$i++;
	$starid = substr(md5($star), -7);
	$j = 0;
?>
				<li><a href="#tab-<?php echo $starid; ?>" data-toggle="tab"><?php echo $star; ?></a></li>
<?php
	$contents .= '<div class="tab-pane' . ($i == 1 ? ' active' : '') . '" id="tab-' . $starid . '"><div class="panel-group" id="accordion-' . $starid . '">';
	foreach ($types as $type => $heroes) {
		$j++;
		$typeid = substr(md5($type), -7);
		$contents .= '
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion-' . $starid . '" href="#collapse-' . $starid . '-' . $typeid . '">
										<h4 class="panel-title">' . $type . '</h4>
									</a>
								</div>
							</div>
							<div id="collapse-' . $starid . '-' . $typeid . '" class="panel-collapse collapse' . ($j == 1 ? ' in' : '') . '">
								<div class="panel-body">';
		foreach ($heroes as $name => $skill) {
			$contents .= '<button class="btn btn-default hero">' . $name . ' - ' . $skill . '</button>';
		}
		$contents .= '
								</div>
							</div>';
	}
	$contents .= '</div></div>';
}
?>
			</ul>

			<div class="tab-content">
<?php echo $contents; ?>
			</div>

<?php echo $this->Html->script('application.wjlb', array('block' => 'script')); ?>