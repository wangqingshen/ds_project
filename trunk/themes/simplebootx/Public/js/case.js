// 投资案例
var List = {
	page: 1,
	pageSize: 10,
	totalPage: '',
	init: function() {
		this.getList();
		$('.case-more-btn').bind('click', function(){		
			List.getList();
		});
	},

	/**
	 * 动态创建item树
	 * @author 王小圆
	 * @private
	 */
	createItemDom: function(res) {
		var reg = /^http:\/\//,
			linkUrl;
		var item = $('<div class="case-item" />'),
			logo = $('<div class="case-item-logo"/>'),
			icon = $('<div class="case-item-icon" />'),
			dialog = $('<div class="case-item-dialog"/>'),
			img = $('<image class="case-item-img" />'),
			btn = $('<a class="case-item-btn" />'),
			desc = $('<div class="case-item-desc" />'),
			t = $('<span class="case-item-title" />'),
			detail = $('<span class="case-item-detail" />');
		var _src = res.smeta;
		if(_src == '' || _src == undefined) {
			_src = defaultUrl + 'case-default.png'; //默认图
		}else {
			_src = imgUrl + JSON.parse(res.smeta).thumb;
		}
		img.attr({
			'title': res.post_title,
			'src': _src
		});
		if(reg.test(res.post_link)) {
			linkUrl = res.post_link;
		}else{
			linkUrl = 'http://'+res.post_link;
		}
		btn.attr({
			'href': linkUrl,
			'target': '_blank'
		}).text('点击进入网站');
		t.text(res.post_title);
		detail.text(res.post_content);
		icon.append(dialog).append(img).append(btn).hover(
			function(){
				$(this).find('a, .case-item-dialog').show();
			},
			function(){
				$(this).find('a, .case-item-dialog').hide();
			}
		);
		btn.hover(function(){
			$(this).removeClass('case-item-btn').addClass('case-item-btn-hover');
		},function(){
			$(this).removeClass('case-item-btn-hover').addClass('case-item-btn');
		});
		logo.append(icon);
		desc.append(t).append(detail);
		item.append(logo).append(desc);
		return item;
	},

	/**
	 * 获取案例条目信息
	 * @author 王小圆
	 * @private
	 */
	getList: function(){
		var _this = this,
			loadingDom;
		$.ajax({
			type: 'GET',
			url: url,
			data: 'page='+this.page+'&number='+_this.pageSize,
			dataType: 'json',
			beforeSend: function() {
				loadingDom = $('<div id="loading" style="width:1100px;margin:auto;text-align:center;"><img src="'+defaultUrl+'/icon/loading.gif" style="width:60px;height:60px;display:inline-block;"/><span style="color:#666;font-size:14px;">加载中，请稍等</span></div>');
            	$('#invest-case-wrapper').after(loadingDom);
            },
			success: function(data) {
				loadingDom.remove();
				_this.totalPage = data.current_page;
				if (data.current_page) {
					var list = data.list;
					list.map(function(v) {
						var item = List.createItemDom(v);
						$('#invest-case-wrapper').append(item);
					});
					if (list.length < _this.pageSize) { //加载完最后一条
						$('.case-more-wrapper').hide();
						$('#invest-case-wrapper').after('<div  style="width:1100px;margin:30px auto;text-align:center;color:#999;font-size:14px;">已经加载完最后一条信息</div>');
					} else {
						$('.case-more-wrapper').show();
						_this.page++;
					}
					$('.case-item:odd').css('margin-right', 0);
				} else {
					$('#invest-case-wrapper').after('<div  style="width:1100px;margin:30px auto;text-align:center;color:#999;font-size:14px;">未找到投资案例</div>');
				}
				
			},
			error: function() {
				loadingDom.remove();
				$('#invest-case-wrapper').after('<div  style="width:1100px;margin:30px auto;text-align:center;color:#999;font-size:14px;">加载失败，点击<a href="javascript:;" class="case-btn-reset">重新加载</a></div>');
				$('.case-btn-reset').bind('click', function(){
					_this.getList();
				});
			}
		});
	}
};
List.init();