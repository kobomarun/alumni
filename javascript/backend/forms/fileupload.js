!function(a){"use strict";"function"==typeof define&&define.amd?define([],a):"object"==typeof exports?module.exports=a():a()}(function(){"use strict";$(document).bind("drop dragover",function(a){a.preventDefault()});var a="server/php/",b=0,c=0,d=$("<button/>").addClass("btn btn-primary").prop("disabled",!0).text("Processing...").on("click",function(){var a=$(this),b=a.data();a.off("click").text("Abort").on("click",function(){a.remove(),b.abort()}),b.submit().always(function(){a.remove()})});$('#basic-uploader input[type="file"]').fileupload({url:a,dataType:"json",autoUpload:!1,acceptFileTypes:/(\.|\/)(gif|jpe?g|png)$/i,maxFileSize:5e6,dropZone:$("#basic-uploader .dropzone"),disableImageResize:/Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),previewMaxWidth:50,previewMaxHeight:50,previewCrop:!0}).on("fileuploadadd",function(a,c){$("#basic-uploader .upload-lists").children("tbody").append('<tr class="upload-list-'+(b+=1)+'"><td width="50"></td><td><strong>'+c.files[0].name+"</strong></td><td>"+1e-6*c.files[0].size+'MB</td><td class="text-right" width="80"></td></tr>'),$("#basic-uploader .upload-lists").find(".upload-list-"+b+" > td").eq(3).append(d.clone(!0).data(c)[0])}).on("fileuploadprocessalways",function(a,d){var e=d.index,f=d.files[e],g=$(f.preview).addClass("img-circle pull-left");$("#basic-uploader .upload-lists").find(".upload-list-"+(c+=1)+" > td").eq(0).append(g[0]),e+1===d.files.length&&$("#basic-uploader .upload-lists").find(".upload-list-"+b+" > td > button").text("Upload").prop("disabled",!!d.files.error)}).on("fileuploadprogressall",function(a,b){var c=parseInt(b.loaded/b.total*100,10);$("#basic-uploader .progress-bar").css("width",c+"%")}).on("fileuploaddone",function(a,b){$.each(b.result.files,function(a,b){b.error&&$("#basic-uploader .alert").html("").addClass("alert-danger").append(b.error)})}).on("fileuploadfail",function(a,b){$.each(b.files,function(){$("#basic-uploader .alert").html("").addClass("alert-danger").html("File upload failed.")})}).prop("disabled",!$.support.fileInput).parent().addClass($.support.fileInput?void 0:"disabled")});