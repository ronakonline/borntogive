<?php

if(! function_exists('frontend_data')){
	function frontend_data($cci=null,$postid=null){
		$ci = get_instance();
		$ci->load->model('CategoryM');
		$ci->load->model('PostM');
		$data['category']= $ci->CategoryM->list_categories();
		$data['posts'] = $ci->PostM->all_posts();
		if($cci!=null){
			$data['ccid'] = $cci;
		}
		if($postid!=null){
			$data['postid'] = $postid;
		}
		return $data;
	}
}
