$(document).ready(function(){
	function htmlEntities(str) {
	    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
	}
	$("#fbbutton").click(function(){
		window.location.href="https://www.facebook.com/profile.php?id=100000190764525";
	});
	$("#githubbutton").click(function(){
		window.location.href="https://github.com/bbbb8264";
	});
	var body = document.body,
    html = document.documentElement;
	var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );
	$($(".menu a").get(4)).data("top",height);
	$(".menu a").click(function(){
		$("html, body").stop().animate({scrollTop:$(this).data('top')}, $(this).data('top')/4, 'swing');
	});
	$("#eventdetailbutton").click(function(){
		$("html, body").stop().animate({scrollTop:833}, '500', 'swing');
	});
	function membersubmit(){
		$(this).addClass('loading disabled');
		$(this).unbind();
		var button = $(this);
		if($(this).parents('form')[0].elements[0].value == ""){
			$("#membererror").html('姓名不可為空白');
			$(this).removeClass('loading disabled');
			$(this).click(membersubmit);
		}else if($(this).parents('form')[0].elements[1].value == ""){
			$("#membererror").html('想要交換的技能不可為空白，若沒有的話請填無');
			$(this).removeClass('loading disabled');
			$(this).click(membersubmit);
		}else if($(this).parents('form')[0].elements[2].value == ""){
			$("#membererror").html('想要學的技能不可為空白，若沒有的話請填無');
			$(this).removeClass('loading disabled');
			$(this).click(membersubmit);
		}else{
			$("#membererror").html('');
			$.ajax({
				url : "submitmember.php",
				type : "POST",
				data : {name:$(this).parents('form')[0].elements[0].value,skill:$(this).parents('form')[0].elements[1].value,wanttolearn:$(this).parents('form')[0].elements[2].value},
				success : function(data) {
					if(data == "success"){
						button.removeClass('button loading disabled');
						button.addClass('green button disabled');
						button.css('width','200px');
						button.html('完成，已收到你的資料');
						$(button.parents('form')[0].elements[0]).attr('disabled','disabled');
						$(button.parents('form')[0].elements[1]).attr('disabled','disabled');
						$(button.parents('form')[0].elements[2]).attr('disabled','disabled');
					}else{
						console.log(data);
					}
				},
				error : function(xhr,errmsg,err) {
					console.log(xhr.status + ": " + xhr.responseText);
				} 
			});
		}
	}
	$("#membersubmit").click(membersubmit);
	function replysubmit(){
		$(this).addClass('loading disabled');
		$(this).unbind();
		var button = $(this);
		if($(this).parents('form')[0].elements[0].value == ""){
			$("#replyerror").html('姓名不可為空白');
			$(this).removeClass('loading disabled');
			$(this).click(replysubmit);
		}else if($(this).parents('form')[0].elements[1].value == ""){
			$("#replyerror").html('回覆內容不可為空白');
			$(this).removeClass('loading disabled');
			$(this).click(replysubmit);
		}else{
			$.ajax({
				url : "submitreply.php",
				type : "POST",
				data : {name:$(this).parents('form')[0].elements[0].value,content:$(this).parents('form')[0].elements[1].value},
				success : function(data) {
					data = jQuery.parseJSON(data);
					console.log(data);
					if(data.success){
						data.name = htmlEntities(data.name);
						data.content = htmlEntities(data.content);
						data.content = data.content.replace(/\n/g,"<br>");
						$("#replylist").prepend('<div class="reply"><div class="replyinformation"><div class="replyname">'+data.name+'</div><div class="replytime">'+data.publishtime+'</div></div><div class="replycontent">'+data.content+'</div></div>');
						$($("#replylist .reply")[0]).css("opacity",0);
						$($("#replylist .reply")[0]).animate({opacity:1},1000);
						button.removeClass('loading disabled');
						button.click(replysubmit);
					}else{
						console.log(data);
					}
				},
				error : function(xhr,errmsg,err) {
					console.log(xhr.status + ": " + xhr.responseText);
				} 
			});
		}
	}
	$("#replysubmit").click(replysubmit);
	$("#replyname").keypress(function(e){
		if(e.which == 13){
			event.preventDefault();
			$("#replysubmit").click();
		}
	});
	$($("form")[0]).find("input").keypress(function(e){
		if(e.which == 13){
			event.preventDefault();
			$("#membersubmit").click();
		}
	});
});