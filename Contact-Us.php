<?php require_once('Inc/top.php'); 
 require_once('Inc/db.php');
?>
<body>
    
<?php require_once('Inc/header.php');   ?>
    <div class="jumbotron">
        <div class="container">
            <div id="details" class="animated fadeInLeft">
                <h1> Contact <span>Us</span></h1>
                <p> We are availble for you,Feel free to contact us.</p>
            </div>
        </div>
        <img src="img/top-image-3.jpg" alt="Top Image">
    </div>
    
     <section>
         <div style="margin:20px;" class="container">
             <div class="row">

                 <div class="col-md-9">
                     <div class="row">
                   <!--Start of Map-->      
                         <div class="col-md-12">
                             
                               <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAp_BRxnf2vXFZsGYa3g8HJaI7IFC1tOpw'></script>
                               <div style='overflow:hidden;height:400px;width:100%;'>
                                   <div id='gmap_canvas' style='height:400px;width:100%;'>

                                   </div>
                                   <style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
                                    <a href='https://add-map.org/'>https://add-map.org</a> 
                                    <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=9892cdd5e3357bbb39d94f3714377b12b45b6ba5'></script>
                                    <script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(22.4991945,88.23130370000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(22.4991945,88.23130370000001)});infowindow = new google.maps.InfoWindow({content:'<strong>Budge Budge Kolkata</strong><br>Culcatta River side <br>700137 Kolkata <br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

                         </div>
                         <!--End of Map-->

                         <!--Start of Contact form-->
                         <div class="col-md-12 contact-form">
                             <form action="">
                                 <h1>Contact form</h1><br/>
                                 <div class="form-group">
                                     <label for="full-name">Full Name*:</label>
                                     <input type="text" id="full-name" class="form-control" placeholder="Full Name" required>
                                 </div>
                                 <div class="form-group">
                                        <label for="email">Email*:</label>
                                        <input type="email" id="email" class="form-control" placeholder="Email" required>
                                 </div>
                                 <div class="form-group">
                                            <label for="website">Website:</label>
                                            <input type="text" id="website" class="form-control" placeholder="*example.com">
                                </div>
                                <div class="form-group">
                                        <label for="message">Message:</label>
                                      <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Message should be here"></textarea>
                             </div>
                             <input type="submit" name="submit" value="submit" class="btn btn-primary">
                             </form>
                         </div>
                      <!--end of contact form-->   
                     </div>

                       
                    </div>
                           
               <!--Start of Popular Posts-->  
                 <div class="col-md-3">
                  
                   <?php require_once('Inc/sidebar.php');  ?>

                 </div>
             </div>
           </div>  
          
     </section>


    <footer>
    <div class="container">
        Copyright &copy; by Md Shahid All right Reserved from 2017-18
    </div>
    </footer>
    
    
</body>
</html>