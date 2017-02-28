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
class PageController extends HomebaseController{
	public function index() {
		
		$id=$_GET['id'];
		$content=sp_sql_page($id);
		
		$this->assign($content);
		$smeta=json_decode($content['smeta'],true);
		$tplname=isset($smeta['template'])?$smeta['template']:"";
		
		$tplname=sp_get_apphome_tpl($tplname, "page");
		//判断栏目
		if($id == 1){
			$this->display(":page");
// 			$this->investment_list();
		}elseif ($id == 2){
			$this->display(":list");
		}else{
			$this->display(":$tplname");
		}

	}
	
	public function nav_index(){
		$navcatname="页面";
		$datas=sp_sql_pages("field:id,post_title;");
		$navrule=array(
				"action"=>"Page/index",
				"param"=>array(
						"id"=>"id"
				),
				"label"=>"post_title");
		exit( sp_get_nav4admin($navcatname,$datas,$navrule) );
	}
	
	public function investment_list($status=1){
		$term_id=3;//写死3
		
		$this->posts_model = D("Portal/Posts");
		$this->terms_model = D("Portal/Terms");
		$this->term_relationships_model = D("Portal/TermRelationships");
		
		if(!empty($_REQUEST["term"])){
			$term_id=intval($_REQUEST["term"]);
			$term=$this->terms_model->where("term_id=$term_id")->find();
			$this->assign("term",$term);
			$_GET['term']=$term_id;
		}
		
		$where_ands=empty($term_id)?array("a.status=$status"):array("a.term_id = $term_id and a.status=$status");

		
		$where= join(" and ", $where_ands);
			
			
		$count=$this->term_relationships_model
		->alias("a")
		->join(C ( 'DB_PREFIX' )."posts b ON a.object_id = b.id")
		->where($where)
		->count();
		
		$page = $_GET['page']?$_GET['page']:0;
		$num = $_GET['number'];
		
		$page_size = ($page-1)*$num;
			
		$posts=$this->term_relationships_model
		->alias("a")
		->join(C ( 'DB_PREFIX' )."posts b ON a.object_id = b.id")
		->where($where)
		->limit($page_size . ',' . $num)
		->order("a.listorder ASC,b.post_modified DESC")->select();

		$data = array();
		$data['current_page'] = $count;//总条数
		$data['list'] = $posts;
		unset($_GET[C('VAR_URL_PARAMS')]);
		echo json_encode($data);exit;
	}
}