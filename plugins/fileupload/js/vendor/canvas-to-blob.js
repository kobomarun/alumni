!function(a){"use strict";var b=a.HTMLCanvasElement&&a.HTMLCanvasElement.prototype,c=a.Blob&&function(){try{return Boolean(new Blob)}catch(a){return!1}}(),d=c&&a.Uint8Array&&function(){try{return 100===new Blob([new Uint8Array(100)]).size}catch(a){return!1}}(),e=a.BlobBuilder||a.WebKitBlobBuilder||a.MozBlobBuilder||a.MSBlobBuilder,f=/^data:((.*?)(;charset=.*?)?)(;base64)?,/,g=(c||e)&&a.atob&&a.ArrayBuffer&&a.Uint8Array&&function(a){var b,g,h,i,j,k,l,m,n;if(b=a.match(f),!b)throw new Error("invalid data URI");for(g=b[2]?b[1]:"text/plain"+(b[3]||";charset=US-ASCII"),h=!!b[4],i=a.slice(b[0].length),j=h?atob(i):decodeURIComponent(i),k=new ArrayBuffer(j.length),l=new Uint8Array(k),m=0;m<j.length;m+=1)l[m]=j.charCodeAt(m);return c?new Blob([d?l:k],{type:g}):(n=new e,n.append(k),n.getBlob(g))};a.HTMLCanvasElement&&!b.toBlob&&(b.mozGetAsFile?b.toBlob=function(a,c,d){a(d&&b.toDataURL&&g?g(this.toDataURL(c,d)):this.mozGetAsFile("blob",c))}:b.toDataURL&&g&&(b.toBlob=function(a,b,c){a(g(this.toDataURL(b,c)))})),"function"==typeof define&&define.amd?define(function(){return g}):"object"==typeof module&&module.exports?module.exports=g:a.dataURLtoBlob=g}(window);