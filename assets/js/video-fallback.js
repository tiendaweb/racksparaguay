(function () {
  const hero = document.querySelector('[data-hero-media]');
  const video = document.querySelector('[data-hero-video]');

  if (!hero || !video) {
    return;
  }

  const markReady = () => {
    hero.classList.add('is-video-ready');
    video.removeEventListener('loadeddata', markReady);
    video.removeEventListener('canplaythrough', markReady);
  };

  const keepPoster = () => {
    hero.classList.remove('is-video-ready');
  };

  if (video.readyState >= 2) {
    markReady();
  } else {
    video.addEventListener('loadeddata', markReady, { once: true });
    video.addEventListener('canplaythrough', markReady, { once: true });
  }

  video.addEventListener('error', keepPoster);
})();
