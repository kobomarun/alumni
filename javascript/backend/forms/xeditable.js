!function(a){"use strict";"function"==typeof define&&define.amd?define(["xeditable"],a):"object"==typeof exports?module.exports=a(require("xeditable")):a()}(function(){"use strict";$("#xe_username").editable({title:"Enter username"}),$("#xe_comments").editable({title:"Enter comments",rows:5}),$("#xe_status").editable({value:2,source:[{value:1,text:"Active"},{value:2,text:"Blocked"},{value:3,text:"Deleted"}]}),$("#xe_checklist").editable({value:[1],source:[{value:1,text:"option1"},{value:2,text:"option2"},{value:3,text:"option3"}]}),$("#xe_combodate").editable({format:"YYYY-MM-DD",viewformat:"DD.MM.YYYY",template:"D / MMMM / YYYY",combodate:{minYear:2e3,maxYear:2015,minuteStep:1}}),$("#xe_dateui").editable({format:"yyyy-mm-dd",viewformat:"dd/mm/yyyy",datepicker:{weekStart:1}}),$("#xe_typehead").editable({value:"ru",typeahead:{name:"country",local:[{value:"ru",tokens:["Russia"]},{value:"gb",tokens:["Great Britain"]},{value:"us",tokens:["United States"]}],template:function(a){return a.tokens[0]+" ("+a.value+")"}}})});