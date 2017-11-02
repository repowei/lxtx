<?php defined('G_IN_ADMIN')or exit('No permission resources.'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台首页</title>
<link rel="stylesheet" href="<?php echo G_GLOBAL_STYLE; ?>/global/css/global.css" type="text/css">
<link rel="stylesheet" href="<?php echo G_GLOBAL_STYLE; ?>/global/css/style.css" type="text/css">
<script src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo G_PLUGIN_PATH; ?>/uploadify/api-uploadify.js" type="text/javascript"></script> 
<link rel="stylesheet" href="<?php echo G_PLUGIN_PATH; ?>/calendar/calendar-blue.css" type="text/css"> 
<script type="text/javascript" charset="utf-8" src="<?php echo G_PLUGIN_PATH; ?>/calendar/calendar.js"></script>
<script type="text/javascript">
var editurl=Array();
editurl['editurl']='<?php echo G_PLUGIN_PATH; ?>/ueditor/';
editurl['imageupurl']='<?php echo G_ADMIN_PATH; ?>/ueditor/upimage/';
editurl['imageManager']='<?php echo G_ADMIN_PATH; ?>/ueditor/imagemanager';
</script>
<script type="text/javascript" charset="utf-8" src="<?php echo G_PLUGIN_PATH; ?>/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo G_PLUGIN_PATH; ?>/ueditor/ueditor.all.min.js"></script>
<style>
	.bg{background:#fff url(<?php echo G_GLOBAL_STYLE; ?>/global/image/ruler.gif) repeat-x scroll 0 9px }
	.color_window_td a{ float:left; margin:0px 10px;}
</style>
</head>
<body>
<script>
$(function(){
	$("#category").change(function(){ 
	var parentId=$("#category").val(); 
	if(null!= parentId && ""!=parentId){ 
		$.getJSON("<?php echo WEB_PATH; ?>/api/brand/json_brand/"+parentId,{cid:parentId},function(myJSON){
		var options="";
		if(myJSON.length>0){ 			
			//options+='<option value="0">≡ 请选择品牌 ≡</option>'; 
			for(var i=0;i<myJSON.length;i++){ 
				options+="<option value="+myJSON[i].id+">"+myJSON[i].name+"</option>"; 
			} 
			$("#brand").html(options);		} 
		}); 
	}  
	}); 	
}); 

function CheckForm(){
	var money = parseInt($("#money").val());
		if(money >= 100000){
			window.parent.message("价格大于10万，商品添加会很慢,请耐心等待，不要关闭窗口!",1,5);
		}	
		return true;
}
</script>
<div class="header lr10">
	<?php echo $this->headerment();?>
</div>
<div class="bk10"></div>
<div class="table_form lr10">
<form method="post" action="" onSubmit="return CheckForm()">
	<table width="100%"  cellspacing="0" cellpadding="0">
	<tr>
			<td align="right" style="width:120px"><font color="red">*</font>ID：</td>
			<td><input value="<?php echo $c['id'];?>" type="hidden"  name="id"  style="width:65px; padding-left:0px; text-align:center" class="input-text"></td>
		</tr>
		<tr>
			<td align="right" style="width:120px"><font color="red">*</font>分类名称：</td>
			<td><input value="<?php echo $c['name'];?>" type="text"  name="name"  style="width:65px; padding-left:0px; text-align:center" class="input-text"></td>
		</tr>
		
     	<tr>
			<td align="right" style="width:120px"><font color="red">*</font>渠道号：</td>
			<td><input value="<?php echo $c['channel'];?>" type="text"  name="channel"  style="width:65px; padding-left:0px; text-align:center" class="input-text"></td>
		</tr>
  
          <tr>
			<td align="right" style="width:120px"><font color="red">*</font>分类标识：</td>
			<td>

			<?php   $channel=$this->db->GetList("SELECT * FROM `@#_type`" ); ?>

			<?php foreach ($channel as $k => $v) :?>
			<input value="<?php echo $v['id']?>" type="checkbox"  name="sgid[]"<?php $ddc =explode(",",$c['sgid']); foreach ($ddc as $k1 => $v1) {
				if ($v1 == $v['id'] ) {
					echo 'checked';
				}
			} ?>  ><?php echo $v['name']?>
				
			<?php endforeach ;?>
			</td>
		</tr>


    <tr>
			<td align="right" style="width:120px"><font color="red">*</font>轮播图标识：</td>
			<td>

			<?php   $cha=$this->db->GetList("SELECT * FROM `@#_wap`" );?>

			<?php foreach ($cha as $k => $v) :?>
			<input value="<?php echo $v['id']?>" type="checkbox"  name="pid[]" <?php $dcc =explode(",",$c['pid']); foreach ($dcc as $k1 => $v1) {
				if ($v1 == $v['id'] ) {
					echo 'checked';
				}
			} ?>  ><img src="<?php echo G_UPLOAD_PATH.'/'.$v['img'];?>" width="30" height="30">
				
			<?php endforeach ;?>
			</td>
		</tr> 
	




	
     <tr>
			<select id="sgid" name="status" class="wid100" style="display:none">                	
    	                          
					
                    <option value="1">开启</option>
                 
                     <option value="2">关闭</option>    
				</select>
		</tr>
        <tr height="60px">
			<td align="right" style="width:120px"></td>
			<td><input type="submit" name="dosubmit" class="button" value="添加商品" /></td>
		</tr>
	</table>
</form>
</div>
 <span id="title_colorpanel" style="position:absolute; left:568px; top:155px" class="colorpanel"></span>
<script type="text/javascript">
    //实例化编辑器
    var ue = UE.getEditor('myeditor');

    ue.addListener('ready',function(){
        this.focus()
    });
    function getContent() {
        var arr = [];
        arr.push( "使用editor.getContent()方法可以获得编辑器的内容" );
        arr.push( "内容为：" );
        arr.push(  UE.getEditor('myeditor').getContent() );
        alert( arr.join( "\n" ) );
    }
    function hasContent() {
        var arr = [];
        arr.push( "使用editor.hasContents()方法判断编辑器里是否有内容" );
        arr.push( "判断结果为：" );
        arr.push(  UE.getEditor('myeditor').hasContents() );
        alert( arr.join( "\n" ) );
    }
	
	var info=new Array();
    function gbcount(message,maxlen,id){
		
		if(!info[id]){
			info[id]=document.getElementById(id);
		}			
        var lenE = message.value.length;
        var lenC = 0;
        var enter = message.value.match(/\r/g);
        var CJK = message.value.match(/[^\x00-\xff]/g);//计算中文
        if (CJK != null) lenC += CJK.length;
        if (enter != null) lenC -= enter.length;		
		var lenZ=lenE+lenC;		
		if(lenZ > maxlen){
			info[id].innerHTML=''+0+'';
			return false;
		}
		info[id].innerHTML=''+(maxlen-lenZ)+'';
    }
	
function set_title_color(color) {
	$('#title2').css('color',color);
	$('#title_style_color').val(color);
}
function set_title_bold(){
	if($('#title_style_bold').val()=='bold'){
		$('#title_style_bold').val('');	
		$('#title2').css('font-weight','');
	}else{
		$('#title2').css('font-weight','bold');
		$('#title_style_bold').val('bold');
	}
}




$(document).ready(function(){  
 $(function(){  
   $('input:button').click(function(){  
     $('#xsjx_time').val("");  
    });  
  });  
  });  
//API JS
//window.parent.api_off_on_open('open');
</script>
</body>
</html> 