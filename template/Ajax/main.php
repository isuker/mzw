<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['ĥ�������ï����ֈ�����î����ċ��']=base64_decode('cGFyc2VfdXJs');$zym_decrypt['����������Ô�������È��Ë�������']=base64_decode('aGVhZGVy'); ?>
<?php
if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$referer=$GLOBALS['zym_decrypt']['ĥ�������ï����ֈ�����î����ċ��']($_SERVER['HTTP_REFERER']);$referer=$referer['host'];if($http_host!=$referer)exit('CSRF Security Error');@$GLOBALS['zym_decrypt']['����������Ô�������È��Ë�������'](base64_decode('Q29udGVudC1UeXBlOiB0ZXh0L2h0bWw7IGNoYXJzZXQ9VVRGLTg='));function showmsg($content ='未知的异常',$type =4,$back =false,$die =false){switch($type){case 1: $panel="success";break;case 2: $panel="info";break;case 3: $panel="warning";break;case 4: $panel="danger";break;}echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwt').$panel.'">
      <div class="panel-heading">
        <h3 class="panel-title">提示信息</h3>
        </div>
        <div class="panel-body">';echo $content;global $mod;if ($mod == 'qqjob'){echo '<hr/><a href="#" onclick="showlist(\'qqtask\',1)""><< 返回我的任务列表</a>';}elseif ($mod == 'signjob'){echo '<hr/><a href="#" onclick="showlist(\'signtask\',1)""><< 返回我的任务列表</a>';}elseif ($mod == 'wzjob'){echo '<hr/><a href="#" onclick="showlist(\'wztask\',1)""><< 返回我的任务列表</a>';}elseif ($mod == 'addqq'){echo '<hr/><a href="#" onclick="showlist(\'qqlist\',1)""><< 返回我的QQ列表</a>';}echo base64_decode('PC9kaXY+DQogICAgPC9kaXY+');include ROOT.base64_decode('dGVtcGxhdGUvSG9tZS9mb290LnBocA==');exit;}?>