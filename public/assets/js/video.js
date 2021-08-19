class VideoPlayer {
    options = {};
    constructor(options) {
        this.options = options;
        if (!options['selector']) {
            throw "selectoris required";
        }
        if (options['selector'].includes('.')) {
            this.playerContainerElements = document.querySelectorAll(`${options['selector']}`);
            this.playerContainerElements.forEach((item, index, elements) => {
                item.querySelector(`.play-button`).addEventListener('click', this.toggle);
                item.querySelector(`video`).addEventListener('click', this.toggle);
                item.addEventListener('mouseenter', this.showPlayButton);
                item.addEventListener('mouseleave', this.hidePlayButton);
            });
        }
    }

    showPlayButton = (e) => {
        e.target.querySelector(".play-button").style.visibility = 'visible';
    }
    hidePlayButton = (e) => {
        e.target.querySelector(".play-button").style.visibility = 'hidden';
    }

    toggle = (e) => {
        const playerContainer = e.target.closest(`${this.options['selector']}`);

        console.log(playerContainer)

        this.playerContainerElements.forEach((item) => {
            if (!item.isSameNode(playerContainer) && !item.querySelector('video').paused) {
                item.querySelector('video').pause();
                item.querySelector('.play-button').textContent = '►';
            }
        });

        const video = playerContainer.querySelector('video');
        if (video.paused) {
            video.play();
            video.muted = false;
            playerContainer.querySelector('.play-button').textContent = '❚ ❚'
            playerContainer.querySelector('.play-button').style.visibility = 'visible';
        } else {
            video.pause()
            playerContainer.querySelector('.play-button').textContent = '►'
            playerContainer.querySelector('.play-button').style.visibility = 'hidden';

        }
    }
    pause() {
        this.playerContainerElements.forEach((item) => {
            item.querySelector('video').pause();
            item.querySelector('.play-button').textContent = '►';
        });
    }

}
