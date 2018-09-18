$(document).ready(function(){
	//禁止鼠标右键
	$(document).bind("contextmenu", function(e) {
	    // return false;
	});
	
	/*function key() {
		if (event.shiftKey) {
			window.close();
		}
		//禁止Shift
		if (event.altKey) {
			window.close();
		}
		//禁止Alt
		if (event.ctrlKey) {
			window.close();
		}
		//禁止Ctrl
		return false;
	}
	document.onkeydown = key;
*/

	$(".gray").hover(function(){
		$(this).removeClass("gray");
	},function(){
		if(!$("#myModal").is(":hidden")){
			return;
		}
		$(this).addClass("gray");
	})
	$(".activity").bind("click",function(){
		$('.carousel').carousel("pause");
	})

	$('#myModal').on('hidden', function () {
		// do something…
		$('.carousel').carousel({
			interval: 4000,
			pause: "false"
		})
	})

	//轮播图的效果
	$('.carousel').carousel({
		interval: 4000,
		pause: "false"
	})
	//红酒之旅
	/*$('#accordion-slider').kwicks({  
		max : 484,  
		spacing : 2,
	});  
	$("#accordion-slider li").eq(0).trigger("mouseover");*/
	/*var containerWidth=$(".travelBG").width();
	var contentWidth=$(".relaxation").width();
	$(".relaxation").css({
		left:containerWidth / 2,
		marginLeft:-contentWidth / 2
	})*/
	
	var timeHandler;
	var box=$(".relaxation1");
	var li=box.find("li");
	li.hover(function(){
		var _this = this;
		$(_this).find("img").css({"margin-left":"0px"})

		box.stop(true,true).animate({
			marginLeft:-627
		})

		$(_this).stop(true,true).animate({
			width:750
		})
		li.each(function(){
			var url=$(this).find("img").attr("src");
			if(url.indexOf("gray") >= 0){
				return
			}
			var index=url.indexOf("jpg");
			var newUrl=url.substr(0,index-1)+"gray."+url.substr(index);
			$(this).find("img").attr({"src":newUrl});
		})
		var thisUrl=$(this).find("img").attr("src");
		var index=thisUrl.indexOf("gray");
		var newUrl=thisUrl.substr(0,index)+thisUrl.substr(index+4);
		$(this).find("img").attr({"src":newUrl});
	},function(){
		var _this = this
		$(this).stop(true,true).animate({
			width:72
		},function(){

		})
		var url=$(this).find("img").attr("src");
		var index=url.indexOf("jpg");
		var newUrl=url.substr(0,index-1)+"gray."+url.substr(index);
		$(this).find("img").attr({"src":newUrl});

	})

	
	box.hover(function(){

	},function(){
		li.each(function(){
			var url=$(this).find("img").attr("src");
			if(url.indexOf("gray") < 0){
				return
			}
			var index=url.indexOf("gray");
			var newUrl=url.substr(0,index)+url.substr(index+4);
			$(this).find("img").attr({"src":newUrl});
		})
		$(this).stop(true,true).animate({
			marginLeft:-288
		})
	})


	var box2=$(".relaxation2");
	var li2=box2.find("li");
	li2.hover(function(){
		var _this = this;
		$(_this).find("img").css({"margin-left":"0px"})
		box2.stop(true,true).animate({
			marginLeft:-555
		})
		$(_this).stop(true,true).animate({
			width:750
		})
		li2.each(function(){
			var url=$(this).find("img").attr("src");
			if(url.indexOf("gray") >= 0){
				return
			}
			var index=url.indexOf("jpg");
			var newUrl=url.substr(0,index-1)+"gray."+url.substr(index);
			$(this).find("img").attr({"src":newUrl});
		})
		var thisUrl=$(this).find("img").attr("src");
		var index=thisUrl.indexOf("gray");
		var newUrl=thisUrl.substr(0,index)+thisUrl.substr(index+4);
		$(this).find("img").attr({"src":newUrl});
	},function(){
		$(this).stop(true,true).animate({
			width:72
		})
		var url=$(this).find("img").attr("src");
		var index=url.indexOf("jpg");
		var newUrl=url.substr(0,index-1)+"gray."+url.substr(index);
		$(this).find("img").attr({"src":newUrl});
	})
	box2.hover(function(){

	},function(){
		li2.each(function(){
			var url=$(this).find("img").attr("src");
			if(url.indexOf("gray") < 0){
				return
			}
			var index=url.indexOf("gray");
			var newUrl=url.substr(0,index)+url.substr(index+4);
			$(this).find("img").attr({"src":newUrl});
		})
		$(this).stop(true,true).animate({
			marginLeft:-216
		})
	})

	/*$(".relaxation li").hover(function(){
		var _this = this
		$(this).stop(true,true).animate({
			width:484,
		},{
			step:function(){
				var containerWidth=$(".travelBG").width();
				var contentWidth=$(".relaxation").width();
				$(".relaxation").css({
					left:containerWidth / 2,
					marginLeft:-contentWidth / 2
				})
			}
		})

	},function(){
		$(this).stop(true,true).animate({
			width:100
		},{
			step:function(){
				var containerWidth=$(".travelBG").width();
				var contentWidth=$(".relaxation").width();
				$(".relaxation").css({
					left:containerWidth / 2,
					marginLeft:-contentWidth / 2
				})
			}
		})
	})*/

	/*$("#accordion-slider li").mouseover(function(){
		var index=$(this).index();
        $(this).stop().animate({width:'484px'},{queue:false, duration:600, easing: 'easeOutBounce'});
        $(this).find("img").removeClass("grayscale");
        $("#accordion-slider li").each(function(i, item){
        	
        	if(index === i)
        		return;
        	$(this).find("img").addClass("grayscale")
        	$(this).stop().animate({width:'80px'},{queue:false, duration:600, easing: 'easeOutBounce'})

        })
    });*/
   /* $("#accordion-slider li").mouseleave(function(){
    	var index=$(this).index();
    	return;
        $(this).stop().animate({width:'80px'},{queue:false, duration:600, easing: 'easeOutBounce'})
    });
    
    $("#accordion-slider li").eq(0).trigger("mouseover").find("img").removeClass("grayscale")*/


	//datepiker
	var nowTemp = new Date();
		var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
		 
		var checkin = $('#dpd1').datepicker({
		  onRender: function(date) {
		    return date.valueOf() < now.valueOf() ? 'disabled' : '';
		  }
		}).on('changeDate', function(ev) {
		  if (ev.date.valueOf() > checkout.date.valueOf()) {
		    var newDate = new Date(ev.date)
		    newDate.setDate(newDate.getDate() + 1);
		    checkout.setValue(newDate);
		  }
		  checkin.hide();
		  $('#dpd2')[0].focus();
		}).data('datepicker');
		var checkout = $('#dpd2').datepicker({
		  onRender: function(date) {
		    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
		  }
		}).on('changeDate', function(ev) {
		  checkout.hide();
	}).data('datepicker');

	$(".manor-list li").hover(function(){
		$(this).find("img").addClass("gray");
		$(this).find("p").show()
	},function(){
		$(this).find("img").removeClass("gray");
		$(this).find("p").hide()
	})
	$(".second-list a").hover(function(){
		$(this).find("img").addClass("gray");
		$(this).find("p").show()
	},function(){
		$(this).find("img").removeClass("gray");
		$(this).find("p").hide()
	})
	$(".nav-guest > li").hover(function(){
		var index=$(this).index();
		switch (index){
			case 0:
				$(".manor-list , .second-list").hide();
				$(".manor-list").show();
			break;
			case 1:
				$(".manor-list , .second-list").hide();
				$(".second-list").show();
			break;
			case 2:
				$(".manor-list , .second-list").hide();
				$(".second-list").show();
			break;
		}
	},function(){

	})
	$(".best li").hover(function(){
		var index=$(this).index()-1;
		$(".manor-list li").eq(index).trigger("mouseover");
	},function(){
		$(".manor-list li").trigger("mouseleave");
	})
	$(".medium li").hover(function(){
		var index=$(this).index()-1;
		$(".second-list a").eq(index).trigger("mouseover");
	},function(){
		$(".second-list a").trigger("mouseleave");
	})
	//鼠标划入二三导航栏时竖的导航栏向下移动
	$(".custom-nav > li").eq(1).hover(function(){
		$(".nav-guest").css({"margin-top":"-18px","padding-top":"0px"})

	},function(){
		$(".nav-guest").css({"margin-top":"-50px","padding-top":"32px"})
	})

	$(".custom-nav > li").eq(2).hover(function(){
		$(".nav-guest").css({"margin-top":"-18px","padding-top":"0px"})
	},function(){
		$(".nav-guest").css({"margin-top":"-50px","padding-top":"32px"})
	})
	$(".hoverImg").hover(function(){
		var url=$(this).attr("src");
		var index=url.indexOf("jpg");
		var newUrl=url.substr(0,index-1)+"gray."+url.substr(index);
		$(this).attr({"src":newUrl});
	},function(){
		var url=$(this).attr("src");
		var index=url.indexOf("gray");
		var newUrl=url.substr(0,index)+url.substr(index+4);
		$(this).attr({"src":newUrl});
	})
	$("#activy").hover(function(){
		$(this).attr({"src":"image/activity.jpg"})
	},function(){
		$(this).attr({"src":"image/activitygary.jpg"})
	})
})
