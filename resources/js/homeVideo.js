document.querySelector('.homeVideo__video-container__play-button').addEventListener('click', function () {
    const video = document.querySelector('.homeVideo__video-container__video');
    video.src += "&autoplay=1";
    this.style.display = 'none';
});