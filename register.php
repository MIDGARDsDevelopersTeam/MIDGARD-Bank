<!DOCTYPE html>
<html lang="ru"><!--begin::Head--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Регистрация - NAEBANK</title>
    <meta name="description" content="Singin page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://keenthemes.com/metronic">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="./assets_new/css">
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="./assets_new/login-3.css" rel="stylesheet" type="text/css">
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="./assets_new/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="./assets_new/prismjs.bundle.css" rel="stylesheet" type="text/css">
    <link href="./assets_new/style.bundle.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" sizes="354x352" href="assets/img/logo_alpha.png">
    <script>
      window.FontAwesomeKitConfig = {"asyncLoading":{"enabled":false},"autoA11y":{"enabled":true},"baseUrl":"https://ka-f.fontawesome.com","baseUrlKit":"https://kit.fontawesome.com","detectConflictsUntil":null,"iconUploads":{},"id":124171663,"license":"free","method":"css","minify":{"enabled":true},"token":"4dfb6c01ec","v4FontFaceShim":{"enabled":true},"v4shim":{"enabled":true},"version":"5.15.2"};
!function(t){"function"==typeof define&&define.amd?define("kit-loader",t):t()}((function(){"use strict";function t(e){return(t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(e)}function e(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function n(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function r(t){for(var r=1;r<arguments.length;r++){var o=null!=arguments[r]?arguments[r]:{};r%2?n(Object(o),!0).forEach((function(n){e(t,n,o[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(o)):n(Object(o)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(o,e))}))}return t}function o(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){if("undefined"==typeof Symbol||!(Symbol.iterator in Object(t)))return;var n=[],r=!0,o=!1,i=void 0;try{for(var c,a=t[Symbol.iterator]();!(r=(c=a.next()).done)&&(n.push(c.value),!e||n.length!==e);r=!0);}catch(t){o=!0,i=t}finally{try{r||null==a.return||a.return()}finally{if(o)throw i}}return n}(t,e)||function(t,e){if(!t)return;if("string"==typeof t)return i(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);"Object"===n&&t.constructor&&(n=t.constructor.name);if("Map"===n||"Set"===n)return Array.from(t);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return i(t,e)}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function i(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function c(t,e){var n=e&&e.addOn||"",r=e&&e.baseFilename||t.license+n,o=e&&e.minify?".min":"",i=e&&e.fileSuffix||t.method,c=e&&e.subdir||t.method;return t.baseUrl+"/releases/"+("latest"===t.version?"latest":"v".concat(t.version))+"/"+c+"/"+r+o+"."+i}function a(t){return t.baseUrlKit+"/"+t.token+"/"+t.id+"/kit-upload.css"}function u(t,e){var n=e||["fa"],r="."+Array.prototype.join.call(n,",."),o=t.querySelectorAll(r);Array.prototype.forEach.call(o,(function(e){var n=e.getAttribute("title");e.setAttribute("aria-hidden","true");var r=!e.nextElementSibling||!e.nextElementSibling.classList.contains("sr-only");if(n&&r){var o=t.createElement("span");o.innerHTML=n,o.classList.add("sr-only"),e.parentNode.insertBefore(o,e.nextSibling)}}))}var f,s=function(){},d="undefined"!=typeof global&&void 0!==global.process&&"function"==typeof global.process.emit,l="undefined"==typeof setImmediate?setTimeout:setImmediate,h=[];function m(){for(var t=0;t<h.length;t++)h[t][0](h[t][1]);h=[],f=!1}function p(t,e){h.push([t,e]),f||(f=!0,l(m,0))}function y(t){var e=t.owner,n=e._state,r=e._data,o=t[n],i=t.then;if("function"==typeof o){n="fulfilled";try{r=o(r)}catch(t){w(i,t)}}b(i,r)||("fulfilled"===n&&v(i,r),"rejected"===n&&w(i,r))}function b(e,n){var r;try{if(e===n)throw new TypeError("A promises callback cannot return that same promise.");if(n&&("function"==typeof n||"object"===t(n))){var o=n.then;if("function"==typeof o)return o.call(n,(function(t){r||(r=!0,n===t?g(e,t):v(e,t))}),(function(t){r||(r=!0,w(e,t))})),!0}}catch(t){return r||w(e,t),!0}return!1}function v(t,e){t!==e&&b(t,e)||g(t,e)}function g(t,e){"pending"===t._state&&(t._state="settled",t._data=e,p(S,t))}function w(t,e){"pending"===t._state&&(t._state="settled",t._data=e,p(O,t))}function A(t){t._then=t._then.forEach(y)}function S(t){t._state="fulfilled",A(t)}function O(t){t._state="rejected",A(t),!t._handled&&d&&global.process.emit("unhandledRejection",t._data,t)}function j(t){global.process.emit("rejectionHandled",t)}function E(t){if("function"!=typeof t)throw new TypeError("Promise resolver "+t+" is not a function");if(this instanceof E==!1)throw new TypeError("Failed to construct 'Promise': Please use the 'new' operator, this object constructor cannot be called as a function.");this._then=[],function(t,e){function n(t){w(e,t)}try{t((function(t){v(e,t)}),n)}catch(t){n(t)}}(t,this)}E.prototype={constructor:E,_state:"pending",_then:null,_data:void 0,_handled:!1,then:function(t,e){var n={owner:this,then:new this.constructor(s),fulfilled:t,rejected:e};return!e&&!t||this._handled||(this._handled=!0,"rejected"===this._state&&d&&p(j,this)),"fulfilled"===this._state||"rejected"===this._state?p(y,n):this._then.push(n),n.then},catch:function(t){return this.then(null,t)}},E.all=function(t){if(!Array.isArray(t))throw new TypeError("You must pass an array to Promise.all().");return new E((function(e,n){var r=[],o=0;function i(t){return o++,function(n){r[t]=n,--o||e(r)}}for(var c,a=0;a<t.length;a++)(c=t[a])&&"function"==typeof c.then?c.then(i(a),n):r[a]=c;o||e(r)}))},E.race=function(t){if(!Array.isArray(t))throw new TypeError("You must pass an array to Promise.race().");return new E((function(e,n){for(var r,o=0;o<t.length;o++)(r=t[o])&&"function"==typeof r.then?r.then(e,n):e(r)}))},E.resolve=function(e){return e&&"object"===t(e)&&e.constructor===E?e:new E((function(t){t(e)}))},E.reject=function(t){return new E((function(e,n){n(t)}))};var _="function"==typeof Promise?Promise:E;function P(t,e){var n=e.fetch,r=e.XMLHttpRequest,o=e.token,i=t;return"URLSearchParams"in window?(i=new URL(t)).searchParams.set("token",o):i=i+"?token="+encodeURIComponent(o),i=i.toString(),new _((function(t,e){if("function"==typeof n)n(i,{mode:"cors",cache:"default"}).then((function(t){if(t.ok)return t.text();throw new Error("")})).then((function(e){t(e)})).catch(e);else if("function"==typeof r){var o=new r;o.addEventListener("loadend",(function(){this.responseText?t(this.responseText):e(new Error(""))}));["abort","error","timeout"].map((function(t){o.addEventListener(t,(function(){e(new Error(""))}))})),o.open("GET",i),o.send()}else{e(new Error(""))}}))}function C(t,e,n){var r=t;return[[/(url\("?)\.\.\/\.\.\/\.\./g,function(t,n){return"".concat(n).concat(e)}],[/(url\("?)\.\.\/webfonts/g,function(t,r){return"".concat(r).concat(e,"/releases/v").concat(n,"/webfonts")}],[/(url\("?)https:\/\/kit-free([^.])*\.fontawesome\.com/g,function(t,n){return"".concat(n).concat(e)}]].forEach((function(t){var e=o(t,2),n=e[0],i=e[1];r=r.replace(n,i)})),r}function F(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:function(){},o=e.document||o,i=u.bind(u,o,["fa","fab","fas","far","fal","fad","fak"]),f=Object.keys(t.iconUploads||{}).length>0;t.autoA11y.enabled&&n(i);var s=[{id:"fa-main",addOn:void 0}];t.v4shim.enabled&&s.push({id:"fa-v4-shims",addOn:"-v4-shims"}),t.v4FontFaceShim.enabled&&s.push({id:"fa-v4-font-face",addOn:"-v4-font-face"}),f&&s.push({id:"fa-kit-upload",customCss:!0});var d=s.map((function(n){return new _((function(o,i){P(n.customCss?a(t):c(t,{addOn:n.addOn,minify:t.minify.enabled}),e).then((function(i){o(U(i,r(r({},e),{},{baseUrl:t.baseUrl,version:t.version,id:n.id,contentFilter:function(t,e){return C(t,e.baseUrl,e.version)}})))})).catch(i)}))}));return _.all(d)}function U(t,e){var n=e.contentFilter||function(t,e){return t},r=document.createElement("style"),o=document.createTextNode(n(t,e));return r.appendChild(o),r.media="all",e.id&&r.setAttribute("id",e.id),e&&e.detectingConflicts&&e.detectionIgnoreAttr&&r.setAttributeNode(document.createAttribute(e.detectionIgnoreAttr)),r}function k(t,e){e.autoA11y=t.autoA11y.enabled,"pro"===t.license&&(e.autoFetchSvg=!0,e.fetchSvgFrom=t.baseUrl+"/releases/"+("latest"===t.version?"latest":"v".concat(t.version))+"/svgs",e.fetchUploadedSvgFrom=t.uploadsUrl);var n=[];return t.v4shim.enabled&&n.push(new _((function(n,o){P(c(t,{addOn:"-v4-shims",minify:t.minify.enabled}),e).then((function(t){n(I(t,r(r({},e),{},{id:"fa-v4-shims"})))})).catch(o)}))),n.push(new _((function(n,o){P(c(t,{minify:t.minify.enabled}),e).then((function(t){var o=I(t,r(r({},e),{},{id:"fa-main"}));n(function(t,e){var n=e&&void 0!==e.autoFetchSvg?e.autoFetchSvg:void 0,r=e&&void 0!==e.autoA11y?e.autoA11y:void 0;void 0!==r&&t.setAttribute("data-auto-a11y",r?"true":"false");n&&(t.setAttributeNode(document.createAttribute("data-auto-fetch-svg")),t.setAttribute("data-fetch-svg-from",e.fetchSvgFrom),t.setAttribute("data-fetch-uploaded-svg-from",e.fetchUploadedSvgFrom));return t}(o,e))})).catch(o)}))),_.all(n)}function I(t,e){var n=document.createElement("SCRIPT"),r=document.createTextNode(t);return n.appendChild(r),n.referrerPolicy="strict-origin",e.id&&n.setAttribute("id",e.id),e&&e.detectingConflicts&&e.detectionIgnoreAttr&&n.setAttributeNode(document.createAttribute(e.detectionIgnoreAttr)),n}function L(t){var e,n=[],r=document,o=r.documentElement.doScroll,i=(o?/^loaded|^c/:/^loaded|^i|^c/).test(r.readyState);i||r.addEventListener("DOMContentLoaded",e=function(){for(r.removeEventListener("DOMContentLoaded",e),i=1;e=n.shift();)e()}),i?setTimeout(t,0):n.push(t)}function T(t){"undefined"!=typeof MutationObserver&&new MutationObserver(t).observe(document,{childList:!0,subtree:!0})}try{if(window.FontAwesomeKitConfig){var x=window.FontAwesomeKitConfig,M={detectingConflicts:x.detectConflictsUntil&&new Date<=new Date(x.detectConflictsUntil),detectionIgnoreAttr:"data-fa-detection-ignore",fetch:window.fetch,token:x.token,XMLHttpRequest:window.XMLHttpRequest,document:document},D=document.currentScript,N=D?D.parentElement:document.head;(function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return"js"===t.method?k(t,e):"css"===t.method?F(t,e,(function(t){L(t),T(t)})):void 0})(x,M).then((function(t){t.map((function(t){try{N.insertBefore(t,D?D.nextSibling:null)}catch(e){N.appendChild(t)}})),M.detectingConflicts&&D&&L((function(){D.setAttributeNode(document.createAttribute(M.detectionIgnoreAttr));var t=function(t,e){var n=document.createElement("script");return e&&e.detectionIgnoreAttr&&n.setAttributeNode(document.createAttribute(e.detectionIgnoreAttr)),n.src=c(t,{baseFilename:"conflict-detection",fileSuffix:"js",subdir:"js",minify:t.minify.enabled}),n}(x,M);document.body.appendChild(t)}))})).catch((function(t){console.error("".concat("Font Awesome Kit:"," ").concat(t))}))}}catch(t){console.error("".concat("Font Awesome Kit:"," ").concat(t))}}));
    </script>
  <style type="text/css">.apexcharts-canvas{position:relative;user-select:none}.apexcharts-canvas ::-webkit-scrollbar{-webkit-appearance:none;width:6px}.apexcharts-canvas ::-webkit-scrollbar-thumb{border-radius:4px;background-color:rgba(0,0,0,.5);box-shadow:0 0 1px rgba(255,255,255,.5);-webkit-box-shadow:0 0 1px rgba(255,255,255,.5)}.apexcharts-inner{position:relative}.apexcharts-text tspan{font-family:inherit}.legend-mouseover-inactive{transition:.15s ease all;opacity:.2}.apexcharts-series-collapsed{opacity:0}.apexcharts-tooltip{border-radius:5px;box-shadow:2px 2px 6px -4px #999;cursor:default;font-size:14px;left:62px;opacity:0;pointer-events:none;position:absolute;top:20px;display:flex;flex-direction:column;overflow:hidden;white-space:nowrap;z-index:12;transition:.15s ease all}.apexcharts-tooltip.apexcharts-active{opacity:1;transition:.15s ease all}.apexcharts-tooltip.apexcharts-theme-light{border:1px solid #e3e3e3;background:rgba(255,255,255,.96)}.apexcharts-tooltip.apexcharts-theme-dark{color:#fff;background:rgba(30,30,30,.8)}.apexcharts-tooltip *{font-family:inherit}.apexcharts-tooltip-title{padding:6px;font-size:15px;margin-bottom:4px}.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title{background:#eceff1;border-bottom:1px solid #ddd}.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title{background:rgba(0,0,0,.7);border-bottom:1px solid #333}.apexcharts-tooltip-text-value,.apexcharts-tooltip-text-z-value{display:inline-block;font-weight:600;margin-left:5px}.apexcharts-tooltip-text-z-label:empty,.apexcharts-tooltip-text-z-value:empty{display:none}.apexcharts-tooltip-text-value,.apexcharts-tooltip-text-z-value{font-weight:600}.apexcharts-tooltip-marker{width:12px;height:12px;position:relative;top:0;margin-right:10px;border-radius:50%}.apexcharts-tooltip-series-group{padding:0 10px;display:none;text-align:left;justify-content:left;align-items:center}.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker{opacity:1}.apexcharts-tooltip-series-group.apexcharts-active,.apexcharts-tooltip-series-group:last-child{padding-bottom:4px}.apexcharts-tooltip-series-group-hidden{opacity:0;height:0;line-height:0;padding:0!important}.apexcharts-tooltip-y-group{padding:6px 0 5px}.apexcharts-tooltip-candlestick{padding:4px 8px}.apexcharts-tooltip-candlestick>div{margin:4px 0}.apexcharts-tooltip-candlestick span.value{font-weight:700}.apexcharts-tooltip-rangebar{padding:5px 8px}.apexcharts-tooltip-rangebar .category{font-weight:600;color:#777}.apexcharts-tooltip-rangebar .series-name{font-weight:700;display:block;margin-bottom:5px}.apexcharts-xaxistooltip{opacity:0;padding:9px 10px;pointer-events:none;color:#373d3f;font-size:13px;text-align:center;border-radius:2px;position:absolute;z-index:10;background:#eceff1;border:1px solid #90a4ae;transition:.15s ease all}.apexcharts-xaxistooltip.apexcharts-theme-dark{background:rgba(0,0,0,.7);border:1px solid rgba(0,0,0,.5);color:#fff}.apexcharts-xaxistooltip:after,.apexcharts-xaxistooltip:before{left:50%;border:solid transparent;content:" ";height:0;width:0;position:absolute;pointer-events:none}.apexcharts-xaxistooltip:after{border-color:rgba(236,239,241,0);border-width:6px;margin-left:-6px}.apexcharts-xaxistooltip:before{border-color:rgba(144,164,174,0);border-width:7px;margin-left:-7px}.apexcharts-xaxistooltip-bottom:after,.apexcharts-xaxistooltip-bottom:before{bottom:100%}.apexcharts-xaxistooltip-top:after,.apexcharts-xaxistooltip-top:before{top:100%}.apexcharts-xaxistooltip-bottom:after{border-bottom-color:#eceff1}.apexcharts-xaxistooltip-bottom:before{border-bottom-color:#90a4ae}.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after{border-bottom-color:rgba(0,0,0,.5)}.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before{border-bottom-color:rgba(0,0,0,.5)}.apexcharts-xaxistooltip-top:after{border-top-color:#eceff1}.apexcharts-xaxistooltip-top:before{border-top-color:#90a4ae}.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after{border-top-color:rgba(0,0,0,.5)}.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before{border-top-color:rgba(0,0,0,.5)}.apexcharts-xaxistooltip.apexcharts-active{opacity:1;transition:.15s ease all}.apexcharts-yaxistooltip{opacity:0;padding:4px 10px;pointer-events:none;color:#373d3f;font-size:13px;text-align:center;border-radius:2px;position:absolute;z-index:10;background:#eceff1;border:1px solid #90a4ae}.apexcharts-yaxistooltip.apexcharts-theme-dark{background:rgba(0,0,0,.7);border:1px solid rgba(0,0,0,.5);color:#fff}.apexcharts-yaxistooltip:after,.apexcharts-yaxistooltip:before{top:50%;border:solid transparent;content:" ";height:0;width:0;position:absolute;pointer-events:none}.apexcharts-yaxistooltip:after{border-color:rgba(236,239,241,0);border-width:6px;margin-top:-6px}.apexcharts-yaxistooltip:before{border-color:rgba(144,164,174,0);border-width:7px;margin-top:-7px}.apexcharts-yaxistooltip-left:after,.apexcharts-yaxistooltip-left:before{left:100%}.apexcharts-yaxistooltip-right:after,.apexcharts-yaxistooltip-right:before{right:100%}.apexcharts-yaxistooltip-left:after{border-left-color:#eceff1}.apexcharts-yaxistooltip-left:before{border-left-color:#90a4ae}.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after{border-left-color:rgba(0,0,0,.5)}.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before{border-left-color:rgba(0,0,0,.5)}.apexcharts-yaxistooltip-right:after{border-right-color:#eceff1}.apexcharts-yaxistooltip-right:before{border-right-color:#90a4ae}.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after{border-right-color:rgba(0,0,0,.5)}.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before{border-right-color:rgba(0,0,0,.5)}.apexcharts-yaxistooltip.apexcharts-active{opacity:1}.apexcharts-yaxistooltip-hidden{display:none}.apexcharts-xcrosshairs,.apexcharts-ycrosshairs{pointer-events:none;opacity:0;transition:.15s ease all}.apexcharts-xcrosshairs.apexcharts-active,.apexcharts-ycrosshairs.apexcharts-active{opacity:1;transition:.15s ease all}.apexcharts-ycrosshairs-hidden{opacity:0}.apexcharts-selection-rect{cursor:move}.svg_select_boundingRect,.svg_select_points_rot{pointer-events:none;opacity:0;visibility:hidden}.apexcharts-selection-rect+g .svg_select_boundingRect,.apexcharts-selection-rect+g .svg_select_points_rot{opacity:0;visibility:hidden}.apexcharts-selection-rect+g .svg_select_points_l,.apexcharts-selection-rect+g .svg_select_points_r{cursor:ew-resize;opacity:1;visibility:visible}.svg_select_points{fill:#efefef;stroke:#333}.apexcharts-svg.apexcharts-zoomable.hovering-zoom{cursor:crosshair}.apexcharts-svg.apexcharts-zoomable.hovering-pan{cursor:move}.apexcharts-menu-icon,.apexcharts-pan-icon,.apexcharts-reset-icon,.apexcharts-selection-icon,.apexcharts-toolbar-custom-icon,.apexcharts-zoom-icon,.apexcharts-zoomin-icon,.apexcharts-zoomout-icon{cursor:pointer;width:20px;height:20px;line-height:24px;color:#6e8192;text-align:center}.apexcharts-menu-icon svg,.apexcharts-reset-icon svg,.apexcharts-zoom-icon svg,.apexcharts-zoomin-icon svg,.apexcharts-zoomout-icon svg{fill:#6e8192}.apexcharts-selection-icon svg{fill:#444;transform:scale(.76)}.apexcharts-theme-dark .apexcharts-menu-icon svg,.apexcharts-theme-dark .apexcharts-pan-icon svg,.apexcharts-theme-dark .apexcharts-reset-icon svg,.apexcharts-theme-dark .apexcharts-selection-icon svg,.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg,.apexcharts-theme-dark .apexcharts-zoom-icon svg,.apexcharts-theme-dark .apexcharts-zoomin-icon svg,.apexcharts-theme-dark .apexcharts-zoomout-icon svg{fill:#f3f4f5}.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg,.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg{fill:#008ffb}.apexcharts-theme-light .apexcharts-menu-icon:hover svg,.apexcharts-theme-light .apexcharts-reset-icon:hover svg,.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg{fill:#333}.apexcharts-menu-icon,.apexcharts-selection-icon{position:relative}.apexcharts-reset-icon{margin-left:5px}.apexcharts-menu-icon,.apexcharts-reset-icon,.apexcharts-zoom-icon{transform:scale(.85)}.apexcharts-zoomin-icon,.apexcharts-zoomout-icon{transform:scale(.7)}.apexcharts-zoomout-icon{margin-right:3px}.apexcharts-pan-icon{transform:scale(.62);position:relative;left:1px;top:0}.apexcharts-pan-icon svg{fill:#fff;stroke:#6e8192;stroke-width:2}.apexcharts-pan-icon.apexcharts-selected svg{stroke:#008ffb}.apexcharts-pan-icon:not(.apexcharts-selected):hover svg{stroke:#333}.apexcharts-toolbar{position:absolute;z-index:11;max-width:176px;text-align:right;border-radius:3px;padding:0 6px 2px 6px;display:flex;justify-content:space-between;align-items:center}.apexcharts-menu{background:#fff;position:absolute;top:100%;border:1px solid #ddd;border-radius:3px;padding:3px;right:10px;opacity:0;min-width:110px;transition:.15s ease all;pointer-events:none}.apexcharts-menu.apexcharts-menu-open{opacity:1;pointer-events:all;transition:.15s ease all}.apexcharts-menu-item{padding:6px 7px;font-size:12px;cursor:pointer}.apexcharts-theme-light .apexcharts-menu-item:hover{background:#eee}.apexcharts-theme-dark .apexcharts-menu{background:rgba(0,0,0,.7);color:#fff}@media screen and (min-width:768px){.apexcharts-canvas:hover .apexcharts-toolbar{opacity:1}}.apexcharts-datalabel.apexcharts-element-hidden{opacity:0}.apexcharts-datalabel,.apexcharts-datalabel-label,.apexcharts-datalabel-value,.apexcharts-datalabels,.apexcharts-pie-label{cursor:default;pointer-events:none}.apexcharts-pie-label-delay{opacity:0;animation-name:opaque;animation-duration:.3s;animation-fill-mode:forwards;animation-timing-function:ease}.apexcharts-canvas .apexcharts-element-hidden{opacity:0}.apexcharts-hide .apexcharts-series-points{opacity:0}.apexcharts-annotation-rect,.apexcharts-area-series .apexcharts-area,.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,.apexcharts-gridline,.apexcharts-line,.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,.apexcharts-radar-series path,.apexcharts-radar-series polygon,.apexcharts-toolbar svg,.apexcharts-tooltip .apexcharts-marker,.apexcharts-zoom-rect{pointer-events:none}.apexcharts-marker{transition:.15s ease all}@keyframes opaque{0%{opacity:0}100%{opacity:1}}@keyframes resizeanim{from{opacity:0}to{opacity:0}}.resize-triggers{animation:1ms resizeanim;visibility:hidden;opacity:0}.contract-trigger:before,.resize-triggers,.resize-triggers>div{content:" ";display:block;position:absolute;top:0;left:0;height:100%;width:100%;overflow:hidden}.resize-triggers>div{background:#eee;overflow:auto}.contract-trigger:before{width:200%;height:200%}</style><style></style><script async="" src="./assets_new/modules.29c79ff213b8c3ec96ae.js.загрузка" charset="utf-8"></script><style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style><style>._3emE9--dark-theme .-S-tR--ff-downloader{background:rgba(30,30,30,.93);border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#fff}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{background:#3d4b52}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#131415}._3emE9--dark-theme .-S-tR--ff-downloader ._10vpG--footer{background:rgba(30,30,30,.93)}._2mDEx--white-theme .-S-tR--ff-downloader{background:#fff;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#314c75}._2mDEx--white-theme .-S-tR--ff-downloader ._6_Mtt--header{font-weight:700}._2mDEx--white-theme .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{border:0;color:rgba(0,0,0,.88)}._2mDEx--white-theme .-S-tR--ff-downloader ._10vpG--footer{background:#fff}.-S-tR--ff-downloader{display:block;overflow:hidden;position:fixed;bottom:20px;right:7.1%;width:330px;height:180px;background:rgba(30,30,30,.93);border-radius:2px;color:#fff;z-index:99999999;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);transition:.5s}.-S-tR--ff-downloader._3M7UQ--minimize{height:62px}.-S-tR--ff-downloader._3M7UQ--minimize .nxuu4--file-info,.-S-tR--ff-downloader._3M7UQ--minimize ._6_Mtt--header{display:none}.-S-tR--ff-downloader ._6_Mtt--header{padding:10px;font-size:17px;font-family:sans-serif}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{float:right;background:#f1ecec;height:20px;width:20px;text-align:center;padding:2px;margin-top:-10px;cursor:pointer}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#e2dede}.-S-tR--ff-downloader ._13XQ2--error{color:red;padding:10px;font-size:12px;line-height:19px}.-S-tR--ff-downloader ._2dFLA--container{position:relative;height:100%}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info{padding:6px 15px 0;font-family:sans-serif}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info div{margin-bottom:5px;width:100%;overflow:hidden}.-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{margin-top:21px;font-size:11px}.-S-tR--ff-downloader ._10vpG--footer{width:100%;bottom:0;position:absolute;font-weight:700}.-S-tR--ff-downloader ._10vpG--footer ._2V73d--loader{animation:n0BD1--rotation 3.5s linear forwards;position:absolute;top:-120px;left:calc(50% - 35px);border-radius:50%;border:5px solid #fff;border-top-color:#a29bfe;height:70px;width:70px;display:flex;justify-content:center;align-items:center}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar{width:100%;height:18px;background:#dfe6e9;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar ._1FVu9--progress-bar{height:100%;background:#8bc34a;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status{margin-top:10px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1XilH--state{float:left;font-size:.9em;letter-spacing:1pt;text-transform:uppercase;width:100px;height:20px;position:relative}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1jiaj--percentage{float:right}</style><style></style></head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled sidebar-enabled">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Login-->
      <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login" data-wizard-state="first">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-column flex-row-auto">
          <!--begin::Aside Top-->
          <div class="d-flex flex-column-auto flex-column pt-15 px-30">
            <!--begin::Aside header-->
            <br>
            <h3 class="font-size-h1 mb-5 text-black">Добро пожаловать в NAEBANK!</h3>
            <p class="font-weight-lighter text-black opacity-80">Это регистрация вашего личного кабинета.</p>
              
            <!--end::Aside header-->
            <!--begin: Wizard Nav-->
            <div class="wizard-nav pt-5 pt-lg-30">
              
              <!--begin::Wizard Steps-->
              <div class="wizard-steps">
                <!--begin::Wizard Step 1 Nav-->
                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                  <div class="wizard-wrapper">
                    <div class="wizard-icon">
                      <i class="wizard-check fa fa-check"></i>
                      <span class="wizard-number">1</span>
                    </div>
                    <div class="wizard-label">
                      <h3 class="wizard-title">Основная информация</h3>
                      <div class="wizard-desc">Ник и электронная почта</div>
                    </div>
                  </div>
                </div>
                <!--end::Wizard Step 1 Nav-->
                <!--begin::Wizard Step 2 Nav-->
                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                  <div class="wizard-wrapper">
                    <div class="wizard-icon">
                      <i class="wizard-check fa fa-check"></i>
                      <span class="wizard-number">2</span>
                    </div>
                    <div class="wizard-label">
                      <h3 class="wizard-title">Информация о месте проживания</h3>
                      <div class="wizard-desc">Город и координаты</div>
                    </div>
                  </div>
                </div>
                <!--end::Wizard Step 2 Nav-->
                <!--begin::Wizard Step 3 Nav-->
                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                  <div class="wizard-wrapper">
                    <div class="wizard-icon">
                      <i class="wizard-check fa fa-check"></i>
                      <span class="wizard-number">3</span>
                    </div>
                    <div class="wizard-label">
                      <h3 class="wizard-title">Установка пароля</h3>
                      <div class="wizard-desc">Пароль и повтор пароля</div>
                    </div>
                  </div>
                </div>
                <!--end::Wizard Step 3 Nav-->
                <!--begin::Wizard Step 4 Nav-->
                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                  <div class="wizard-wrapper">
                    <div class="wizard-icon">
                      <i class="wizard-check fa fa-check"></i>
                      <span class="wizard-number">4</span>
                    </div>
                    <div class="wizard-label">
                      <h3 class="wizard-title">Завершение!</h3>
                    </div>
                  </div>
                </div>
                <!--end::Wizard Step 4 Nav-->
              </div>
              <!--end::Wizard Steps-->
            </div>
            <!--end: Wizard Nav-->
          </div>
          <!--end::Aside Top-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="login-content flex-column-fluid d-flex flex-column p-10">
          <!--begin::Wrapper-->
          <div class="d-flex flex-row-fluid flex-center">
            <!--begin::Signin-->
            <div class="login-form login-form-signup">
              <!--begin::Form-->
              <form class="form fv-plugins-bootstrap fv-plugins-framework" novalidate="novalidate" id="kt_login_signup_form" method='POST' action="regHandler.php">
                <!--begin: Wizard Step 1-->
                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                  <!--begin::Title-->
                  <div class="pb-10 pb-lg-15">
                    <h3 class="font-weight-bolder text-dark display5">Зарегистрироваться</h3>
                    <div class="text-muted font-weight-bold font-size-h4">Уже есть аккаунт ? 
                    <a href="login.html" class="text-primary font-weight-bolder">Вход</a></div>
                  </div>
                  <!--begin::Title-->
                  <!--begin::Form Group-->
                  <div class="form-group fv-plugins-icon-container">
                    <label class="font-size-h6 font-weight-bolder text-dark">Ник</label>
                    <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="nick" placeholder="Ник">
                  <div class="fv-plugins-message-container"></div></div>
                  <!--end::Form Group-->
                  <!--begin::Form Group-->
                  <div class="form-group fv-plugins-icon-container">
                    <label class="font-size-h6 font-weight-bolder text-dark">Электронная почта</label>
                    <input type="tel" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="email" placeholder="Электронная почта">
                  <div class="fv-plugins-message-container"></div></div>
                  <!--end::Form Group-->
                </div>
                <!--end: Wizard Step 1-->
                <!--begin: Wizard Step 2-->
                <div class="pb-5" data-wizard-type="step-content">
                  <!--begin::Row-->
                  <div class="row">
                    <div class="col-xl-6">
                      <!--begin::Input-->
                      <div class="form-group fv-plugins-icon-container">
                        <label class="font-size-h6 font-weight-bolder text-dark">Координата X</label>
                        <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="x" placeholder="-303">
                      <div class="fv-plugins-message-container"></div></div>
                      <!--end::Input-->
                    </div>
                    <div class="col-xl-6">
                      <!--begin::Input-->
                      <div class="form-group">
                        <label class="font-size-h6 font-weight-bolder text-dark">Координата Y</label>
                        <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="y" placeholder="102">
                      </div>
                      <!--end::Input-->
                    </div>
                  </div>
                  <!--end::Row-->
                  <!--begin::Row-->
                      <!--begin::Input-->
                      <div class="form-group fv-plugins-icon-container">
                        <label class="font-size-h6 font-weight-bolder text-dark">Город</label>
                        <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="city" placeholder="Жабвиль">
                      <div class="fv-plugins-message-container"></div></div>
                      <!--end::Input-->
                  <!--end::Row-->
                </div>
                <!--end: Wizard Step 2-->
                <!--begin: Wizard Step 3-->
                <div class="pb-5" data-wizard-type="step-content">
                  <!--begin::Title-->
                  <div class="form-group fv-plugins-icon-container">
                    <label class="font-size-h6 font-weight-bolder text-dark">Пароль</label>
                    <input type="password" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="password" placeholder="Ник">
                  <div class="fv-plugins-message-container"></div></div>
                  <!--end::Form Group-->
                  <!--begin::Form Group-->
                  <div class="form-group fv-plugins-icon-container">
                    <label class="font-size-h6 font-weight-bolder text-dark">Повтор пароля</label>
                    <input type="password" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="password_repeat" placeholder="Электронная почта">
                  <div class="fv-plugins-message-container"></div></div>
                  <!--end::Form Group-->
                </div>
                <!--end: Wizard Step 3-->
                <!--begin: Wizard Step 4-->
                <div class="pb-5" data-wizard-type="step-content">
                  <!--begin::Title-->
                  <div class="pt-lg-0 pt-5 pb-15">
                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Завершение</h3>
                    <div class="text-muted font-weight-bold font-size-h4">Завершите регистрацию и станьте участником!</div>
                  </div>
                  <!--end::Title-->
                </div>
                <!--end: Wizard Step 4-->
                <!--begin: Wizard Actions-->
                <div class="d-flex justify-content-between pt-3">
                  <div class="mr-2">
                    <button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 pl-6 pr-8 py-4 my-3 mr-3" data-wizard-type="action-prev">
                    <span class="svg-icon svg-icon-md mr-1">
                      <!--begin::Svg Icon | path:/metronic/theme/html/demo10/dist/assets/media/svg/icons/Navigation/Left-2.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24"></polygon>
                          <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1"></rect>
                          <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)"></path>
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span>Назад</button>
                  </div>
                  <div>
                    <button class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3" data-wizard-type="action-submit" type="submit">Закончить 
                    <span class="svg-icon svg-icon-md ml-2">
                      <!--begin::Svg Icon | path:/metronic/theme/html/demo10/dist/assets/media/svg/icons/Navigation/Right-2.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24"></polygon>
                          <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1"></rect>
                          <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span></button>
                    <button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-next">Следующий шаг 
                    <span class="svg-icon svg-icon-md ml-1">
                      <!--begin::Svg Icon | path:/metronic/theme/html/demo10/dist/assets/media/svg/icons/Navigation/Right-2.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24"></polygon>
                          <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1"></rect>
                          <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span></button>
                  </div>
                </div>
                <!--end: Wizard Actions-->
              <div></div><div></div><div></div><div></div></form>
              <!--end::Form-->
            </div>
            <!--end::Signin-->
          </div>
          <!--end::Wrapper-->
        </div>
        <!--end::Content-->
      </div>
      <!--end::Login-->
    </div>
    <!--end::Main-->
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#663259", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#F4E1F0", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="./assets_new/plugins.bundle.js.загрузка"></script>
    <script src="./assets_new/prismjs.bundle.js.загрузка"></script>
    <script src="./assets_new/scripts.bundle.js.загрузка"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="./assets_new/login-3.js.загрузка"></script>
    <!--end::Page Scripts-->
  
  <!--end::Body-->
</html>