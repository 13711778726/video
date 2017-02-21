<?php
namespace Home\Controller;
use Think\Controller;
class VideoController extends Controller {
    public function index(){
		$this->display();	
    }
    public function stone() {
        $return =array('status'=>0,'info'=>'','data'=>array());
        $Damu = M('damulist');
        $danmu = $_POST['danmu'];      
        $data = array(
            'danmu'=>$danmu,'addtime'=>time()
        );
        $res = $Damu ->add($data);
        if($res){
            $return['status'] = 1;
            $return['info'] = '发送成功';
            
        }else{
            $return['info'] = '发送失败';
        }
        $this->ajaxReturn($return);  
    }
    public function query() {
        $return =array('status'=>0,'info'=>'','data'=>array());
        $Damu = M('damulist');
        $list = $Damu->select();
        $return['data'] = $list;
        $this->ajaxReturn($return);
        
    }
}