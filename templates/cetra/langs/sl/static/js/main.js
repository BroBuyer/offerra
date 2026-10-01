/* cetra / Helios UI */
/*mnav*/(function(){function go(){var btn=document.querySelector(".nav-toggle,.nav__toggle,#navToggle");if(!btn)return;var ac=btn.getAttribute("aria-controls"),t=[];if(ac){var m=document.getElementById(ac);if(m)t.push(m);}[".nav-inner","#navLinks",".nav-links",".nav__links"].forEach(function(sel){var e=document.querySelector(sel);if(e&&t.indexOf(e)<0)t.push(e);});if(!t.length)return;var b=btn.cloneNode(true);btn.parentNode.replaceChild(b,btn);btn=b;var _hdr=document.querySelector("header,.site-head"),_list=document.querySelector("#navLinks,.nav-links,.nav__links");if(_hdr&&_list){var _as=_hdr.querySelectorAll("a,button"),_cta=null,ci;for(ci=0;ci<_as.length;ci++){var _e=_as[ci];if(_e.classList.contains("nav-toggle")||_e.classList.contains("nav__toggle"))continue;if((_e.getAttribute("href")||"").indexOf("signup")>=0||_e.className.indexOf("nav-cta")>=0){_cta=_e;break;}}if(_cta&&!_list.querySelector(".mnav-cta")){_cta.classList.add("mnav-orig");var _c=_cta.cloneNode(true);_c.classList.remove("mnav-orig");_c.classList.add("mnav-cta");_c.addEventListener("click",function(){set(false);var _f=document.querySelector("#signup,#hero-form");if(_f)_f.scrollIntoView({behavior:"smooth"});});_list.appendChild(_c);}}function set(o){t.forEach(function(e){e.classList.toggle("open",o);e.classList.toggle("is-open",o);});btn.classList.toggle("open",o);btn.classList.toggle("is-open",o);btn.setAttribute("aria-expanded",o?"true":"false");}btn.addEventListener("click",function(e){e.preventDefault();e.stopPropagation();set(btn.getAttribute("aria-expanded")!=="true");});t.forEach(function(e){e.addEventListener("click",function(ev){if(ev.target.closest("a"))set(false);});});document.addEventListener("click",function(ev){if(btn.getAttribute("aria-expanded")==="true"&&!btn.contains(ev.target)&&!t.some(function(e){return e.contains(ev.target);}))set(false);});}if(document.readyState==="complete"){go();}else{window.addEventListener("load",go);}})();

/*anim-failsafe*/
(function () {
 var SEL = '[data-anim],[data-animate],[data-aos],[data-reveal],[data-scroll],[class*="reveal"],[class*="fade"],[class*="aos"]';
 function show(el){
 // remove the hooks the design's opacity:0 rule targets, then force-show as backup
 ['data-anim','data-animate','data-aos','data-reveal','data-scroll'].forEach(function(a){ el.removeAttribute(a); });
 el.classList.remove('reveal','fade','fade-in','fade-up','aos-init','will-reveal','animate');
 el.style.setProperty('opacity','1','important'); el.style.setProperty('transform','none','important');
 el.style.setProperty('visibility','visible','important'); el.style.setProperty('filter','none','important');
 }
 function isHidden(el){ return el.offsetHeight > 0 && parseFloat(getComputedStyle(el).opacity) < 0.08; }
 // reveal a block only when it actually reaches the viewport, and only if its own
 // reveal is STILL missing ~1.2s after it got there (i.e. genuinely broken)
 if ('IntersectionObserver' in window) {
 var io = new IntersectionObserver(function(es){ es.forEach(function(e){
 if (!e.isIntersecting) return;
 var el = e.target; io.unobserve(el);
 setTimeout(function(){ if (isHidden(el)) show(el); }, 1200);
 }); }, {rootMargin: '0px 0px -5% 0px'});
 setTimeout(function(){ [].forEach.call(document.querySelectorAll(SEL), function(el){ if (isHidden(el)) io.observe(el); }); }, 1500);
 }
 // counter fallback: a plain number beats a stat frozen at "0" for a visitor who
 // never scrolls the count-up into view (no-op once the real count-up has run)
 setTimeout(function(){ document.querySelectorAll('[data-count]').forEach(function(el){
 var t = el.getAttribute('data-count'); if (t && !/[1-9]/.test(el.textContent||'')) el.textContent = t; }); }, 8000);
})();

/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();
