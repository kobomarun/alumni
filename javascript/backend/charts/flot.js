!function(a){"use strict";"function"==typeof define&&define.amd?define(["jquery.flot","jquery.flot.pie","jquery.flot.fillbetween","jquery.flot.stack","jquery.flot.resize","jquery.flot.categories","jquery.flot.time","jquery.flot.tooltip","jquery.flot.spline"],a):"object"==typeof exports?module.exports=a(require("jquery.flot"),require("jquery.flot.pie"),require("jquery.flot.fillbetween"),require("jquery.flot.stack"),require("jquery.flot.resize"),require("jquery.flot.categories"),require("jquery.flot.time"),require("jquery.flot.tooltip"),require("jquery.flot.spline")):a()}(function(){"use strict";var a=function(a,b){this.element=a,this.url="../"+b};a.prototype={remoteData:function(a){var b=this;$.ajax({url:b.url,cache:!1,type:"POST",dataType:"json"}).done(function(c){$.plot($(b.element),c,a),$(b.element).parents(".panel").find(".indicator").removeClass("show")})}},$(function(){if(0!==$("#chart-bar").length){var b=new a("#chart-bar","api/flot.php?type=bar"),c={series:{bars:{align:"center",lineWidth:0,show:!0,barWidth:.6,fill:.9}},grid:{borderColor:"#eee",borderWidth:1,hoverable:!0,backgroundColor:"#fcfcfc"},tooltip:!0,tooltipOpts:{content:"%x : %y"},xaxis:{tickColor:"#fcfcfc",mode:"categories"},yaxis:{tickColor:"#eee"},shadowSize:0};b.remoteData(c),$("html").on("fa.panelrefresh.refresh",function(a,d){0!==d.element.find("#chart-bar").length&&b.remoteData(c)})}}),$(function(){if(0!==$("#chart-bar-stacked").length){var b=new a("#chart-bar-stacked","api/flot.php?type=barstacked"),c={series:{stack:!0,bars:{align:"center",lineWidth:0,show:!0,barWidth:.6,fill:.9}},grid:{borderColor:"#eee",borderWidth:1,hoverable:!0,backgroundColor:"#fcfcfc"},tooltip:!0,tooltipOpts:{content:"%x : %y"},xaxis:{tickColor:"#fcfcfc",mode:"categories"},yaxis:{tickColor:"#eee"},shadowSize:0};b.remoteData(c),$("html").on("fa.panelrefresh.refresh",function(a,d){0!==d.element.find("#chart-bar-stacked").length&&b.remoteData(c)})}}),$(function(){if(0!==$("#chart-area").length){var b=new a("#chart-area","api/flot.php?type=area"),c={series:{lines:{show:!0,fill:.8},points:{show:!0,radius:4}},grid:{borderColor:"#eee",borderWidth:1,hoverable:!0,backgroundColor:"#fcfcfc"},tooltip:!0,tooltipOpts:{content:"%x : %y"},xaxis:{tickColor:"#fcfcfc",mode:"categories"},yaxis:{tickColor:"#eee",tickFormatter:function(a){return a+" clk"}},shadowSize:0};b.remoteData(c),$("html").on("fa.panelrefresh.refresh",function(a,d){0!==d.element.find("#chart-area").length&&b.remoteData(c)})}}),$(function(){if(0!==$("#chart-area-spline").length){var b=new a("#chart-area-spline","api/flot.php?type=areaspline"),c={series:{lines:{show:!1},splines:{show:!0,tension:.4,lineWidth:2,fill:.8},points:{show:!0,radius:4}},grid:{borderColor:"#eee",borderWidth:1,hoverable:!0,backgroundColor:"#fcfcfc"},tooltip:!0,tooltipOpts:{content:"%x : %y"},xaxis:{tickColor:"#fcfcfc",mode:"categories"},yaxis:{tickColor:"#eee",tickFormatter:function(a){return a+" clk"}},shadowSize:0};b.remoteData(c),$("html").on("fa.panelrefresh.refresh",function(a,d){0!==d.element.find("#chart-area-spline").length&&b.remoteData(c)})}}),$(function(){if(0!==$("#chart-line").length){var b=new a("#chart-line","api/flot.php?type=line"),c={series:{lines:{show:!0,fill:.01},points:{show:!0,radius:4}},grid:{borderColor:"#eee",borderWidth:1,hoverable:!0,backgroundColor:"#fcfcfc"},tooltip:!0,tooltipOpts:{content:"%x : %y"},xaxis:{tickColor:"#eee",mode:"categories"},yaxis:{tickColor:"#eee"},shadowSize:0};b.remoteData(c),$("html").on("fa.panelrefresh.refresh",function(a,d){0!==d.element.find("#chart-line").length&&b.remoteData(c)})}}),$(function(){if(0!==$("#chart-line-spline").length){var b=new a("#chart-line-spline","api/flot.php?type=linespline"),c={series:{lines:{show:!1},splines:{show:!0,tension:.4,lineWidth:2,fill:0},points:{show:!0,radius:4}},grid:{borderColor:"#eee",borderWidth:1,hoverable:!0,backgroundColor:"#fcfcfc"},tooltip:!0,tooltipOpts:{content:"%x : %y"},xaxis:{tickColor:"#eee",mode:"categories"},yaxis:{tickColor:"#eee"},shadowSize:0};b.remoteData(c),$("html").on("fa.panelrefresh.refresh",function(a,d){0!==d.element.find("#chart-line-spline").length&&b.remoteData(c)})}}),$(function(){if(0!==$("#chart-fillbetween").length){var a={"15%":[[2,88],[3,93.3],[4,102],[5,108.5],[6,115.7],[7,115.6],[8,124.6],[9,130.3],[10,134.3],[11,141.4],[12,146.5],[13,151.7],[14,159.9],[15,165.4],[16,167.8],[17,168.7],[18,169.5],[19,168]],"90%":[[2,96.8],[3,105.2],[4,113.9],[5,120.8],[6,127],[7,133.1],[8,139.1],[9,143.9],[10,151.3],[11,161.1],[12,164.8],[13,173.5],[14,179],[15,182],[16,186.9],[17,185.2],[18,186.3],[19,186.6]],"25%":[[2,89.2],[3,94.9],[4,104.4],[5,111.4],[6,117.5],[7,120.2],[8,127.1],[9,132.9],[10,136.8],[11,144.4],[12,149.5],[13,154.1],[14,163.1],[15,169.2],[16,170.4],[17,171.2],[18,172.4],[19,170.8]],"10%":[[2,86.9],[3,92.6],[4,99.9],[5,107],[6,114],[7,113.5],[8,123.6],[9,129.2],[10,133],[11,140.6],[12,145.2],[13,149.7],[14,158.4],[15,163.5],[16,166.9],[17,167.5],[18,167.1],[19,165.3]],mean:[[2,91.9],[3,98.5],[4,107.1],[5,114.4],[6,120.6],[7,124.7],[8,131.1],[9,136.8],[10,142.3],[11,150],[12,154.7],[13,161.9],[14,168.7],[15,173.6],[16,175.9],[17,176.6],[18,176.8],[19,176.7]],"75%":[[2,94.5],[3,102.1],[4,110.8],[5,117.9],[6,124],[7,129.3],[8,134.6],[9,141.4],[10,147],[11,156.1],[12,160.3],[13,168.3],[14,174.7],[15,178],[16,180.2],[17,181.7],[18,181.3],[19,182.5]],"85%":[[2,96.2],[3,103.8],[4,111.8],[5,119.6],[6,125.6],[7,131.5],[8,138],[9,143.3],[10,149.3],[11,159.8],[12,162.5],[13,171.3],[14,177.5],[15,180.2],[16,183.8],[17,183.4],[18,183.5],[19,185.5]],"50%":[[2,91.9],[3,98.2],[4,106.8],[5,114.6],[6,120.8],[7,125.2],[8,130.3],[9,137.1],[10,141.5],[11,149.4],[12,153.9],[13,162.2],[14,169],[15,174.8],[16,176],[17,176.8],[18,176.4],[19,177.4]]},b={"15%":[[2,84.8],[3,93.7],[4,100.6],[5,105.8],[6,113.3],[7,119.3],[8,124.3],[9,131.4],[10,136.9],[11,143.8],[12,149.4],[13,151.2],[14,152.3],[15,155.9],[16,154.7],[17,157],[18,156.1],[19,155.4]],"90%":[[2,95.6],[3,104.1],[4,111.9],[5,119.6],[6,127.6],[7,133.1],[8,138.7],[9,147.1],[10,152.8],[11,161.3],[12,166.6],[13,167.9],[14,169.3],[15,170.1],[16,172.4],[17,169.2],[18,171.1],[19,172.4]],"25%":[[2,87.2],[3,95.9],[4,101.9],[5,107.4],[6,114.8],[7,121.4],[8,126.8],[9,133.4],[10,138.6],[11,146.2],[12,152],[13,153.8],[14,155.7],[15,158.4],[16,157],[17,158.5],[18,158.4],[19,158.1]],"10%":[[2,84],[3,91.9],[4,99.2],[5,105.2],[6,112.7],[7,118],[8,123.3],[9,130.2],[10,135],[11,141.1],[12,148.3],[13,150],[14,150.7],[15,154.3],[16,153.6],[17,155.6],[18,154.7],[19,153.1]],mean:[[2,90.2],[3,98.3],[4,105.2],[5,112.2],[6,119],[7,125.8],[8,131.3],[9,138.6],[10,144.2],[11,151.3],[12,156.7],[13,158.6],[14,160.5],[15,162.1],[16,162.9],[17,162.2],[18,163],[19,163.1]],"75%":[[2,93.2],[3,101.5],[4,107.9],[5,116.6],[6,122.8],[7,129.3],[8,135.2],[9,143.7],[10,148.7],[11,156.9],[12,160.8],[13,163],[14,165],[15,165.8],[16,168.7],[17,166.2],[18,167.6],[19,168]],"85%":[[2,94.5],[3,102.8],[4,110.4],[5,119],[6,125.7],[7,131.5],[8,137.9],[9,146],[10,151.3],[11,159.9],[12,164],[13,166.5],[14,167.5],[15,168.5],[16,171.5],[17,168],[18,169.8],[19,170.3]],"50%":[[2,90.2],[3,98.1],[4,105.2],[5,111.7],[6,118.2],[7,125.6],[8,130.5],[9,138.3],[10,143.7],[11,151.4],[12,156.7],[13,157.7],[14,161],[15,162],[16,162.8],[17,162.2],[18,162.8],[19,163.3]]},c=[{label:"Female mean",data:b.mean,lines:{show:!0},color:"#4fc0e8"},{id:"f15%",data:b["15%"],lines:{show:!0,lineWidth:0,fill:!1},color:"#4fc0e8"},{id:"f25%",data:b["25%"],lines:{show:!0,lineWidth:0,fill:.2},color:"#4fc0e8",fillBetween:"f15%"},{id:"f50%",data:b["50%"],lines:{show:!0,lineWidth:.5,fill:.4,shadowSize:0},color:"#4fc0e8",fillBetween:"f25%"},{id:"f75%",data:b["75%"],lines:{show:!0,lineWidth:0,fill:.4},color:"#4fc0e8",fillBetween:"f50%"},{id:"f85%",data:b["85%"],lines:{show:!0,lineWidth:0,fill:.2},color:"#4fc0e8",fillBetween:"f75%"},{label:"Male mean",data:b.mean,lines:{show:!0},color:"#ed5466"},{id:"m15%",data:a["15%"],lines:{show:!0,lineWidth:0,fill:!1},color:"#ed5466"},{id:"m25%",data:a["25%"],lines:{show:!0,lineWidth:0,fill:.2},color:"#ed5466",fillBetween:"m15%"},{id:"m50%",data:a["50%"],lines:{show:!0,lineWidth:.5,fill:.4,shadowSize:0},color:"#ed5466",fillBetween:"m25%"},{id:"m75%",data:a["75%"],lines:{show:!0,lineWidth:0,fill:.4},color:"#ed5466",fillBetween:"m50%"},{id:"m85%",data:a["85%"],lines:{show:!0,lineWidth:0,fill:.2},color:"#ed5466",fillBetween:"m75%"}],d={grid:{borderColor:"#eee",borderWidth:1,hoverable:!0,backgroundColor:"#fcfcfc"},xaxis:{tickColor:"#eee",tickDecimals:0},yaxis:{tickColor:"#eee",tickFormatter:function(a){return a+" cm"}},legend:{position:"se"}};$.plot($("#chart-fillbetween"),c,d)}}),$(function(){if(0!==$("#chart-pie1").length){var b=new a("#chart-pie1","api/flot.php?type=pie"),c={series:{pie:{show:!0,innerRadius:0}}};b.remoteData(c)}}),$(function(){if(0!==$("#chart-pie2").length){var b=new a("#chart-pie2","api/flot.php?type=pie"),c={series:{pie:{show:!0,innerRadius:.5}}};b.remoteData(c)}})});