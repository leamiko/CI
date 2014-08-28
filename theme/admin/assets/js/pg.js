jQuery.extend(jQuery.validator.messages, {
    required: "必选、必填、字段",
	remote: "请修正该字段",
	email: "请输入正确格式的电子邮件",
	url: "请输入合法的网址",
	date: "请输入合法的日期",
	dateISO: "请输入合法的日期 (ISO).",
	number: "请输入合法的数字",
	digits: "只能输入整数",
	creditcard: "请输入合法的信用卡号",
	equalTo: "请再次输入相同的值",
	accept: "请输入拥有合法后缀名的字符串",
	maxlength: jQuery.validator.format("请输入一个 长度最多是 {0} 的字符串"),
	minlength: jQuery.validator.format("请输入一个 长度最少是 {0} 的字符串"),
	rangelength: jQuery.validator.format("请输入 一个长度介于 {0} 和 {1} 之间的字符串"),
	range: jQuery.validator.format("请输入一个介于 {0} 和 {1} 之间的值"),
	max: jQuery.validator.format("请输入一个最大为{0} 的值"),
	min: jQuery.validator.format("请输入一个最小为{0} 的值")
});

var pg;
(function(){
	pg = {
		ele:{},
		validate:function(e){
			//注册所有表单验证事件
			$(e).each(function(){
				var me = this;
				if($(me).find('[data-rules]').size() !== 0){
					$(me).validate({
						ignore: ".ignore",
						errorPlacement : function(error, element) {
							error.insertAfter(element.parent());
						}
					});
					$(me).find('[data-rules]').each(function(){
						var _rules = $(this).data('rules');
						$(this).rules("add",eval('('+_rules+')'));
					});
				}
			});
		},
		box:function(opt){
			var _opt = {
				title : "未知错误",
				content : "<i class='fa fa-clock-o'></i> <i>2 秒后关闭提示...</i>",
				color : "#296191",
				iconSmall : "fa fa-thumbs-up bounce animated",
				timeout : 4000
			}
			var settings = $.extend(_opt, opt);
			$.smallBox(settings);
		},
		alert:function(opt){
			var _opt = {
				id:'myModal',
				title : "警告",
				content : "<h1>未知错误</h1>",
				modal : 'show',
				buttons : {}
			}
			var settings = $.extend(_opt, opt);
			var me = this,modal;
			if($('#'+settings.id).size() === 0){
				var tmp = $('#myModal').clone();
					tmp.attr('id',settings.id);
				$(document.body).append(tmp);
			}
			modal = $('#'+settings.id);
			if(!me[settings.id]){
				modal.find('#myModalLabel').append(settings.title);
				modal.find('div.modal-body').append(settings.content);
				for(i in settings.buttons){
					var tmp = $('<button type="button" class="btn btn-default"></button>');
					tmp.attr('id',i).html(settings.buttons[i].html);
					if(settings.buttons[i].event && settings.buttons[i].callback){
						tmp.bind(settings.buttons[i].event,settings.buttons[i].callback);
					}
					modal.find('div.modal-footer').append(tmp);
				}
			}
			me[settings.id] = modal.modal(settings.modal);
		},
		model:{
			10001:'模型更新成功',
			10002:'模型创建成功',
			20000:'请求失败',
			20001:'模型更新失败',
			20002:'模型创建失败',
			20003:'您输入的表名已存在'
		}
	};
})();