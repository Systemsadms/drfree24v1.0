// Ajatix Image/Banner Rotator
// Copyright (C) 2011 Ajatix. All rights reserved.
// http://www.ajatix.com
// Unregistered copy.
// Any usage except for the purpose of evaluation is strictly prohibited.
(function(){var d=document, de=d.documentElement, IE=document.all&&!window.opera, IE6=IE&&!window.XMLHttpRequest;function createDiv(id, parent){var div=d.createElement('div');div.id=id;parent.appendChild(div);return div;}function onLoad(){var listIR=new Array();var on='AJXIRAXJDTRD';function showPics(id,num){var m=listIR[id];if(m.n===num)return true;for(var k=0;k<listIR[id].liPics.length;k++){listIR[id].liPics[k].tid.style.display='none';}if(m.n===-1)m.n=0;else m.n=num;if(!m.ulPics.style.left){m.ulPics.style.left=0+'px';}var tit=m.liPics[num].tid;if(!tit.style.bottom||parseInt(tit.style.bottom)>-26){tit.style.display='none';tit.style.bottom=-26+'px';}var endP=-num*980;moveTo([[m.ulPics,{left:endP}]],function(){tit.style.display='block';moveTo([[tit,{bottom:0}]])});};function autoShow(){for(var id in listIR){var m=listIR[id];if(m.autoP){if(m.n==m.liPics.length-1){m.n=-1;}if(m.n<=m.liPics.length-1){unselBtn(id);m.liBtn[m.n+1].className='current';showPics(id,m.n+1);}}}};function unselBtn(id){for(var k=0;k<listIR[id].liBtn.length;k++){listIR[id].liBtn[k].className='';}}var autoT=null;var divs=d.getElementsByTagName('div');for(var i=0;i<divs.length;i++){if(divs[i].className==on){var obj=new Object;obj.autoP=true;obj.n=-1;obj.ncur=-1;obj.id='id'+i;divs[i]._id=obj.id;obj.imgs=new Array();obj.ulPics=divs[i].getElementsByTagName('ul')[0];obj.liPics=obj.ulPics.getElementsByTagName('li');var cnt=obj.liPics.length;for(var j=0;j<cnt;j++)obj.liPics[j].className=on+'li';var wid=divs[i].getElementsByTagName('div')[0].offsetWidth;obj.ulPics.style.width=wid*cnt+'px';for(var j=0;j<cnt;j++){var a=obj.liPics[j].getElementsByTagName('a')[0];obj.imgs[j]=obj.liPics[j].getElementsByTagName('img')[0];var rc=false;var cdivs=obj.liPics[j].getElementsByTagName('div');if(cdivs.length>0&&cdivs[0].className.indexOf('richCaption')!=-1){rc=true;}var tid=createDiv('', obj.liPics[j]);var tis=d.createElement('span');if(IE)tis.style.filter='alpha(opacity=30)';else tis.style.opacity='0.30';tis.className=on+'span';tid.appendChild(tis);if(rc){var rcdiv=cdivs[0];obj.liPics[j].removeChild(cdivs[0]);rcdiv.style.display='block';rcdiv.className=rcdiv.className+' '+on+'a';tid.appendChild(rcdiv);rcdiv.url=a.href;rcdiv.onclick=function(){location=this.url;}}else{var tia=d.createElement('a');tia.href=a.href;tia.innerHTML=obj.imgs[j].alt;tia.className=on+'a';tid.appendChild(tia);}tid.className=on+'div';obj.liPics[j].tid=tid;}var btndiv=createDiv('', divs[i]);btndiv.className=on+'btn';var s='<ul>';for(var l=0;l<cnt;l++){s+='<li>'+(l+1)+'</li>'}s+='</ul>';btndiv.innerHTML=s;;obj.ulBtn=btndiv.getElementsByTagName('ul')[0];obj.liBtn=obj.ulBtn.getElementsByTagName('li');for(var k=0;k<obj.liBtn.length;k++){obj.liBtn[k].I=k;obj.liBtn[k]._id=obj.id;obj.liBtn[k].onmouseover=function(){unselBtn(this._id);this.className='current';showPics(this._id,this.I);}}listIR[obj.id]=obj;divs[i].onmouseover=function(){listIR[this._id].autoP=false;var ct=false;for(var id in listIR){ct=ct||listIR[id].autoP;}if(!ct){clearInterval(autoT);autoT=null;}};divs[i].onmouseout=function(){listIR[this._id].autoP=true;if(autoT==null)autoT=setInterval(autoShow,4000);};}}autoShow();autoT=setInterval(autoShow,4000);function moveTo(pairs, f){var oldpos=new Array;for(var i=0;i<pairs.length;i++){oldpos[i]=new Object;for(var n in pairs[i][1])oldpos[i][n]=parseInt(pairs[i][0].style[n]);}var tstart=new Date;var e=pairs[0][0];if(e.mtimer)clearInterval(e.mtimer);e.mtimer=setInterval(function(){var s=(new Date-tstart)/1000;if(s>1)s=1;var v=((-Math.cos(s*Math.PI)/2)+0.5);for(var i=0;i<pairs.length;i++){for(var n in pairs[i][1])pairs[i][0].style[n]=(pairs[i][1][n]-oldpos[i][n])*v+oldpos[i][n]+'px';}if(s==1){clearInterval(e.mtimer);if(f)f();}}, 15);};};function addOnReady(f,fu){var isReady=false;ready=function(){if(!isReady){isReady=true;f();};};if(d.addEventListener){d.addEventListener('DOMContentLoaded',ready,false);window.addEventListener('load',ready,false);}if(window.attachEvent)window.attachEvent('onload',ready);if(d.documentElement.doScroll&&window==top){(function(){if(!isReady){try{d.documentElement.doScroll('left');}catch(E){setTimeout(arguments.callee,0);return;}ready();}})()}}addOnReady(onLoad, onLoad);})();