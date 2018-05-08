function _toConsumableArray(a){if(Array.isArray(a)){for(var b=0,c=Array(a.length);b<a.length;b++)c[b]=a[b];return c}return Array.from(a)}var _slice=Array.prototype.slice;!function(a,b){"object"==typeof exports&&"undefined"!=typeof module?module.exports=b(require("jquery")):"function"==typeof define&&define.amd?define(["jquery"],b):a.parsley=b(a.jQuery)}(this,function(a){"use strict";function b(a,b){return a.parsleyAdaptedCallback||(a.parsleyAdaptedCallback=function(){var c=Array.prototype.slice.call(arguments,0);c.unshift(this),a.apply(b||E,c)}),a.parsleyAdaptedCallback}function c(a){return 0===a.lastIndexOf(G,0)?a.substr(G.length):a}var d=1,e={},f={attr:function(a,b,c){var d,e,f,g=new RegExp("^"+b,"i");if("undefined"==typeof c)c={};else for(d in c)c.hasOwnProperty(d)&&delete c[d];if("undefined"==typeof a||"undefined"==typeof a[0])return c;for(f=a[0].attributes,d=f.length;d--;)e=f[d],e&&e.specified&&g.test(e.name)&&(c[this.camelize(e.name.slice(b.length))]=this.deserializeValue(e.value));return c},checkAttr:function(a,b,c){return a.is("["+b+c+"]")},setAttr:function(a,b,c,d){a[0].setAttribute(this.dasherize(b+c),String(d))},generateID:function(){return""+d++},deserializeValue:function(b){var c;try{return b?"true"==b||("false"==b?!1:"null"==b?null:isNaN(c=Number(b))?/^[\[\{]/.test(b)?a.parseJSON(b):b:c):b}catch(d){return b}},camelize:function(a){return a.replace(/-+(.)?/g,function(a,b){return b?b.toUpperCase():""})},dasherize:function(a){return a.replace(/::/g,"/").replace(/([A-Z]+)([A-Z][a-z])/g,"$1_$2").replace(/([a-z\d])([A-Z])/g,"$1_$2").replace(/_/g,"-").toLowerCase()},warn:function(){var a;window.console&&"function"==typeof window.console.warn&&(a=window.console).warn.apply(a,arguments)},warnOnce:function(a){e[a]||(e[a]=!0,this.warn.apply(this,arguments))},_resetWarnings:function(){e={}},trimString:function(a){return a.replace(/^\s+|\s+$/g,"")},objectCreate:Object.create||function(){var a=function(){};return function(b){if(arguments.length>1)throw Error("Second argument not supported");if("object"!=typeof b)throw TypeError("Argument must be an object");a.prototype=b;var c=new a;return a.prototype=null,c}}()},g=f,h={namespace:"data-parsley-",inputs:"input, textarea, select",excluded:"input[type=button], input[type=submit], input[type=reset], input[type=hidden]",priorityEnabled:!0,multiple:null,group:null,uiEnabled:!0,validationThreshold:3,focus:"first",trigger:!1,errorClass:"parsley-error",successClass:"parsley-success",classHandler:function(a){},errorsContainer:function(a){},errorsWrapper:'<ul class="parsley-errors-list"></ul>',errorTemplate:"<li></li>"},i=function(){};i.prototype={asyncSupport:!0,actualizeOptions:function(){return g.attr(this.$element,this.options.namespace,this.domOptions),this.parent&&this.parent.actualizeOptions&&this.parent.actualizeOptions(),this},_resetOptions:function(a){this.domOptions=g.objectCreate(this.parent.options),this.options=g.objectCreate(this.domOptions);for(var b in a)a.hasOwnProperty(b)&&(this.options[b]=a[b]);this.actualizeOptions()},_listeners:null,on:function(a,b){this._listeners=this._listeners||{};var c=this._listeners[a]=this._listeners[a]||[];return c.push(b),this},subscribe:function(b,c){a.listenTo(this,b.toLowerCase(),c)},off:function(a,b){var c=this._listeners&&this._listeners[a];if(c)if(b)for(var d=c.length;d--;)c[d]===b&&c.splice(d,1);else delete this._listeners[a];return this},unsubscribe:function(b,c){a.unsubscribeTo(this,b.toLowerCase())},trigger:function(a,b,c){b=b||this;var d,e=this._listeners&&this._listeners[a];if(e)for(var f=e.length;f--;)if(d=e[f].call(b,b,c),d===!1)return d;return this.parent?this.parent.trigger(a,b,c):!0},reset:function(){if("ParsleyForm"!==this.__class__)return this._trigger("reset");for(var a=0;a<this.fields.length;a++)this.fields[a]._trigger("reset");this._trigger("reset")},destroy:function(){if("ParsleyForm"!==this.__class__)return this.$element.removeData("Parsley"),this.$element.removeData("ParsleyFieldMultiple"),void this._trigger("destroy");for(var a=0;a<this.fields.length;a++)this.fields[a].destroy();this.$element.removeData("Parsley"),this._trigger("destroy")},asyncIsValid:function(a,b){return g.warnOnce("asyncIsValid is deprecated; please use whenValid instead"),this.whenValid({group:a,force:b})},_findRelated:function(){return this.options.multiple?this.parent.$element.find("["+this.options.namespace+'multiple="'+this.options.multiple+'"]'):this.$element}};var j={string:function(a){return a},integer:function(a){if(isNaN(a))throw'Requirement is not an integer: "'+a+'"';return parseInt(a,10)},number:function(a){if(isNaN(a))throw'Requirement is not a number: "'+a+'"';return parseFloat(a)},reference:function(b){var c=a(b);if(0===c.length)throw'No such reference: "'+b+'"';return c},"boolean":function(a){return"false"!==a},object:function(a){return g.deserializeValue(a)},regexp:function(a){var b="";return/^\/.*\/(?:[gimy]*)$/.test(a)?(b=a.replace(/.*\/([gimy]*)$/,"$1"),a=a.replace(new RegExp("^/(.*?)/"+b+"$"),"$1")):a="^"+a+"$",new RegExp(a,b)}},k=function(a,b){var c=a.match(/^\s*\[(.*)\]\s*$/);if(!c)throw'Requirement is not an array: "'+a+'"';var d=c[1].split(",").map(g.trimString);if(d.length!==b)throw"Requirement has "+d.length+" values when "+b+" are needed";return d},l=function(a,b){var c=j[a||"string"];if(!c)throw'Unknown requirement specification: "'+a+'"';return c(b)},m=function(a,b,c){var d=null,e={};for(var f in a)if(f){var g=c(f);"string"==typeof g&&(g=l(a[f],g)),e[f]=g}else d=l(a[f],b);return[d,e]},n=function(b){a.extend(!0,this,b)};n.prototype={validate:function(b,c){if(this.fn)return arguments.length>3&&(c=[].slice.call(arguments,1,-1)),this.fn.call(this,b,c);if(a.isArray(b)){if(!this.validateMultiple)throw"Validator `"+this.name+"` does not handle multiple values";return this.validateMultiple.apply(this,arguments)}if(this.validateNumber)return isNaN(b)?!1:(arguments[0]=parseFloat(arguments[0]),this.validateNumber.apply(this,arguments));if(this.validateString)return this.validateString.apply(this,arguments);throw"Validator `"+this.name+"` only handles multiple values"},parseRequirements:function(b,c){if("string"!=typeof b)return a.isArray(b)?b:[b];var d=this.requirementType;if(a.isArray(d)){for(var e=k(b,d.length),f=0;f<e.length;f++)e[f]=l(d[f],e[f]);return e}return a.isPlainObject(d)?m(d,b,c):[l(d,b)]},requirementType:"string",priority:2};var o=function(a,b){this.__class__="ParsleyValidatorRegistry",this.locale="en",this.init(a||{},b||{})},p={email:/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i,number:/^-?(\d*\.)?\d+(e[-+]?\d+)?$/i,integer:/^-?\d+$/,digits:/^\d+$/,alphanum:/^\w+$/i,url:new RegExp("^(?:(?:https?|ftp)://)?(?:\\S+(?::\\S*)?@)?(?:(?:[1-9]\\d?|1\\d\\d|2[01]\\d|22[0-3])(?:\\.(?:1?\\d{1,2}|2[0-4]\\d|25[0-5])){2}(?:\\.(?:[1-9]\\d?|1\\d\\d|2[0-4]\\d|25[0-4]))|(?:(?:[a-z\\u00a1-\\uffff0-9]-*)*[a-z\\u00a1-\\uffff0-9]+)(?:\\.(?:[a-z\\u00a1-\\uffff0-9]-*)*[a-z\\u00a1-\\uffff0-9]+)*(?:\\.(?:[a-z\\u00a1-\\uffff]{2,})))(?::\\d{2,5})?(?:/\\S*)?$","i")};p.range=p.number;var q=function(a){var b=(""+a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);return b?Math.max(0,(b[1]?b[1].length:0)-(b[2]?+b[2]:0)):0};o.prototype={init:function(b,c){this.catalog=c,this.validators=a.extend({},this.validators);for(var d in b)this.addValidator(d,b[d].fn,b[d].priority);window.Parsley.trigger("parsley:validator:init")},setLocale:function(a){if("undefined"==typeof this.catalog[a])throw new Error(a+" is not available in the catalog");return this.locale=a,this},addCatalog:function(a,b,c){return"object"==typeof b&&(this.catalog[a]=b),!0===c?this.setLocale(a):this},addMessage:function(a,b,c){return"undefined"==typeof this.catalog[a]&&(this.catalog[a]={}),this.catalog[a][b]=c,this},addMessages:function(a,b){for(var c in b)this.addMessage(a,c,b[c]);return this},addValidator:function(a,b,c){if(this.validators[a])g.warn('Validator "'+a+'" is already defined.');else if(h.hasOwnProperty(a))return void g.warn('"'+a+'" is a restricted keyword and is not a valid validator name.');return this._setValidator.apply(this,arguments)},updateValidator:function(a,b,c){return this.validators[a]?this._setValidator(this,arguments):(g.warn('Validator "'+a+'" is not already defined.'),this.addValidator.apply(this,arguments))},removeValidator:function(a){return this.validators[a]||g.warn('Validator "'+a+'" is not defined.'),delete this.validators[a],this},_setValidator:function(a,b,c){"object"!=typeof b&&(b={fn:b,priority:c}),b.validate||(b=new n(b)),this.validators[a]=b;for(var d in b.messages||{})this.addMessage(d,a,b.messages[d]);return this},getErrorMessage:function(a){var b;if("type"===a.name){var c=this.catalog[this.locale][a.name]||{};b=c[a.requirements]}else b=this.formatMessage(this.catalog[this.locale][a.name],a.requirements);return b||this.catalog[this.locale].defaultMessage||this.catalog.en.defaultMessage},formatMessage:function(a,b){if("object"==typeof b){for(var c in b)a=this.formatMessage(a,b[c]);return a}return"string"==typeof a?a.replace(/%s/i,b):""},validators:{notblank:{validateString:function(a){return/\S/.test(a)},priority:2},required:{validateMultiple:function(a){return a.length>0},validateString:function(a){return/\S/.test(a)},priority:512},type:{validateString:function(a,b){var c=arguments.length<=2||void 0===arguments[2]?{}:arguments[2],d=c.step,e=void 0===d?"1":d,f=c.base,g=void 0===f?0:f,h=p[b];if(!h)throw new Error("validator type `"+b+"` is not supported");if(!h.test(a))return!1;if("number"===b&&!/^any$/i.test(e||"")){var i=Number(a),j=Math.pow(10,Math.max(q(e),q(g)));if((i*j-g*j)%(e*j)!=0)return!1}return!0},requirementType:{"":"string",step:"string",base:"number"},priority:256},pattern:{validateString:function(a,b){return b.test(a)},requirementType:"regexp",priority:64},minlength:{validateString:function(a,b){return a.length>=b},requirementType:"integer",priority:30},maxlength:{validateString:function(a,b){return a.length<=b},requirementType:"integer",priority:30},length:{validateString:function(a,b,c){return a.length>=b&&a.length<=c},requirementType:["integer","integer"],priority:30},mincheck:{validateMultiple:function(a,b){return a.length>=b},requirementType:"integer",priority:30},maxcheck:{validateMultiple:function(a,b){return a.length<=b},requirementType:"integer",priority:30},check:{validateMultiple:function(a,b,c){return a.length>=b&&a.length<=c},requirementType:["integer","integer"],priority:30},min:{validateNumber:function(a,b){return a>=b},requirementType:"number",priority:30},max:{validateNumber:function(a,b){return b>=a},requirementType:"number",priority:30},range:{validateNumber:function(a,b,c){return a>=b&&c>=a},requirementType:["number","number"],priority:30},equalto:{validateString:function(b,c){var d=a(c);return d.length?b===d.val():b===c},priority:256}}};var r=function(a){this.__class__="ParsleyUI"};r.prototype={listen:function(){var a=this;return window.Parsley.on("form:init",function(b){a.setupForm(b)}).on("field:init",function(b){a.setupField(b)}).on("field:validated",function(b){a.reflow(b)}).on("form:validated",function(b){a.focus(b)}).on("field:reset",function(b){a.reset(b)}).on("form:destroy",function(b){a.destroy(b)}).on("field:destroy",function(b){a.destroy(b)}),this},reflow:function(a){if("undefined"!=typeof a._ui&&!1!==a._ui.active){var b=this._diff(a.validationResult,a._ui.lastValidationResult);a._ui.lastValidationResult=a.validationResult,this.manageStatusClass(a),this.manageErrorsMessages(a,b),this.actualizeTriggers(a),(b.kept.length||b.added.length)&&!0!==a._ui.failedOnce&&this.manageFailingFieldTrigger(a)}},getErrorsMessages:function(a){if(!0===a.validationResult)return[];for(var b=[],c=0;c<a.validationResult.length;c++)b.push(a.validationResult[c].errorMessage||this._getErrorMessage(a,a.validationResult[c].assert));return b},manageStatusClass:function(a){a.hasConstraints()&&a.needsValidation()&&!0===a.validationResult?this._successClass(a):a.validationResult.length>0?this._errorClass(a):this._resetClass(a)},manageErrorsMessages:function(b,c){if("undefined"==typeof b.options.errorsMessagesDisabled){if("undefined"!=typeof b.options.errorMessage)return c.added.length||c.kept.length?(this._insertErrorWrapper(b),0===b._ui.$errorsWrapper.find(".parsley-custom-error-message").length&&b._ui.$errorsWrapper.append(a(b.options.errorTemplate).addClass("parsley-custom-error-message")),b._ui.$errorsWrapper.addClass("filled").find(".parsley-custom-error-message").html(b.options.errorMessage)):b._ui.$errorsWrapper.removeClass("filled").find(".parsley-custom-error-message").remove();for(var d=0;d<c.removed.length;d++)this.removeError(b,c.removed[d].assert.name,!0);for(d=0;d<c.added.length;d++)this.addError(b,c.added[d].assert.name,c.added[d].errorMessage,c.added[d].assert,!0);for(d=0;d<c.kept.length;d++)this.updateError(b,c.kept[d].assert.name,c.kept[d].errorMessage,c.kept[d].assert,!0)}},addError:function(b,c,d,e,f){this._insertErrorWrapper(b),b._ui.$errorsWrapper.addClass("filled").append(a(b.options.errorTemplate).addClass("parsley-"+c).html(d||this._getErrorMessage(b,e))),!0!==f&&this._errorClass(b)},updateError:function(a,b,c,d,e){a._ui.$errorsWrapper.addClass("filled").find(".parsley-"+b).html(c||this._getErrorMessage(a,d)),!0!==e&&this._errorClass(a)},removeError:function(a,b,c){a._ui.$errorsWrapper.removeClass("filled").find(".parsley-"+b).remove(),!0!==c&&this.manageStatusClass(a)},focus:function(a){if(a._focusedField=null,!0===a.validationResult||"none"===a.options.focus)return null;for(var b=0;b<a.fields.length;b++){var c=a.fields[b];if(!0!==c.validationResult&&c.validationResult.length>0&&"undefined"==typeof c.options.noFocus&&(a._focusedField=c.$element,"first"===a.options.focus))break}return null===a._focusedField?null:a._focusedField.focus()},_getErrorMessage:function(a,b){var c=b.name+"Message";return"undefined"!=typeof a.options[c]?window.Parsley.formatMessage(a.options[c],b.requirements):window.Parsley.getErrorMessage(b)},_diff:function(a,b,c){for(var d=[],e=[],f=0;f<a.length;f++){for(var g=!1,h=0;h<b.length;h++)if(a[f].assert.name===b[h].assert.name){g=!0;break}g?e.push(a[f]):d.push(a[f])}return{kept:e,added:d,removed:c?[]:this._diff(b,a,!0).added}},setupForm:function(a){a.$element.on("submit.Parsley",function(b){a.onSubmitValidate(b)}),a.$element.on("click.Parsley",'input[type="submit"], button[type="submit"]',function(b){a.onSubmitButton(b)}),!1!==a.options.uiEnabled&&a.$element.attr("novalidate","")},setupField:function(b){var c={active:!1};!1!==b.options.uiEnabled&&(c.active=!0,b.$element.attr(b.options.namespace+"id",b.__id__),c.$errorClassHandler=this._manageClassHandler(b),c.errorsWrapperId="parsley-id-"+(b.options.multiple?"multiple-"+b.options.multiple:b.__id__),c.$errorsWrapper=a(b.options.errorsWrapper).attr("id",c.errorsWrapperId),c.lastValidationResult=[],c.validationInformationVisible=!1,b._ui=c,this.actualizeTriggers(b))},_manageClassHandler:function(b){if("string"==typeof b.options.classHandler&&a(b.options.classHandler).length)return a(b.options.classHandler);var c=b.options.classHandler(b);return"undefined"!=typeof c&&c.length?c:!b.options.multiple||b.$element.is("select")?b.$element:b.$element.parent()},_insertErrorWrapper:function(b){var c;if(0!==b._ui.$errorsWrapper.parent().length)return b._ui.$errorsWrapper.parent();if("string"==typeof b.options.errorsContainer){if(a(b.options.errorsContainer).length)return a(b.options.errorsContainer).append(b._ui.$errorsWrapper);g.warn("The errors container `"+b.options.errorsContainer+"` does not exist in DOM")}else"function"==typeof b.options.errorsContainer&&(c=b.options.errorsContainer(b));if("undefined"!=typeof c&&c.length)return c.append(b._ui.$errorsWrapper);var d=b.$element;return b.options.multiple&&(d=d.parent()),d.after(b._ui.$errorsWrapper)},actualizeTriggers:function(a){var b=this,c=a._findRelated();if(c.off(".Parsley"),!1!==a.options.trigger){var d=a.options.trigger.replace(/^\s+/g,"").replace(/\s+$/g,"");""!==d&&c.on(d.split(" ").join(".Parsley ")+".Parsley",function(c){b.eventValidate(a,c)})}},eventValidate:function(a,b){/key/.test(b.type)&&!a._ui.validationInformationVisible&&a.getValue().length<=a.options.validationThreshold||a.validate()},manageFailingFieldTrigger:function(b){return b._ui.failedOnce=!0,b.options.multiple&&b._findRelated().each(function(){/change/i.test(a(this).parsley().options.trigger||"")||a(this).on("change.ParsleyFailedOnce",function(){b.validate()})}),b.$element.is("select")&&!/change/i.test(b.options.trigger||"")?b.$element.on("change.ParsleyFailedOnce",function(){b.validate()}):/keyup/i.test(b.options.trigger||"")?void 0:b.$element.on("keyup.ParsleyFailedOnce",function(){b.validate()})},reset:function(a){this.actualizeTriggers(a),a.$element.off(".ParsleyFailedOnce"),"undefined"!=typeof a._ui&&"ParsleyForm"!==a.__class__&&(a._ui.$errorsWrapper.removeClass("filled").children().remove(),this._resetClass(a),a._ui.lastValidationResult=[],a._ui.validationInformationVisible=!1,a._ui.failedOnce=!1)},destroy:function(a){this.reset(a),"ParsleyForm"!==a.__class__&&("undefined"!=typeof a._ui&&a._ui.$errorsWrapper.remove(),delete a._ui)},_successClass:function(a){a._ui.validationInformationVisible=!0,a._ui.$errorClassHandler.removeClass(a.options.errorClass).addClass(a.options.successClass)},_errorClass:function(a){a._ui.validationInformationVisible=!0,a._ui.$errorClassHandler.removeClass(a.options.successClass).addClass(a.options.errorClass)},_resetClass:function(a){a._ui.$errorClassHandler.removeClass(a.options.successClass).removeClass(a.options.errorClass)}};var s=function(b,c,d){this.__class__="ParsleyForm",this.__id__=g.generateID(),this.$element=a(b),this.domOptions=c,this.options=d,this.parent=window.Parsley,this.fields=[],this.validationResult=null},t={pending:null,resolved:!0,rejected:!1};s.prototype={onSubmitValidate:function(a){var b=this;if(!0!==a.parsley)return this._$submitSource=this._$submitSource||this.$element.find('input[type="submit"], button[type="submit"]').first(),this._$submitSource.is("[formnovalidate]")?void(this._$submitSource=null):(a.stopImmediatePropagation(),a.preventDefault(),this.whenValidate({event:a}).done(function(){b._submit()}).always(function(){b._$submitSource=null}),this)},onSubmitButton:function(b){this._$submitSource=a(b.target)},_submit:function(){!1!==this._trigger("submit")&&(this.$element.find(".parsley_synthetic_submit_button").remove(),this._$submitSource&&a('<input class="parsley_synthetic_submit_button" type="hidden">').attr("name",this._$submitSource.attr("name")).attr("value",this._$submitSource.attr("value")).appendTo(this.$element),this.$element.trigger(a.extend(a.Event("submit"),{parsley:!0})))},validate:function(b){if(arguments.length>=1&&!a.isPlainObject(b)){g.warnOnce("Calling validate on a parsley form without passing arguments as an object is deprecated.");var c=_slice.call(arguments),d=c[0],e=c[1],f=c[2];b={group:d,force:e,event:f}}return t[this.whenValidate(b).state()]},whenValidate:function(){var b=this,c=arguments.length<=0||void 0===arguments[0]?{}:arguments[0],d=c.group,e=c.force,f=c.event;this.submitEvent=f,f&&(this.submitEvent.preventDefault=function(){g.warnOnce("Using `this.submitEvent.preventDefault()` is deprecated; instead, call `this.validationResult = false`"),b.validationResult=!1}),this.validationResult=!0,this._trigger("validate"),this._refreshFields();var h=this._withoutReactualizingFormOptions(function(){return a.map(b.fields,function(a){return a.whenValidate({force:e,group:d})})}),i=function(){var c=a.Deferred();return!1===b.validationResult&&c.reject(),c.resolve().promise()};return a.when.apply(a,_toConsumableArray(h)).done(function(){b._trigger("success")}).fail(function(){b.validationResult=!1,b._trigger("error")}).always(function(){b._trigger("validated")}).pipe(i,i)},isValid:function(b){if(arguments.length>=1&&!a.isPlainObject(b)){g.warnOnce("Calling isValid on a parsley form without passing arguments as an object is deprecated.");var c=_slice.call(arguments),d=c[0],e=c[1];b={group:d,force:e}}return t[this.whenValid(b).state()]},whenValid:function(){var b=this,c=arguments.length<=0||void 0===arguments[0]?{}:arguments[0],d=c.group,e=c.force;this._refreshFields();var f=this._withoutReactualizingFormOptions(function(){return a.map(b.fields,function(a){return a.whenValid({group:d,force:e})})});return a.when.apply(a,_toConsumableArray(f))},_refreshFields:function(){return this.actualizeOptions()._bindFields()},_bindFields:function(){var b=this,c=this.fields;return this.fields=[],this.fieldsMappedById={},this._withoutReactualizingFormOptions(function(){b.$element.find(b.options.inputs).not(b.options.excluded).each(function(a,c){var d=new window.Parsley.Factory(c,{},b);"ParsleyField"!==d.__class__&&"ParsleyFieldMultiple"!==d.__class__||!0===d.options.excluded||"undefined"==typeof b.fieldsMappedById[d.__class__+"-"+d.__id__]&&(b.fieldsMappedById[d.__class__+"-"+d.__id__]=d,b.fields.push(d))}),a(c).not(b.fields).each(function(a,b){b._trigger("reset")})}),this},_withoutReactualizingFormOptions:function(a){var b=this.actualizeOptions;this.actualizeOptions=function(){return this};var c=a();return this.actualizeOptions=b,c},_trigger:function(a){return this.trigger("form:"+a)}};var u=function(b,c,d,e,f){if(!/ParsleyField/.test(b.__class__))throw new Error("ParsleyField or ParsleyFieldMultiple instance expected");var g=window.Parsley._validatorRegistry.validators[c],h=new n(g);a.extend(this,{validator:h,name:c,requirements:d,priority:e||b.options[c+"Priority"]||h.priority,isDomConstraint:!0===f}),this._parseRequirements(b.options)},v=function(a){var b=a[0].toUpperCase();return b+a.slice(1)};u.prototype={validate:function(a,b){var c=this.requirementList.slice(0);return c.unshift(a),c.push(b),this.validator.validate.apply(this.validator,c)},_parseRequirements:function(a){var b=this;this.requirementList=this.validator.parseRequirements(this.requirements,function(c){return a[b.name+v(c)]})}};var w=function(b,c,d,e){this.__class__="ParsleyField",this.__id__=g.generateID(),this.$element=a(b),"undefined"!=typeof e&&(this.parent=e),this.options=d,this.domOptions=c,this.constraints=[],this.constraintsByName={},this.validationResult=[],this._bindConstraints()},x={pending:null,resolved:!0,rejected:!1};w.prototype={validate:function(b){arguments.length>=1&&!a.isPlainObject(b)&&(g.warnOnce("Calling validate on a parsley field without passing arguments as an object is deprecated."),b={options:b});var c=this.whenValidate(b);if(!c)return!0;switch(c.state()){case"pending":return null;case"resolved":return!0;case"rejected":return this.validationResult}},whenValidate:function(){var a=this,b=arguments.length<=0||void 0===arguments[0]?{}:arguments[0],c=b.force,d=b.group;return this.refreshConstraints(),!d||this._isInGroup(d)?(this.value=this.getValue(),this._trigger("validate"),this.whenValid({force:c,value:this.value,_refreshed:!0}).done(function(){a._trigger("success")}).fail(function(){a._trigger("error")}).always(function(){a._trigger("validated")})):void 0},hasConstraints:function(){return 0!==this.constraints.length},needsValidation:function(a){return"undefined"==typeof a&&(a=this.getValue()),!(!a.length&&!this._isRequired()&&"undefined"==typeof this.options.validateIfEmpty)},_isInGroup:function(b){return a.isArray(this.options.group)?-1!==a.inArray(b,this.options.group):this.options.group===b},isValid:function(b){if(arguments.length>=1&&!a.isPlainObject(b)){g.warnOnce("Calling isValid on a parsley field without passing arguments as an object is deprecated.");var c=_slice.call(arguments),d=c[0],e=c[1];b={force:d,value:e}}var f=this.whenValid(b);return f?x[f.state()]:!0},whenValid:function(){var b=this,c=arguments.length<=0||void 0===arguments[0]?{}:arguments[0],d=c.force,e=void 0===d?!1:d,f=c.value,g=c.group,h=c._refreshed;if(h||this.refreshConstraints(),!g||this._isInGroup(g)){if(this.validationResult=!0,!this.hasConstraints())return a.when();if("undefined"!=typeof f&&null!==f||(f=this.getValue()),!this.needsValidation(f)&&!0!==e)return a.when();var i=this._getGroupedConstraints(),j=[];return a.each(i,function(c,d){var e=a.when.apply(a,_toConsumableArray(a.map(d,function(a){return b._validateConstraint(f,a)})));return j.push(e),"rejected"===e.state()?!1:void 0}),a.when.apply(a,j)}},_validateConstraint:function(b,c){var d=this,e=c.validate(b,this);return!1===e&&(e=a.Deferred().reject()),a.when(e).fail(function(a){!0===d.validationResult&&(d.validationResult=[]),d.validationResult.push({assert:c,errorMessage:"string"==typeof a&&a})})},getValue:function(){var a;return a="function"==typeof this.options.value?this.options.value(this):"undefined"!=typeof this.options.value?this.options.value:this.$element.val(),"undefined"==typeof a||null===a?"":this._handleWhitespace(a)},refreshConstraints:function(){return this.actualizeOptions()._bindConstraints()},addConstraint:function(a,b,c,d){if(window.Parsley._validatorRegistry.validators[a]){var e=new u(this,a,b,c,d);"undefined"!==this.constraintsByName[e.name]&&this.removeConstraint(e.name),this.constraints.push(e),this.constraintsByName[e.name]=e}return this},removeConstraint:function(a){for(var b=0;b<this.constraints.length;b++)if(a===this.constraints[b].name){this.constraints.splice(b,1);break}return delete this.constraintsByName[a],this},updateConstraint:function(a,b,c){return this.removeConstraint(a).addConstraint(a,b,c)},_bindConstraints:function(){for(var a=[],b={},c=0;c<this.constraints.length;c++)!1===this.constraints[c].isDomConstraint&&(a.push(this.constraints[c]),b[this.constraints[c].name]=this.constraints[c]);this.constraints=a,this.constraintsByName=b;for(var d in this.options)this.addConstraint(d,this.options[d],void 0,!0);return this._bindHtml5Constraints()},_bindHtml5Constraints:function(){(this.$element.hasClass("required")||this.$element.attr("required"))&&this.addConstraint("required",!0,void 0,!0),"string"==typeof this.$element.attr("pattern")&&this.addConstraint("pattern",this.$element.attr("pattern"),void 0,!0),"undefined"!=typeof this.$element.attr("min")&&"undefined"!=typeof this.$element.attr("max")?this.addConstraint("range",[this.$element.attr("min"),this.$element.attr("max")],void 0,!0):"undefined"!=typeof this.$element.attr("min")?this.addConstraint("min",this.$element.attr("min"),void 0,!0):"undefined"!=typeof this.$element.attr("max")&&this.addConstraint("max",this.$element.attr("max"),void 0,!0),"undefined"!=typeof this.$element.attr("minlength")&&"undefined"!=typeof this.$element.attr("maxlength")?this.addConstraint("length",[this.$element.attr("minlength"),this.$element.attr("maxlength")],void 0,!0):"undefined"!=typeof this.$element.attr("minlength")?this.addConstraint("minlength",this.$element.attr("minlength"),void 0,!0):"undefined"!=typeof this.$element.attr("maxlength")&&this.addConstraint("maxlength",this.$element.attr("maxlength"),void 0,!0);var a=this.$element.attr("type");return"undefined"==typeof a?this:"number"===a?this.addConstraint("type",["number",{step:this.$element.attr("step"),base:this.$element.attr("min")||this.$element.attr("value")}],void 0,!0):/^(email|url|range)$/i.test(a)?this.addConstraint("type",a,void 0,!0):this},_isRequired:function(){return"undefined"==typeof this.constraintsByName.required?!1:!1!==this.constraintsByName.required.requirements},_trigger:function(a){return this.trigger("field:"+a)},_handleWhitespace:function(a){return!0===this.options.trimValue&&g.warnOnce('data-parsley-trim-value="true" is deprecated, please use data-parsley-whitespace="trim"'),"squish"===this.options.whitespace&&(a=a.replace(/\s{2,}/g," ")),"trim"!==this.options.whitespace&&"squish"!==this.options.whitespace&&!0!==this.options.trimValue||(a=g.trimString(a)),a},_getGroupedConstraints:function(){if(!1===this.options.priorityEnabled)return[this.constraints];for(var a=[],b={},c=0;c<this.constraints.length;c++){var d=this.constraints[c].priority;b[d]||a.push(b[d]=[]),b[d].push(this.constraints[c])}return a.sort(function(a,b){return b[0].priority-a[0].priority}),a}};var y=w,z=function(){this.__class__="ParsleyFieldMultiple"};z.prototype={addElement:function(a){return this.$elements.push(a),this},refreshConstraints:function(){var b;if(this.constraints=[],this.$element.is("select"))return this.actualizeOptions()._bindConstraints(),this;for(var c=0;c<this.$elements.length;c++)if(a("html").has(this.$elements[c]).length){b=this.$elements[c].data("ParsleyFieldMultiple").refreshConstraints().constraints;for(var d=0;d<b.length;d++)this.addConstraint(b[d].name,b[d].requirements,b[d].priority,b[d].isDomConstraint)}else this.$elements.splice(c,1);return this},getValue:function(){if("function"==typeof this.options.value)value=this.options.value(this);else if("undefined"!=typeof this.options.value)return this.options.value;if(this.$element.is("input[type=radio]"))return this._findRelated().filter(":checked").val()||"";if(this.$element.is("input[type=checkbox]")){var b=[];return this._findRelated().filter(":checked").each(function(){b.push(a(this).val())}),b}return this.$element.is("select")&&null===this.$element.val()?[]:this.$element.val()},_init:function(){return this.$elements=[this.$element],this}};var A=function(b,c,d){this.$element=a(b);var e=this.$element.data("Parsley");if(e)return"undefined"!=typeof d&&e.parent===window.Parsley&&(e.parent=d,e._resetOptions(e.options)),e;if(!this.$element.length)throw new Error("You must bind Parsley on an existing element.");if("undefined"!=typeof d&&"ParsleyForm"!==d.__class__)throw new Error("Parent instance must be a ParsleyForm instance");return this.parent=d||window.Parsley,this.init(c)};A.prototype={init:function(a){return this.__class__="Parsley",this.__version__="@@version",this.__id__=g.generateID(),this._resetOptions(a),this.$element.is("form")||g.checkAttr(this.$element,this.options.namespace,"validate")&&!this.$element.is(this.options.inputs)?this.bind("parsleyForm"):this.isMultiple()?this.handleMultiple():this.bind("parsleyField")},isMultiple:function(){return this.$element.is("input[type=radio], input[type=checkbox]")||this.$element.is("select")&&"undefined"!=typeof this.$element.attr("multiple")},handleMultiple:function(){var b,c,d=this;if(this.options.multiple||("undefined"!=typeof this.$element.attr("name")&&this.$element.attr("name").length?this.options.multiple=b=this.$element.attr("name"):"undefined"!=typeof this.$element.attr("id")&&this.$element.attr("id").length&&(this.options.multiple=this.$element.attr("id"))),this.$element.is("select")&&"undefined"!=typeof this.$element.attr("multiple"))return this.options.multiple=this.options.multiple||this.__id__,this.bind("parsleyFieldMultiple");if(!this.options.multiple)return g.warn("To be bound by Parsley, a radio, a checkbox and a multiple select input must have either a name or a multiple option.",this.$element),this;this.options.multiple=this.options.multiple.replace(/(:|\.|\[|\]|\{|\}|\$)/g,""),"undefined"!=typeof b&&a('input[name="'+b+'"]').each(function(b,c){a(c).is("input[type=radio], input[type=checkbox]")&&a(c).attr(d.options.namespace+"multiple",d.options.multiple)});for(var e=this._findRelated(),f=0;f<e.length;f++)if(c=a(e.get(f)).data("Parsley"),"undefined"!=typeof c){this.$element.data("ParsleyFieldMultiple")||c.addElement(this.$element);
break}return this.bind("parsleyField",!0),c||this.bind("parsleyFieldMultiple")},bind:function(b,c){var d;switch(b){case"parsleyForm":d=a.extend(new s(this.$element,this.domOptions,this.options),window.ParsleyExtend)._bindFields();break;case"parsleyField":d=a.extend(new y(this.$element,this.domOptions,this.options,this.parent),window.ParsleyExtend);break;case"parsleyFieldMultiple":d=a.extend(new y(this.$element,this.domOptions,this.options,this.parent),new z,window.ParsleyExtend)._init();break;default:throw new Error(b+"is not a supported Parsley type")}return this.options.multiple&&g.setAttr(this.$element,this.options.namespace,"multiple",this.options.multiple),"undefined"!=typeof c?(this.$element.data("ParsleyFieldMultiple",d),d):(this.$element.data("Parsley",d),d._trigger("init"),d)}};var B=a.fn.jquery.split(".");if(parseInt(B[0])<=1&&parseInt(B[1])<8)throw"The loaded version of jQuery is too old. Please upgrade to 1.8.x or better.";B.forEach||g.warn("Parsley requires ES5 to run properly. Please include https://github.com/es-shims/es5-shim");var C=a.extend(new i,{$element:a(document),actualizeOptions:null,_resetOptions:null,Factory:A,version:"@@version"});a.extend(y.prototype,i.prototype),a.extend(s.prototype,i.prototype),a.extend(A.prototype,i.prototype),a.fn.parsley=a.fn.psly=function(b){if(this.length>1){var c=[];return this.each(function(){c.push(a(this).parsley(b))}),c}return a(this).length?new A(this,b):void g.warn("You must bind Parsley on an existing element.")},"undefined"==typeof window.ParsleyExtend&&(window.ParsleyExtend={}),C.options=a.extend(g.objectCreate(h),window.ParsleyConfig),window.ParsleyConfig=C.options,window.Parsley=window.psly=C,window.ParsleyUtils=g;var D=window.Parsley._validatorRegistry=new o(window.ParsleyConfig.validators,window.ParsleyConfig.i18n);window.ParsleyValidator={},a.each("setLocale addCatalog addMessage addMessages getErrorMessage formatMessage addValidator updateValidator removeValidator".split(" "),function(b,c){window.Parsley[c]=a.proxy(D,c),window.ParsleyValidator[c]=function(){var a;return g.warnOnce("Accessing the method '"+c+"' through ParsleyValidator is deprecated. Simply call 'window.Parsley."+c+"(...)'"),(a=window.Parsley)[c].apply(a,arguments)}}),window.ParsleyUI="function"==typeof window.ParsleyConfig.ParsleyUI?(new window.ParsleyConfig.ParsleyUI).listen():(new r).listen(),!1!==window.ParsleyConfig.autoBind&&a(function(){a("[data-parsley-validate]").length&&a("[data-parsley-validate]").parsley()});var E=a({}),F=function(){g.warnOnce("Parsley's pubsub module is deprecated; use the 'on' and 'off' methods on parsley instances or window.Parsley")},G="parsley:";a.listen=function(a,d){var e;if(F(),"object"==typeof arguments[1]&&"function"==typeof arguments[2]&&(e=arguments[1],d=arguments[2]),"function"!=typeof d)throw new Error("Wrong parameters");window.Parsley.on(c(a),b(d,e))},a.listenTo=function(a,d,e){if(F(),!(a instanceof y||a instanceof s))throw new Error("Must give Parsley instance");if("string"!=typeof d||"function"!=typeof e)throw new Error("Wrong parameters");a.on(c(d),b(e))},a.unsubscribe=function(a,b){if(F(),"string"!=typeof a||"function"!=typeof b)throw new Error("Wrong arguments");window.Parsley.off(c(a),b.parsleyAdaptedCallback)},a.unsubscribeTo=function(a,b){if(F(),!(a instanceof y||a instanceof s))throw new Error("Must give Parsley instance");a.off(c(b))},a.unsubscribeAll=function(b){F(),window.Parsley.off(c(b)),a("form,input,textarea,select").each(function(){var d=a(this).data("Parsley");d&&d.off(c(b))})},a.emit=function(a,b){var d;F();var e=b instanceof y||b instanceof s,f=Array.prototype.slice.call(arguments,e?2:1);f.unshift(c(a)),e||(b=window.Parsley),(d=b).trigger.apply(d,_toConsumableArray(f))};a.extend(!0,C,{asyncValidators:{"default":{fn:function(a){return a.status>=200&&a.status<300},url:!1},reverse:{fn:function(a){return a.status<200||a.status>=300},url:!1}},addAsyncValidator:function(a,b,c,d){return C.asyncValidators[a]={fn:b,url:c||!1,options:d||{}},this}}),C.addValidator("remote",{requirementType:{"":"string",validator:"string",reverse:"boolean",options:"object"},validateString:function(b,c,d,e){var f,g,h={},i=d.validator||(!0===d.reverse?"reverse":"default");if("undefined"==typeof C.asyncValidators[i])throw new Error("Calling an undefined async validator: `"+i+"`");c=C.asyncValidators[i].url||c,c.indexOf("{value}")>-1?c=c.replace("{value}",encodeURIComponent(b)):h[e.$element.attr("name")||e.$element.attr("id")]=b;var j=a.extend(!0,d.options||{},C.asyncValidators[i].options);f=a.extend(!0,{},{url:c,data:h,type:"GET"},j),e.trigger("field:ajaxoptions",e,f),g=a.param(f),"undefined"==typeof C._remoteCache&&(C._remoteCache={});var k=C._remoteCache[g]=C._remoteCache[g]||a.ajax(f),l=function(){var b=C.asyncValidators[i].fn.call(e,k,c,d);return b||(b=a.Deferred().reject()),a.when(b)};return k.then(l,l)},priority:-1}),C.on("form:submit",function(){C._remoteCache={}}),window.ParsleyExtend.addAsyncValidator=function(){return ParsleyUtils.warnOnce("Accessing the method `addAsyncValidator` through an instance is deprecated. Simply call `Parsley.addAsyncValidator(...)`"),C.addAsyncValidator.apply(C,arguments)},C.addMessages("en",{defaultMessage:"This value seems to be invalid.",type:{email:"This value should be a valid email.",url:"This value should be a valid url.",number:"This value should be a valid number.",integer:"This value should be a valid integer.",digits:"This value should be digits.",alphanum:"This value should be alphanumeric."},notblank:"This value should not be blank.",required:"This value is required.",pattern:"This value seems to be invalid.",min:"This value should be greater than or equal to %s.",max:"This value should be lower than or equal to %s.",range:"This value should be between %s and %s.",minlength:"This value is too short. It should have %s characters or more.",maxlength:"This value is too long. It should have %s characters or fewer.",length:"This value length is invalid. It should be between %s and %s characters long.",mincheck:"You must select at least %s choices.",maxcheck:"You must select %s choices or fewer.",check:"You must select between %s and %s choices.",equalto:"This value should be the same."}),C.setLocale("en");var H=C;return H});