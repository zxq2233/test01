<?php define('��', '�');�������ᾬ����ŧ��°�̮�����奞֢�Ħ��;$GLOBALS[��] = explode('|1|2|6', 'KOD_GROUP_PATH|1|2|6{groupPath}|1|2|6KOD_GROUP_SHARE|1|2|6{groupShare}|1|2|6KOD_USER_SELF|1|2|6{userSelf}|1|2|6KOD_USER_SHARE|1|2|6{userShare}|1|2|6KOD_USER_RECYCLE|1|2|6{userRecycle}|1|2|6KOD_USER_FAV|1|2|6{userFav}|1|2|6KOD_GROUP_ROOT_SELF|1|2|6{treeGroupSelf}|1|2|6KOD_GROUP_ROOT_ALL|1|2|6{treeGroupAll}|1|2|6\\|1|2|6/|1|2|6/\\/+/|1|2|6isRoot|1|2|6/../|1|2|6../|1|2|6kodPathType|1|2|6|1|2|6kodPathPre|1|2|6kodPathId|1|2|6kodPathIdShare|1|2|6:|1|2|6share/|1|2|6kodUser|1|2|6userID|1|2|6config|1|2|6pathRoleGroupDefault|1|2|61|1|2|6actions|1|2|6kodShareInfo|1|2|6path|1|2|6role|1|2|6type|1|2|6file|1|2|6fileList|1|2|6folderList|1|2|6share|1|2|6//|1|2|6.cache_data|1|2|6group_not_exist|1|2|6kodPathAuthCheck|1|2|6no_permission_group|1|2|6pathRoleGroup|1|2|6kodPathRoleGroupAuth|1|2|6.|1|2|6no_permission_action|1|2|6pathRoleDefine|1|2|6editor.fileSave|1|2|6auth|1|2|6kodBeforePathId|1|2|6in|1|2|6user|1|2|6size|1|2|6beforePathType|1|2|6uploadFileBefore|1|2|6space_size_use_check|1|2|6uploadFileAfter|1|2|6spaceSizeChange|1|2|6explorer.serverDownloadBefore|1|2|6explorer.unzipBefore|1|2|6explorer.zipBefore|1|2|6explorer.pathCopy|1|2|6explorer.mkfileBefore|1|2|6explorer.mkdirBefore|1|2|6explorer.pathMove|1|2|6explorer.mkfileAfter|1|2|6explorer.pathCopyAfter|1|2|6explorer.unzipAfter|1|2|6explorer.serverDownloadAfter|1|2|6explorer.pathMoveBefore|1|2|6explorer.pathMoveBfter|1|2|6spaceSizeChange_move|1|2|6explorer.pathRemoveAfter|1|2|6space_size_use_reset|1|2|6session_start|1|2|6服务器php组件缺失! (PHP miss lib)<br/>请检查php.ini，需要开启模块: <br/><pre>session,json,curl,exif,mbstring,ldap,gd,pdo,pdo-mysql,xml</pre><br/>|1|2|6accessToken|1|2|6access_token|1|2|6SaeStorage|1|2|6SAE_APPNAME|1|2|6SESSION_PATH_DEFAULT|1|2|6session.save_handler|1|2|6files|1|2|6HTTP_APPNAME|1|2|6kod|1|2|6服务器session写入失败! (session write error)<br/>|1|2|6请检查php.ini相关配置,查看磁盘是否已满,或咨询服务商。<br/><br/>|1|2|6session.save_path=|1|2|6<br/>|1|2|6session.save_handler=|1|2|6settingSystem|1|2|6systemPassword|1|2|6kodExplorer_|1|2|6accessToken error!');���݁���ͽ�����Լ�Ђ���������������;
 define($GLOBALS{��}[0],$GLOBALS{��}{0x001});define($GLOBALS{��}[0x0002],$GLOBALS{��}{0x00003});define($GLOBALS{��}[0x000004],$GLOBALS{��}{0x05});define($GLOBALS{��}[0x006],$GLOBALS{��}{0x0007});define($GLOBALS{��}[0x00008],$GLOBALS{��}{0x000009});define($GLOBALS{��}[0x0a],$GLOBALS{��}{0x00b});define($GLOBALS{��}[0x000c],$GLOBALS{��}{0x0000d});define($GLOBALS{��}[0x00000e],$GLOBALS{��}{0x0f});function _DIR_CLEAR($����){$�ص�=&$GLOBALS{��};$����=str_replace($�ص�[0x0010],$�ص�{0x00011},trim($����));$����=preg_replace($�ص�[0x000012],$�ص�{0x00011},$����);$�޹��=$����;if(isset($GLOBALS[$�ص�{0x0000013}])&& $GLOBALS[$�ص�{0x0000013}]){return $����;}$�=$�ص�[0x014];if(substr($����,0,0x00003)==$�ص�{0x0015}){$����=substr($����,0x00003);}while(strstr($����,$�)){$����=str_replace($�,$�ص�{0x00011},$����);}$����=preg_replace($�ص�[0x000012],$�ص�{0x00011},$����);return $����;}function _DIR($�){$��=&$GLOBALS{��};$�ȴ�=_DIR_CLEAR($�);$�ȴ�=iconv_system($�ȴ�);$�����=array(KOD_GROUP_PATH,KOD_GROUP_SHARE,KOD_USER_SELF,KOD_GROUP_ROOT_SELF,KOD_GROUP_ROOT_ALL,KOD_USER_SHARE,KOD_USER_RECYCLE,KOD_USER_FAV,);����Ҵ�Đ���ń����د���ϊ���ڢ핏���;$GLOBALS[$��[0x00016]]=$��{0x000017};��������ꮾ�؈���������޹;$GLOBALS[$��[0x0000018]]=HOME;$GLOBALS[$��{0x019}]=$��{0x000017};unset($GLOBALS[$��[0x001a]]);�΂����˰�;foreach($����� as $��){if(substr($�ȴ�,0,strlen($��))==$��){$GLOBALS[$��[0x00016]]=$��;$얟=explode($��{0x00011},$�ȴ�);$��=$얟[0];unset($얟[0]);$�Ī�=implode($��{0x00011},$얟);$��=explode($��{0x0001b},$��);if(count($��)>0x001){$GLOBALS[$��{0x019}]=trim($��[0x001]);}else{$GLOBALS[$��{0x019}]=$��{0x000017};}break;}}switch($GLOBALS[$��[0x00016]]){case $��{0x000017}:$�ȴ�=iconv_system(HOME).$�ȴ�;�蕵���������ݕ������󽣟;break;�ˠ�;case KOD_USER_RECYCLE:$GLOBALS[$��[0x0000018]]=trim(USER_RECYCLE,$��{0x00011});���������ǹ��;$GLOBALS[$��{0x019}]=$��{0x000017};return iconv_system(USER_RECYCLE).$��{0x00011}.str_replace(KOD_USER_RECYCLE,$��{0x000017},$�ȴ�);�������ҵ�������֎�����;case KOD_USER_SELF:$GLOBALS[$��[0x0000018]]=trim(HOME_PATH,$��{0x00011});��؏ވ������������˿�;$GLOBALS[$��{0x019}]=$��{0x000017};return iconv_system(HOME_PATH).$��{0x00011}.str_replace(KOD_USER_SELF,$��{0x000017},$�ȴ�);������㮰����ɶ;case KOD_USER_FAV:$GLOBALS[$��[0x0000018]]=trim(KOD_USER_FAV,$��{0x00011});$GLOBALS[$��{0x019}]=$��{0x000017};return KOD_USER_FAV;�В��ٗ��������Г����󀹻��ىۣ󭶿���͉�̒����ڷ�;case KOD_GROUP_ROOT_SELF:$GLOBALS[$��[0x0000018]]=trim(KOD_GROUP_ROOT_SELF,$��{0x00011});��௮�Ӣ�≜�ץͥ�����܂�������ͤ��Ӛ����ܘ���ʥ�����Þ�;$GLOBALS[$��{0x019}]=$��{0x000017};return KOD_GROUP_ROOT_SELF;case KOD_GROUP_ROOT_ALL:$GLOBALS[$��[0x0000018]]=trim(KOD_GROUP_ROOT_ALL,$��{0x00011});$GLOBALS[$��{0x019}]=$��{0x000017};���������궽;return KOD_GROUP_ROOT_ALL;case KOD_GROUP_PATH:$���=systemGroup::getInfo($GLOBALS[$��{0x019}]);if(!$GLOBALS[$��{0x019}]|| !$���)return !1;owner_group_check($GLOBALS[$��{0x019}]);��㘑���ͨښ���̩�����Ω;$GLOBALS[$��[0x0000018]]=group_home_path($���);$�ȴ�=iconv_system($GLOBALS[$��[0x0000018]]).$�Ī�;�����ٸͧ��ہ����紊���˕�ǎ��������Ƿ����񶤝���������;break;��؁�罹�ܪ�ם�������������������;case KOD_GROUP_SHARE:$���=systemGroup::getInfo($GLOBALS[$��{0x019}]);�����;if(!$GLOBALS[$��{0x019}]|| !$���)return !1;owner_group_check($GLOBALS[$��{0x019}]);�͔�գ�ȁȭ���ڟݷ�ߕ�ʱ�ժ�����ɐ����赮���ˍ��ą���Ռū�禲������;$GLOBALS[$��[0x0000018]]=group_home_path($���).$��[0x00001c];$�ȴ�=iconv_system($GLOBALS[$��[0x0000018]]).$�Ī�;break;���韭�㳞����֠;case KOD_USER_SHARE:$���=systemMember::getInfo($GLOBALS[$��{0x019}]);if(!$GLOBALS[$��{0x019}]|| !$���)return !1;if($GLOBALS[$��{0x019}]!=$_SESSION[$��{0x000001d}][$��[0x01e]]){$Ƶ�=$GLOBALS[$��{0x001f}][$��[0x00020]][$��{0x000021}][$��[0x0000022]];path_role_check($Ƶ�);}$GLOBALS[$��[0x0000018]]=$��{0x000017};$GLOBALS[$��[0x001a]]=$�;���ãפ����;if($�Ī�==$��{0x000017}){return $�ȴ�;}else{$����=explode($��{0x00011},$�Ī�);$����[0]=iconv_app($����[0]);$�����=systemMember::userShareGet($GLOBALS[$��{0x019}],$����[0]);$GLOBALS[$��{0x023}]=$�����;$GLOBALS[$��[0x001a]]=KOD_USER_SHARE.$��{0x0001b}.$GLOBALS[$��{0x019}].$��{0x00011}.$����[0].$��{0x00011};unset($����[0]);if(!$�����)return !1;$�ȝ�=rtrim($�����[$��[0x0024]],$��{0x00011}).$��{0x00011}.iconv_app(implode($��{0x00011},$����));���ڂ���������ӽ�������ϗޗ���ӈ�;if($���[$��{0x00025}]!=$��{0x000021}){$�����=user_home_path($���);$GLOBALS[$��[0x0000018]]=$�����.rtrim($�����[$��[0x0024]],$��{0x00011}).$��{0x00011};$�ȴ�=$�����.$�ȝ�;}else{$GLOBALS[$��[0x0000018]]=$�����[$��[0x0024]];$�ȴ�=$�ȝ�;}if($�����[$��[0x000026]]==$��{0x0000027}){$GLOBALS[$��[0x001a]]=rtrim($GLOBALS[$��[0x001a]],$��{0x00011});$GLOBALS[$��[0x0000018]]=rtrim($GLOBALS[$��[0x0000018]],$��{0x00011});}$�ȴ�=iconv_system($�ȴ�);}break;default:break;��ћ�;}if($�ȴ�!=$��{0x00011}){$�ȴ�=rtrim($�ȴ�,$��{0x00011});if(is_dir($�ȴ�))$�ȴ�=$�ȴ�.$��{0x00011};}return $�ȴ�;}function _DIR_OUT($����){$��ڙ=&$GLOBALS{��};if(is_array($����)){foreach($����[$��ڙ[0x028]] as $��=>&$�׻��){$�׻��[$��ڙ[0x0024]]=preClear($�׻��[$��ڙ[0x0024]]);}foreach($����[$��ڙ{0x0029}] as $��=>&$�׻��){$�׻��[$��ڙ[0x0024]]=preClear(rtrim($�׻��[$��ڙ[0x0024]],$��ڙ{0x00011}).$��ڙ{0x00011});}}else{$����=preClear($����);}return $����;}function preClear($���){$��仑=&$GLOBALS{��};$����=$GLOBALS[$��仑[0x00016]];��������낌ľ���������ԟٖ����������;$���=rtrim($GLOBALS[$��仑[0x0000018]],$��仑{0x00011});�澑ܻ��������ת�Ѕ��͵է�Ӆ���;$���=array(KOD_USER_FAV,KOD_GROUP_ROOT_SELF,KOD_GROUP_ROOT_ALL);��۟;if(isset($GLOBALS[$��仑[0x00016]])&& in_array($GLOBALS[$��仑[0x00016]],$���)){return $���;}if(ST==$��仑[0x0002a]){return str_replace($���,$��仑{0x000017},$���);}if($GLOBALS[$��仑{0x019}]!=$��仑{0x000017}){$����.=$��仑{0x0001b}.$GLOBALS[$��仑{0x019}].$��仑{0x00011};}if(isset($GLOBALS[$��仑[0x001a]])){$����=$GLOBALS[$��仑[0x001a]];}$��=$����.str_replace($���,$��仑{0x000017},$���);$��=str_replace($��仑{0x00002b},$��仑{0x00011},$��);return $��;�����ɰ���ޤ���������������;}include(CLASS_DIR.$GLOBALS{��}[0x000002c]);function owner_group_check($�){$�=&$GLOBALS{��};if(!$�)show_json(LNG($�{0x02d}).$�,!1);if($GLOBALS[$�{0x0000013}]||(isset($GLOBALS[$�[0x002e]])&& $GLOBALS[$�[0x002e]]===!0)){return;}$�=systemMember::userAuthGroup($�);if($�==!1){if($GLOBALS[$�[0x00016]]==KOD_GROUP_PATH){show_json(LNG($�{0x0002f}),!1);}else if($GLOBALS[$�[0x00016]]==KOD_GROUP_SHARE){$�=$GLOBALS[$�{0x001f}][$�[0x00020]][$�{0x000021}];}}else{$�=$GLOBALS[$�{0x001f}][$�[0x000030]][$�];}path_role_check($�[$�[0x0000022]]);}function path_role_check($���){$�=&$GLOBALS{��};if($GLOBALS[$�{0x0000013}]||(isset($GLOBALS[$�[0x002e]])&& $GLOBALS[$�[0x002e]]===!0)){return;}$��=role_permission_arr($���);$GLOBALS[$�{0x0000031}]=$��;if(!isset($��[ST.$�[0x032].ACT])&& ST!=$�[0x0002a]){show_json(LNG($�{0x0033}),!1);}}function role_permission_arr($�){$�=&$GLOBALS{��};$����=array();���������߽����������ɿǒ���ھ�����ś��ߩ�؂�����ݿ������;$���=$GLOBALS[$�{0x001f}][$�[0x00034]];foreach($� as $��=>$��){if(!$��)continue;$�=explode($�{0x0001b},$��);�̉�ꁀ��ƻ�������Î���܆Ũ�����̚׸�׃۟���ǡ�Ş��؈ζ��߭�߾ŭ؝����Ж;if(count($�)==0x0002&& is_array($���[$�[0]])&& is_array($���[$�[0]][$�[0x001]])){$����=array_merge($����,$���[$�[0]][$�[0x001]]);}}$�=array();���Ë�;foreach($���� as $��){$�[$��]=$�{0x000021};�����廊����盪�Ҝ��ӛ�ަ���ڨ��ӊ�;}return $�;����������Ǚ������燾°Ǩ���ȍ���;}function check_file_writable_user($��){$��=&$GLOBALS{��};if(!isset($GLOBALS[$��[0x00016]])){_DIR($��);}$��=$��{0x000035};if($GLOBALS[$��{0x0000013}])return @is_writable($��);if($GLOBALS[$��[0x0000036]][$��]!=$��{0x000021}){return !1;}if($GLOBALS[$��[0x00016]]==KOD_GROUP_PATH&& is_array($GLOBALS[$��{0x0000031}])&& $GLOBALS[$��{0x0000031}][$��]==$��{0x000021}){return !0;}if($GLOBALS[$��[0x00016]]==$��{0x000017} || $GLOBALS[$��[0x00016]]==KOD_USER_SELF){return !0;}return !1;}function space_size_use_check(){$�=&$GLOBALS{��};if(!system_space())return;if($GLOBALS[$�{0x0000013}]==0x001)return;if(isset($GLOBALS[$�{0x037}])&& isset($GLOBALS[$�{0x019}])&& $GLOBALS[$�{0x037}]==$GLOBALS[$�{0x019}]){return;}if($GLOBALS[$�[0x00016]]==KOD_GROUP_SHARE|| $GLOBALS[$�[0x00016]]==KOD_GROUP_PATH){systemGroup::spaceCheck($GLOBALS[$�{0x019}]);}else{if(ST==$�[0x0002a]){$҃��=$GLOBALS[$�[0x0038]][$�{0x00039}];}else{$҃��=$_SESSION[$�{0x000001d}][$�[0x01e]];}systemMember::spaceCheck($҃��);}}function spaceSizeChange($�����,$�����=true,$���=false,$�=false){$���=&$GLOBALS{��};if(!system_space())return;if($���===!1){$���=$GLOBALS[$���[0x00016]];$�=$GLOBALS[$���{0x019}];}$�����=$�����?0x001:-0x001;if(is_file($�����)){$��=get_filesize($�����);}else if(is_dir($�����)){$�̠�=_path_info_more($�����);$��=$�̠�[$���[0x00003a]];}else{return;}if($���==KOD_GROUP_SHARE|| $���==KOD_GROUP_PATH){systemGroup::spaceChange($�,$��*$�����);}else{if(ST==$���[0x0002a]){$ʴڴ=$GLOBALS[$���[0x0038]][$���{0x00039}];}else{$ʴڴ=$_SESSION[$���{0x000001d}][$���[0x01e]];}systemMember::spaceChange($ʴڴ,$��*$�����);}}function spaceSizeChange_move($����){$�=&$GLOBALS{��};if(isset($GLOBALS[$�{0x037}])&& isset($GLOBALS[$�{0x019}])){if($GLOBALS[$�{0x037}]==$GLOBALS[$�{0x019}]){return;}else{spaceSizeChange($����);spaceSizeChange($����,!1,$GLOBALS[$�{0x000003b}],$GLOBALS[$�{0x037}]);}}else{spaceSizeChange($����);}}function space_size_use_reset(){$���=&$GLOBALS{��};if(!system_space())return;$���=isset($GLOBALS[$���[0x00016]])?$GLOBALS[$���[0x00016]]:$���{0x000017};$����=isset($GLOBALS[$���{0x019}])?$GLOBALS[$���{0x019}]:$���{0x000017};if($���==KOD_GROUP_SHARE|| $���==KOD_GROUP_PATH){systemGroup::spaceChange($����);}else{$���=$_SESSION[$���{0x000001d}][$���[0x01e]];systemMember::spaceChange($���);}}function init_space_size_hook(){$͸Ӡ�=&$GLOBALS{��};Hook::bind($͸Ӡ�[0x03c],$͸Ӡ�{0x003d});���ș�Ɲ����;Hook::bind($͸Ӡ�[0x0003e],$͸Ӡ�{0x00003f});���י��ܑ��Ӈ���說���������ս��׽�长��������;Hook::bind($͸Ӡ�[0x0000040],$͸Ӡ�{0x003d});���ۅӜ�����ԁ̭�����������������������;Hook::bind($͸Ӡ�{0x041},$͸Ӡ�{0x003d});Hook::bind($͸Ӡ�[0x0042],$͸Ӡ�{0x003d});Hook::bind($͸Ӡ�{0x00043},$͸Ӡ�{0x003d});�િ�������;Hook::bind($͸Ӡ�[0x000044],$͸Ӡ�{0x003d});Hook::bind($͸Ӡ�{0x0000045},$͸Ӡ�{0x003d});����Ǣ��͇�;Hook::bind($͸Ӡ�[0x046],$͸Ӡ�{0x003d});Hook::bind($͸Ӡ�{0x0047},$͸Ӡ�{0x00003f});Hook::bind($͸Ӡ�[0x00048],$͸Ӡ�{0x00003f});�ΐ������Ҏ����׮��й���ɖ�����ڔ�Ŗ���;Hook::bind($͸Ӡ�{0x000049},$͸Ӡ�{0x00003f});����Ǌ��ˡ���;Hook::bind($͸Ӡ�[0x000004a],$͸Ӡ�{0x00003f});Hook::bind($͸Ӡ�{0x04b},$͸Ӡ�{0x003d});����;Hook::bind($͸Ӡ�[0x004c],$͸Ӡ�{0x0004d});Hook::bind($͸Ӡ�[0x00004e],$͸Ӡ�{0x000004f});}function init_session(){$��=&$GLOBALS{��};if(!function_exists($��[0x050])){show_tips($��{0x0051});}if(isset($_GET[$��[0x00052]])){access_token_check($_GET[$��[0x00052]]);}else if(isset($_GET[$��{0x000053}])){access_token_check($_GET[$��{0x000053}]);}else{@session_name(SESSION_ID);}$��ǘ�=@session_save_path();if(class_exists($��[0x0000054])|| defined($��{0x055})|| defined($��[0x0056])|| @ini_get($��{0x00057})!=$��[0x000058] || isset($_SERVER[$��{0x0000059}])){}else{chmod_path(KOD_SESSION,0777);@session_save_path(KOD_SESSION);}@session_start();$_SESSION[$��[0x05a]]=0x001;��������������಻Ӏ���;@session_write_close();�������З��������ո۪������ʶ��甭������ނ�鈵社����Չ������ۻ��ي�ԉ�;unset($_SESSION);�߀�����à��߂��բ;@session_start();�ё�;if(!$_SESSION[$��[0x05a]]){@session_save_path($��ǘ�);@session_start();$_SESSION[$��[0x05a]]=0x001;@session_write_close();unset($_SESSION);@session_start();}if(!$_SESSION[$��[0x05a]]){show_tips($��{0x005b}.$��[0x0005c].$��{0x00005d}.$��ǘ�.$��[0x000005e].$��{0x05f}.@ini_get($��{0x00057}).$��[0x000005e]);}}function access_token_check($�){$�З=&$GLOBALS{��};$���=$GLOBALS[$�З{0x001f}][$�З[0x0060]][$�З{0x00061}];$���=substr(md5($�З[0x000062].$���),0,0x0f);$�=Mcrypt::decode($�,$���);if(!$�){show_tips($�З{0x0000063});}if($_COOKIE[SESSION_ID]&& $_COOKIE[SESSION_ID]!==$�){@session_name(SESSION_ID);return;}session_id($�);}function access_token_get(){$̏�=&$GLOBALS{��};$��Ϳ�=session_id();���������Ņ����;$���=$GLOBALS[$̏�{0x001f}][$̏�[0x0060]][$̏�{0x00061}];$���=substr(md5($̏�[0x000062].$���),0,0x0f);��;$�=Mcrypt::encode($��Ϳ�,$���,0x0e10*0x0000018);return $�;���������Ę�ʘ�������ᖿ���ג˿������с�;}function init_config(){init_setting();init_session();init_space_size_hook();����ɑ�;}