!function(a){"use strict";"function"==typeof define&&define.amd?define(["jqvmap"],a):"object"==typeof exports?module.exports=a(require("jqvmap")):a()}(function(){"use strict";$(function(){$.when($.getScript($("body").data("baseurl")+"plugins/jqvmap/js/data/jquery.vmap.sampledata.js"),$.getScript($("body").data("baseurl")+"plugins/jqvmap/js/maps/jquery.vmap.world.js"),$.Deferred(function(a){$(a.resolve)})).done(function(){$("#world-map").parents(".panel").find(".indicator").removeClass("show"),$("#map-marker").parents(".panel").find(".indicator").removeClass("show"),$("#world-map").vectorMap({map:"world_en",backgroundColor:"transparent",color:"#666",hoverOpacity:.7,enableZoom:!0,showTooltip:!0,values:sample_data,scaleColors:["#00B1E1","#91C854","#63D3E9","#FFD66A","#ED5466"],normalizeFunction:"polynomial"}),$("#map-marker").vectorMap({map:"world_en",backgroundColor:"transparent",color:"#666",hoverOpacity:.7,enableZoom:!0,showTooltip:!0,values:sample_data,scaleColors:["#00B1E1","#91C854","#63D3E9","#FFD66A","#ED5466"],normalizeFunction:"polynomial",pins:{ru:'<a href="javascript:void(0)" class="marker marker-1-1"></a>',lb:'<a href="javascript:void(0)" class="marker marker-1-2"></a>',br:'<a href="javascript:void(0)" class="marker marker-1-3"></a>',au:'<a href="javascript:void(0)" class="marker marker-1-4"></a>',my:'<a href="javascript:void(0)" class="marker marker-1-5"></a>',"in":'<a href="javascript:void(0)" class="marker marker-2-1"></a>',ca:'<a href="javascript:void(0)" class="marker marker-2-2"></a>',cg:'<a href="javascript:void(0)" class="marker marker-2-3"></a>',dz:'<a href="javascript:void(0)" class="marker marker-2-4"></a>',gl:'<a href="javascript:void(0)" class="marker marker-2-5"></a>'}})}),$.when($.getScript($("body").data("baseurl")+"plugins/jqvmap/js/maps/continents/jquery.vmap.asia.js"),$.Deferred(function(a){$(a.resolve)})).done(function(){$("#map-asia").parents(".panel").find(".indicator").removeClass("show"),$("#map-asia").vectorMap({map:"asia_en",backgroundColor:"transparent",color:"#666",hoverOpacity:.7,enableZoom:!1,showTooltip:!0,normalizeFunction:"polynomial"})}),$.when($.getScript($("body").data("baseurl")+"plugins/jqvmap/js/maps/continents/jquery.vmap.europe.js"),$.Deferred(function(a){$(a.resolve)})).done(function(){$("#map-europe").parents(".panel").find(".indicator").removeClass("show"),$("#map-europe").vectorMap({map:"europe_en",backgroundColor:"transparent",color:"#666",hoverOpacity:.7,enableZoom:!1,showTooltip:!0,normalizeFunction:"polynomial"})}),$.when($.getScript($("body").data("baseurl")+"plugins/jqvmap/js/maps/continents/jquery.vmap.australia.js"),$.Deferred(function(a){$(a.resolve)})).done(function(){$("#map-australia").parents(".panel").find(".indicator").removeClass("show"),$("#map-australia").vectorMap({map:"australia_en",backgroundColor:"transparent",color:"#666",hoverOpacity:.7,enableZoom:!1,showTooltip:!0,normalizeFunction:"polynomial"})}),$.when($.getScript($("body").data("baseurl")+"plugins/jqvmap/js/maps/continents/jquery.vmap.africa.js"),$.Deferred(function(a){$(a.resolve)})).done(function(){$("#map-africa").parents(".panel").find(".indicator").removeClass("show"),$("#map-africa").vectorMap({map:"africa_en",backgroundColor:"transparent",color:"#666",hoverOpacity:.7,enableZoom:!1,showTooltip:!0,normalizeFunction:"polynomial"})}),$.when($.getScript($("body").data("baseurl")+"plugins/jqvmap/js/maps/continents/jquery.vmap.north-america.js"),$.Deferred(function(a){$(a.resolve)})).done(function(){$("#map-north-america").parents(".panel").find(".indicator").removeClass("show"),$("#map-north-america").vectorMap({map:"north-america_en",backgroundColor:"transparent",color:"#666",hoverOpacity:.7,enableZoom:!1,showTooltip:!0,normalizeFunction:"polynomial"})}),$.when($.getScript($("body").data("baseurl")+"plugins/jqvmap/js/maps/continents/jquery.vmap.south-america.js"),$.Deferred(function(a){$(a.resolve)})).done(function(){$("#map-south-america").parents(".panel").find(".indicator").removeClass("show"),$("#map-south-america").vectorMap({map:"south-america_en",backgroundColor:"transparent",color:"#666",hoverOpacity:.7,enableZoom:!1,showTooltip:!0,normalizeFunction:"polynomial"})})})});