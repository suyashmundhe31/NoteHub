var currentVideo;

window.onload = function() {
    currentVideo = document.getElementById('PreTv');
    currentVideo.style.display = 'block';
    currentVideo.play();
};

function playVideo(videoId) {
    currentVideo.pause();
    currentVideo.style.display = 'none';

    var video = document.getElementById(videoId);
    video.style.display = 'block';
    video.play();

    currentVideo = video;
}

function stopVideo(videoId) {
    var video = document.getElementById(videoId);
    video.pause();
    video.currentTime = 0;
    video.style.display = 'none';

    currentVideo.style.display = 'block';
    currentVideo.play();
}

function goToAboutUs() {
    window.location.href = 'AboutUs.html';
}

function openIT() {
    window.location.href = 'IT.html';
}