!function(a){"use strict";"function"==typeof define&&define.amd?define(["jcrop"],a):"object"==typeof exports?module.exports=a(require("jcrop")):a()}(function(){"use strict";var a,b=function(){var b=a.getBounds();return[Math.round(Math.random()*b[0]),Math.round(Math.random()*b[1]),Math.round(Math.random()*b[0]),Math.round(Math.random()*b[1])]},c=function(){a.setOptions({allowSelect:!0}),$("#can_click").attr("checked",!1)},d=function(){$("#target").Jcrop({onRelease:c},function(){a=this,a.animateTo([100,100,400,300]),$("#can_click,#can_move,#can_size").attr("checked","checked"),$("#ar_lock,#size_lock,#bg_swap").attr("checked",!1)})};d(),$("#can_click").on("change",function(){a.setOptions({allowSelect:!!this.checked}),a.focus()}),$("#can_move").on("change",function(){a.setOptions({allowMove:!!this.checked}),a.focus()}),$("#can_size").on("change",function(){a.setOptions({allowResize:!!this.checked}),a.focus()}),$("#ar_lock").on("change",function(){a.setOptions(this.checked?{aspectRatio:4/3}:{aspectRatio:0}),a.focus()}),$("#size_lock").on("change",function(){a.setOptions(this.checked?{minSize:[80,80],maxSize:[250,250]}:{minSize:[0,0],maxSize:[0,0]}),a.focus()}),$("#set-select").on("click",function(){a.setSelect(b())}),$("#animated-to").on("click",function(){a.animateTo(b())}),$("#release").on("click",function(){a.release()}),$("#disable").on("click",function(){a.disable(),$(this).addClass("hide"),$("#enable").removeClass("hide")}),$("#enable").on("click",function(){a.enable(),$(this).addClass("hide"),$("#disable").removeClass("hide")}),$("#unhook").on("click",function(){a.destroy(),$(this).addClass("hide"),$("#rehook").removeClass("hide")}),$("#rehook").on("click",function(){d(),$(this).addClass("hide"),$("#unhook").removeClass("hide")}),$("#change-background").on("click",".btn",function(){var b=$(this).data("background");a.setImage(b),$("#change-background .btn").each(function(a,b){$(b).removeClass("active")}),$(this).addClass("active")})});