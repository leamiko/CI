<?php /* Smarty version Smarty-3.1.19, created on 2014-08-28 17:37:20
         compiled from "D:\Users\xkc\Downloads\PHPnow-1.5.6.4237493736\htdocs\CI\theme\admin\template\ajax\add_model.html" */ ?>
<?php /*%%SmartyHeaderCode:965053fc2b0cca6b22-35352570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca3d1962c3b175ffc83fabadcb796bacdf872269' => 
    array (
      0 => 'D:\\Users\\xkc\\Downloads\\PHPnow-1.5.6.4237493736\\htdocs\\CI\\theme\\admin\\template\\ajax\\add_model.html',
      1 => 1409218636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '965053fc2b0cca6b22-35352570',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fc2b0cca8b64_20573212',
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fc2b0cca8b64_20573212')) {function content_53fc2b0cca8b64_20573212($_smarty_tpl) {?>		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark">
					<i class="fa fa-edit fa-fw "></i> 
						模型系统 
					<span>> 
						创建模型
					</span>
				</h1>
			</div>
		</div>

		<!-- NEW WIDGET START -->
		<article>

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false">
				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

				data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="true"
				data-widget-sortable="false"

				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
					<h2>数据表信息</h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body no-padding">
						
						<form class="smart-form" novalidate="novalidate">
							
							<fieldset>
								<section>
									<label class="input">
										  <input type="checkbox" name="status" class="checkbox" checked="checked">
										  <span>自动安装</span>
									</label>
								</section>
								<section>
									<div class="btn-group">
										<a class="btn btn-default disabled">
											所属
										</a>
										<a class="btn btn-default">
											主表
										</a>
										<input type="hidden" name="parent" value="0">
									</div>
									<div class="note">
										<strong>所属</strong> 用于关联表,默认主表不关联任何表
									</div>
								</section>
								<section>
									<label class="input">
										  <input data-rules="{required:true}" name="table" placeholder="表名" type="text">
									</label>
								</section>
								<section>
									<label class="input">
										  <input data-rules="{required:true}" name="comment" placeholder="注释" type="text">
									</label>
								</section>
							</fieldset>
							
							<footer>
								<button class="btn btn-default" id="next" type="button">
									<i class="fa fa-mail-forward"></i>
									下一步
								</button>
							</footer>
						</form>
						
					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

		</article>


		<!-- NEW COL START -->
		<article><!--  style="display:none;" -->

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

				data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="true"
				data-widget-sortable="false"

				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
					<h2>字段信息</h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body no-padding">
						
						<form action="" class="smart-form validate" novalidate="novalidate">
							<fieldset>
								<section>
									<div class="row" style="display:none;">
										<section class="col col-2">
											<label class="input">
												<input type="text" name="field_name" class="ignore" data-rules="{required:true}" placeholder="名称">
												<b class="tooltip tooltip-top-left">
													<i class="fa fa-warning txt-color-teal"></i> 
													名称不重复且以英文命名</b> 
											</label>
										</section>
										<section class="col col-2">
											<label class="input">
												<input type="text" name="field_comment" class="ignore" data-rules="{required:true}" placeholder="注释">
												<b class="tooltip tooltip-top-left">
													<i class="fa fa-warning txt-color-teal"></i> 
													字段描述且以中文命名</b> 
											</label>
										</section>
										<section class="col col-2">
											<label class="select">
												<select name="field_type" class="ignore">
													<option value="int(11)">INT</option>
													<option value="varchar(500)">VARCHAR</option>
													<option value="text">TEXT</option>
													<option value="datetime">DATE</option>
												</select> <i></i> </label>
										</section>
										<section class="col col-2">
											<label class="input">
												<input type="text" name="field_default"  class="ignore" placeholder="默认值">
												<b class="tooltip tooltip-top-left">
													<i class="fa fa-warning txt-color-teal"></i> 
													字段默认值</b> 
											</label>
										</section>
										<section class="col col-2">
											<label class="select">
												<select name="field_ui" class="ignore">
													<option value="text">文本框</option>
													<option value="textarea">多行文本框</option>
													<option value="radio">单选</option>
													<option value="checkbox">多选</option>
													<option value="select">下拉框</option>
													<option value="hidden">隐藏域</option>
													<option value="upload-picture">上传图片</option>
													<option value="upload-attachment">上传附件</option>
													<option value="editor">编辑器</option>
													<option value="time">时间选择</option>
												</select> <i></i> </label>
										</section>
										<section class="col col-2">
											<button class="btn btn-default" type="button">
												<i class="fa fa-cog"></i>
												高级
											</button>
										</section>
									</div>
									<div class="note">
										<strong>提示：</strong> 单选、多选、下拉框 类型需要设置相应项,多个字段请点击底部&lt;&lt;新增字段&gt;&gt;按钮
									</div>
								</section>
							
							</fieldset>

							<footer>
								<button class="btn btn-primary" id="save" type="button">
									<i class="fa fa-save"></i>
									保存设置
								</button>
								<button class="btn btn-default" id="prev" type="button">
									<i class="fa fa-mail-reply"></i>
									上一步
								</button>
								<button class="btn btn-default" id="add" type="button">
									<i class="fa fa-copy"></i>
									新增字段
								</button>
							</footer>
						</form>
						
					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

		</article>
		<script type="text/plain" id="field_settings">
			
			<form class="smart-form" novalidate="novalidate">
				<fieldset>
					<section>
						<label class="input">
							  <input data-rules="{required:true}" name="name" placeholder="名称" type="text">
						</label>
					</section>
					<section>
						<label class="input">
							  <input data-rules="{required:true}" name="length" placeholder="长度" type="text">
						</label>
					</section>
					<section>
						<label class="input">
							  <input data-rules="{required:true}" name="comment" placeholder="注释" type="text">
						</label>
					</section>
					<section>
						<label class="select">
							<select class="column_type" name="field_type[0]" id="field_0_2">
								<option title="4比特的整数，有符号的表示范围是-2147483648到2147483647,无符号的表示范围是0到4294967295。">
									INT
								</option>
								<option title="变长（0-65,535）字符串，最大有效长度取决于最大行大小">
									VARCHAR
								</option>
								<option title="最多存储 65535（2^16 - 1）字节的文本字段，存储时在内容前使用 2 字节表示内容的字节数">
									TEXT
								</option>
								<option title="日期，支持的范围从 1000-01-01 到 9999-12-31">
									DATE
								</option>
								<optgroup label="数字">
									<option title="1 字节整数，有符号范围从 -128 到 127，无符号范围从 0 到 255">
										TINYINT
									</option>
									<option title="2 字节整数，有符号范围从 -32768 到 32767，无符号范围从 0 到 65535">
										SMALLINT
									</option>
									<option title="3 字节整数，有符号范围从 -8388608 到 8388607，无符号范围从 0 到 16777215">
										MEDIUMINT
									</option>
									<option title="4比特的整数，有符号的表示范围是-2147483648到2147483647,无符号的表示范围是0到4294967295。">
										INT
									</option>
									<option title="8 字节整数，有符号范围从 -9223372036854775808 到 9223372036854775807，无符号范围从 0 到 18446744073709551615">
										BIGINT
									</option>
									<option disabled="disabled">
										-
									</option>
									<option title="定点数（M，D）- 整数部分（M）最大为 65（默认 10），小数部分（D）最大为 30（默认 0）">
										DECIMAL
									</option>
									<option title="单精度浮点数，取值范围从 -3.402823466E+38 到 -1.175494351E-38、0 以及从 1.175494351E-38 到 3.402823466E+38">
										FLOAT
									</option>
									<option title="双精度浮点数，取值范围从 -1.7976931348623157E+308 到 -2.2250738585072014E-308、0 以及从 2.2250738585072014E-308 到 1.7976931348623157E+308">
										DOUBLE
									</option>
									<option title="DOUBLE 的别名（例外：REAL_AS_FLOAT SQL 模式时它是 FLOAT 的别名）">
										REAL
									</option>
									<option disabled="disabled">
										-
									</option>
									<option title="位类型（M），每个值存储 M 位（默认为 1，最大为 64）">
										BIT
									</option>
									<option title="TINYINT(1) 的别名，零值表示假，非零值表示真">
										BOOLEAN
									</option>
									<option title="BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE 的别名">
										SERIAL
									</option>
								</optgroup>
								<optgroup label="日期与时间">
									<option title="日期，支持的范围从 1000-01-01 到 9999-12-31">
										DATE
									</option>
									<option title="日期与时间，支持的范围从 1000-01-01 00:00:00 到 9999-12-31 23:59:59">
										DATETIME
									</option>
									<option title="时间戳，范围从 1970-01-01 00:00:01 UTC 到 2038-01-09 03:14:07 UTC，存储为自纪元（1970-01-01 00:00:00 UTC）起的秒数">
										TIMESTAMP
									</option>
									<option title="时间，范围从 -838:59:59 到 838:59:59">
										TIME
									</option>
									<option title="四位数（4，默认）或两位数（2）的年份，取值范围从 70（1970）到 69（2069）或从 1901 到 2155 以及 0000">
										YEAR
									</option>
								</optgroup>
								<optgroup label="文本">
									<option title="定长（0-255，默认 1）字符串，存储时会向右边补足空格到指定长度">
										CHAR
									</option>
									<option title="变长（0-65,535）字符串，最大有效长度取决于最大行大小">
										VARCHAR
									</option>
									<option disabled="disabled">
										-
									</option>
									<option title="最多存储 255（2^8 - 1）字节的文本字段，存储时在内容前使用 1 字节表示内容的字节数">
										TINYTEXT
									</option>
									<option title="最多存储 65535（2^16 - 1）字节的文本字段，存储时在内容前使用 2 字节表示内容的字节数">
										TEXT
									</option>
									<option title="最多存储 16777215（2^24 - 1）字节的文本字段，存储时在内容前使用 3 字节表示内容的字节数">
										MEDIUMTEXT
									</option>
									<option title="最多存储 4294967295 字节即 4GB（2^32 - 1）的文本字段，存储时在内容前使用 4 字节表示内容的字节数">
										LONGTEXT
									</option>
									<option disabled="disabled">
										-
									</option>
									<option title="类似于 CHAR 类型，但其存储的是二进制字节串而不是非二进制字符串">
										BINARY
									</option>
									<option title="类似于 VARCHAR 类型，但其存储的是二进制字节串而不是非二进制字符串">
										VARBINARY
									</option>
									<option disabled="disabled">
										-
									</option>
									<option title="最多存储 255（2^8 - 1）字节的 BLOB 字段，存储时在内容前使用 1 字节表示内容的字节数">
										TINYBLOB
									</option>
									<option title="最多存储 16777215（2^24 - 1）字节的 BLOB 字段，存储时在内容前使用 3 字节表示内容的字节数">
										MEDIUMBLOB
									</option>
									<option title="最多存储 65535（2^16 - 1）字节的 BLOB 字段，存储时在内容前使用 2 字节表示内容的字节数">
										BLOB
									</option>
									<option title="最多存储 4294967295 字节即 4GB（2^32 - 1）的 BLOB 字段，存储时在内容前使用 4 字节表示内容的字节数">
										LONGBLOB
									</option>
									<option disabled="disabled">
										-
									</option>
									<option title="枚举，可从最多 65535 个值的列表中选择或特殊的错误值 ''">
										ENUM
									</option>
									<option title="可从最多 64 个成员中选择集合为一个值">
										SET
									</option>
								</optgroup>
								<optgroup label="空间">
									<option title="一种能存储任意类型几何体的类型">
										GEOMETRY
									</option>
									<option title="二维空间中的点">
										POINT
									</option>
									<option title="点之间的线性插值曲线">
										LINESTRING
									</option>
									<option title="多边形">
										POLYGON
									</option>
									<option title="点的集合">
										MULTIPOINT
									</option>
									<option title="点之间的线性插值曲线的集合">
										MULTILINESTRING
									</option>
									<option title="多边形的集合">
										MULTIPOLYGON
									</option>
									<option title="任意类型几何体对象的集合">
										GEOMETRYCOLLECTION
									</option>
								</optgroup>
							</select>
						</label>
					</section>
					<section>
						<label class="input">
							  <input data-rules="{required:true}" name="default" placeholder="默认值" type="text">
						</label>
					</section>
					<section>
						<label class="select">
							<select name="form_id">
								<option>表单类型ID</option>
							</select>
						</label>
					</section>
					<section>
						<label class="select select-multiple">
							<select name="validate" multiple="" class="custom-scroll">
								<option value="email">不为空</option>
								<option value="email">邮件</option>
							</select>
						</label>
					</section>
				</fieldset>
			</form>
			
		</script>

		<script type="text/javascript" language="javascript">

			pageSetUp();

			loadScript("<?php echo $_smarty_tpl->tpl_vars['app']->value['theme']['url'];?>
assets/js/plugin/jquery-form/jquery-form.min.js", runFormValidation);

			function runFormValidation() {
				pg.validate('form');
			}

			window.index = 0;
			window.data = {};

			$(function(){
				$('[name=parent]').prev().bind('click',function(){
					$('#myModal').modal();
				});
				$('#next').bind('click',function(){
					var me = this,container = $(me).closest('article');
					if(container.find('form').valid()){
						container.find('[name]').each(function(){
							var key = $(this).attr('name');
							if($(this).attr('type') === 'checkbox'){
								window.data[key] = $(this).is(':checked') ? 1 : 0;
							}else{
								window.data[key] = $(this).val();
							}
						});
						container.hide(300).next().show(500);
					}
				});
				$('#add').bind('click',function(){
					var me = this,row = $(me).closest('article').find('div.row:first').clone();
					row.find('[name]').each(function(){
						var name = $(this).attr('name') + window.index;
						$(this).attr('name',name).removeClass('ignore');
					});
					row.find('[type="button"]:first').bind('click',function(){
						pg.alert({
							id:'fieldModal',
							title:'字段高级设置',
							content:$('#field_settings').html(),
							modal:'toggle',
							buttons:{
								back:{
									html:'<i class="fa fa-mail-reply"></i> 返回',
									event:'click',
									callback:function(){
										$(this).closest('[role="dialog"]').modal('hide');
									}
								},
								submit:{
									html:'<i class="fa fa-save"></i> 保存设置',
									event:'click',
									callback:function(){
										pg.validate('form');
										var me = this,container = $(me).closest('[role="dialog"]').find('form');
										if(container.valid()){
											alert('验证通过');
										}
									}
								}
							}
						});
					});
					$(me).closest('article').find('div.row:last').after(row.show());
					window.index++;
					pg.validate('form');
				}).trigger('click');
				$('#prev').bind('click',function(){
					var me = this;
					$(me).closest('article').hide(300).prev().show(500);
				});
				$('#save').bind('click',function(){
					var me = this,container = $(me).closest('form');
					if(container.valid()){
						window.data.fields = [];
						$(me).attr('disabled',true);
						container.find('div.row').each(function(){
							var count = 0,field = {};
							$(this).find('[name]').each(function(){
								if(!$(this).is('.ignore')){
									var key = $(this).attr('name').replace(/\d+/g,'');
									field[key] = $(this).val();
								}
							});
							for(i in field){
								count++;
							}
							if(count !== 0){
								window.data.fields.push(field);
							}
						});
						setTimeout(function(){
							$.ajax({
								url: '<?php echo $_smarty_tpl->tpl_vars['app']->value['host']['url'];?>
admin/model/save',
								type: 'POST',
								dataType: 'json',
								data: window.data,
								error:function(){
									$(me).attr('disabled',false);
								},
								success:function(json){
									var opt = {
										title:pg[json.module][json.status],
										timeout:4000
									};
									if(json.status[0] == 2){
										opt.color = '#dfb56c';
										opt.iconSmall = 'fa fa-warning bounce animated';
									}else{
										opt.content = "<i class='fa fa-clock-o'></i> <i>2 秒后跳转页面...</i>";
									}
									pg.box(opt);
									if(json.status[0] == 1){
										setTimeout(function(){
											window.location = '<?php echo $_smarty_tpl->tpl_vars['app']->value['host']['url'];?>
admin#'+json.jump;
										},opt.timeout);
									}
									$(me).attr('disabled',false);
								}
							});
						});
					}
				});
			});
		</script><?php }} ?>
