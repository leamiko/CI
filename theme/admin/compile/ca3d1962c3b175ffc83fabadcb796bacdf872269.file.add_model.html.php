<?php /* Smarty version Smarty-3.1.19, created on 2014-08-26 09:58:09
         compiled from "D:\Users\xkc\Downloads\PHPnow-1.5.6.4237493736\htdocs\CI\theme\admin\template\ajax\add_model.html" */ ?>
<?php /*%%SmartyHeaderCode:965053fc2b0cca6b22-35352570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca3d1962c3b175ffc83fabadcb796bacdf872269' => 
    array (
      0 => 'D:\\Users\\xkc\\Downloads\\PHPnow-1.5.6.4237493736\\htdocs\\CI\\theme\\admin\\template\\ajax\\add_model.html',
      1 => 1409047088,
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
					<div class="widget-body">

						<form class="form-horizontal" novalidate="novalidate">
							
							<fieldset>
								<div class="form-group">
									<label class="col-md-2 control-label">状态</label>
									<div class="col-md-10">
										<label class="checkbox-inline">
											  <input type="checkbox" name="status" class="checkbox" checked="checked" value="0">
											  <span>自动安装</span>
										</label>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">父节点</label>
									<div class="col-md-10">
										<select name="parent" class="form-control">
											<option value="0">顶级节点</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">表名</label>
									<div class="col-md-10">
										<input class="form-control" name="table" placeholder="以英文命名" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">描述</label>
									<div class="col-md-10">
										<input class="form-control" name="comment" placeholder="以中文命名" type="text">
									</div>
								</div>
							</fieldset>
							
							<div class="form-actions">
								<div class="row">
									<div class="col-md-12">
										<button class="btn btn-default" type="button">
											<i class="fa fa-mail-forward"></i>
											下一步
										</button>
									</div>
								</div>
							</div>

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

						<form action="" class="smart-form" novalidate="novalidate">
							<footer>
								<button class="btn btn-default" type="button">
									<i class="fa fa-copy"></i>
									新增字段
								</button>
							</footer>
							<fieldset>
								<section>
									<div class="row">
										<section class="col col-3">
											<label class="input">
												<input type="text" data-field="name" placeholder="字段名称">
												<b class="tooltip tooltip-top-left">
													<i class="fa fa-warning txt-color-teal"></i> 
													名称不重复且以英文命名</b> 
											</label>
										</section>
										<section class="col col-3">
											<label class="input">
												<input type="text" data-field="comment" placeholder="字段描述">
												<b class="tooltip tooltip-top-left">
													<i class="fa fa-warning txt-color-teal"></i> 
													字段描述且以中文命名</b> 
											</label>
										</section>
										<section class="col col-2">
											<label class="select">
												<select class="input-sm" name="type">
													<option value="int(11)">INT</option>
													<option value="varchar(500)">VARCHAR</option>
													<option value="text">TEXT</option>
													<option value="datetime">DATE</option>
												</select> <i></i> </label>
										</section>
										<section class="col col-2">
											<label class="input">
												<input type="text" data-field="default" placeholder="默认值">
												<b class="tooltip tooltip-top-left">
													<i class="fa fa-warning txt-color-teal"></i> 
													字段默认值</b> 
											</label>
										</section>
										<section class="col col-2">
											<label class="select">
												<select class="input-sm" name="type">
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
								<button class="btn btn-primary" type="submit">
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
				

				var $checkoutForm = $('article').first().find('form').validate({
				// Rules for form validation
					rules : {
						table : {
							required : true
						},
						comment : {
							required : true
						}
					},
			
					// Messages for form validation
					messages : {
						table : {
							required : '您还没有填写表的名称'
						},
						comment : {
							required : '您还没有填写表的描述'
						}
					},
			
					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});
			}
						
			$(function(){
				var article = $('article');
				article.first().find('button').bind('click',function(){
					if($('article').first().find('form').valid()){
						article.first().hide(300);
						article.last().show(500);
					}
				});
				article.last().find('button:first').bind('click',function(){
					var row = article.last().find('div.row:first').clone();
					article.last().find('div.row:last').after(row);
				});
				article.last().find('button:last').bind('click',function(){
					article.last().hide(300);
					article.first().show(500);
				});
			});
		</script><?php }} ?>
