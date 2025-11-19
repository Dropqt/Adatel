<?php
// index.php — Adatel doo Beograd (dark crno/žuto, hero video, logo desno)
?><!doctype html>
<html lang="sr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adatel doo Beograd — Građevinski radovi & infrastruktura</title>
  <meta name="description" content="Adatel doo Beograd — građevinski radovi, infrastruktura, projektovanje i izvođenje.">
  <meta name="theme-color" content="#0b0b0d">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%230b0b0d'/%3E%3Cpath d='M15 70 L50 20 L85 70 Z' fill='%23ffd200'/%3E%3C/svg%3E">
<!-- AOS animacije -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
  <!-- Globalna video pozadina celog sajta -->
  <div class="site-video-bg" aria-hidden="true">
    <video class="site-video"
         autoplay muted loop playsinline webkit-playsinline preload="auto"
         poster="assets/img/hero-poster.jpg">
    <source src="assets/media/hero.mp4" type="video/mp4">
  </video>
  <!-- Tamni overlay da tekst ostane čitljiv na svim sekcijama -->
  <div class="site-video-overlay"></div>
</div>

  <header class="topbar">
    <div class="container topbar-inner">
      <!-- SEO/semantika: zadržan brand link, skriven kroz CSS -->
      <a class="brand" href="index.php" aria-label="Adatel">
        <span class="brand-mark">A</span>
        <span class="brand-text">Adatel doo Beograd</span>
      </a>

      <nav class="nav" id="mainNav" aria-label="Glavni meni">
        <a href="index.php" class="active">Početna</a>
        <a href="#trust">Partneri</a>
        <a href="#projekti">Projekti</a>
        <a href="#licence">Licence</a>
        <a href="#kontakt" class="btn btn-sm btn-accent">Kontakt</a>
      </nav>

      <!-- LOGO DESNO — zameni src ako bude drugi fajl -->
      <a class="logo-right" href="index.php" aria-label="Adatel">
        <img src="assets/img/logo.jpeg" alt="Adatel doo Beograd — logo" loading="lazy" decoding="async" width="144" height="36">
      </a>

      <button class="hamb" id="hamb" aria-label="Meni">&#9776;</button>
    </div>
  </header>

  <main id="content">
    <section class="hero">
      <!-- VIDEO POZADINA -->
      <div class="hero-bg" aria-hidden="true">
        <video id="heroVideo" class="hero-video"
               autoplay muted loop playsinline webkit-playsinline preload="auto"
               poster="assets/img/hero-poster.jpg">
          <source src="assets/media/hero.mp4" type="video/mp4">
        </video>
        <canvas id="heroCanvas" class="hero-canvas"></canvas>
        <div class="hero-overlay"></div>
        <button id="heroPlay" class="hero-play" aria-label="Pusti video" title="Pusti video">▶︎</button>
      </div>

      <div class="container hero-inner">
        <div class="hero-copy">
          <h1>Gradimo sigurno. Isporučujemo na vreme.</h1>
          <p>Pružamo kompletnu uslugu po principu &quot;ključ u ruke&quot;, od ideje do konačne
realizacije.</p>
          <div class="hero-cta">
          <a class="btn btn-accent" href="#projekti">Pogledaj projekte</a>
            <a class="btn btn-ghost" href="#usluge">Naše usluge</a>
          </div>
        </div>
      </div>

      <noscript>
        <style>.hero-video{display:flex}</style>
      </noscript>
    </section>

    <section id="usluge" class="section">
  <div class="container">
    <h2 class="section-title">Usluge</h2>

    <div class="grid cards">
      <!-- KARTICA 1 -->
      <article class="card">
        <div class="ico" aria-hidden="true">📄</div>
        <h3>Projektovanje i Inženjering</h3>
        <p>
          Pretvaramo vašu ideju u konkretan plan. Naš stručni tim preuzima kompletan proces pripreme,
          od idejnog rešenja do finalne dokumentacije.
        </p>
        <ul>
          <li>Izrada tehničke dokumentacije (PGD, PZI...)</li>
          <li>Akvizicija lokacija i objekata</li>
          <li>Ishodovanje svih potrebnih dozvola (od lokacijskih uslova do upotrebne dozvole)</li>
        </ul>
      </article>

      <!-- KARTICA 2 -->
      <article class="card">
        <div class="ico" aria-hidden="true">🚜</div>
        <h3>Izgradnja i Integracija</h3>
        <p>
          Gradimo kompletnu telekomunikacionu i prateću infrastrukturu. Naši timovi na terenu sprovode
          plan u delo, od građevinskih radova do puštanja sistema u rad.
        </p>
        <ul>
          <li>Svi radovi na niskogradnji (iskop, polaganje cevi, TT kanalizacija)</li>
          <li>Instalacioni radovi jake i slabe struje</li>
          <li>Polaganje, splajsovanje i merenje optičkih i bakarnih kablova</li>
          <li>Integracija i povezivanje TK opreme</li>
        </ul>
      </article>

      <!-- KARTICA 3 -->
      <article class="card">
        <div class="ico" aria-hidden="true">🧰</div>
        <h3>Specijalizovane Usluge i Održavanje</h3>
        <p>
          Rešavamo najsloženije infrastrukturne zahteve i pružamo pouzdanu dugoročnu podršku za
          nesmetan rad vaših sistema.
        </p>
        <ul>
          <li>Izmeštanje postojećih TT instalacija i vodova</li>
          <li>Dugoročno održavanje TK mreža i sistema</li>
          <li>Modernizacija i osavremenjivanje postojeće infrastrukture</li>
        </ul>
      </article>
    </div>
  </div>
</section>

<section class="section experience" >
  <div class="container">
    <div class="split">
      <div>
        <h2>Iskustvo na Najvećim Nacionalnim Projektima</h2>
        <p>
          Kao pouzdan partner i podizvođač, Adatel je dokazao svoj kapacitet učestvovanjem u
          izgradnji nekih od najvažnijih infrastrukturnih projekata u zemlji:
        </p>
        <ul class="bullets">
          <li>Polaganje oko 200 km optičkih kablova u tunelima na autoputevima E75 i E80 (Tuneli: Manajle, Predejane, Sarlah, Sopot, Bancarevo).</li>
          <li>Povezivanje preko 10.000 domaćinstava u okviru “All IP” tranzicionog projekta Telekoma Srbija.</li>
          <li>Izgradnja 20 km optičkog voda trase na obilaznici oko Obrenovca.</li>
        </ul>
      </div>

      <div class="stats" aria-label="Kratka statistika">
  <div class="stat"><span class="count" data-target="2500">0</span> km položenih kablova</div>
  <div class="stat"><span class="count" data-target="100000">0</span> povezanih domaćinstava</div>
  <div class="stat"><span class="count" data-target="15">0</span>godina poslovanja</div>
</div>

    </div>
  </div>
</section>        
        </div>
      </div>
    </section>

    <!-- ===== POVRENJE SU NAM UKAZALI ===== -->
<section id="trust" class="section trust">
  <div class="container">
    <h2 class="section-title">Poverenje su nam ukazali</h2>

    <div class="logo-grid">
      <!-- 1. red -->
      <img src="assets/img/logos/logo1.png" alt="Partner 1" loading="lazy">
      <img src="assets/img/logos/logo2.png" alt="Partner 2" loading="lazy">
      <img src="assets/img/logos/logo3.png" alt="Partner 3" loading="lazy">
      <img src="assets/img/logos/logo4.png" alt="Partner 4" loading="lazy">

      <!-- 2. red -->
      <img src="assets/img/logos/logo5.png" alt="Partner 5" loading="lazy">
      <img src="assets/img/logos/logo6.png" alt="Partner 6" loading="lazy">
      <img src="assets/img/logos/logo7.png" alt="Partner 7" loading="lazy">
      <img src="assets/img/logos/logo8.png" alt="Partner 8" loading="lazy">

      <!-- 3. red -->
      <img src="assets/img/logos/logo9.png" alt="Partner 9" loading="lazy">
      <img src="assets/img/logos/logo10.png" alt="Partner 10" loading="lazy">
      <img src="assets/img/logos/logo11.png" alt="Partner 11" loading="lazy">
      <img src="assets/img/logos/logo12.png" alt="Partner 12" loading="lazy">
      <img src="assets/img/logos/logo13.png" alt="Partner 13" loading="lazy">

      
      
    </div>
  </div>
</section>

    <section class="section" id="projekti">
  <div class="container">
    <h2 class="section-title">Izdvojeni projekti</h2>

    <div class="grid projects">
      <!-- KARTICA 1 -->
      <a class="project" aria-label="Telekom Srbija — održavanje, GPON, magistrala">
      <div class="project-img-wrapper" style="width: 100%; height: 200px; overflow: hidden; border-radius: 15px 15px 0 0;">
    <img 
    src="assets/img/thumbs/serversobabg.png" 
    alt="Telekom Srbija GPON izgradnja optičke mreže" 
    style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px 6px 0 0; display: block;"
>
    >
</div>
        <div class="project-meta">
          <h4>Telekom Srbija</h4>
          <p><strong>Projekat:</strong> Održavanje, GPON implementacija i magistralna infrastruktura</p>
          <ul>
            <li>GPON u stotinama objekata, uključujući 7 kula u Beogradu na vodi</li>
            <li>Projektovanje i izvođenje magistralnih optičkih pravaca</li>
            <li>Višegodišnje održavanje, 5.000+ uspešnih intervencija</li>
            <li>1.500+ optičkih priključaka (biznis & rezidencijalni)</li>
          </ul>
        </div>
      </a>

      <!-- KARTICA 2 -->
      <a class="project" aria-label="ZTE — ključ u ruke optička mreža, Kragujevac centar">
    <img 
        src="assets/img/thumbs/editedbgkg.png" 
        alt="ZTE Kragujevac izgradnja optičke mreže ključ u ruke" 
        style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px 6px 0 0; display: block;"
    >
    <div class="project-meta">
        <h4>ZTE (za potrebe operatera)</h4>
        <p><strong>Projekat:</strong> Izgradnja “ključ u ruke” optičke mreže</p>
        <p><strong>Lokacija:</strong> Kragujevac — centar grada</p>
        <ul>
        <li>Akvizicija, projektovanje, sve dozvole</li>
        <li>Kompletno izvođenje niskogradnje i TK radova</li>
        <li>Finalno testiranje i upotrebna dozvola</li>
        <li>≈ 15.000 povezanih domaćinstava, 35+ km trase, 500+ zgrada</li>
        </ul>
    </div>
</a>

      <!-- KARTICA 3 -->
      <a class="project" aria-label="A1 Srbija — Fttx mreže i modernizacija BS, Beograd">
    <img 
        src="assets/img/thumbs/baznastanicabg.jpg" 
        alt="A1 Srbija modernizacija baznih stanica i Fttx mreže" 
        style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px 6px 0 0; display: block;"
    >
    <div class="project-meta">
        <h4>A1 Srbija</h4>
        <p><strong>Projekat:</strong> Fttx mreže i osavremenjivanje baznih stanica</p>
        <p><strong>Lokacija:</strong> Beograd (Rakovica, Novi Beograd)</p>
        <ul>
            <li>“Ključ u ruke” izgradnja Fttx mreža (od dozvole do upotrebne)</li>
            <li>Modernizacija 30+ baznih stanica u Beogradu</li>
        </ul>
    </div>
</a>

      <!-- KARTICA 4 -->
      <a class="project" aria-label="Strabag, Ingrap Omni, Extra auto transport — izmeštanja TK">
    <img 
        src="assets/img/thumbs/novisadsuboticapruga.jpg" 
        alt="Izmeštanje TK infrastrukture Strabag i Ingrap brza pruga" 
        style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px 6px 0 0; display: block;"
    >
    <div class="project-meta">
        <h4>Strabag · Ingrap Omni · Extra auto transport</h4>
        <p><strong>Projekat:</strong> Složeni radovi na izmeštanju TK infrastrukture</p>
        <ul>
            <li><strong>Strabag:</strong> Izmeštanje TK na kružnom toku u Obrenovcu + nova trasa i TT okna</li>
            <li><strong>Ingrap / Extra auto transport:</strong> Izmeštanje optike na brzoj pruzi Novi Sad – Subotica</li>
        </ul>
    </div>
</a>
    </div>
  </div>
</section>






<section id="licence" class="section alt licenses">
  <div class="container">
    <header class="licenses-head">
      <h1 class="licenses-title">Garancija Kvaliteta i Stručnosti</h1>
      <h2 class="licenses-subtitle">Licence i Sertifikati Kompanije Adatel</h2>
      <p class="licenses-intro">
        „Poslovanje u skladu sa najvišim domaćim i međunarodnim standardima je temelj
        kompanije Adatel. Naše licence, izdate od strane nadležnih državnih organa, i
        međunarodni sertifikati su vaša garancija da smo tehnički, kadrovski i pravno osposobljeni
        za izvođenje najsloženijih projekata u oblasti telekomunikacija, niskogradnje i elektro radova.”
      </p>
    </header>

    <section class="licenses-block">
      <h3 class="licenses-section-title">Velike Licence Ministarstva Građevinarstva, Saobraćaja i Infrastrukture</h3>
      

      <div class="license-group">
        <h4 class="license-group-title">Grupa „P” — Licence za Projektovanje</h4>

        <div class="license-list">
          <article class="license-item license-text-card">
            <div class="doc-body">
              <h5 class="doc-title">Licenca П150Е3 (P150E3)</h5>
              <p class="doc-text">
                Za projektovanje telekomunikacionih mreža i sistema <strong>međunarodnog i magistralnog značaja</strong>.
              </p>
            </div>
          </article>

          <article class="license-item license-text-card">
            <div class="doc-body">
              <h5 class="doc-title">Licenca П151Е3 (P151E3)</h5>
              <p class="doc-text">
                Za projektovanje telekomunikacionih mreža i sistema <strong>regionalnog značaja</strong> (na teritoriji dve ili više opština).
              </p>
            </div>
          </article>
        </div>
      </div>

      <div class="license-group">
        <h4 class="license-group-title">Grupa „I” — Licence za Izvođenje Radova</h4>

        <div class="license-list">
          <article class="license-item license-text-card">
            <div class="doc-body">
              <h5 class="doc-title">Licenca И150Е3 (I150E3)</h5>
              <p class="doc-text">
                Za izvođenje radova na telekomunikacionim mrežama i sistemima <strong>međunarodnog i magistralnog značaja</strong>.
              </p>
            </div>
          </article>

          <article class="license-item license-text-card">
            <div class="doc-body">
              <h5 class="doc-title">Licenca И151Е3 (I151E3)</h5>
              <p class="doc-text">
                Za izvođenje radova na telekomunikacionim mrežama i sistemima <strong>regionalnog značaja</strong> (na teritoriji dve ili više opština).
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="licenses-iso">
  <h3 class="licenses-section-title">Sistem Menadžmenta Kvalitetom (QMS)</h3>

  <div class="split iso-split">
    <figure class="iso-figure">
      
      <a href="assets/licence/ISO9001.pdf" 
         target="_blank" 
         rel="noopener" 
         aria-label="ISO 9001:2015 (PDF)">
         
        <img src="assets/img/thumbs/ISO9001-thumb.png"
             alt="ISO 9001:2015 — umanjen prikaz sertifikata"
             loading="lazy" width="640" height="800">
      </a>
      
      <figcaption class="muted">Sertifikat: ISO 9001:2015</figcaption>
    </figure>

    <div class="iso-copy">
      <p>
        Posedovanje ISO 9001 sertifikata potvrđuje da Adatel posluje po strogo definisanim i međunarodno priznatim procedurama.
        Za vas kao klijenta, ovo znači:
      </p>
      <ul class="checklist">
        <li><strong>Pouzdanost:</strong> Dosledan kvalitet usluge na svakom projektu.</li>
        <li><strong>Efikasnost:</strong> Efikasno upravljanje projektima i poštovanje rokova.</li>
        <li><strong>Minimiziranje rizika:</strong> Profesionalan pristup i upravljanje procesima u svakoj fazi saradnje.</li>
      </ul>
    </div>
  </div>
</section>
  </div>
</section>



    <section id="kontakt" class="section contact">
      <div class="container">
        <h2 class="section-title">Kontakt</h2>
        <div class="split">
          <form class="form" action="contact.php" method="post">
            <div class="row">
              <label>Ime i prezime
                <input type="text" name="name" required>
              </label>
              <label>Email
                <input type="email" name="email" required>
              </label>
            </div>

            <label>Poruka
              <textarea name="message" rows="5" required></textarea>
            </label>

            <button class="btn btn-accent" type="submit">Pošalji upit</button>
            <p class="muted">Slanjem poruke prihvataš obradu podataka radi odgovora na upit.</p>
          </form>

          <div class="contact-box">
            
            <h3>Adatel doo Beograd</h3>
            <p>Kikindska 86e, Borča – Beograd</p>
            <p>Adresa za prijem pošte: </p>
            <p>Vojina Đurašinovića Kostje 27, 11160 Mirijevo, Beograd</p>
            <p><a href="mailto:office@adatel.rs">office@adatel.rs</a></p>
            <!-- <p><a href="tel:+381XXXXXXXXX">+381 65 9596563</a></p> -->

            <div class="map-embed" role="region" aria-label="Mapa lokacije">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.655235600501!2d20.535947699999998!3d44.7878336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a71875595ec49%3A0x9bed6aa5361aefcb!2sAdatel%20doo%20Beograd!5e0!3m2!1sen!2srs!4v1763461335124!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container foot">
      <div>© <?php echo date('Y'); ?> Adatel doo Beograd</div>
      <nav class="footnav" aria-label="Footer meni">
      <a href="#trust">Partneri</a>
      <a href="#projekti">Projekti</a>
      <a href="#licence">Licence</a>
      <a href="#kontakt">Kontakt</a>
</nav>

    </div>
  </footer>

  <script src="assets/js/main.js?v=24002"></script>
  <script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) target.scrollIntoView({ behavior: "smooth" });
    });
  });
</script>
<script>
  // Smooth scroll
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) target.scrollIntoView({ behavior: "smooth" });
    });
  });

  // Aktivna sekcija u navigaciji
  const sections = document.querySelectorAll("section[id]");
  const navLinks = document.querySelectorAll(".nav a[href^='#']");

  window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach(section => {
      const sectionTop = section.offsetTop - 120; // malo offset da ne reaguje prerano
      if (scrollY >= sectionTop) current = section.getAttribute("id");
    });

    navLinks.forEach(link => {
      link.classList.remove("active");
      if (link.getAttribute("href") === "#" + current) {
        link.classList.add("active");
      }
    });
  });
</script>
<script>
  // Animacija brojeva (count-up)
  const counters = document.querySelectorAll('.count');
  let started = false;

  function animateCount() {
    if (!started && window.scrollY + window.innerHeight > document.querySelector('.stats').offsetTop + 100) {
      started = true;
      counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const duration = 2500; // trajanje animacije u ms
        const stepTime = 20;
        const steps = duration / stepTime;
        let count = 0;

        const update = setInterval(() => {
          count += target / steps;
          if (count >= target) {
            count = target;
            clearInterval(update);
          }
          counter.textContent = Math.floor(count) + "+";

        }, stepTime);
      });
    }
  }

  window.addEventListener('scroll', animateCount);
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // trajanje animacije
    once: true // animacija se prikazuje samo jednom
  });
</script>


<a href="#kontakt" class="floating-contact" aria-label="Pošalji upit">✉️</a>

</body>
</html>
