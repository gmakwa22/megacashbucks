<html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <title>Trustpilot Custom Widget</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
    <!-- <script type="text/javascript">
			var useNewRelic = Math.ceil(Math.random() * 200) === 1;if(useNewRelic) {window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,n,e)])}catch(s){try{i("ierr",[s,c.now(),!0])}catch(u){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t){i("err",[t,c.now()])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=window.onerror,u=!1,d=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),u=!0)}s.on("fn-start",function(t,n,e){u&&(d+=1)}),s.on("fn-err",function(t,n,e){u&&(this.thrown=!0,o(e))}),s.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1044.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);
			;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"5596035ebd",applicationID:"71309302",sa:1}}
</script> -->


<!-- <style>
	html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{border:0;font:inherit;font-size:100%;margin:0;padding:0;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote::before,blockquote::after,q::before,q::after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font-family:"Segoe UI","Helvetica Neue","Helvetica","Arial","sans-serif";font-size:12px}b,strong{font-weight:700}.tp-widget-businessinfo{font-family:'Segoe UI', 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif;font-weight:300}.bold-underline,.tp-widget-empty-vertical__title,.tp-widget-empty-horizontal__title,.tp-widget-humanscore{font-family:"Segoe UI","Helvetica Neue","Helvetica","Arial","sans-serif";font-weight:500}@media all and (-ms-high-contrast: none), (-ms-high-contrast: active){.bold-underline,.tp-widget-empty-vertical__title,.tp-widget-empty-horizontal__title,.tp-widget-humanscore{font-weight:600}}@keyframes fade-in{to{opacity:1}}@keyframes fade-out{to{opacity:0}}.anim-fade-in,.tp-widget-loader,.tp-widget-fallback{animation:fade-in .5s ease .3s forwards}.anim-fade-out,.tp-widget-loader--loaded{animation:fade-out .5s ease .3s forwards}*,::after,::before{box-sizing:border-box}.hidden{display:none}.tp-widget-loader,.tp-widget-fallback{left:50%;position:absolute;top:50%;transform:translate(-50%, -50%)}#fallback-logo{display:none}.no-svg #fallback-logo{display:inline-block}.tp-widget-wrapper{height:100%;margin:0 auto;max-width:750px;opacity:0;position:relative;transition:opacity 1s ease}.tp-widget-wrapper.visible{opacity:1}.tp-stars .tp-star__canvas{fill:#d6d6d6}.tp-stars .tp-star__shape{fill:#fff}.tp-stars--1 .tp-star:nth-of-type(-n+1) .tp-star__canvas{fill:#ff3722}.tp-stars--2 .tp-star:nth-of-type(-n+2) .tp-star__canvas{fill:#fb963a}.tp-stars--3 .tp-star:nth-of-type(-n+3) .tp-star__canvas{fill:#f9cd16}.tp-stars--4 .tp-star:nth-of-type(-n+4) .tp-star__canvas{fill:#73cf11}.tp-stars--5 .tp-star:nth-of-type(-n+5) .tp-star__canvas{fill:#00b67a}.tp-widget-loader,.tp-widget-fallback{max-width:50%;opacity:0;text-align:center;width:400vh}.tp-widget-loader svg,.tp-widget-fallback svg{width:100%}@media screen and (min-width: 400px){.tp-widget-loader,.tp-widget-fallback{max-width:200px}}.tp-widget-loader--loaded{opacity:1}.bold-underline{border-bottom:1px solid rgba(25,25,25,0.6)}.bold-underline:hover{border-color:#191919}.dark{color:#fff}.dark a{color:#fff}.dark .bold-underline:not(.bold-underline--single-theme){border-color:rgba(255,255,255,0.6)}.dark .bold-underline:not(.bold-underline--single-theme):hover{border-color:#fff}.dark .tp-logo__text{fill:#fff}.dark .tp-widget-loader .tp-logo__text{fill:#191919}html{height:100%;overflow:hidden}body{color:#191919;height:100%;line-height:1;min-width:100%;overflow:hidden;width:1px}img{border:0}svg{display:block;width:100%}a{color:#191919;text-decoration:none}.tp-widget-empty-vertical{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:center;justify-content:center}.tp-widget-empty-vertical__title{font-size:18px;margin:0 0 12px}.tp-widget-empty-vertical__stars{margin:0 0 8px;width:150px}.tp-widget-empty-vertical__subtitle-wrapper{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row}.tp-widget-empty-vertical__subtitle{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;font-size:14px}.tp-widget-empty-vertical__logo{margin:0 0 5px 5px;width:90px}.tp-widget-empty-horizontal{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;height:100%;-ms-flex-pack:center;justify-content:center}.tp-widget-empty-horizontal__title{font-size:14px;text-align:center}.tp-widget-empty-horizontal__logo{margin:0 0 5px 5px;width:90px}@media screen and (max-width: 300px){.tp-widget-empty-vertical__subtitle-wrapper{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column}.tp-widget-empty-vertical__logo{margin:5px 0 0}.tp-widget-empty-horizontal{-ms-flex-direction:column;flex-direction:column}.tp-widget-empty-horizontal__logo{margin:0}}.dark .tp-widget-review .name,.dark .tp-widget-review .date{color:rgba(255,255,255,0.6)}.dark .tp-widget-review-next .svg-slider-arrow .arrow-slider-circle,.dark .tp-widget-review-prev .svg-slider-arrow .arrow-slider-circle{stroke:rgba(255,255,255,0.6)}.dark .tp-widget-review-next .svg-slider-arrow .arrow-slider-shape,.dark .tp-widget-review-prev .svg-slider-arrow .arrow-slider-shape{fill:rgba(255,255,255,0.6)}.dark .tp-widget-review-next.display-none .svg-slider-arrow .arrow-slider-circle,.dark .tp-widget-review-prev.display-none .svg-slider-arrow .arrow-slider-circle{stroke:rgba(255,255,255,0.3)}.dark .tp-widget-review-next.display-none .svg-slider-arrow .arrow-slider-shape,.dark .tp-widget-review-prev.display-none .svg-slider-arrow .arrow-slider-shape{fill:rgba(255,255,255,0.3)}html{-webkit-font-smoothing:antialiased}.tp-widget-wrapper{max-width:none;min-width:300px;will-change:transform}.tp-widget-wrapper .wrapper-left{text-align:center;z-index:100}.tp-widget-wrapper .wrapper-right{margin:20px 0 0;overflow:hidden;padding:0 40px;position:relative}.tp-widget-humanscore{font-size:24px;margin:0 0 12px}.tp-widget-stars{margin:0 auto 12px;width:155px}.tp-widget-businessinfo{font-size:13px;line-height:16px;margin:0 0 14px}.tp-widget-logo{margin:0 auto;width:95px}.tp-widget-reviews-wrapper{overflow:hidden;position:relative}.tp-widget-reviews{height:100%;overflow:hidden;position:relative;white-space:nowrap}.tp-widget-review{display:inline-block;height:130px;margin:0 10px 0 0;padding:0 0 0 10px;position:relative;vertical-align:top;white-space:normal}.tp-widget-review .header{font-size:14px;font-weight:700;height:16px;margin:0 0 8px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:100%}.tp-widget-review .text{font-size:13px;line-height:16px;word-wrap:break-word}.tp-widget-review .date{right:0;top:4px}.tp-widget-review .name{bottom:2px;height:14px;left:20px;overflow:hidden;text-align:left;text-overflow:ellipsis;white-space:nowrap;width:calc(100% - 20px);z-index:2}.tp-widget-review .date,.tp-widget-review .name{color:rgba(0,0,0,0.6);position:absolute}.tp-widget-review .tp-widget-stars{margin:0 0 12px;width:110px}.tp-widget-review-prev{left:0}.tp-widget-review-prev .svg-slider-arrow{transform:translate(-50%, -50%)}.tp-widget-review-next{right:0}.tp-widget-review-next .svg-slider-arrow{transform:translate(-50%, -50%) rotate(180deg)}.tp-widget-review-next,.tp-widget-review-prev{cursor:pointer;height:100%;position:absolute;top:0;width:40px;z-index:10}.tp-widget-review-next .svg-slider-arrow,.tp-widget-review-prev .svg-slider-arrow{display:block;left:50%;position:absolute;top:50%;width:24px}.tp-widget-review-next .svg-slider-arrow .arrow-slider-circle,.tp-widget-review-prev .svg-slider-arrow .arrow-slider-circle{stroke:#8c8c8c}.tp-widget-review-next .svg-slider-arrow .arrow-slider-shape,.tp-widget-review-prev .svg-slider-arrow .arrow-slider-shape{fill:#8c8c8c}.tp-widget-review-next.display-none,.tp-widget-review-prev.display-none{cursor:default}.tp-widget-review-next.display-none .svg-slider-arrow .arrow-slider-circle,.tp-widget-review-prev.display-none .svg-slider-arrow .arrow-slider-circle{stroke:#d1d1d1}.tp-widget-review-next.display-none .svg-slider-arrow .arrow-slider-shape,.tp-widget-review-prev.display-none .svg-slider-arrow .arrow-slider-shape{fill:#d1d1d1}@media screen and (min-width: 520px){.tp-widget-wrapper .wrapper-left{float:left;width:155px}.tp-widget-wrapper .wrapper-right{float:left;margin:0;width:calc(100% - 200px)}}@media screen and (min-width: 728px){.tp-widget-wrapper .wrapper-right{width:calc(100% - 164px)}}@media screen and (min-width: 930px){.tp-widget-wrapper .wrapper-right{width:calc(100% - 200px)}}@media screen and (min-width: 1175px){.tp-widget-wrapper .wrapper-right{width:calc(100% - 200px)}}
		@media (min-width:360px) and (max-width:767px)  and (orientation:landscape) {
			.tp-widget-review{
				width: 225px !important;
			}
		}
.carousel-control.left {
	background: none;
}
.carousel-control.right {
	background: none;
}
</style> -->
</head>

<body class="light">
    <!-- Widget Loader -->


    <!-- <div id="tp-widget-wrapper" class="tp-widget-wrapper visible">
        <div id="wrapper-left" class="wrapper-left">
           
            <div class="tp-widget-humanscore">
                <a id="trust-score" target="_blank" rel="follow">Excellent</a>
            </div>
            
            <div class="tp-widget-stars">
                <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%">
            </div>
            
            <div class="tp-widget-businessinfo">
                <a id="translations-basedon" target="_blank" rel="follow">Based on <a target="_blank" href="{{url('/')}}"><strong class="bold-underline">664 reviews</strong></a></a>
            </div>
            
            <div id="tp-widget-logo" class="tp-widget-logo">
                <a id="profileLink" target="_blank" rel="follow" href="#">
                	<div class="">
  						<div style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 24.6031746031746%;">
  								<svg viewBox="0 0 126 31" xmlns="http://www.w3.org/2000/svg" style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
  									<title>Trustpilot</title>
								      <path class="tp-logo__text" d="M33.074774 11.07005H45.81806v2.364196h-5.010656v13.290316h-2.755306V13.434246h-4.988435V11.07005h.01111zm12.198892 4.319629h2.355341v2.187433h.04444c.077771-.309334.222203-.60762.433295-.894859.211092-.287239.466624-.56343.766597-.79543.299972-.243048.633276-.430858.999909-.585525.366633-.14362.744377-.220953 1.12212-.220953.288863 0 .499955.011047.611056.022095.1111.011048.222202.033143.344413.04419v2.408387c-.177762-.033143-.355523-.055238-.544395-.077333-.188872-.022096-.366633-.033143-.544395-.033143-.422184 0-.822148.08838-1.199891.254096-.377744.165714-.699936.41981-.977689.740192-.277753.331429-.499955.729144-.666606 1.21524-.166652.486097-.244422 1.03848-.244422 1.668195v5.39125h-2.510883V15.38968h.01111zm18.220567 11.334883H61.02779v-1.579813h-.04444c-.311083.574477-.766597 1.02743-1.377653 1.369908-.611055.342477-1.233221.51924-1.866497.51924-1.499864 0-2.588654-.364573-3.25526-1.104765-.666606-.740193-.999909-1.856005-.999909-3.347437V15.38968h2.510883v6.948968c0 .994288.188872 1.701337.577725 2.1101.377744.408763.922139.618668 1.610965.618668.533285 0 .96658-.077333 1.322102-.243048.355524-.165714.644386-.37562.855478-.65181.222202-.265144.377744-.596574.477735-.972194.09999-.37562.144431-.784382.144431-1.226288v-6.573349h2.510883v11.323836zm4.27739-3.634675c.07777.729144.355522 1.237336.833257 1.535623.488844.287238 1.06657.441905 1.744286.441905.233312 0 .499954-.022095.799927-.055238.299973-.033143.588836-.110476.844368-.209905.266642-.099429.477734-.254096.655496-.452954.166652-.198857.244422-.452953.233312-.773335-.01111-.320381-.133321-.585525-.355523-.784382-.222202-.209906-.499955-.364573-.844368-.497144-.344413-.121525-.733267-.232-1.17767-.320382-.444405-.088381-.888809-.18781-1.344323-.287239-.466624-.099429-.922138-.232-1.355432-.37562-.433294-.14362-.822148-.342477-1.166561-.596573-.344413-.243048-.622166-.56343-.822148-.950097-.211092-.386668-.311083-.861716-.311083-1.436194 0-.618668.155542-1.12686.455515-1.54667.299972-.41981.688826-.75124 1.14434-1.005336.466624-.254095.97769-.430858 1.544304-.541334.566615-.099429 1.11101-.154667 1.622075-.154667.588836 0 1.15545.066286 1.688736.18781.533285.121524 1.02213.320381 1.455423.60762.433294.276191.788817.640764 1.07768 1.08267.288863.441905.466624.98324.544395 1.612955h-2.621984c-.122211-.596572-.388854-1.005335-.822148-1.204193-.433294-.209905-.933248-.309334-1.488753-.309334-.177762 0-.388854.011048-.633276.04419-.244422.033144-.466624.088382-.688826.165715-.211092.077334-.388854.198858-.544395.353525-.144432.154667-.222203.353525-.222203.60762 0 .309335.111101.552383.322193.740193.211092.18781.488845.342477.833258.475048.344413.121524.733267.232 1.177671.320382.444404.088381.899918.18781 1.366542.287239.455515.099429.899919.232 1.344323.37562.444404.14362.833257.342477 1.17767.596573.344414.254095.622166.56343.833258.93905.211092.37562.322193.850668.322193 1.40305 0 .673906-.155541 1.237336-.466624 1.712385-.311083.464001-.711047.850669-1.199891 1.137907-.488845.28724-1.04435.508192-1.644295.640764-.599946.132572-1.199891.198857-1.788727.198857-.722156 0-1.388762-.077333-1.999818-.243048-.611056-.165714-1.14434-.408763-1.588745-.729144-.444404-.33143-.799927-.740192-1.05546-1.226289-.255532-.486096-.388853-1.071621-.411073-1.745528h2.533103v-.022095zm8.288135-7.700208h1.899828v-3.402675h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155542.486096.07777.132572.199981.232.366633.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.13332-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222zm8.454788 0h2.377562V16.9253h.04444c.355523-.662858.844368-1.12686 1.477644-1.414098.633276-.287239 1.310992-.430858 2.055369-.430858.899918 0 1.677625.154667 2.344231.475048.666606.309335 1.222111.740193 1.666515 1.292575.444405.552382.766597 1.193145.9888 1.92229.222202.729145.333303 1.513527.333303 2.3421 0 .762288-.099991 1.50248-.299973 2.20953-.199982.718096-.499955 1.347812-.899918 1.900194-.399964.552383-.911029.98324-1.533194 1.31467-.622166.33143-1.344323.497144-2.18869.497144-.366634 0-.733267-.033143-1.0999-.099429-.366634-.066286-.722157-.176762-1.05546-.320381-.333303-.14362-.655496-.33143-.933249-.56343-.288863-.232-.522175-.497144-.722157-.79543h-.04444v5.656393h-2.510883V15.38968zm8.77698 5.67849c0-.508193-.06666-1.005337-.199981-1.491433-.133321-.486096-.333303-.905907-.599946-1.281527-.266642-.37562-.599945-.673906-.988799-.894859-.399963-.220953-.855478-.342477-1.366542-.342477-1.05546 0-1.855387.364572-2.388672 1.093717-.533285.729144-.799928 1.701337-.799928 2.916578 0 .574478.066661 1.104764.211092 1.59086.144432.486097.344414.905908.633276 1.259432.277753.353525.611056.629716.99991.828574.388853.209905.844367.309334 1.355432.309334.577725 0 1.05546-.121524 1.455423-.353525.399964-.232.722157-.541335.97769-.905907.255531-.37562.444403-.79543.555504-1.270479.099991-.475049.155542-.961145.155542-1.458289zm4.432931-9.99812h2.510883v2.364197h-2.510883V11.07005zm0 4.31963h2.510883v11.334883h-2.510883V15.389679zm4.755124-4.31963h2.510883v15.654513h-2.510883V11.07005zm10.210184 15.963847c-.911029 0-1.722066-.154667-2.433113-.452953-.711046-.298287-1.310992-.718097-1.810946-1.237337-.488845-.530287-.866588-1.160002-1.12212-1.889147-.255533-.729144-.388854-1.535622-.388854-2.408386 0-.861716.133321-1.657147.388853-2.386291.255533-.729145.633276-1.35886 1.12212-1.889148.488845-.530287 1.0999-.93905 1.810947-1.237336.711047-.298286 1.522084-.452953 2.433113-.452953.911028 0 1.722066.154667 2.433112.452953.711047.298287 1.310992.718097 1.810947 1.237336.488844.530287.866588 1.160003 1.12212 1.889148.255532.729144.388854 1.524575.388854 2.38629 0 .872765-.133322 1.679243-.388854 2.408387-.255532.729145-.633276 1.35886-1.12212 1.889147-.488845.530287-1.0999.93905-1.810947 1.237337-.711046.298286-1.522084.452953-2.433112.452953zm0-1.977528c.555505 0 1.04435-.121524 1.455423-.353525.411074-.232.744377-.541335 1.01102-.916954.266642-.37562.455513-.806478.588835-1.281527.12221-.475049.188872-.961145.188872-1.45829 0-.486096-.066661-.961144-.188872-1.44724-.122211-.486097-.322193-.905907-.588836-1.281527-.266642-.37562-.599945-.673907-1.011019-.905907-.411074-.232-.899918-.353525-1.455423-.353525-.555505 0-1.04435.121524-1.455424.353525-.411073.232-.744376.541334-1.011019.905907-.266642.37562-.455514.79543-.588835 1.281526-.122211.486097-.188872.961145-.188872 1.447242 0 .497144.06666.98324.188872 1.458289.12221.475049.322193.905907.588835 1.281527.266643.37562.599946.684954 1.01102.916954.411073.243048.899918.353525 1.455423.353525zm6.4883-9.66669h1.899827v-3.402674h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155541.486096.077771.132572.199982.232.366634.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.133321-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222z" fill="#191919">
								     </path>
      								<img src="{{url('/images/single-star.png')}}" alt="" style="height: 23px;width: 23px;float: left; padding-top: 3px;">
      								<path class="tp-logo__star-notch" fill="#005128" d="M21.631369 20.26169l-.799928-2.463625-5.755033 4.153914z">   
      								</path>
								</svg>
  						</div>
					</div>
				</a>
           </div>
        </div>

		

        <div id="wrapper-right" class="wrapper-right">
            <div id="tp-widget-reviews-wrapper" class="tp-widget-reviews-wrapper">
	            <div id="tp-widget-reviews" class="tp-widget-reviews" style="user-select: none; transition-timing-function: ease; transform: translateX(0px); transition-duration: 0s; width: 5010px;">

	            	

	                <div class="tp-widget-review" style="width: 240px;">
		                <div class="tp-widget-stars">
		                	 <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%">
						</div>
						<div class="date">4 days ago</div>
						<div class="header">done super fast</div>
						<div class="text">they do it by etransfer, mine was automatically deposited within 10 minutes of c...</div>
						<div class="name">Nadia Quill</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%">
						</div>
						<div class="date">March 16</div>
						<div class="header">I needed money for groceries and I…</div>
						<div class="text">I needed money for groceries and I decided to try PayDay. I found filling out the...</div>
						<div class="name">Donald Dragomatz</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">March 11</div>
						<div class="header">Awesome possum</div>
						<div class="text">I was very sceptical about about PayDay st first. But after only taking 5 minutes...</div>
						<div class="name">David</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">March 7</div>
						<div class="header">Quick and easy</div>
						<div class="text">Quick and easy. Excellent service.</div>
						<div class="name">Karen Thornton</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">March 2</div>
						<div class="header">Easy honest and respectful staff</div>
						<div class="text">Easy honest and respectful staff. Highly Recommended!</div>
						<div class="name">Sam s</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">February 26</div>
						<div class="header">Good company.</div>
						<div class="text">Good company.</div>
						<div class="name">Brad Gunn</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">February 22</div>
						<div class="header">This was so simple easy to use</div>
						<div class="text">This was so simple easy to use. I would recommend it to everyone.</div>
						<div class="name">jason zimmer</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">February 21</div>
						<div class="header">So easy and quick to apply!</div>
						<div class="text">So easy and quick to apply and get your loan! I've never had a problem applying...</div>
						<div class="name">Casper L.</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">February 11</div>
						<div class="header">Very easy process and prompt service</div>
						<div class="text">Very easy process and very prompt turnaround for receiving funds, as well as gre...</div>
						<div class="name">Peter Daniels</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">February 7</div>
						<div class="header">I applied with child tax and disability…</div>
						<div class="text">I applied with child tax and disability and I was denied. It was also hard to fi...</div>
						<div class="name">Rhonda</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">February 4</div>
						<div class="header">BEST ONE YET</div>
						<div class="text">Fast, no hassles  and  I am thrilled! Thank you PayDay!!</div>
						<div class="name">Dawn Gooch</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">February 2</div>
						<div class="header">Amazingly quick and super easy wow</div>
						<div class="text">Amazingly quick and super easy wow! This has got to be the best loan place I’ve...</div>
						<div class="name">Lexi </div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">February 1</div>
						<div class="header">PayDay staff really help and there…thx PayDay you do your job excellent</div>
						<div class="text">PayDay staff really help and there response time back to me, well i would say rig...</div>
						<div class="name">Alan Murray Berberich</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">January 23</div>
						<div class="header">Quick and Easy cash when you need it! First time user!!!</div>
						<div class="text">I think this is a great service! I heard about it on the radio yesterday, applie...</div>
						<div class="name">Angel Par</div>
					</div>
					<div class="tp-widget-review" style="width: 240px;">
						<div class="tp-widget-stars"> <img src="{{url('/images/5-star.png')}}" alt="" style="width: 80%"></div>
						<div class="date">January 22</div>
						<div class="header">Thank you I Cash for the loan I was…</div>
						<div class="text">Thank you I Cash for the loan I was very happy and impressed I was for sure I wa...</div>
						<div class="name">margie Vielle</div>
					</div>
				</div>
        	</div>
            <div id="review-arrow-left" class="tp-widget-review-prev icon-angle-left display-none">
                <div class="svg-slider-arrow">
	                <div class="">
				  		<div style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 100%;">
						  	<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
						      <circle class="arrow-slider-circle" cx="12" cy="12" r="11.5" fill="none" stroke="#8C8C8C"></circle>
						      <path class="arrow-slider-shape" fill="#8C8C8C" d="M10.5088835 12l3.3080582-3.02451041c.2440777-.22315674.2440777-.5849653 0-.80812204-.2440776-.22315673-.6398058-.22315673-.8838834 0L9.18305826 11.595939c-.24407768.2231567-.24407768.5849653 0 .808122l3.75000004 3.4285714c.2440776.2231568.6398058.2231568.8838834 0 .2440777-.2231567.2440777-.5849653 0-.808122L10.5088835 12z">
						      </path>
						  	</svg>
				  		</div>
					</div>
				</div>
            </div>
            <div id="review-arrow-right" class="tp-widget-review-next icon-angle-right">
                <div class="svg-slider-arrow">
	                <div class="">
		  				<div style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 100%;">
		    
						  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
						      <circle class="arrow-slider-circle" cx="12" cy="12" r="11.5" fill="none" stroke="#8C8C8C"></circle>
						      <path class="arrow-slider-shape" fill="#8C8C8C" d="M10.5088835 12l3.3080582-3.02451041c.2440777-.22315674.2440777-.5849653 0-.80812204-.2440776-.22315673-.6398058-.22315673-.8838834 0L9.18305826 11.595939c-.24407768.2231567-.24407768.5849653 0 .808122l3.75000004 3.4285714c.2440776.2231568.6398058.2231568.8838834 0 .2440777-.2231567.2440777-.5849653 0-.808122L10.5088835 12z"></path>
						  </svg>
		  				</div>
					</div>
				</div>
            </div>
        </div>
    </div> -->

    <img src="{{url('/images/review_dummy.png')}}" style="width: 100%;">

    <!-- Error Fallback -->
    <div id="tp-widget-fallback" class="tp-widget-fallback"></div>
       
</body>
</html>