document.addEventListener('click', () => {

    const playButton = document.getElementById('play-btn');
    const stopButton = document.getElementById('stop-btn');
    const muteButton = document.getElementById('mute-btn');
    const hiddenInput = document.querySelector('input[type="hidden"]');
    const songInfo = document.getElementById('songInfo');
    const songList = document.getElementById('songList');

    let audio = new Audio();

    // Reproducir / Pausar
    playButton.addEventListener('click', () => {
        if (audio.paused) {
            const audioSrc = hiddenInput.value;
            audio.src = audioSrc;
            
            audio.play();
            songInfo.innerHTML = audioSrc;
        }
    });

    stopButton.addEventListener('click', () => {
        if (audio.played) {
            audio.pause();
            songInfo.innerHTML = "Cançó (Artista) (el que está sonant)";
        }
    });

    // Silenciar / Reactivar
    muteButton.addEventListener('click', () => {
        audio.muted = !audio.muted;
        muteButton.innerHTML = audio.muted 
            ? '<i class="bi bi-volume-mute fs-4"></i>' 
            : '<i class="bi bi-volume-up fs-4"></i>';
    });
});