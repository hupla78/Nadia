(function(c,b,a,d){Foundation.libs.offcanvas={name:"offcanvas",version:"5.2.2",settings:{},init:function(f,g,e){this.events()},events:function(){var e=this,f=e.S;f(this.scope).off(".offcanvas").on("click.fndtn.offcanvas",".left-off-canvas-toggle",function(g){e.click_toggle_class(g,"move-right")}).on("click.fndtn.offcanvas",".left-off-canvas-menu a",function(g){f(".off-canvas-wrap").removeClass("move-right")}).on("click.fndtn.offcanvas",".right-off-canvas-toggle",function(g){e.click_toggle_class(g,"move-left")}).on("click.fndtn.offcanvas",".right-off-canvas-menu a",function(g){f(".off-canvas-wrap").removeClass("move-left")}).on("click.fndtn.offcanvas",".exit-off-canvas",function(g){e.click_remove_class(g,"move-left");e.click_remove_class(g,"move-right")})},click_toggle_class:function(g,f){g.preventDefault();this.S(g.target).closest(".off-canvas-wrap").toggleClass(f)},click_remove_class:function(g,f){g.preventDefault();this.S(".off-canvas-wrap").removeClass(f)},reflow:function(){}}}(jQuery,this,this.document));