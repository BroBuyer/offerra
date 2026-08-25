
document.getElementById('tko58') && (document.getElementById('tko58').textContent = new Date().getFullYear());

(function(){
var b=document.querySelector('.cc8xf'),n=document.querySelector('.cpy3s'),
    s=document.querySelector('.ulec2');
if(!b||!n)return;
function set(o){n.classList.toggle('zv820',o);document.body.classList.toggle('xn7sj9n',o);
  if(s)s.hidden=!o;b.setAttribute('aria-expanded',o?'true':'false');}
b.addEventListener('click',function(){set(!n.classList.contains('zv820'));});
if(s)s.addEventListener('click',function(){set(false);});
n.addEventListener('click',function(e){if(e.target.tagName==='A'||e.target.closest('.eaoigpo'))set(false);});
document.addEventListener('keydown',function(e){if(e.key==='Escape')set(false);});
})();

(function(){
var d=document.getElementById('lsm9on'),m=document.getElementById('gqz8w'),
    dv=document.getElementById('csezcv1'),mv=document.getElementById('ywprvgd'),out=document.getElementById('aowtjsf');
if(!d||!m||!out)return;
var cur=window.OFFER_CURRENCY_SYMBOL||'€';
var loc=window.OFFER_LOCALE||'fi-FI';
function fmt(n){return cur+Math.round(n).toLocaleString(loc);}
function calc(){var dep=+d.value,mon=+m.value;if(dv)dv.textContent=fmt(dep);if(mv)mv.textContent=mon;out.textContent=fmt(dep*Math.pow(1.035,mon));}
d.addEventListener('input',calc);m.addEventListener('input',calc);calc();
})();

(function(){
var cur=window.OFFER_CURRENCY_SYMBOL||'€';
var loc=window.OFFER_LOCALE||'fi-FI';
function money(n){n=+n;return cur+n.toLocaleString(loc,{maximumFractionDigits:n>=1000?0:(n>=1?2:4)});}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.qsd2h'),chg=el.querySelector('.dprrq');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('https://api.binance.com/api/v3/ticker/24hr?symbols=%5B%22BTCUSDT%22,%22ETHUSDT%22,%22SOLUSDT%22,%22XRPUSDT%22%5D').then(function(r){return r.json();}).then(function(rows){
  if(!Array.isArray(rows))return;
  var map={BTCUSDT:'BTC',ETHUSDT:'ETH',SOLUSDT:'SOL',XRPUSDT:'XRP'};
  apply(rows.map(function(x){return {sym:map[x.symbol]||x.symbol,price:x.lastPrice,pct:x.priceChangePercent};}));
}).catch(function(){});}
if(document.querySelector('[data-sym]')){load();setInterval(load,60000);}
})();

(function(){
var f=document.getElementById('sqw38g'),d=document.getElementById('bpisnbk');
if(!f||!d)return;
f.addEventListener('change',function(){
  var n=f.querySelectorAll('fieldset').length,a=new Set();
  f.querySelectorAll('input:checked').forEach(function(i){a.add(i.name);});
  d.hidden=a.size<n;});
})();

(function(){
var b=document.querySelector('.pao46');if(!b)return;
function t(){b.classList.toggle('mj6v9un',window.scrollY>600);}
window.addEventListener('scroll',t,{passive:true});t();
b.addEventListener('click',function(){try{window.scrollTo({top:0,behavior:'smooth'});}catch(e){window.scrollTo(0,0);}
var skip=document.querySelector('.lzvjboi,.nd5hm');if(skip)skip.focus();});
})();

(function(){
var f=document.getElementById('sqw38g');if(!f)return;
var qs=[].slice.call(f.querySelectorAll('.hpwy9'));if(qs.length<2)return;
var done=document.getElementById('bpisnbk'),cta=f.querySelector('.pk4h2'),
back=f.querySelector('.sihas5z'),wrap=f.querySelector('.jpmo5sl'),
bar=wrap?wrap.querySelector('i'):null,step=f.querySelector('.sdahnb'),
lbl=step?step.getAttribute('data-l'):'',of=step?step.getAttribute('data-of'):'',at=0;
f.classList.add('gymka');
function paint(fin){
  for(var i=0;i<qs.length;i++){qs[i].hidden=fin||i!==at;}
  if(wrap){wrap.hidden=false;}
  if(bar){bar.style.width=Math.round((fin?qs.length:at)/qs.length*100)+'%';}
  if(step){step.hidden=fin;step.textContent=lbl+' '+(at+1)+' '+of+' '+qs.length;}
  if(back){back.hidden=fin||at===0;}
  if(done){done.hidden=!fin;}
  if(cta){cta.hidden=!fin;}
}
function go(n){at=n;paint(false);try{qs[at].focus({preventScroll:true});}catch(e){qs[at].focus();}}
f.addEventListener('change',function(e){
  var t=e.target;if(!t||t.type!=='radio')return;
  var q=t.closest?t.closest('.hpwy9'):null;
  if(!q){q=t.parentNode;while(q&&q.tagName!=='FIELDSET'){q=q.parentNode;}}
  var i=qs.indexOf(q);if(i<0||i!==at)return;
  setTimeout(function(){
    if(at+1<qs.length){go(at+1);}
    else{paint(true);if(cta){try{cta.focus({preventScroll:true});}catch(e){}}}
  },240);});
if(back){back.addEventListener('click',function(){if(at>0){go(at-1);}});}
paint(false);
})();

(function(){
var r=document.querySelector('.tjbln');if(!r)return;
var m=window.matchMedia('(max-width:1080px)');
function sync(){if(m.matches){r.open=false;}else{r.open=true;}}
sync();
if(m.addEventListener){m.addEventListener('change',sync);}
else if(m.addListener){m.addListener(sync);}
})();

(function () {
  function fill(r) {
    var mn = parseFloat(r.min) || 0, mx = parseFloat(r.max);
    if (!(mx > mn)) mx = 100;
    var p = Math.max(0, Math.min(100, ((parseFloat(r.value) || 0) - mn) / (mx - mn) * 100));
    var cs = getComputedStyle(r);
    var acc = (cs.getPropertyValue('--accent') || '#2563eb').trim();
    var trk = (cs.getPropertyValue('--border') || 'rgba(120,130,150,.22)').trim();
    r.style.background = 'linear-gradient(90deg,' + acc + ' ' + p + '%,' + trk + ' ' + p + '%)';
  }
  document.querySelectorAll('input[type=range]').forEach(function (r) {
    r.addEventListener('input', function () { fill(r); });
    fill(r);
  });
})();

(function () {
  var SEL = '[data-anim],[data-animate],[data-aos],[data-reveal],[data-scroll],[class*="reveal"],[class*="fade"],[class*="aos"]';
  function show(el){
    ['data-anim','data-animate','data-aos','data-reveal','data-scroll'].forEach(function(a){ el.removeAttribute(a); });
    el.classList.remove('reveal','fade','fade-in','fade-up','aos-init','will-reveal','animate');
    el.style.setProperty('opacity','1','important'); el.style.setProperty('transform','none','important');
    el.style.setProperty('visibility','visible','important'); el.style.setProperty('filter','none','important');
  }
  function isHidden(el){ return el.offsetHeight > 0 && parseFloat(getComputedStyle(el).opacity) < 0.08; }
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function(es){ es.forEach(function(e){
        if (!e.isIntersecting) return;
        var el = e.target; io.unobserve(el);
        setTimeout(function(){ if (isHidden(el)) show(el); }, 1200);
    }); }, {rootMargin: '0px 0px -5% 0px'});
    setTimeout(function(){ [].forEach.call(document.querySelectorAll(SEL), function(el){ if (isHidden(el)) io.observe(el); }); }, 1500);
  }
  setTimeout(function(){ document.querySelectorAll('[data-count]').forEach(function(el){
      var t = el.getAttribute('data-count'); if (t && !/[1-9]/.test(el.textContent||'')) el.textContent = t; }); }, 8000);
})();

(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('qn105x');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('sonh2'),n=document.getElementById('uxyee3q');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();
