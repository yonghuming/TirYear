<?php
namespace Home\Model;
use Think\Model;


class IdeaModel extends Model{
	// 自动验证设置
	protected $_validate = array(
				array('idea', 'require', '内容必须'),
			//array('idea',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
	);
	// 自动填充设置
  protected $_auto = array(
        array('create_time', 'test', self::MODEL_INSERT, 'callback'),
  		array('author', 'pydo'),
  		
    );
   public function test(){
   	
		
   	//echo date("Y-m-d H:i:s",time());
   		return time();
   }
	
}