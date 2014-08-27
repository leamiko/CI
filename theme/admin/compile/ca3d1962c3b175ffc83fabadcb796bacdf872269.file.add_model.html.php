<?php /* Smarty version Smarty-3.1.19, created on 2014-08-27 18:12:40
         compiled from "D:\Users\xkc\Downloads\PHPnow-1.5.6.4237493736\htdocs\CI\theme\admin\template\ajax\add_model.html" */ ?>
<?php /*%%SmartyHeaderCode:965053fc2b0cca6b22-35352570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca3d1962c3b175ffc83fabadcb796bacdf872269' => 
    array (
      0 => 'D:\\Users\\xkc\\Downloads\\PHPnow-1.5.6.4237493736\\htdocs\\CI\\theme\\admin\\template\\ajax\\add_model.html',
      1 => 1409134359,
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
    'array' => 0,
    'row' => 0,
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
										<a class="btn btn-default" data-target="#myModal" data-toggle="modal">
											顶级节点
										</a>
										<input type="hidden" name="parent" value="0">
									</div>
									<div class="note">
										<strong>父节点</strong> 用于关联表,顶级节点不关联任何表
									</div>
								</section>
								<section>
									<label class="input">
										  <input data-rules="{required:true}" name="table" placeholder="表名:英文命名" type="text">
									</label>
								</section>
								<section>
									<label class="input">
										  <input data-rules="{required:true}" name="comment" placeholder="描述:中文命名" type="text">
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
												<input type="text" name="field_comment" class="ignore" data-rules="{required:true}" placeholder="字段描述">
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
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">节点选择</h4>
					</div>
					<div class="modal-body">
						<script type="text/javascript">
							<!--
							var d = new dTree('d');
							d.add(0,-1,'顶级节点','javascript:void(0)');
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							d.add(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['row']->value['parent'];?>
,'<?php echo $_smarty_tpl->tpl_vars['row']->value['comment'];?>
','javascript:void(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)');
							<?php } ?>
							$('div.modal-body').append(d.toString()).find('a[href^=javascript]').bind('click',function(){
								if($(this).is('[id]')){
									var id = 0,ary = $(this).attr('href').match(/\d+/g),text = $(this).text();
									if($.isArray(ary)){
										id = ary[0];
									}
									$('[data-toggle="modal"]').html(text).next().val(id);
								}
							});
							//-->
						</script>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							关闭窗口
						</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
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
											window.location = json.jump;
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
