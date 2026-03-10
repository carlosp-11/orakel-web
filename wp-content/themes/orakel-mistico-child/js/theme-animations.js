// Animaciones base para el tema Orakel Místico.
// Ahora usamos GSAP + ScrollTrigger para entradas suaves y efecto místico al hacer scroll.

document.addEventListener('DOMContentLoaded', () => {
  if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  const prefersReducedMotion = window.matchMedia(
    '(prefers-reduced-motion: reduce)'
  ).matches;

  // Animación de entrada del hero.
  const hero = document.querySelector('.orakel-hero');
  if (hero) {
    gsap.from(hero, {
      opacity: 0,
      y: 40,
      duration: prefersReducedMotion ? 0.4 : 0.9,
      ease: 'power3.out',
    });

    // Orbes flotando en bucle muy suave (no ligado al scroll).
    if (!prefersReducedMotion) {
      const orbs = document.querySelectorAll('.orakel-hero-orb');
      orbs.forEach((orb, index) => {
        gsap.to(orb, {
          y: 12,
          x: index % 2 === 0 ? 8 : -8,
          duration: 4 + index,
          ease: 'sine.inOut',
          yoyo: true,
          repeat: -1,
        });
      });
    }
  }

  if (prefersReducedMotion) {
    return;
  }

  // Aparición de secciones al hacer scroll.
  const sections = document.querySelectorAll('.orakel-section-shell');
  sections.forEach((section) => {
    gsap.from(section, {
      opacity: 0,
      y: 60,
      duration: 0.8,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: section,
        start: 'top 80%',
      },
    });

    // Stagger de tarjetas dentro de cada sección.
    const cards = section.querySelectorAll('.orakel-card-item');
    if (cards.length) {
      gsap.from(cards, {
        opacity: 0,
        y: 30,
        duration: 0.6,
        ease: 'power3.out',
        stagger: 0.08,
        scrollTrigger: {
          trigger: section,
          start: 'top 78%',
        },
      });
    }
  });
});


