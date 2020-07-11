function MusicSource() {
    this.musicPlayerEL = document.createElement("Audio");
    this.loadMusic = (source) => {
        this.musicPlayerEL.src = source;
    };
    this.play = function () {
        this.musicPlayerEL.play();
    };

    this.pause = function () {
        this.musicPlayerEL.pause();
    };

    this.stop = function () {
        this.musicPlayerEL.currentTime = 0;
        this.musicPlayerEL.pause();
    };
}

currentPlayList = [];
