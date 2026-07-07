(function () {
  const menuToggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.primary-nav');

  if (menuToggle && nav) {
    menuToggle.addEventListener('click', function () {
      const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
      menuToggle.setAttribute('aria-expanded', String(!expanded));
      nav.classList.toggle('is-open');
    });
  }

  const search = document.getElementById('faculty-search');
  const cards = Array.from(document.querySelectorAll('.faculty-card'));

  if (search && cards.length) {
    search.addEventListener('input', function () {
      const value = search.value.trim().toLowerCase();
      cards.forEach(function (card) {
        const name = (card.dataset.name || '').toLowerCase();
        card.hidden = value !== '' && !name.includes(value);
      });
    });
  }
})();

