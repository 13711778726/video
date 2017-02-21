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
        $text = I('request.text','','string');
        $white = I('request.white','','string');
        $size = I('request.size',1,'int');
        $position = I('request.position',1,'int');
        $time = I('request.time',1,'int');
        $data = array(
            'text'=>$text,'white'=>$white,'size'=>$size,'position'=>$position,'time'=>$time
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
        $list =$Damu->select();
        if($list){
            $return['status'] = 1;
            $return['info'] = '列表数据'
        }else{
            $return['info'] = '列表为空';
        }
        $this->ajaxReturn($return);
    }
}