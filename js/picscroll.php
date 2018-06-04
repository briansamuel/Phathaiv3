<script type="text/javascript">
	(function($){
		$.fn.picScroll = function(options){
			return this.each(function(key, value){
				var ps = new PicScroll($(this), options);
			});
		};
		
		$.fn.picScroll.defaults = {
			timeout: 5000,
			speed: 200,
			auto: true,
			step: 'single',			// 鍗曚釜 - single , 鍙鏁� - visible
			type: 'scroll_x',		// 姘村钩婊氬姩 - scroll_x , 鍨傜洿婊氬姩 scroll_y 
			//direction: 'forward',	// 鍚戝墠 - forward , 鍚戝悗 - backward
			cnts: ' > ul',
			prev: '.btn_prev',
			next: '.btn_next'
		};
		
		var PicScroll = function(element,options){
			this.opts = $.extend({},$.fn.picScroll.defaults,options);
			this.warp = element;
			this.slider = element.find(this.opts.cnts);
			this.items = this.slider.children();
			this.pages = this.visible = this.scrollNum = this.singleLen = 0;
			this.curPage = 1;
			
			if(!this.items.length){ throw new Error('Not find items'); return ; }
			this.init();
			this.eventBind();
		};
		
		PicScroll.prototype.init = function(){
			var single = this.items.filter(':first');
			switch(this.opts.type){
				case 'scroll_x' :
					this.singleLen = single.outerWidth();
					this.visible = Math.ceil(this.warp.innerWidth()/this.singleLen);
					this.slider.width(9999);
					break;
				case 'scroll_y' :
					this.singleLen = single.outerHeight();
					this.visible = Math.ceil(this.warp.innerHeight()/this.singleLen);
					this.slider.height(9999);
					break;
				default :
					throw new Error('scroll type err');
					break;
			}
			
			if(this.opts.step == 'single'){
				this.pages = this.items.length;
				this.scrollNum = 1;
			}
			else{
				this.pages = Math.ceil( this.items.length / this.visible );
				this.scrollNum = this.visible;
			}
			
			if(this.items.length % this.visible != 0 && this.opts.step != 'single'){
				this.slider.append( new Array( (this.items.length % this.visible)+1 ).join('<'+ single.get(0).tagName +' class="empty" />') );
				this.items = this.slider.children();
			}
			this.items.filter(':first').before(this.items.slice(-this.visible).clone().addClass('cloned'));
			this.items.filter(':last').after(this.items.slice(0,this.visible).clone().addClass('cloned'));
			this.items = this.slider.children();
			
			this.setScrollVal(this.visible * this.singleLen);
		};
		
		PicScroll.prototype.setScrollVal = function(val){
			switch(this.opts.type){
				case 'scroll_x' :
					this.warp.scrollLeft( val );
					break;
				case 'scroll_y' :
					this.warp.scrollTop( val );
					break;
				default : break;
			}
		};
		
		PicScroll.prototype.eventBind = function(){
			var _this = this;
			this.warp.parent().find(this.opts.prev).click(
					function(){
						clearInterval(_this.timer);
						_this.goprev();
						_this.timer = setInterval(function(){ _this.gonext(); }, _this.opts.timeout );
					}
			);
			this.warp.parent().find(this.opts.next).click(
					function(){
						clearInterval(_this.timer);
						_this.gonext(); 
						_this.timer = setInterval(function(){ _this.gonext(); }, _this.opts.timeout );
					}
			);
			if(this.opts.auto) this.timer = setInterval( function(){ _this.gonext(); }, _this.opts.timeout );
			
			this.warp.hover(
				function(){ clearInterval(_this.timer); },
				function(){ _this.timer = setInterval( function(){ _this.gonext(); }, _this.opts.timeout );}
			);
		};
		
		PicScroll.prototype.play = function(){
			if(this.curPage == 0){
				this.curPage = this.pages;
				this.setScrollVal( this.items.length * this.singleLen - this.visible * this.singleLen );
			}
			else if(this.curPage > this.pages){
				this.curPage = 1;
				this.setScrollVal( (this.visible-this.scrollNum ) * this.singleLen );
			}
			var scrollLen = this.scrollNum * this.singleLen * (this.curPage-1) + this.visible * this.singleLen;
			if(this.opts.type == 'scroll_x'){
				this.warp.stop().animate({ scrollLeft : scrollLen }, this.opts.speed);
			}
			else{
				this.warp.stop().animate({ scrollTop : scrollLen }, this.opts.speed);
			}
//			$('#msg').html(this.curPage);
//			$('#pages').html(this.pages);
		};
		
		PicScroll.prototype.goprev = function(){
			this.curPage--;
			this.play();
		};
		
		PicScroll.prototype.gonext = function(){
			this.curPage++;
			this.play();
		};
		
})(jQuery);
</script>