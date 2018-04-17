<div align="right" style="width:100%;" class="widget">
                        <nav style="float:right" class="navbar  navbar-right">
                            
                            <form  class="form-inline">
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                          </nav><br/><br/><br>
                     </div>
               <!-- Start of popular post-->      
                     <div  class="popular">
                         <h2 align="center">Popular Post</h2><hr/>
                         <?php 
                           $p_query="SELECT * FROM posts WHERE status='publish' ORDER BY views DESC LIMIT 5";
                           $p_run=mysqli_query($con,$p_query);
                           if(mysqli_num_rows($p_run)>0)
                           { while($p_row=mysqli_fetch_array($p_run))
                            {
                                $p_id=$p_row['id'];
                                $p_date=$p_row['date'];
                                $p_title=$p_row['title'];
                                $p_image=$p_row['image'];
                            

                           
                         ?>
                         <div class="row">
                             <div class="col-xs-6">
                               <a href="#"><img class="img-responsive" src="img/<?php echo $p_image; ?>" alt="Image 1"></a>
                             </div>
                             <div class="col-xs-6">
                                  <a href="#"> <h4><?php echo $p_title; ?></h4></a>
                                 <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17 March, 2018</p>
                             </div>
                         </div><br/>
                   
                     <?php 
                           }
                        }
                           else{
                               echo "<h3> No Post Available</h3>";
                           }
                     ?>
                   
                 
                <!--End of Poupular Posts-->
          </div><br/>
          <!---Start of Recent Posts-->
          <div  class="popular">
            <h2 align="center">Recent Post</h2><hr/>
            <?php 
             $p_query="SELECT * FROM posts WHERE status='publish' ORDER BY id DESC LIMIT 5";
             $p_run=mysqli_query($con,$p_query);
              if(mysqli_num_rows($p_run)>0)
              { while($p_row=mysqli_fetch_array($p_run))
                {
                  
                    $p_id=$p_row['id'];
                    $p_date=$p_row['date'];
                    $p_title=$p_row['title'];
                    $p_image=$p_row['image'];
                

              
            ?>
            <div class="row">
                <div class="col-xs-6">
                    <a href="#"><img class="img-responsive" src="img/<?php echo $p_image;  ?>" alt="Image 1"></a>
                </div>
                <div class="col-xs-6">
                        <a href="#"> <h4><?php echo $p_title; ?></h4></a>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17 March, 2018</p>
                </div>
            </div><br/>
          
           <?php   
              }
            }
              else
              {
                  echo "<h2> No Post Available</h2>";
              }

            ?>
            
</div><br/>
   
 <!--- End of Recent Posts-->

 <!---Start of Catagory -->

     <div class="widget">
         <div class="popular">
             <h4 align="center">Catagories</h4>
             <hr/>
             <div class="row">
                 <div class="col-xs-6">
                     <ul>
                         <?php 
                          $c_query="SELECT * FROM catagories";
                          $c_run=mysqli_query($con,$c_query);
                          if(mysqli_num_rows($c_run)>0)
                           {
                           $count=2;
                          { while($c_row=mysqli_fetch_array($c_run))
                            {
                            $c_id=$c_row['id'];
                            $c_catagory=$c_row['catagory'];
                            $count=$count+1;

                            if($count%2==1)
                            {
                                echo "<li><a href='INDEX.php?cat=".$c_id."'>".(ucfirst($c_catagory))."</a></li>";
                            }

                            }
                        }

                          }
                          else 
                          {
                              echo "<p> No catagory</p>";
                          }
                         ?>
                     </ul>
                 </div>
                 <div class="col-xs-6">
                    <ul>
                    <?php 
                          $c_query="SELECT * FROM catagories";
                          $c_run=mysqli_query($con,$c_query);
                          if(mysqli_num_rows($c_run)>0)
                           {
                           $count=2;
                          { while($c_row=mysqli_fetch_array($c_run))
                            {
                            $c_id=$c_row['id'];
                            $c_catagory=$c_row['catagory'];
                            $count=$count+1;

                            if($count%2==0)
                            {
                                echo "<li><a href='INDEX.php?cat=".$c_id."'>".(ucfirst($c_catagory))."</a></li>";
                            }

                            }
                        }

                          }
                          else 
                          {
                              echo "<p> No catagory</p>";
                          }
                         ?>
                    </ul>
                 </div>
             </div>
         </div>
     </div>
  <!--End of Catagory-->

  <!--Start of Social Icons-->

            <div   class="widget">
                <div class="popular">
                    <h4 align="center">Social icons</h4>
                    <hr>
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="#"><img class="img-responsive" src="img/facebook1.png" alt="facebook"></a>
                        </div>
                        <div class="col-xs-4">
                                <a href="#"><img class="img-responsive" src="img/twitter.png" alt="twitter"></a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#"><img style="padding-right:10px;" class="img-responsive" src="img/google.pmg.png" alt="google plus"></a>
                       <br>

                        </div>
                    </div>
                </div>
            </div> 
            <!--End of Social Icons-->  
          