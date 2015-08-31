(function(c,b,a,d){Foundation.libs.clearing={name:"clearing",version:"5.2.2",settings:{templates:{viewing:'<a href="#" class="clearing-close">&times;</a><div class="visible-img" style="display: none"><div class="clearing-touch-label"></div><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" alt="" /><p class="clearing-caption"></p><a href="#" class="clearing-main-prev"><span></span></a><a href="#" class="clearing-main-next"><span></span></a></div>'},close_selectors:".clearing-close",touch_label:"",init:false,locked:false},init:function(g,h,f){var e=this;Foundation.inherit(this,"throttle image_loaded");this.bindings(h,f);if(e.S(this.scope).is("["+this.attr_name()+"]")){this.assemble(e.S("li",this.scope))}else{e.S("["+this.attr_name()+"]",this.scope).each(function(){e.assemble(e.S("li",this))})}},events:function(g){var e=this,f=e.S;if(c(".scroll-container").length>0){this.scope=c(".scroll-container")}f(this.scope).off(".clearing").on("click.fndtn.clearing","ul["+this.attr_name()+"] li",function(m,l,k){var l=l||f(this),k=k||l,i=l.next("li"),h=l.closest("["+e.attr_name()+"]").data(e.attr_name(true)+"-init"),j=f(m.target);m.preventDefault();if(!h){e.init();h=l.closest("["+e.attr_name()+"]").data(e.attr_name(true)+"-init")}if(k.hasClass("visible")&&l[0]===k[0]&&i.length>0&&e.is_open(l)){k=i;j=f("img",k)}e.open(j,l,k);e.update_paddles(k)}).on("click.fndtn.clearing",".clearing-main-next",function(h){e.nav(h,"next")}).on("click.fndtn.clearing",".clearing-main-prev",function(h){e.nav(h,"prev")}).on("click.fndtn.clearing",this.settings.close_selectors,function(h){Foundation.libs.clearing.close(h,this)});c(a).on("keydown.fndtn.clearing",function(h){e.keydown(h)});f(b).off(".clearing").on("resize.fndtn.clearing",function(){e.resize()});this.swipe_events(g)},swipe_events:function(g){var e=this,f=e.S;f(this.scope).on("touchstart.fndtn.clearing",".visible-img",function(i){if(!i.touches){i=i.originalEvent}var h={start_page_x:i.touches[0].pageX,start_page_y:i.touches[0].pageY,start_time:(new Date()).getTime(),delta_x:0,is_scrolling:d};f(this).data("swipe-transition",h);i.stopPropagation()}).on("touchmove.fndtn.clearing",".visible-img",function(j){if(!j.touches){j=j.originalEvent}if(j.touches.length>1||j.scale&&j.scale!==1){return}var h=f(this).data("swipe-transition");if(typeof h==="undefined"){h={}}h.delta_x=j.touches[0].pageX-h.start_page_x;if(typeof h.is_scrolling==="undefined"){h.is_scrolling=!!(h.is_scrolling||Math.abs(h.delta_x)<Math.abs(j.touches[0].pageY-h.start_page_y))}if(!h.is_scrolling&&!h.active){j.preventDefault();var i=(h.delta_x<0)?"next":"prev";h.active=true;e.nav(j,i)}}).on("touchend.fndtn.clearing",".visible-img",function(h){f(this).data("swipe-transition",{});h.stopPropagation()})},assemble:function(j){var m=j.parent();if(m.parent().hasClass("carousel")){return}m.after('<div id="foundationClearingHolder"></div>');var e=m.detach();var l="";if(e[0]==null){return}else{l=e[0].outerHTML}var k=this.S("#foundationClearingHolder"),h=m.data(this.attr_name(true)+"-init"),e=m.detach(),i={grid:'<div class="carousel">'+l+"</div>",viewing:h.templates.viewing},f='<div class="clearing-assembled"><div>'+i.viewing+i.grid+"</div></div>",g=this.settings.touch_label;if(Modernizr.touch){f=c(f).find(".clearing-touch-label").html(g).end()}k.after(f).remove()},open:function(f,k,l){var q=this,j=c(a.body),n=l.closest(".clearing-assembled"),e=q.S("div",n).first(),i=q.S(".visible-img",e),h=q.S("img",i).not(f),p=q.S(".clearing-touch-label",e),m=false;h.error(function(){m=true});function o(){setTimeout(function(){this.image_loaded(h,function(){if(h.outerWidth()===1&&!m){o.call(this)}else{g.call(this,h)}}.bind(this))}.bind(this),50)}function g(s){var r=c(s);s.css("visibility","visible");j.css("overflow","hidden");n.addClass("clearing-blackout");e.addClass("clearing-container");i.show();this.fix_height(l).caption(q.S(".clearing-caption",i),q.S("img",l)).center_and_label(s,p).shift(k,l,function(){l.siblings().removeClass("visible");l.addClass("visible")})}if(!this.locked()){h.attr("src",this.load(f)).css("visibility","hidden");o.call(this)}},close:function(k,j){k.preventDefault();var h=(function(e){if(/blackout/.test(e.selector)){return e}else{return e.closest(".clearing-blackout")}}(c(j))),f=c(a.body),g,i;if(j===k.target&&h){f.css("overflow","");g=c("div",h).first();i=c(".visible-img",g);this.settings.prev_index=0;c("ul["+this.attr_name()+"]",h).attr("style","").closest(".clearing-blackout").removeClass("clearing-blackout");g.removeClass("clearing-container");i.hide()}return false},is_open:function(e){return e.parent().prop("style").length>0},keydown:function(j){var i=c(".clearing-blackout ul["+this.attr_name()+"]"),h=this.rtl?37:39,g=this.rtl?39:37,f=27;if(j.which===h){this.go(i,"next")}if(j.which===g){this.go(i,"prev")}if(j.which===f){this.S("a.clearing-close").trigger("click")}},nav:function(h,g){var f=c("ul["+this.attr_name()+"]",".clearing-blackout");h.preventDefault();this.go(f,g)},resize:function(){var f=c("img",".clearing-blackout .visible-img"),e=c(".clearing-touch-label",".clearing-blackout");if(f.length){this.center_and_label(f,e)}},fix_height:function(g){var f=g.parent().children(),e=this;f.each(function(){var h=e.S(this),i=h.find("img");if(h.height()>i.outerHeight()){h.addClass("fix-height")}}).closest("ul").width(f.length*100+"%");return this},update_paddles:function(f){var e=f.closest(".carousel").siblings(".visible-img");if(f.next().length>0){this.S(".clearing-main-next",e).removeClass("disabled")}else{this.S(".clearing-main-next",e).addClass("disabled")}if(f.prev().length>0){this.S(".clearing-main-prev",e).removeClass("disabled")}else{this.S(".clearing-main-prev",e).addClass("disabled")}},center_and_label:function(f,e){if(!this.rtl){f.css({marginLeft:-(f.outerWidth()/2),marginTop:-(f.outerHeight()/2)});if(e.length>0){e.css({marginLeft:-(e.outerWidth()/2),marginTop:-(f.outerHeight()/2)-e.outerHeight()-10})}}else{f.css({marginRight:-(f.outerWidth()/2),marginTop:-(f.outerHeight()/2),left:"auto",right:"50%"});if(e.length>0){e.css({marginRight:-(e.outerWidth()/2),marginTop:-(f.outerHeight()/2)-e.outerHeight()-10,left:"auto",right:"50%"})}}return this},load:function(f){if(f[0].nodeName==="A"){var e=f.attr("href")}else{var e=f.parent().attr("href")}this.preload(f);if(e){return e}return f.attr("src")},preload:function(e){this.img(e.closest("li").next()).img(e.closest("li").prev())},img:function(e){if(e.length){var f=new Image(),g=this.S("a",e);if(g.length){f.src=g.attr("href")}else{f.src=this.S("img",e).attr("src")}}return this},caption:function(e,g){var f=g.attr("data-caption");if(f){e.html(f).show()}else{e.text("").hide()}return this},go:function(e,h){var g=this.S(".visible",e),f=g[h]();if(f.length){this.S("img",f).trigger("click",[g,f])}},shift:function(j,k,o){var l=k.parent(),i=this.settings.prev_index||k.index(),m=this.direction(l,j,k),h=this.rtl?"right":"left",g=parseInt(l.css("left"),10),f=k.outerWidth(),n;var e={};if(k.index()!==i&&!/skip/.test(m)){if(/left/.test(m)){this.lock();e[h]=g+f;l.animate(e,300,this.unlock())}else{if(/right/.test(m)){this.lock();e[h]=g-f;l.animate(e,300,this.unlock())}}}else{if(/skip/.test(m)){n=k.index()-this.settings.up_count;this.lock();if(n>0){e[h]=-(n*f);l.animate(e,300,this.unlock())}else{e[h]=0;l.animate(e,300,this.unlock())}}}o()},direction:function(h,j,i){var g=this.S("li",h),f=g.outerWidth()+(g.outerWidth()/4),k=Math.floor(this.S(".clearing-container").outerWidth()/f)-1,l=g.index(i),e;this.settings.up_count=k;if(this.adjacent(this.settings.prev_index,l)){if((l>k)&&l>this.settings.prev_index){e="right"}else{if((l>k-1)&&l<=this.settings.prev_index){e="left"}else{e=false}}}else{e="skip"}this.settings.prev_index=l;return e},adjacent:function(g,f){for(var e=f+1;e>=f-1;e--){if(e===g){return true}}return false},lock:function(){this.settings.locked=true},unlock:function(){this.settings.locked=false},locked:function(){return this.settings.locked},off:function(){this.S(this.scope).off(".fndtn.clearing");this.S(b).off(".fndtn.clearing")},reflow:function(){this.init()}}}(jQuery,this,this.document));