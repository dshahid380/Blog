 <?php require_once('Inc/top.php');
      require_once('Inc/db.php');
       
 ?>
    


<body>
    
    <?php require_once('Inc/header.php'); 
    
     $number_of_posts=2;

       if(isset($_GET['page']))
       {
           $page_id=$_GET['page'];
       }
        else 
        {
           $page_id=1;
        }
     $all_posts_query="SELECT * FROM posts WHERE status='publish'";
     $all_posts_run=mysqli_query($con,$all_posts_query);
     $all_posts=mysqli_num_rows($all_posts_run);
     $total_pages=ceil($all_posts/$number_of_posts);
     $posts_start_from=($page_id-1)*$number_of_posts;
    
    ?>     

    <div class="jumbotron">
        <div class="container">
            <div id="details">
                <div class="animated fadeInLeft"><h1> Shahid <span>Blog</span></h1></div>
               <div class="animated fadeInRight">  <p>This is a Blog website where you can put your personal stuffs</p></div>
            </div>
        </div>
        <img src="img/top-image-3.jpg" alt="Top Image">
    </div>
    
     <section>
         <div style="margin:20px;" class="container">
             <div class="row">


                 


                 <div class="col-md-9">
                 <?php  
                 $slider_query="SELECT * FROM posts WHERE status='publish' ORDER BY id DESC LIMIT 5";
                 $slider_run=mysqli_query($con,$slider_query);
                 if(mysqli_num_rows($slider_run)>0)
                 {
                   $count=mysqli_num_rows($slider_run);
                 
                 ?>

          <!--IMAGE SLIDER GOES HERE-->

                     <div id="slider" class="container">
                         <div class="row">
                             <div class="col-xs-12">
                             
                             <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
                                 <ol class="carousel-indicators">
                                 <?php
                                  for($i=0;$i<$count;$i++)
                                   {
                                       if($i==0)
                                        {echo " <li data-target='#myCarousel' data-slide-to='0' class='active'></li>";
                                        }
                                        else
                                        {
                                            echo " <li data-target='#myCarousel' data-slide-to='".$i."'></li>";
                                        }

                                   }

                                 ?>
                                    
                               </ol>

                <!-- Wrapper for slides -->
                
                              <div class="carousel-inner">
                              <?php  
                               $check=0;
                               
                               for($i=0;$i<$count;$i++)
                               {   $slider_row=mysqli_fetch_array($slider_run);
                                    $slider_id=$slider_row['id'];
                                   $slider_image=$slider_row['image'];
                                   $slider_title=$slider_row['title'];
                                   $check=$check+1;
                                   if($check==1)
                                   {
                                       echo " <div class='item active'>";
                                   }
                                   else
                                   {
                                    echo " <div class='item'>"; 
                                   }
                               
                              
                              ?>
                                  
                                    <img style="height:20%;margin:50px; width:100%;" src="img/<?php echo $slider_image; ?>">
                                    <div class="carousel-caption">
                                    <h2> <?php echo $slider_title; ?> </h2>
                                    </div>
                                
                                    
                              </div>

                             
                                <?php 
                                 }
                                 ?> 
                              </div>

  <!-- Left and right controls -->
                           <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                             <span class="glyphicon glyphicon-chevron-left"></span>
                               <span class="sr-only">Previous</span>
                           </a>
                             <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                  <span class="sr-only">Next</span>
                             </a>
                           </div>
                                
                             </div>
                         </div>
                     </div>
                     
                     
                     <!--End of slider-->

                     <?php 
                     
                      }
                     $query="SELECT * from posts WHERE status='publish' ORDER BY id DESC LIMIT $posts_start_from, $number_of_posts";
                     $result=mysqli_query($con,$query);

                     $rows=mysqli_num_rows($result);
                     
                     if($rows>0)
                     {
                         while($row=mysqli_fetch_array($result))
                         {
                             $id=$row['id'];
                             $date=$row['date'];
                             $author=$row['author'];
                             $author_image=$row['author_image'];
                             $image=$row['image'];
                             $title=$row['title'];
                             $catagories=$row['catagories'];
                             $tags=$row['tags'];
                             $post_data=$row['post_data'];
                             $views=$row['views'];
                             $status=$row['status'];
                             
                   
                     ?>
                     <div id="post-area">

                     <!--Start of post1 here-->
                     
                     
                     <div  id="post1" class="post">
                            <div class="row">
                                <div class="col-md-2 post-date">
                                    <div class="day"><?php echo date('d'); ?></div>
                                    <div class="month">April</div>
                                    <div class="year"><?php echo date('Y'); ?></div>
                                </div>
                                <div class="col-md-8 post-title">
                                    <a href="#"><h2><?php echo $title; ?></h2></a>
                                    <p>written by <span style="color:cornflowerblue;font-weight:100;"><?php echo $author; ?></span></p>
                                </div>
                                <div class="col-md-2 profile-pic">
                                    <img class="img-circle img-resonsive" style="width:80%;" src="img/<?php echo $author_image; ?>" alt="Prifile Pic">
                                </div>
                            </div>
                           <a href="#"> <img style="width:100%;height:20%;" src="img/<?php echo $image; ?>" alt="Post Image"></a>
                           <p class="desc"><?php echo substr($post_data,0,100).". . . . ."; ?></p>
                              <a href="#" class="btn btn-primary">Read More...</a>
                              <div  style="margin-bottom:130px;" class="bottom">
                                  <span class="span1"><i class="fa fa-folder"></i><a href="#"></i><?php echo $catagories;  ?></a></span>|
                                  <span class="span2"><i class="fa fa-comment"></i><a href="#"></i> Comment</a></span>
                              </div>
           
                         </div>
                         <br/><br/>
                         <!--End of Post1-->
                
                         
                        </div>
                        <?php 
                              }
                            }
                           
                             

                        ?>
                        
                         
                         <!--start of Pagination here-->
                         <nav id="pagination" aria-label="Page navigation example">
                                <ul class="pagination">
                                 <?php 
                                   for($i=1;$i<=$total_pages;$i++)
                                   {
                                       echo "<li class='".($page_id==$i ? 'active' : '')."'><a href='INDEX.php?page=".$i."'>$i</a></li>";
                                   }
                                 ?>
                                </ul>
                              </nav>

                         <!--End of pagination here-->
                        

                       
                    </div>
                    
                    
                    
                 
               
                    
                    
                    
                    

                        
               <!--Start of Popular Posts-->  
                 <div class="col-md-3">
                    
                <?php require_once('Inc/sidebar.php') ?>

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