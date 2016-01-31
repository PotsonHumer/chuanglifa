<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../js/jquery-1.8.1.min.js" type="text/javascript"></script>
<script src="tinymce/tinymce.min.js" type="text/javascript"></script>
<script src="tinymce/config.js" type="text/javascript"></script>
<script src="js/tiny_box.js" type="text/javascript"></script>
<script>
	tiny_load("/PHP/");
	tiny_load("/PHP/",".tiny_input");
</script>


<input type="text" name="img" ><a class="img_manage" href="#">選擇圖片</a>

<a class="all_manage" href="#">檔案管理</a>
<textarea id="elm1" name="text"></textarea>


<script>
	$(function(){
		$(document).tiny_box({
			SWITCH : 1, // 0 => 全部 , 1 => 圖片 , 2 => 檔案
			ID : ".img_manage", // 綁定元素 (同css選取器)，可設定多個元素，使用 , 分隔
			ROOT : "/PHP/" // 根目錄位置
		});
		
		$(document).tiny_box({
			SWITCH : 2, // 0 => 全部 , 1 => 圖片 , 2 => 檔案
			ID : ".file_manage", // 綁定元素 (同css選取器)，可設定多個元素，使用 , 分隔
			ROOT : "/PHP/" // 根目錄位置
		});
		
		$(document).tiny_box({
			SWITCH : 0, // 0 => 全部 , 1 => 圖片 , 2 => 檔案
			ID : ".all_manage", // 綁定元素 (同css選取器)，可設定多個元素，使用 , 分隔
			ROOT : "/PHP/" // 根目錄位置
		});
	});
</script>