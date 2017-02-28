<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Portal\Controller;
use Common\Controller\HomebaseController;
/**
 * 文章列表
*/
class ListController extends HomebaseController {

	//文章内页
	public function index() {
		//获取德商新闻list		
		$lists = sp_sql_posts_paged("cid:1;order:post_date
				DESC;",10);
		$posts = array();
		foreach($lists['posts'] as $key => $val){			
			$posts[$key]['id'] = $val['tid'];
			$posts[$key]['post_title'] = $val['post_title'];
			$posts[$key]['post_excerpt'] = $val['post_excerpt'];
			$posts[$key]['post_hits'] = $val['post_hits'];
			$posts[$key]['smeta'] = $val['smeta'];
			$posts[$key]['year'] = date("Y",strtotime($val['post_date']));
			$posts[$key]['md'] = date("m",strtotime($val['post_date'])).'/'.date("d",strtotime($val['post_date']));
		}
		unset($lists['posts']);
	 
		$this->assign('posts',$posts);
		$this->assign('lists',$lists);
    	$this->display(":list_masonry");
	}
	
	public function nav_index(){
		$navcatname="文章分类";
		$datas=sp_get_terms("field:term_id,name");
		$navrule=array(
				"action"=>"List/index",
				"param"=>array(
						"id"=>"term_id"
				),
				"label"=>"name");
		exit(sp_get_nav4admin($navcatname,$datas,$navrule));
		
	}
	
}
