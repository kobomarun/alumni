!function(a){"use strict";"function"==typeof define&&define.amd?define(["shuffle","jquery-ui","select2","parsley"],a):"object"==typeof exports?module.exports=a(require("shuffle"),require("jquery-ui"),require("select2"),require("parsley")):a()}(function(){"use strict";var a=$("#shuffle-grid"),b=$("#shuffle-sort"),c=a.find("shuffle-sizer");a.shuffle({itemSelector:".task",sizer:c}),b.on("change",function(){var b=this.value,c={};"date-due"===b?c={reverse:!0,by:function(a){return a.data("date-due")}}:"priority"===b&&(c={by:function(a){return a.data("priority")}}),a.shuffle("sort",c)}),$('input[name="due-date"]').datepicker({dateFormat:"yy-m-d"}),$('select[name="participant"]').select2(),$("form#form-task").on("submit",function(a){a.preventDefault()}).on("click",'button[type="submit"]',function(){if($("form#form-task").parsley().isValid()){var b=$("#task-template").html(),c=Mustache.render(b,{totalParticipant:$('select[name="participant"]').select2("val").length,participant:function(){var a=[];return $.each($('select[name="participant"]').select2("val"),function(b,c){a.push({name:$('select[name="participant"] option[value="'+c+'"]').text(),avatar:"avatar"+c})}),a},checkboxId:$(".task").length+1,taskName:$('input[name="task-name"]').val(),projectText:$('select[name="project"] option:selected').text(),dueDate:$('input[name="due-date"]').val(),badgeContextual:function(){return"1"===$('select[name="priority"]').val()?"danger":"2"===$('select[name="priority"]').val()?"warning":"3"===$('select[name="priority"]').val()?"success":void 0},priority:$('select[name="priority"]').val(),priorityText:$('select[name="priority"] option:selected').text(),categoryText:$('select[name="category"] option:selected').text()}),d=$(c);a.prepend(d).shuffle("appended",d)}}),$("html").on("fa.sidebar.minimize",function(){a.shuffle("update")}).on("fa.sidebar.maximize",function(){a.shuffle("update")})});