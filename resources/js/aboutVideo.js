document.querySelector('.aboutVideo__videoContainer__playButton').addEventListener('click', function () {
    const video = document.querySelector('.aboutVideo__videoContainer__video');
    video.src += "&autoplay=1";
    this.style.display = 'none';
});