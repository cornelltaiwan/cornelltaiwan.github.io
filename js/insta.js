var media = new XMLHttpRequest();
var url = 'https://www.instagram.com/cornelltaiwaneseas/media/';
   
function getMedia() {
  if(media) {    
    media.open('GET', url, true);
    media.send();
    alert(media.response());
  }
}

getMedia();