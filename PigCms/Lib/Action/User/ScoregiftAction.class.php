<?phpclass ScoregiftAction extends UserAction{	public $token;	public function _initialize() {		parent::_initialize();			$token_open=M('token_open')->field('queryname')->where(array('token'=>session('token')))->find();		//if(!strpos($token_open['queryname'],'Scoregift')){$this->error('您还开启该模块的使用权,请到功能模块中添加',U('Function/index',array('token'=>session('token'),'id'=>session('wxid'))));}			$this->itemdb=M('Score_gift');		$this->token=session('token');		$this->assign('token',$this->token);	}	//item~~wzh	public function lists(){		$db=$this->itemdb;		$itemwhere['token']=$this->token;		$count      = $db->where($itemwhere)->order('id desc')->count();		$Page       = new Page($count,20);		$show       = $Page->show();		$data =  $db->where($itemwhere)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();					$this->assign('page',$show);		$this->assign('data',$data);		//dump($data);exit;		$this->display();		}		public function gift_set(){		$db=$this->itemdb;		$itemwhere['token']=$this->token;		if($this->_get('id')){$itemwhere['id']=$this->_get('id');}		if(IS_POST){			$_POST['token']=$itemwhere['token'];			$_POST['score']=intval($_POST['score']);			if(empty($_POST['id'])){				if($db->add($_POST)){					$this->success('礼品添加成功',U('Scoregift/lists',array('token'=>$this->token)));				}else{$this->error('礼品添加失败',U('Scoregift/lists',array('token'=>$this->token)));}			}else{				if($db->where(array('id'=>$_POST['id']))->save($_POST)){					$this->success('礼品修改成功',U('Scoregift/lists',array('token'=>$this->token)));				}else{$this->error('礼品修改失败',U('Scoregift/lists',array('token'=>$this->token)));}			}		}else{			$isUpdate = $this->_get('id')?1:0;			if($itemwhere['id']){							$set=$db->where($itemwhere)->find();				$this->assign('set',$set);			}			$this->assign('isUpdate',$isUpdate);			$this->display();		}	}	public function gift_del(){		$db=$this->itemdb;		$itemwhere['token']=$this->token;		$itemwhere['id']=$this->_get('id')?$this->_get('id'):$this->error('操作错误',U('Scoregift/lists',array('token'=>$this->token)));		$db->where($itemwhere)->delete()?$this->success('礼品删除成功',U('Scoregift/lists',array('token'=>$this->token))):$this->error('礼品删除失败',U('Scoregift/lists',array('token'=>$this->token)));	}	public function exchange_user(){				$itemdb=$this->itemdb;		$userdb=M('Userinfo');		$logdb=M('Score_logs');		$token=$this->token;			if(IS_POST){			$userinfo=$userdb->where(array('id'=>$_POST['userid']))->find();			$iteminfo=$itemdb->where(array('id'=>$_POST['itemid']))->find();			if($userinfo['total_score']>$iteminfo['score']){				//echo 				$scoreStatus=$userdb->where(array('id'=>$_POST['userid']))->setDec('total_score',$iteminfo['score']);				if($scoreStatus){					$logdata['uid']=$_POST['userid'];					$logdata['scoretype']=1;					$logdata['typename']='兑换商品';					$logdata['time']=time();					$str.=date('Y年m月d日 H:i',$logdata['time']).' 会员'.$userinfo['truename'].'兑换'.$iteminfo['name'].'消耗了'.$iteminfo['score'].'积分';									$logdata['info']=$str;					if($logdb->add($logdata)){						$data['error']=1;						$data['msg']='恭喜您兑换成功';					}else{						$data['error']=0;						$data['msg']='系统出错，未能写入日志，请联系管理员!!';					}				}else{					$data['error']=0;					$data['msg']='系统繁忙，未能成功兑换，请稍候重试';				}			}else{				$data['error']=0;				$data['msg']='亲，您的积分不足以兑换此商品呢！请继续努力呢！';						}			$data['url']=U('Scoregift/exchange_user',array('token'=>$token,'acid'=>$acid));			echo json_encode($data);exit;		}else{			$userlist=$userdb->where(array('token'=>$this->token))->select();			$item_list=$itemdb->where(array('token'=>$this->token,'status'=>'1'))->order('score asc')->select();			$this->assign('userlist',$userlist);			$this->assign('item_list',$item_list);			$this->display();		}	}	//兑换记录	public function logs(){		$acid=$this->_get('acid');		$logdb=M('Score_logs');		$userdb=M('Userinfo');		$where['token']=$this->token;		$where['scoretype']=1;		$count      =$logdb->where($where)->order('id desc')->count();		$Page       = new Page($count,20);		$show       = $Page->show();		//sousuo~wzh		if(IS_POST){			if($_POST['allsmtype']==2){				for ($i=0;$i<40;$i++){					if (isset($_POST['id_'.$i])){						$thiCartInfo=$logdb->where(array('id'=>intval($_POST['id_'.$i])))->delete();					}				}				$this->success('操作成功',U('Scoregift/logs',array('token'=>$this->token)));				exit;			}		}		$data =  $logdb->where($where)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();			foreach($data as $key=>$val){			$data[$key]['user']=$userdb->field('truename,tel')->where(array('id'=>$val['uid']))->find();		}		$this->assign('page',$show);		$this->assign('data',$data);		$this->display();	}	//删除logs_del	public function logs_del(){		$acid=$this->_get('acid');		$id=$this->_get('id');		$scoretype=$this->_get('scoretype')?$this->_get('scoretype'):1;		$logdb=$this->logdb;		$status=$logdb->where(array('id'=>$id,'scoretype'=>$scoretype))->delete();		$status?$this->success("删除成功",U('Scoregift/logs',array('token'=>$this->token))):$this->error("删除失败",U('Scoregift/logs',array('token'=>$this->token)));	}}?>