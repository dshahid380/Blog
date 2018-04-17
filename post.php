 <?php require_once('Inc/top.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/font-awesome.css">
      <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Oswald:400,300' type="text/css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/animated.css">
</head>
<body>
    
    <?php require_once('Inc/header.php'); ?>
    <div class="jumbotron">
        <div class="container">
            <div id="details" class="animated fadeInLeft">
                <h1> Custom <span>Post</span></h1>
                <p>Here you can put your own tag line to make it more attractive.</p>
            </div>
        </div>
        <img src="img/top-image-3.jpg" alt="Top Image">
    </div>
    
     <section>
         <div style="margin:20px;" class="container">
             <div class="row">

                 <div class="col-md-9">
                        <!--Start of post1 here-->
                     
                     
                        <div id="post1" class="post">
                                <div class="row">
                                    <div class="col-md-2 post-date">
                                        <div class="day">17</div>
                                        <div class="month">March</div>
                                        <div class="year">2018</div>
                                    </div>
                                    <div class="col-md-8 post-title">
                                        <a href="#"><h2>Googole is ruling the world in the field of Internet.</h2></a>
                                        <p>written by <span style="color:cornflowerblue;font-weight:100;">Md Shahid</span></p>
                                    </div>
                                    <div class="col-md-2 profile-pic">
                                        <img class="img-circle img-resonsive" style="width:80%;" src="img/profile_pic2.jpg" alt="Prifile Pic">
                                    </div>
                                </div>
                               <a href="#"> <img style="width:100%;height:30%;" src="img/google-product1.jpg" alt="Post Image"></a>
                               <p class="desc">
                                    Google LLC[5] is an American multinational technology company that specializes in Internet-related services
                                     and products, which include online advertising technologies, search engine, cloud computing, 
                                     software, and hardware. Google was founded in 1998 by Larry Page and Sergey Brin while they were Ph.D. 
                                     students at Stanford University, California. Together, they own about 14 percent of its shares and control 56
                                      percent of the stockholder voting power through supervoting stock. They incorporated Google as a privately held
                                       company on September 4, 1998. An Initial public offering (IPO) took place on August 19, 2004, and Google moved
                                        to its new headquarters in Mountain View, California, nicknamed the Googleplex. In August 2015, Google
                                         announced plans to reorganize its various interests as a conglomerate called Alphabet Inc. Google, 
                                         Alphabet's leading subsidiary, will continue to be the umbrella company for Alphabet's Internet interests.
                                          Upon completion of the restructure, Sundar Pichai was appointed CEO of Google, replacing Larry Page,
                                           who became the CEO of Alphabet.<br/><br/>
                                    Google Search is a web search engine, which is Google's core product.
                                    It receives over 3 billion search queries per day.
                                    Google also offers regional search by its 189 regional level domains.
                                    Hummingbird – Expanded query analysis. For example, if you search for 'best pie place in Seattle' Google
                                     will also search for 'best pie restaurant in Seattle'.
                                    PageRank – link analysis algorithm.
                                    Snapshots – mechanism that indexes PDFs, Word documents, and more.
                                    Google Search functionality – Google Search includes Boolean logical operators, wildcards, and more,
                                     to help users refine their searches.
                                    Multiple languages – Google Search is supported by a large number of different languages.
                                    Google Author Rank – The idea that an online author can have topical authority within Google Search Results.
                                    Experimental Search options for testing new interfaces while searching with Google, including Timeline views
                                     and keyboard shortcuts.
                                    Encrypted Search – In May 2010 Google rolled out SSL-encrypted web search.[1] The encrypted search can be accessed
                                     at encrypted.google.com [2]
                                   </p>
                                  
                                  <div class="bottom">
                                      <span class="span1"><i class="fa fa-folder"></i><a href="#"></i> Catagory</a></span>|
                                      <span class="span2"><i class="fa fa-comment"></i><a href="#"></i> Comment</a></span>
                                  </div>
               
                             </div>
                             <!--End of Post1-->

                             <!--Start of releted Posts-->
                             <div class="related-posts">
                                 <h2>Related Posts</h2><hr/>
                                 <div class="row">
                                     <div class="col-sm-4">
                                         <a href="#">
                                             <img src="img/apple-invention.jpg" alt="Silde one">
                                             <h5>This is the heading for post one.We can add some more here</h5>
                                         </a>
                                     </div>
                                     <div class="col-sm-4">
                                         <a href="#">
                                               <img src="img/google-phones.jpg" alt="Silde two">
                                              <h5>This is the heading for post one.We can add some more here</h5>
                                        </a>
                                     </div>
                                     <div class="col-sm-4">
                                          <a href="#">
                                                <img src="img/google-pay.jpg" alt="Silde three">
                                                <h5>This is the heading for post one.We can add some more here</h5>
                                         </a>     
                                     </div>
                                 </div>
                             </div>

                             <!--End of releted Posts-->

                             <!--Author Biography-->
                             <div class="author">
                                 <div class="row">
                                     <div class="col-sm-3">
                                         <img class="img-circle" src="img/profile_pic3.jpg" alt="DP">
                                     </div>
                                     <div class="col-sm-9">
                                         <h4>Md Shahid</h4>
                                         <p>Im a programmer,i build web application ,android application and many more,currently
                                              i m studying  B.Tech computer Science in Netaji Subhash engineering College(109).
                                            I personally think that programming is not about coding and  coding thoroughly but to 
                                            solve the real world problem or to make the situation as simple as posssible
                                             </p>
                                     </div>
                                 </div>

                             </div>

                      <!--End of author--> 

                      <!--Comment Area-->
                        
                        <div class="comment">
                            <h3>Comments</h3><hr/>
                         <!--comment 1-->   
                            <div class="row single-comment">
                                <div class="col-sm-2">
                                    <img src="img/profile_pic1.jpg" class="img-circle" alt="">
                                </div>
                                <div class="col-sm-10">
                                    <h4>Adrika Roy</h4>
                                        <p>This is a beatifull blog shahid, I wanted to give you a opportunity for my
                                            new startup in the name of "Shaika Construction Works". I want a website from which i can communicate with my 
                                            customers
                                        </p>
                                    
                                </div>
                            </div>
                          <!--comment 2-->  
                            <div class="row single-comment">
                                    <div class="col-sm-2">
                                        <img src="img/profile_pic1.jpg" class="img-circle" alt="">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4>Adrika Roy</h4>
                                            <p>This is a beatifull blog shahid, I wanted to give you a opportunity for my
                                                new startup in the name of "Shaika Construction Works". I want a website from which i can communicate with my 
                                                customers
                                            </p>
                                        
                                    </div>
                                </div>
                        </div>
                      
                      <!--Comment area closed-->

                      <!--comment box open-->

                      <div class="comment-box">
                          <div class="row">
                              <div class="col-xs-12">
                                  <form action="">
                                      <div class="form-group">
                                          <label for="full-name">Full Name*:</label>
                                          <input type="text" id="full-name" class="form-control" placeholder="Full Name">

                                      </div>
                                      <div class="form-group">
                                            <label for="email">Email*:</label>
                                            <input type="email" id="email" class="form-control" placeholder="Email">
  
                                        </div>
                                        <div class="form-group">
                                                <label for="website">Website:</label>
                                                <input type="website" id="website" class="form-control" placeholder="Website Url">
      
                                         </div>
                                         <div class="form-group">
                                                    <label for="comment">Comment*:</label>
                                                   <textarea name="comment" id="comment" cols="30" rows="10" palceholder="Your comment should here"class="form-control"></textarea>
          
                                         </div>
                                         <input type="submit" name="submit"class="btn btn-primary" value="Submit Comment">
                            
                                  </form>
                              </div>
                          </div>
                      </div>

                      <!--comment box closed-->
                   
                  </div>
                           
               <!--Start of Popular Posts-->  
               <div class="col-md-3">
                
              <?php  require_once('Inc/sidebar.php'); ?>

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