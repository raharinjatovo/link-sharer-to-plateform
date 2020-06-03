<?php
 /**
  *
  */
 class sharer
 {
    //variable url will be the url to share
   public function facebook($url)
   {

     $ensemble ='<a href="https://www.facebook.com/sharer/sharer.php?u='.$url.'">
    <img border="0" alt="facebook" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Facebook_logo_36x36.svg/1200px-Facebook_logo_36x36.svg.png" width="50" height="50">
    </a>';

     echo  $ensemble;
   }
   public function twiter($url,$text='',$via='',$related='',$lang='')
   {
     $ensemble ='<a href="https://twitter.com/intent/tweet?url='.$url.'&text='.$text.'&via='.$via.'&related='.$related.'&lang='.$lang.'">
    <img border="0" alt="facebook" src="https://upload.wikimedia.org/wikipedia/fr/thumb/c/c8/Twitter_Bird.svg/1200px-Twitter_Bird.svg.png" width="50" height="50">
    </a>';

     echo  $ensemble;
   }
   public function whatsapp($url,$text='')
   {
     $ensemble ='<a href="https://web.whatsapp.com/send?text= '.$text.'-'.$url.'">
  <img border="0" alt="facebook" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/1200px-WhatsApp.svg.png" width="50" height="50">
  </a>';

   echo  $ensemble;
   }
   public function linkedin($url,$title='',$lang='')
   {
     $ensemble ='<a href="https://www.linkedin.com/shareArticle?url='.$url.'&title='.$title.'&lang='.$lang.'">
  <img border="0" alt="facebook" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Linkedin_icon.svg/1200px-Linkedin_icon.svg.png" width="50" height="50">
  </a>';

   echo  $ensemble;
   }

   public function messenger($url)
   {
     $ensemble ='<a href="https://www.facebook.com/dialog/send?app_id=121241974571942&link='.$url.'&redirect_uri='.$url.'">
  <img border="0" alt="facebook" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Facebook_Messenger_4_Logo.svg/768px-Facebook_Messenger_4_Logo.svg.png" width="50" height="50">
  </a>';

   echo  $ensemble;
   }
   public function flipboard($url,$title='')
   {
     $ensemble ='<a href="https://share.flipboard.com/bookmarklet/popout?title='.$title.'&url='.$url.'">
  <img border="0" alt="facebook" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flipboard_logo.svg/1200px-Flipboard_logo.svg.png" width="50" height="50">
  </a>';

   echo  $ensemble;
   }

   public function mail($url,$subject='')
   {
     $ensemble ='<a href="mailto:?subject='.$subject.'&body='.$url.'">
  <img border="0" alt="facebook" src="https://www.pngitem.com/pimgs/m/12-127052_message-clipart-mail-symbol-transparent-background-red-email.png" width="50" height="50">
  </a>';

   echo  $ensemble;
   }
   public function copy($url)
   {
     $ensemble ='<button  data-text="'.$url.'" id="button" class="btn btn-secondary copyboard">Copy</button></div>';
      echo $ensemble;
   }
 }






 ?>
