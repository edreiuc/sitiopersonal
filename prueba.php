<!DOCTYPE html>
<html>
<head>
  <style>
    #demo1 { position:relative; height:350px; }
    #demo-nav { position:absolute; top:5px; margin:5px; }
    #demo-stage { position:relative; display:block; top:40px; background:#fff; height:300px; overflow:auto; }
    #demo-stage li, #demo-stage li h3 { color:#777; }
    #demo-stage li.active, #demo-stage li.active h3 { color:#000; }
  </style>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="jquery-scrollTo.js"></script>
</head>
<body>

<div id="demo1">
  <section id="demo-nav">
    <nav>
      <span>Scroll To: </span>
      <button class="next">Next Chapter</button>
      <button class="last">Last Chapter</button>
      <button class="first">First Chapter</button>
    </nav>
  </section>
  <section id="demo-stage" class="jq-clearfix">
    <ul>
      <li><h3>Chapter 1</h3> <p>qsfdsfdghhfjkutyreerggjhf</p></li>
      <li><h3>Chapter 2</h3> <p>sdfghjkgfdsfgh</p></li>
      <li><h3>Chapter 3</h3> <p>erdfgghkjigyuf</p></li>
      <li><h3>Chapter 4</h3> <p>fgfdsqdfghfdsf</p></li>
      <li><h3>Chapter 5</h3> <p>ppolkjytrdfghji</p></li>
    </ul>
    <div class="jq-clearfix"></div>
  </section>
</div>

<script>
// [start] Demo Code //
  var $chapters = $('#demo-stage').find('ul').children('li');
  var $chScrollPositions = new Array();
  
  // Cache Scroll Positions for Each Chapter
  $chapters.each(function(i){
    $chScrollPositions[i] = Math.round($(this).offset().top - $('#demo-stage').offset().top) - 10;
  });
  $chapters.eq(0).addClass('active'); // Set First Chapter Active on Start
  
  $('#demo-nav > nav > button').click(function(){
    var last = $chapters.parent().find('li.active').removeClass('active').index();
    var next;
    
    switch($(this).index()){
      case 1: // Action - Next Chapter
        next = (last + 1 == $chapters.length) ? 0 : last + 1; // Loop around to first chapter
      break;
      case 2: // Action - Last Chapter
        next = $chapters.length - 1;
      break;
      case 3: // Action - First Chapter
        next = 0;
      break;
    }
    $chapters.eq(next).addClass('active'); // Set Next Chapter Active
    $('#demo-stage').scrollTo($chScrollPositions[next]);
  });
// [end] Demo Code //
</script>

</body>
</html>