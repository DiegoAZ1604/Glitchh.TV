//sidebar
function side_open() {
    document.getElementById("mySidebar").style.display = "block";
}

function side_close() {
    document.getElementById("mySidebar").style.display = "none";
}

//media

var canvas = document.querySelector("canvas");
var context = canvas.getContext("2d");
const video = document.querySelector('#myVidPlayer');
	
	//w-width,h-height
    var w, h;
    canvas.style.display = "none";
	
	//new
    function snapshot(){
        context.fillRect(0, 0, w, h);
        context.drawImage(video, 0, 0, w, h);
        canvas.style.display = "block";
    }

    function start_media(){
        window.navigator.mediaDevices.getUserMedia({ video: true, audio: true })
        .then(stream => {
            video.srcObject = stream;
            video.onloadedmetadata = (e) => {
                video.play();
                
                //new
                w = video.videoWidth;
                h = video.videoHeight
                
                canvas.width = w;
                canvas.height = h;
            };
    	})
        .catch(error => {
        	alert('Por favor enciende tu microfono y tu cámara');
    	});
    }

    function kill_media(){
        const stream = document.getElementById('myVidPlayer').srcObject;
        stream.getTracks().forEach(track => track.stop());
    }

   