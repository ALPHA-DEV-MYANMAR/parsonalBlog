<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yms</title>
    <!-- BOOTSTRAP CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <!-- FONT AWESOME  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
     <!-- CUSTOM CSS  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- HEADER SECTION-->
              <div class="header">
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                    <img src="images/aps.jpg" id="headerImg" alt="">
                  </div>
                  <div class="col-md-4">
                    <br><br><br>
                    <p class="hello">HELLO!</p>
                    <p class="itme">IT'S ME</p>
                    <p class="yms">AUNG PAING SOE</p>
                    <p class="hc">THE HAPPY CODER</p>
                    <br>
                    <a href="posts.html">
                      <button class="btn btn-info">
                        <i class="fa fa-plus-circle"></i>
                        Explore My Blogs
                      </button>
                    </a>
                  </div>
                  <div class="col-md-2"></div>
                </div>
              </div>
                  
                <!-- NAVBAR SEXTION -->
                <div class="position-sticky" id="navbar">
                  <a href="{{ url('/') }}">HOME</a>
                  

                  @if(Auth::check())

                  <a href="{{ url('/showpost') }}">BLOGS</a>

                  <a href="" class="float-right">WELCOME-{{ strToUpper(Auth::user()->name) }}</a>

                  <a href="{{ route('logout') }}" class="float-right" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    LOGOUT
                  </a>    
                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>

                  @else 

                  <a href="{{ url('/register') }}" class="float-right">REGISTER</a>
                  <a href="{{ url('/login') }}" class="float-right">LOGIN</a>

                  @endif

                </div>               

                
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                    <!-- ABOUT ME & SKILLS SECTION-->  
                    <div class="aboutme">
                      <div class="row">
                        <div class="col-md-5">
                          <br>
                          <h3 class="text-center">ABOUT ME</h3>
                          <br>
                          <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat fugiat soluta consectetur reprehenderit facere, quis error quidem harum quam laborum inventore quasi minima ipsum asperiores laboriosam ipsa enim dolor perferendis.
                          </p>
                          <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat fugiat soluta consectetur reprehenderit facere, quis error quidem harum quam laborum inventore quasi minima ipsum asperiores laboriosam ipsa enim dolor perferendis.
                          </p>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="total-project mb-2">
                                <i class="fa fa-project-diagram"></i>
                                <br>
                                <strong>5</strong>
                                <p class="text-center">Total Projects</p>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="total-student">
                                <i class="fas fa-users"></i>
                                <br>
                                <strong>2500</strong>
                                <p class="text-center">Total Students</p>
                              </div>
                            </div>
                          </div>
                        </div>  
                        <div class="col-md-7">
                          <br>
                          <h4 class="text-center">MY SKILLS</h4>
                          <br>

                          @foreach($skills as $skill)

                          <div class="row">
                            <div class="col-md-9">
                                <div class="progress mt-2" style=" border: 1px solid gray;">
                                  <div class="progress-bar" style="width:{{ $skill->percent }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    {{ $skill->percent }}%
                                  </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                {{ $skill->name }}
                            </div>       
                          </div>

                          @endforeach

                        </div>
                      </div>
                    </div>

                    <br><br><br>

                    <!-- MY PROJECTS SECTION -->
                    <h2 class="text-center">MY PROJECTS</h2><br>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 mb-2">
                            <a href="https://www.google.com" target="_blank">
                                <p class="text-center">Google</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 mb-2">
                            <a href="https://www.youtube.com"  target="_blank">
                              <p class="text-center">youtube</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 mb-2">
                            <a href="https://www.facebook.com"  target="_blank">
                              <p class="text-center">Facebook</p>
                            </a>
                        </div>
                    </div>

                    <br><br><br>
                    <!-- LATEST POSTS SECTION  -->
                    <h2 class="text-center">LATEST POSTS FROM BLOGS</h2><br>
                    <p class="text-center">
                      Hey Guys! I warmly welcome you to read some of my blog posts. Here are very interesting and exciting posts you can read that i am supporting for you guys!
                    </p>
                    <div class="row">
                      <div class="col-sm-6 col-md-4">
                          <a href="post-details.html">
                              <div class="latest-post">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSY-Fqgt98110_CnRGAMtbzlYAKLsT1EIRqL5b4A9ESe3fhsaym&usqp=CAU" alt="">
                                <small>25 October, 2017 | By YMS </small>
                                <p><strong>SOMETHING JUST LIKE THIS WHEN YOU FALL IN LOVE WITH SOMEONE</strong></p>
                                <P>
                                  Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery people scan bar codes with handhelds and workers in the field stay
                                </P>
                              </div>
                          </a>
                      </div>
                      <div class="col-sm-6 col-md-4">
                          <a href="post-details.html">
                              <div class="latest-post">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRK2tvT1fAPcQNFpZvDaqmAgxkGCqGWADA0OMwdzULJWRScYI2A&usqp=CAU" alt="">
                                <small>25 October, 2017 | By YMS </small>
                                <p><strong>SOMETHING JUST LIKE THIS WHEN YOU FALL IN LOVE WITH SOMEONE</strong></p>
                                <P>
                                  Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery people scan bar codes with handhelds and workers in the field stay
                                </P>
                              </div>
                          </a>
                      </div>
                      <div class="col-sm-6 col-md-4">
                          <a href="post-details.html">
                              <div class="latest-post">
                                <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" alt="">
                                <small>25 October, 2017 | By YMS </small>
                                <p><strong>SOMETHING JUST LIKE THIS WHEN YOU FALL IN LOVE WITH SOMEONE</strong></p>
                                <P>
                                  Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery people scan bar codes with handhelds and workers in the field stay
                                </P>
                              </div>
                          </a>
                      </div>
                      <div class="col-sm-6 col-md-4">
                          <a href="post-details.html">
                              <div class="latest-post">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSQXE_7Go4FovH9bstguTZSXGwPapB5CwcraJtmLQICkJe9weEk&usqp=CAU" alt="">
                                <small>25 October, 2017 | By YMS </small>
                                <p><strong>SOMETHING JUST LIKE THIS WHEN YOU FALL IN LOVE WITH SOMEONE</strong></p>
                                <P>
                                  Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery people scan bar codes with handhelds and workers in the field stay
                                </P>
                              </div>
                          </a>
                      </div>
                      <div class="col-sm-6 col-md-4">
                          <a href="post-details.html">
                              <div class="latest-post">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQK60mFUNV8eXgrHZYzJwIKiYTPPhPW_jqFKlUcEcQGvxrF6F21&usqp=CAU" alt="">
                                <small>25 October, 2017 | By YMS </small>
                                <p><strong>SOMETHING JUST LIKE THIS WHEN YOU FALL IN LOVE WITH SOMEONE</strong></p>
                                <P>
                                  Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery people scan bar codes with handhelds and workers in the field stay
                                </P>
                              </div>
                          </a>
                      </div>
                    </div>
                        </div>
                    </div>
                </div>

                <!-- FOOTER SECTION  -->
              <div class="footer">
                <div class="row">

                  <div class="col-sm-12 col-md-4 mb-4">
                    <h5>ABOUT THIS WEBSITE</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sequi, architecto laborum excepturi molestiae dolore? Beatae distinctio.
                    </p>
                  </div>

                  <div class="col-sm-12 col-md-4 mb-4">
                    <h5>CONTACT INFO</h5>
                    <span> <i class="fas fa-mobile-alt"></i> 09403438913 </span> <br>
                    <span> <i class="far fa-envelope"></i> yms.yemyintsoe@gmail.com </span>
                  </div>

                  <div class="col-sm-12 col-md-4">
                    <h5>FOLLOW ME ON</h5>
                    <a href="https://www.facebook.com/ye.m.soe.96387/" target="_blank">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="https://www.instagram.com/yemyintsoe_salai/" target="_blank">
                    <i class="fab fa-instagram-square"></i>
                   </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.linkedin.com/in/ye-myint-soe-28a2aa1a0/" target="_blank">
                      <i class="fab fa-linkedin"></i>
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="">
                      <i class="fab fa-twitter-square"></i>
                    </a>
                  </div>

                </div>
              </div>

            </div>
        </div>
    </div>
    <!-- CUSTOMS JS  -->
    <script src="js/main.js"></script>
    <!-- BOOTSTRAP JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>