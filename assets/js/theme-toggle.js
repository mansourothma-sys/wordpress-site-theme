/**
 * Dark / light mode toggle with localStorage persistence.
 * The initial theme is applied by an inline script in header.php
 * before first paint to avoid a flash of the wrong theme.
 */
(function () {
  'use strict';

  var button = document.querySelector('.theme-toggle');

  if (!button) {
    return;
  }

  function currentTheme() {
    return document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
  }

  function applyTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
    button.setAttribute('aria-pressed', theme === 'dark' ? 'true' : 'false');

    try {
      localStorage.setItem('sirte-theme', theme);
    } catch (error) {
      /* Storage unavailable (private mode); theme still applies for this view. */
    }
  }

  button.setAttribute('aria-pressed', currentTheme() === 'dark' ? 'true' : 'false');

  button.addEventListener('click', function () {
    applyTheme(currentTheme() === 'dark' ? 'light' : 'dark');
  });
})();
