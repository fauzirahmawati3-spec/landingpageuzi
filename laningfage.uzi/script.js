
const menuToggle = document.getElementById("menuToggle");
const navMenu = document.getElementById("navMenu");
const navLinks = document.querySelectorAll(".nav-link");
const typing = document.getElementById("typing");

menuToggle.addEventListener("click", () => {
  const isOpen = navMenu.classList.toggle("open");
  menuToggle.setAttribute("aria-expanded", String(isOpen));
  menuToggle.textContent = isOpen ? "✕" : "☰";
});

navLinks.forEach(link => {
  link.addEventListener("click", () => {
    navMenu.classList.remove("open");
    menuToggle.setAttribute("aria-expanded", "false");
    menuToggle.textContent = "☰";
  });
});

// Efek teks mengetik
const phrases = ["Creative Developer", "Web Enthusiast", "Creative Learner"];
let phraseIndex = 0;
let charIndex = 0;
let deleting = false;

function typeText() {
  const phrase = phrases[phraseIndex];

  typing.textContent = phrase.substring(0, charIndex);

  if (!deleting) {
    charIndex++;
    if (charIndex > phrase.length) {
      deleting = true;
      setTimeout(typeText, 1300);
      return;
    }
  } else {
    charIndex--;
    if (charIndex < 0) {
      charIndex = 0;
      deleting = false;
      phraseIndex = (phraseIndex + 1) % phrases.length;
    }
  }

  setTimeout(typeText, deleting ? 45 : 85);
}

if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
  typeText();
} else {
  typing.textContent = phrases[0];
}

// Animasi saat bagian halaman muncul
const revealElements = document.querySelectorAll(".reveal");

if ("IntersectionObserver" in window) {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  revealElements.forEach(element => observer.observe(element));
} else {
  revealElements.forEach(element => element.classList.add("visible"));
}

// Menu aktif mengikuti bagian halaman
const sections = document.querySelectorAll("main section[id]");

if ("IntersectionObserver" in window) {
  const sectionObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        navLinks.forEach(link => {
          link.classList.toggle(
            "active",
            link.getAttribute("href") === "#" + entry.target.id
          );
        });
      }
    });
  }, { rootMargin: "-30% 0px -55% 0px" });

  sections.forEach(section => sectionObserver.observe(section));
}

// Background bintang tanpa gambar atau library online
const canvas = document.getElementById("stars");
const ctx = canvas.getContext("2d");
let stars = [];
let animationId;
const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

function createStars() {
  const dpr = Math.min(window.devicePixelRatio || 1, 2);
  canvas.width = window.innerWidth * dpr;
  canvas.height = window.innerHeight * dpr;
  canvas.style.width = window.innerWidth + "px";
  canvas.style.height = window.innerHeight + "px";
  ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

  const count = Math.min(150, Math.floor(window.innerWidth / 7));
  stars = Array.from({ length: count }, () => ({
    x: Math.random() * window.innerWidth,
    y: Math.random() * window.innerHeight,
    radius: Math.random() * 1.4 + 0.3,
    alpha: Math.random() * 0.65 + 0.2,
    speed: Math.random() * 0.008 + 0.002
  }));

  drawStars();
}

function drawStars() {
  ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);

  stars.forEach(star => {
    if (!reduceMotion) {
      star.alpha += star.speed;
      if (star.alpha > 0.9 || star.alpha < 0.2) star.speed *= -1;
    }

    ctx.beginPath();
    ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
    ctx.fillStyle = `rgba(170, 190, 255, ${star.alpha})`;
    ctx.fill();
  });

  if (!reduceMotion) animationId = requestAnimationFrame(drawStars);
}

createStars();
window.addEventListener("resize", () => {
  cancelAnimationFrame(animationId);
  createStars();
});

document.getElementById("year").textContent = new Date().getFullYear();

const music = document.getElementById("bgMusic");
const musicToggle = document.getElementById("musicToggle");

musicToggle.addEventListener("click", async () => {
  if (music.paused) {
    try {
      await music.play();
      musicToggle.textContent = "❚❚ Pause Music";
    } catch (error) {
      musicToggle.textContent = "Gagal memutar — cek file lagu";
      console.error("Musik tidak dapat diputar:", error);
    }
  } else {
    music.pause();
    musicToggle.textContent = "▶ Play Music";
  }
});

music.addEventListener("ended", () => {
  musicToggle.textContent = "▶ Play Music";
});