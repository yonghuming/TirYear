<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		
		$User = M("Idea"); // 实例化User对象
		// 查找status值为1的用户数据 以创建时间排序 返回10条数据
		$list = $User->order('create_time desc')->select();
		//dump($list);
		$this->assign('list',$list);
		$this->display();
	}
	public function reply($id){
		echo $id;
		$this->display();
		
	}
    public function insert() {
        $Form = D("Idea");
        if ($Form->create()) {
            if (false !== $Form->add()) {
                $this->success('数据添加成功！');
            } else {
                $this->error('数据写入错误');
            }
        } else {
            // 字段验证错误
            $this->error($Form->getError());
        }
    }
}