
<?php
 include 'header.php';
?>

   <div class="container-fluid about-img">
          <div class="about-overlay text-center">
            <div class="row d-flex align-items-center justify-content-center h-100">
              <div class="col-md-6">
                  <p class="text-white">Contact Us</p>
              </div>
              <div class="col-md-6">
                <a href="index.php" class="f-link-decore">Home</a> <span class="text-white">/</span>
                <a href="gallery.php" class="f-link-decore">Contact Us</a>
            </div>
        </div>
     </div>
   </div>

  <!--header end-->
  <section class="mt-5">
       <div class="container-fluid text-center d-flex justify-content-center">
          <div class="box3">
             <p class="h3 hs_heading">Contact Us</p> 
          </div>
      </div>
  </section>
  <div class="container">
    
    <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
        <h4 class="hs_heading">Leave a Message</h4>
        <div class="hs_comment_form">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="input-group"> <span class="input-group-btn">
                  <button class="btn btn-success" type="button"><i class="fa fa-user"></i></button>
                </span>
                <input id="uname" type="text" class="form-control" placeholder="Full Name">
              </div>
              <!-- /input-group -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="input-group"> <span class="input-group-btn">
                  <button class="btn btn-success" type="button"><i class="fa fa-envelope"></i></button>
                </span>
                <input id="uemail" type="text" class="form-control" placeholder="Email">
              </div>
              <!-- /input-group -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-12">
              <div class="form-group">
                <textarea id="message" class="form-control" rows="8"></textarea>
              </div>
              <!-- /input-group -->
            </div>
            <p id="err"></p>
            <div class="form-group">
              <div class="col-lg-8 col-md-8 col-sm-6">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="hs_checkbox" class="css-checkbox lrg" checked="checked" />
                    <label for="hs_checkbox" name="checkbox69_lbl" class="css-label lrg hs_checkbox">Receive Your
                      Comments By Email</label>
                  </label>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6">
                <button id="em_sub" class="btn btn-success pull-right" type="submit">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <h4 class="hs_heading">Contact</h4>
        <div class="hs_contact">
          <ul>
              <i class="fa-solid fa-location-dot"></i>
              <p class="font-weight-bold">ADMINISTRATIVE OFFICE:</p>
              <p>Amhara, Bihta, Patna, Bihar-801106.
<hr>
             <span><i class="fa fa-phone"> </i> 0612-6633333 </span>  
              <p>+91-7781020360</p>
              <p>+91-7781020346</p>
            
         
          </ul>
        </div>
        
      </div>
    </div>
  
    <div class="clearfix"></div>
  </div>
<!-- <div class="container">
    <div class="row">
      <div class="col">
      <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=New%20Bypass%20Main%20Road,%20500%20Yards%20East%20from%20Mithapur%20Bus%20Stand%20patna+(Ramkrishna%20Nagar,%20Bigrahpur,%20Patna%20-%20800020,%20Bihar)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> 
    <a href='https://www.betriebshaftpflicht.at/cyber-versicherung/'>Hacking-Angriff Versicherung</a> 
    <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=a07cfc1c3ba27803392ee1b65c84acb19112548e'>
    </script>
      </div>
    </div>
</div> -->

    <section class="mb-5">
       <div class="container">
          <p class="display-5 my-4 hs_heading">Location</p>
          <div class="row  d-flex justify-content-center">
               <div class="col-md-9">
               <iframe class="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                id="gmap_canvas" src="https://maps.google.com/maps?width=802&amp;height=400&amp;hl=en&amp;q=Amhara,%20Bihta%20patna+(Netaji%20Subhas%20Medical%20College%20&amp;%20Hospital)&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
               </iframe> <a href='https://www.betriebshaftpflicht.at/cyber-versicherung/'>Hacking-Angriff Versicherung</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=a6505a435aee42be6eca5d54828380b7b358084d'></script>
               </div>
          </div>
       </div>
    </section>


  <!--footer start-->
<?php
  include 'footer.php';
?>