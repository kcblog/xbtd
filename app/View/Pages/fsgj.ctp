			<h3>法師攻擊計算</h3>
			<hr />

			<form class="form-horizontal" id="fsgj">
				<div class="form-group">
					<label for="bingli" class="col-md-2 control-label">兵力：</label>
					<div class="col-md-2">
						<input type="number" class="form-control" id="bingli" value="0" />
					</div>
				</div>
				<div class="form-group">
					<label for="zhili" class="col-md-2 control-label">智力：</label>
					<div class="col-md-2">
						<input type="number" class="form-control" id="zhili" value="0" />
					</div>
				</div>
				<div class="form-group">
					<label for="jineng" class="col-md-2 control-label">技能傷害％：</label>
					<div class="col-md-2">
						<input type="number" class="form-control" id="jineng" value="0" />
					</div>
				</div>
				<div class="form-group">
					<label for="zhenfa" class="col-md-2 control-label">陣法等級：</label>
					<div class="col-md-2">
						<select class="form-control" id="zhenfa">
							<option value=""></option>
<?php
for ($i = 80; $i <= 130; $i += 5) {
?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
}
?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2"></div>
					<div class="col-md-2"><input type="submit" class="btn btn-primary" id="btnCalculate" value="計算" /></div>
				</div>
				<div class="form-group">
					<label for="diyiji" class="col-md-2 control-label">第一擊：</label>
					<div class="col-md-2">
						<input type="number" class="form-control" id="diyiji" value="0" readonly="readonly" />
					</div>
				</div>
				<div class="form-group">
					<label for="dierji" class="col-md-2 control-label">第二擊：</label>
					<div class="col-md-2">
						<input type="number" class="form-control" id="dierji" value="0" readonly="readonly" />
					</div>
				</div>
				<div class="form-group">
					<label for="zongji" class="col-md-2 control-label">總計：</label>
					<div class="col-md-2">
						<input type="number" class="form-control" id="zongji" value="0" readonly="readonly" />
					</div>
				</div>
			</form>

<?php echo $this->Html->script('application.fsgj', array('block' => 'script')); ?>