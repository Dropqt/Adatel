// --- Mobilni meni ---
const hamb = document.getElementById('hamb');
const nav  = document.getElementById('mainNav');
if (hamb && nav) {
  hamb.addEventListener('click', () => {
    if (getComputedStyle(nav).display === 'none') {
      nav.style.display = 'flex';
      nav.style.flexDirection = 'column';
      nav.style.gap = '10px';
      nav.style.position = 'absolute';
      nav.style.top = '64px';
      nav.style.right = '20px';
      nav.style.background = 'var(--panel)';
      nav.style.border = '1px solid var(--line)';
      nav.style.borderRadius = '14px';
      nav.style.padding = '12px';
      nav.style.boxShadow = '0 10px 30px rgba(0,0,0,.28)';
    } else {
      nav.removeAttribute('style');
    }
  });
}

// --- Hero video: agresivni autoplay + “freeze” poslednjeg kadra + fallback dugme ---
(function(){
  const v   = document.getElementById('heroVideo');
  const c   = document.getElementById('heroCanvas');
  const btn = document.getElementById('heroPlay');
  const hero= document.querySelector('.hero');
  if (!v || !c || !hero) return;

  // uslovi za autoplay
  v.muted = true;
  v.setAttribute('muted','');
  v.setAttribute('playsinline','');
  v.setAttribute('webkit-playsinline','');
  v.setAttribute('autoplay','');

  const ctx = c.getContext('2d');
  function coverDraw(video, ctx, w, h){
    const vw = video.videoWidth  || w;
    const vh = video.videoHeight || h;
    const scale = Math.max(w / vw, h / vh);
    const dw = vw * scale, dh = vh * scale;
    const dx = (w - dw) / 2, dy = (h - dh) / 2;
    ctx.clearRect(0,0,w,h);
    ctx.drawImage(video, dx, dy, dw, dh);
  }
  function sizeCanvas(){
    const w = hero.clientWidth, h = hero.clientHeight;
    if (c.width !== w || c.height !== h){ c.width = w; c.height = h; }
  }
  sizeCanvas(); window.addEventListener('resize', sizeCanvas);

  function tryPlay(){ const p = v.play(); if (p && p.catch) p.catch(()=>{}); }
  const nudge = ()=> tryPlay();
  v.addEventListener('loadedmetadata', nudge, {once:true});
  v.addEventListener('canplay', nudge, {once:true});
  v.addEventListener('canplaythrough', nudge, {once:true});
  document.addEventListener('visibilitychange', ()=>{ if (!document.hidden) nudge(); });
  window.addEventListener('focus', nudge);
  setTimeout(nudge, 80); setTimeout(nudge, 200);

  // fallback dugme ako ne krene
  setTimeout(()=>{ if (v.currentTime === 0 || v.paused) btn?.classList.add('show'); }, 1200);
  btn?.addEventListener('click', ()=>{ tryPlay(); btn.classList.remove('show'); });

  // “Freeze” kad smo pri kraju
  let frozen = false;
  function freezeNow(){
    if (frozen) return;
    sizeCanvas();
    try { coverDraw(v, ctx, c.width, c.height); } catch(_) {}
    c.style.display = 'block';
    v.style.visibility = 'hidden';
    frozen = true;
  }
  v.addEventListener('timeupdate', ()=>{
    if (!v.duration) return;
    if (v.duration - v.currentTime <= 0.12) {
      v.pause();
      v.currentTime = Math.max(0, v.duration - 0.05);
      freezeNow();
    }
  });
  v.addEventListener('ended', freezeNow, {once:true});
})();
window.addEventListener("scroll", () => {
  const tb = document.querySelector(".topbar");
  if (!tb) return;
  if (window.scrollY > 20) tb.classList.add("scrolled");
  else tb.classList.remove("scrolled");
});
