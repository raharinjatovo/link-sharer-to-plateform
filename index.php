<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<?php
require 'sharer.php';
$c = new sharer();


$c->facebook('http://www.google.com');
echo "<br>";
$c->twiter('http://www.google.com');
echo "<br>";
$c->whatsapp('http://www.google.com');
echo "<br>";
$c->linkedin('http://www.google.com');
echo "<br>";
$c->messenger('http://www.google.com');
echo "<br>";
$c->flipboard('http://www.google.com');
echo "<br>";
$c->mail('http://www.google.com');
echo "<br>";
$c->copy('http://www.google.com');






//echo "string";


 ?>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>





<script type="text/javascript">

$('.copyboard').on('click', function(e) {
  e.preventDefault();

  var copyText = $(this).attr('data-text');

  var textarea = document.createElement("textarea");
  textarea.textContent = copyText;
  textarea.style.position = "fixed"; // Prevent scrolling to bottom of page in MS Edge.
  document.body.appendChild(textarea);
  textarea.select();
  document.execCommand("copy");

  document.body.removeChild(textarea);
  document.getElementById('button').innerHTML = "copied";

})


</script>
