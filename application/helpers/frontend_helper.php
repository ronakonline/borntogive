<?php

if(! function_exists('frontend_data')){
	function frontend_data($cci=null,$postid=null,$blogid=null){
		$ci = get_instance();
		$ci->load->model('CategoryM');
		$ci->load->model('PostM');
		$ci->load->model('BlogM');
		$data['category']= $ci->CategoryM->list_categories();
		$data['posts'] = $ci->PostM->all_posts();
		$data['blogs'] = $ci->BlogM->list_blogs();
		if($cci!=null){
			$data['ccid'] = $cci;
		}
		if($postid!=null){
			$data['postid'] = $postid;
		}
		if($blogid!=null){
			$data['blogid'] = $blogid;
		}
		return $data;
	}
}
