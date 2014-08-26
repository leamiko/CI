<?php /* Smarty version Smarty-3.1.19, created on 2014-08-26 19:19:50
         compiled from "D:\soft\wamp\www\CI\theme\admin\template\ajax\add_model.html" */ ?>
<?php /*%%SmartyHeaderCode:308953fc9773203a01-65953988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '402da89027745882deac5aa6a00f740e302d970a' => 
    array (
      0 => 'D:\\soft\\wamp\\www\\CI\\theme\\admin\\template\\ajax\\add_model.html',
      1 => 1409073586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308953fc9773203a01-65953988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fc977328c584_12975063',
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fc977328c584_12975063')) {function content_53fc977328c584_12975063($_smarty_tpl) {?>		<div class="row">
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
					<div class="widget-body">

						<form class="smart-form" novalidate="novalidate">
							
							<fieldset>
								<section>
									<label class="input">
										  <input type="checkbox" name="status" class="checkbox" checked="checked" value="0">
										  <span>自动安装</span>
									</label>
								</section>
								<section>
									<label class="input">
										<select name="parent" class="form-control">
											<option value="0">顶级节点</option>
										</select>
									</label>
									<div class="note">
										<strong>父节点</strong> 用于关联表,顶级节点不关联任何表
									</div>
								</section>
								<section>
									<label class="input">
										  <input class="form-control" name="table" placeholder="表名:英文命名" type="text">
									</label>
								</section>
								<section>
									<label class="input">
										  <input class="form-control" name="comment" placeholder="描述:中文命名" type="text">
									</label>
								</section>
							</fieldset>
							
							<footer>
								<button class="btn btn-default" type="button">
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
		<article style="display:none;">

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
							<footer>
								<button class="btn btn-default" type="button">
									<i class="fa fa-copy"></i>
									新增字段
								</button>
							</footer>
							<fieldset>
								<section>
									<div class="row" style="display:none;">
										<section class="col col-3">
											<label class="input">
												<input type="text" name="field_name" class="ignore" data-rules="{required:true}" placeholder="字段名称">
												<b class="tooltip tooltip-top-left">
													<i class="fa fa-warning txt-color-teal"></i> 
													名称不重复且以英文命名</b> 
											</label>
										</section>
										<section class="col col-3">
											<label class="input">
												<input type="text" name="field_comment"  class="ignore" data-rules="{required:true}" placeholder="字段描述">
												<b class="tooltip tooltip-top-left">
													<i class="fa fa-warning txt-color-teal"></i> 
													字段描述且以中文命名</b> 
											</label>
										</section>
										<section class="col col-2">
											<label class="select">
												<select name="field_type">
													<option value="int(11)">INT</option>
													<option value="varchar(500)">VARCHAR</option>
													<option value="text">TEXT</option>
													<option value="datetime">DATE</option>
												</select> <i></i> </label>
										</section>
										<section class="col col-2">
											<label class="input">
												<input type="text" name="field_default" placeholder="默认值">
												<b class="tooltip tooltip-top-left">
													<i class="fa fa-warning txt-color-teal"></i> 
													字段默认值</b> 
											</label>
										</section>
										<section class="col col-2">
											<label class="select">
												<select name="field_ui">
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
								<button class="btn btn-default" type="button">
									<i class="fa fa-mail-reply"></i>
									上一步
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

		<script type="text/javascript" language="javascript">

			pageSetUp();

			loadScript("<?php echo $_smarty_tpl->tpl_vars['app']->value['theme']['url'];?>
assets/js/plugin/jquery-form/jquery-form.min.js", runFormValidation);


			// Registration validation script
			function runFormValidation() {
				
			}

			window.index = 0;
			// window.fields = [];
			// function get_fields_json(){
			// 	$('article:last').find('div.row').each(function(){
			// 		var me = this,field  = {};
			// 		$(me).find('[name]').each(function(){
			// 			var key = $(this).attr('name');
			// 			field[key] = $(this).val();
			// 		});
			// 		window.fields.push(field);
			// 	});
			// }
			// function regieter_event(){
			// 	$('.validate').each(function(){
			// 		var me = this,rules = {},messages = {};
			// 		$(me).find('[data-rules]').each(function(){
			// 			if(!$(this).is('event')){
			// 				var key = $(this).attr('name');
			// 				var _rules = $(this).data('rules');
			// 				var _messages = $(this).data('messages');
			// 				rules[key] = eval('('+_rules+')');
			// 				messages[key] = eval('('+_messages+')');
			// 			}
			// 		}).addClass('event');
			// 		$(me).validate({
			// 			rules:rules,
			// 			messages:messages,
			// 			errorPlacement : function(error, element) {
			// 				error.insertAfter(element.parent());
			// 			}
			// 		});
			// 	});
			// }
			$(function(){
				$('article').first().find('button').bind('click',function(){
					var me = this;
					if($(me).closest('form').valid()){
						$('article').first().hide(300);
						$('article').last().show(500);
					}
				});
				$('article').last().find('button:first').bind('click',function(){
					var row = $('article').last().find('div.row:first').clone();
					row.find('[name]').each(function(){
						var name = $(this).attr('name') + window.index;
						$(this).attr('name',name).removeClass('ignore');
					});
					$('article').last().find('div.row:last').after(row.show());
					window.index++;
					pg.validate('form');
				}).trigger('click');
				$('article').last().find('button:last').bind('click',function(){
					$('article').last().hide(300);
					$('article').first().show(500);
				});
				$('#save').bind('click',function(){
					var me = this;
					if($(me).closest('form').valid()){

					}
				});
			});
		</script><?php }} ?>
