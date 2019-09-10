<?php 
session_start(); // imp ! always place it in start
?>
<?php include('header.php'); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<!-- Navigation -->



<style>
.carousel-control-next, .carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    color: #211f1f;
    text-align: center;
    opacity: 1;
    height: 50%;
}

.carousel-indicators li {
  width: 10px;
  height: 10px;
  border-radius: 100%;
}

section {
  padding-top: 50rem;
  padding-bottom: 5rem;
}

.lnr {
  display: inline-block;
  fill: currentColor;
  width: 1em;
  height: 1em;
  vertical-align: -0.05em;
  stroke-width: 1;
}

.services-icon {
  margin-bottom: 20px;
  font-size: 30px;
}
bgc2, .vLine, .hLine {
    background-color: #0F52BA;
}

.quote-icon {
  font-size: 40px;
  margin-bottom: 20px;
}
.services-icon {
    font-size: 60px;
    margin-left: 2rem;
}
.carousel-inner {
  position: relative;
  /* Removed height here */
  overflow: hidden;
}

.carousel-item {
  position: relative;
  width: 100vh;
  height: 100vh;
  display: none;
  width: 100%;
}
</style>





<style>
.html5-video-player:not(.ytp-transparent), .html5-video-player.unstarted-mode, .html5-video-player.ad-interrupting, .html5-video-player.ended-mode, .html5-video-player.ytp-fullscreen {
    background-color: #ffffff;
}

.carousel-control {
    position: absolute;
    top: 50%;
    bottom: 0;
    left: 0;
    width: 15%;
    font-size: 20px;
    color: #271818;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0,0,0,.6);
    
    filter: alpha(opacity=50);
    opacity: .5;
    height: 15%;
}

.carousel-control.left , .carousel-control.right{
    background-image: None; 
    background-image: None;
    background-image: None;
    background-image: None;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
    background-repeat: repeat-x;
}

.carousel-control {
    position: absolute;
    top: 30%;
    bottom: 0;
    left: 0;
    width: 15%;
    font-size: 60px;
    color: #ffa306;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0,0,0,.6);
    filter: alpha(opacity=50);
    opacity: 0.9;
    height: 15%;
}

.carousel-control:hover {
    color: #f90e0e;
    text-decoration: none;

    outline: 0;
    opacity: 1;
}

.carousel-control:focus {
    color: #ffa306;
    text-decoration: none;

    outline: 0;
    opacity: .9;
}


</style>

		        <div id="myCarousel" class="carousel slide" style="width:100%; height:auto; padding-top:100px">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item active center" >
				<iframe  name="frame1" id='f1' width=100% height="400"  src="https://www.youtube.com/embed/9E-VqTT4MMI?showinfo=0&modestbranding=1&autoplay=0&showinfo=0&rel=0&color=red&enablejsapi=1&origin=*" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>        
        
                <div class="item"><iframe id='f2' width=100% height="400" src="https://www.youtube.com/embed/VQf4MF-m1gA?showinfo=0&modestbranding=1&autoplay=0&showinfo=0&rel=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="item"><iframe id='f3' width=100% height="400" src="https://www.youtube.com/embed/RFYnIzwjKUg?showinfo=0&modestbranding=1&autoplay=0&showinfo=0&rel=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev" height="200" onclick='PauseAll()'>&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next" height="200" onclick='PauseAll()'>&rsaquo;</a>
            </div>
        </div>

<script >
window.setInterval(function(){

var cssLink = document.createElement("link") 
cssLink.href = "/test/test.css"; 
cssLink .rel = "stylesheet"; 
cssLink .type = "text/css"; 
frames['frame1'].document.body.appendChild(cssLink);
  /// call your function here
}, 5000);

//https://stackoverflow.com/questions/7443578/youtube-iframe-api-how-do-i-control-a-iframe-player-thats-already-in-the-html
/**
 * @author       Rob W <gwnRob@gmail.com>
 * @website      https://stackoverflow.com/a/7513356/938089
 * @version      20190409
 * @description  Executes function on a framed YouTube video (see website link)
 *               For a full list of possible functions, see:
 *               https://developers.google.com/youtube/js_api_reference
 * @param String frame_id The id of (the div containing) the frame
 * @param String func     Desired function to call, eg. "playVideo"
 *        (Function)      Function to call when the player is ready.
 * @param Array  args     (optional) List of arguments to pass to function func*/
function callPlayer(frame_id, func, args) {
    if (window.jQuery && frame_id instanceof jQuery) frame_id = frame_id.get(0).id;
    var iframe = document.getElementById(frame_id);
    if (iframe && iframe.tagName.toUpperCase() != 'IFRAME') {
        iframe = iframe.getElementsByTagName('iframe')[0];
    }

    // When the player is not ready yet, add the event to a queue
    // Each frame_id is associated with an own queue.
    // Each queue has three possible states:
    //  undefined = uninitialised / array = queue / 0 = ready
    if (!callPlayer.queue) callPlayer.queue = {};
    var queue = callPlayer.queue[frame_id],
        domReady = document.readyState == 'complete';

    if (domReady && !iframe) {
        // DOM is ready and iframe does not exist. Log a message
        window.console && console.log('callPlayer: Frame not found; id=' + frame_id);
        if (queue) clearInterval(queue.poller);
    } else if (func === 'listening') {
        // Sending the "listener" message to the frame, to request status updates
        if (iframe && iframe.contentWindow) {
            func = '{"event":"listening","id":' + JSON.stringify(''+frame_id) + '}';
            iframe.contentWindow.postMessage(func, '*');
        }
    } else if ((!queue || !queue.ready) && (
               !domReady ||
               iframe && !iframe.contentWindow ||
               typeof func === 'function')) {
        if (!queue) queue = callPlayer.queue[frame_id] = [];
        queue.push([func, args]);
        if (!('poller' in queue)) {
            // keep polling until the document and frame is ready
            queue.poller = setInterval(function() {
                callPlayer(frame_id, 'listening');
            }, 250);
            // Add a global "message" event listener, to catch status updates:
            messageEvent(1, function runOnceReady(e) {
                    if (!iframe) {
                        iframe = document.getElementById(frame_id);
                        if (!iframe) return;
                        if (iframe.tagName.toUpperCase() != 'IFRAME') {
                            iframe = iframe.getElementsByTagName('iframe')[0];
                            if (!iframe) return;
                        }
                    }
                if (e.source === iframe.contentWindow) {
                    // Assume that the player is ready if we receive a
                    // message from the iframe
                    clearInterval(queue.poller);
                    queue.ready = true;
                    messageEvent(0, runOnceReady);
                    // .. and release the queue:
                    while (tmp = queue.shift()) {
                        callPlayer(frame_id, tmp[0], tmp[1]);
                    }
                }
            }, false);
        }
    } else if (iframe && iframe.contentWindow) {
        // When a function is supplied, just call it (like "onYouTubePlayerReady")
        if (func.call) return func();
        // Frame exists, send message
        iframe.contentWindow.postMessage(JSON.stringify({
            "event": "command",
            "func": func,
            "args": args || [],
            "id": frame_id
        }), "*");
    }
    /* IE8 does not support addEventListener... */
    function messageEvent(add, listener) {
        var w3 = add ? window.addEventListener : window.removeEventListener;
        w3 ?
            w3('message', listener, !1)
        :
            (add ? window.attachEvent : window.detachEvent)('onmessage', listener);
    }
}

function PauseAll()
{	
callPlayer("f1", "pauseVideo")
callPlayer("f2", "pauseVideo")
callPlayer("f3", "pauseVideo")
	
	
}

// Example: call play
// Note that the function automatically queues
// the request when the DOM/frame is not ready yet
//callPlayer('whateverID', 'playVideo');





</script>		
		
		
<!-- Page Content -->
<section class="py-5 text-center">
      <div class="container"> 
        <h2 class="text-center">Edubuntu Features </h2>
        <p class="text-muted mb-5 text-center"> <h3>For Teachers </h3> </p>
        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-3">
            <svg class="lnr text-primary services-icon">
              <use xlink:href="#lnr-magic-wand"></use>
            </svg>
            <h6></h6>
            <p class="text-muted"><b>Grow and Maintain your knowledge expertise</b></p>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <svg class="lnr text-primary services-icon">
              <use xlink:href="#lnr-calendar-full"></use>
            </svg>
            <h6></h6>
            <p class="text-muted"><b>Personalise your Lecture more effectively</b></p>
          </div>
		  
          <div class="col-sm-6 col-lg-4 mb-3">
            <svg class="lnr text-primary services-icon">
              <use xlink:href="#lnr-rocket"></use>
            </svg>
            <h6></h6>
            <p class="text-muted">Get the best Metaphors/Teaching Aids available, curated at one place </p>
          </div>
		  <!--
          <div class="col-sm-6 col-lg-4 mb-3">
            <svg class="lnr text-primary services-icon">
              <use xlink:href="#lnr-paperclip"></use>
            </svg>
            <h6>Tempor commodo</h6>
            <p class="text-muted">Tempor commodo nostrud ex Lorem occaecat duis occaecat minim.</p>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <svg class="lnr text-primary services-icon">
              <use xlink:href="#lnr-screen"></use>
            </svg>
            <h6>Et fugiat sint occaecat</h6>
            <p class="text-muted">Et fugiat sint occaecat voluptate incididunt anim nostrud ea cillum cillum consequat.</p>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <svg class="lnr text-primary services-icon">
              <use xlink:href="#lnr-inbox"></use>
            </svg>
            <h6>flast</h6>
            <p class="text-muted">Et labore tempor et adipisicing dolor.</p>
          </div>
		  -->
        </div>
		
		
		        <p class="text-muted mb-5 text-center"><h3>For Students </h3></p>
        <div class="row">
		<div class="col-sm-6 col-lg-4 mb-3">
		  </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <svg class="lnr text-primary services-icon">
              <use xlink:href="#lnr-briefcase"></use>
            </svg>
            <h6></h6>
            <p class="text-muted"><b>Access to Educational Resources according to your syllabus at one place</b> </p>
          </div>
		  <div class="col-sm-6 col-lg-4 mb-3">
		  </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <svg class="lnr text-primary services-icon">
              <use xlink:href="#lnr-map"></use>
            </svg>
            <h6></h6>
            <p class="text-muted"><b>Personalise your own Maps offline</b></p>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <svg class="lnr text-primary services-icon">
              <use xlink:href="#lnr-graduation-hat"></use>
            </svg>
            <h6></h6>
            <p class="text-muted"><b>Grows with your expertise</b></p>
          </div>
		  
          <div class="col-sm-6 col-lg-4 mb-3">
            <svg class="lnr text-primary services-icon">
              <use xlink:href="#lnr-book" ></use>
            </svg>
            <h6></h6>
            <p class="text-muted"><b>Accomodates all types of knowledge sources at one place</b></p>
          </div>
		  <!--
          <div class="col-sm-6 col-lg-4 mb-3">
            <svg class="lnr text-primary services-icon">
              <use xlink:href="#lnr-screen"></use>
            </svg>
            <h6>Et fugiat sint occaecat</h6>
            <p class="text-muted">Et fugiat sint occaecat voluptate incididunt anim nostrud ea cillum cillum consequat.</p>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <svg class="lnr text-primary services-icon">
              <use xlink:href="#lnr-paperclip"></use>
            </svg>
            <h6>flast</h6>
            <p class="text-muted">Et labore tempor et adipisicing dolor.</p>
          </div>
		  -->
        </div>
		
		
      </div>
</section>

<!---
<section class="main">
<div class="container mt-4">
    <h1 class="text-center mb-4 p-4 text-secondary">From The Blog</h1>
      <div class="row">

   <div class="card-columns">
  <div class="card shadow border-0">
    <img class="card-img-top" src="https://4.bp.blogspot.com/-InDD3Hm_bhU/XB4_TK3TT7I/AAAAAAAAAJ4/r5tUeCOqq1MTchFh7D7pWdf582A4qYIIwCEwYBhgL/s1600/Businesswoman-working-at-a-computer-1280x720.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title that wraps to a new line</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card shadow border-0  p-3">
    <blockquote class="blockquote mb-0 card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card shadow border-0">
    <img class="card-img-top" src="https://4.bp.blogspot.com/-InDD3Hm_bhU/XB4_TK3TT7I/AAAAAAAAAJ4/r5tUeCOqq1MTchFh7D7pWdf582A4qYIIwCEwYBhgL/s1600/Businesswoman-working-at-a-computer-1280x720.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card shadow border-0 bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer class="blockquote-footer">
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card shadow border-0 text-center">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card shadow border-0">
    <img class="card-img" src="https://4.bp.blogspot.com/-InDD3Hm_bhU/XB4_TK3TT7I/AAAAAAAAAJ4/r5tUeCOqq1MTchFh7D7pWdf582A4qYIIwCEwYBhgL/s1600/Businesswoman-working-at-a-computer-1280x720.jpg" alt="Card image">
  </div>
  <div class="card shadow border-0 p-3 text-right">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card shadow border-0">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>
   </div>
   </section>
   
   <!-- Header -->
   <!----
<header class="bg-primary text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white">Meet the Team</h1>
  </div>
</header>

<!-- Page Content 

<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
	<!----
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
	<!----
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
	<!----
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
	<!----
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
<!----
</div>

<div class="container">
    <div class="row">
         <div class="col-md-8">
        <blockquote class="blockquote text-center mb-0">
          <svg class="lnr text-muted quote-icon pull-left">
            <use xlink:href="#lnr-heart">                                       
          </use></svg>
          <p class="mb-0">Keep in touch with me for more Theme  right here!</p>
          <footer class="blockquote-footer">Luckmoshy Designing
            <cite title="Source Title">Webublog @</cite>
          </footer>
        </blockquote>
        </div>
        <div class="col-md-4">
        <a class="flot-right btn btn-white border-0 rounded shadow post-pager-link p-0 next ml-4" href="">
               <span class="d-flex h-100">
              <span class="p-3 d-flex flex-column justify-content-center w-100">
            <div class="indicator mb-1 text-uppercase text-muted">webublog<i class="fa fa-bars ml-2"></i></div>
                 <p class="f-13">See next awesome themes</p>
                     </span>
               <span class="bg-primary p-2 d-flex align-items-center text-white">
               <i class="fa fa-arrow-circle-right"></i>
          </span>
         </span>
</a></div>
        </div>
        
      </div>
<!-- /.container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

  </body>
</html>