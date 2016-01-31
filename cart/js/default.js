	// OGS default js function
	
	function log(OUTPUT){
		try{
			console.log(OUTPUT);
		}catch(e){
			alert(OUTPUT);
		}
	}
	
	// js 提示功能
	function js_notice(MSG,HEADING){
		
		if(isset(MSG)){
			alert(MSG);
		}
		
		if(isset(HEADING)){
			location.href = HEADING;
		}
	}
	
	// js 連結
	function goto(){
		$(document).on("click",".goto",function(){
			var HEADING = $(this).attr("rel");
			
			if(isset(HEADING)){
				js_notice(false,HEADING);
			}
		});
	}
	
	// 檢查變數是否存在
	function isset(ARGS){
		if(typeof(ARGS) != "undefined" && ARGS != '' && ARGS != "false" && ARGS != 0){
			return true;
		}else{
			return false;
		}
	}
	
	// 更改 size 定義成像素寬度
	function pixels_size(){
		$("input,select,textarea").each(function(){
			var INPUT_SIZE = $(this).attr("size");
			var MULTI = $(this).attr("multiple");
			
			if(isset(INPUT_SIZE) && !isset(MULTI)){
				$(this).css({ "width":INPUT_SIZE +"px" });
			}
		});
	}
	
	// 功能處理
	function func_handle(){
		$(".func").click(function(E){
			E.preventDefault();
			if(!confirm('確定執行?')){
				return false;
			}
			
			var HANDLE_PATH = $(this).attr("rel");
			
			if(isset(HANDLE_PATH)){
				$("form[name=func_form]").attr("action",HANDLE_PATH);
				document.func_form.submit();
			}
		});
	}
	
	// 連結警告
	function link_alert(){
		$(document).on("click",".alert",function(E){
			var ALERT_MSG = $(this).attr("rel");
			
			if(!confirm(ALERT_MSG)){
				E.preventDefault();
			}
		});
	}
	
	// 全選功能
	function all_select(){
		$(document).on("click",".all",function(){
			var CK = $("input[type=checkbox].id").attr("checked");
			
			if(isset(CK) && CK == "checked"){
				$(".id").removeAttr("checked");
			}else{
				$(".id").attr("checked","checked");
			}
		});
	}
	
	// 快捷鍵
	function hotkey(){
		$(document).keyup(function(E){
			if(E.altKey){
				log(E.keyCode);
				
				switch(E.keyCode){
					case 81:
						var OBJ = $(".back");
					break;
					case 83:
						var OBJ = $(".save");
					break;
					case 49:
						//var OBJ = $("#nav_close");
					break;
				}
				
				if(isset(OBJ)){
					OBJ.trigger("click");
				}
			}
		});
	}

	// 選單開闔
	function nav_slide(){
		$("nav label").click(function(){
			var OBJ = $(this).next("ul");
			var DRAP_NUM = OBJ.find("li").length;
			var DRAP_H = DRAP_NUM * 31 + 10;

			$("nav label").next("ul").css({ "min-height":"0px" });
			OBJ.css({ "min-height":DRAP_H +"px" });
		});

		// 預設選取
		var DEFAULT_OBJ = $("nav label").next("ul").find("li a.current");
		if(DEFAULT_OBJ.length > 0){
			DEFAULT_OBJ.parents("ul.animate").prev("label").trigger('click');
		}
	}

	// 動態增加列表
	function js_add_row(CLONE){
		$("*[name=add]").click(function(){
			var CONTENT_ID = $(this).attr("rel");
			$("#"+ CONTENT_ID).append(CLONE);
			pixels_size();
		});

		$(".row").parent().sortable();

		$(document).on("click","*[name=del]",function(){
			if(!confirm('確定刪除?')) return false;

			var DEL_PATH = $(this).attr("rel");
			var ID = $(this).prev("input").val();

			if(isset(ID)){
				$(document).get_box({
					CLICK : false, // 按鍵後才啟動功能 , true => 按鍵啟動  , false => 直接啟動
					CALL : ID, // key 值
					PHP : DEL_PATH, // 取值目標
					FUNC : "", // func 附值
					AFTER : function() {  }, // 動作後執行擴充
				}, function(DATA){
					//callback
					if(DATA == "DONE"){
						alert('刪除完成');
					}else{
						alert(DATA);
					}
				});
			}

			$(this).parents(".row").remove();

			var REMAIN_NUM = $(".row").length;
			var CONTENT_ID = $("*[name=add]").attr("rel");
			if(REMAIN_NUM == 0){
				$("#"+ CONTENT_ID).append(CLONE);
				pixels_size();
			}
		});
	}


	// 直接啟動項目
	$(function(){
		pixels_size();
		goto();
		func_handle();
		link_alert();
		all_select();
		hotkey();
		nav_slide();
	});
