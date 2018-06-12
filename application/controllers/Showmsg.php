<?php
/*
 * 功能：消息处理
 * author:资料空白
 * time:20180604
 */
class ShowmsgController extends PcBasicController
{

 	public function init()
	{
        parent::init();
	}
	
	public function indexAction()
	{
		$data['code']=$this->getParam('code');
		$data['msg']=$this->getParam('msg');
		$url=$this->getParam('url',false);
		$url=isset($url)?$url:'/';
		$data['url']=$url;
		$data['title']="操作提示:".$data['msg'];
		$this->getView()->assign($data);
	}
}