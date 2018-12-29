 <?php
	//导入配置文件和类
	require("../../public/config.php");
	require("../../public/Model.class.php");
	require("../../public/FileUpload.class.php");
	require("../../public/Image.class.php");
	//储存路径
	//实例化
	$upfile = new FileUpload();
	$path = "../../public/uploads/";
	$upfile->savePath = $path;
	$upfile->maxSize = 0;
	$upfile->exts = array("image/jpeg","image/png","image/gif","image/jpg");
	

	$mod = new Model("goods");

	switch($_GET['a']){
		case "insert":
				$b = $upfile->upload();
				if(!$b){
					
					echo "上传失败! 原因: ".$upfile->getError();
				}else{
					$picname = $upfile->savename;
					// echo "上传成功！文件名：".$picname;
					$_POST['picname'] = $picname;
					$img = new Image();
					$img->open($path.$picname)->thumb(100,100)->save($path."s_".$picname);
					$img->open($path.$picname)->thumb(265,195)->save($path."m_".$picname);
				
				if($mod->insert()>0){
					echo "<center><h3 style=color:red>添加成功! </h3><br>";
					echo "</center>";
				}else{
					echo "<center><h3 style=color:red>添加失败! </h3><br>";
					@unlink($path.$picname);
					@unlink($path."s_".$picname);
					@unlink($path."m_".$picname);
					@unlink($path."l_".$picname);
				}
			}	
			break;
		case "del":
			$id = $_GET['id']+0;
			$picname = $_GET['picname'];
			if($mod->del($id)>0){
				@unlink($path.$picname);
				@unlink($path."s_".$picname);
				@unlink($path."m_".$picname);
				header("Location:./index.php");
			}else{
				echo "<center><h3 style=color:red>删除失败! </h3><br></center>";
			}
			break;
		case "update":
			if($_FILES['pic']['error']==0){
				if($upfile->upload()){
					$picname = $upfile->savename;
					$img = new Image();
					$img->open($path.$picname)->thumb(100,100)->save($path."s_".$picname);
					$img->open($path.$picname)->thumb(265,195)->save($path."m_".$picname);
					$img->open($path.$picname)->thumb(400,400)->save($path."l_".$picname);
					$_POST['picname']=$picname;
					@unlink($path.$POST['oldpicname']);
					@unlink($path."s_".$POST['oldpicname']);
					@unlink($path."m_".$POST['oldpicname']);
				}else{
					$picname = $_POST['oldpicname'];
				}
				if($mod->update()>0){
					echo "<center><h3 style=color:red>修改成功! </h3><br>";
				}else{
					echo "<center><h3 style=color:red>修改失败! </h3><br>";
				}
			}
			break;

	}
	
