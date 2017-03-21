
<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Videos &mdash; Arun Sunshine Group, For Adults With A Learning Difficulty</title>
  <meta name="description" content="A selection of recordings of our various activities and events!">
  <meta name="author" content="The New Montessori Pre-school">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS & JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css"><!-- reset file do not change -->
  <link rel="stylesheet" href="css/skeleton.css"><!-- framework CSS -->
  <link rel="stylesheet" href="css/style.css"><!--my additions-->
  <link rel="stylesheet" href="css/breaks.css"><!--breakpoints of mine-->

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Google fonts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet"><!--Bench Nine Google Font for headers-->

</head>

<body>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!--Container for ALL content, everything inside this--><div class="container">

      <!--Start of top information area--><div class="twelve columns" id="top">
        <ul class="nostyle">
          <li class="vertical-top"><a href="sitemap/">Sitemap</a></li>
        </ul>
      </div><!--End of top information area-->

      <!--top link for bookmarks on long pages--><a name="top"></a>

      <!--Header begin--><header>

        <div>

          <div id="header-left">
            <div id="header-logo">
            </div>
          </div>

          <div id="header-right">
            <div id="header-title">
              <h1>
                Arun Sunshine Group
              </h1>
            </div>
            <div id="lottery"></div>
            <div id="header-tagline">
              <h1>
                For Adults With A Learning Difficulty
              </h1>
            </div>

            <div id="tagline-box">
              <div id="tagline-phone">
                <p><strong>
                  <?php /*perch_content('Phone number');*/ ?>01903 714930
                </strong></p>
              </div>
              <div id="tagline-email">
                <p><strong>
                  <?php /*perch_content('Email Derek');*/ ?>derek@arunsunshine.org.uk
                </strong></p>
              </div>
            </div>
            <div id="tagline-address">
              <p>
                <?php /*perch_content('Address');*/ ?><strong>Arun Sunshine Group, Dove Lodge, 49 Beach Road, Littlehampton, West Sussex, BN17 5JG</strong>
              </p>
            </div>
            <div id="tagline-charity">
              <p><strong>
                <?php /*perch_content('Charity number');*/ ?><em>Registered Charity Number 1114803</em>
              </strong></p>
            </div>
          </div>

        </div>

      </header><!--Header ends-->



      <!--Navigation area begins--><div class="twelve columns" id="nav">

        <div class="twelve columns" id="navbuttons">

            <a class="nav" href="index.php"><div id="home"><p>Home</p></div></a>
            <a class="nav" href="events.php"><div id="events"><p>Events</p></div></a>
            <a class="nav" href="diary.php"><div id="diary"><p>Diary</p></div></a>
            <a class="nav" href="news.php"><div id="news"><p>News</p></div></a>
            <a class="nav" href="videos.php"><div id="videos"><p>Videos</p></div></a>
            <a class="nav" href="admin.php"><div id="admin"><p>Admin</p></div></a>
            <a class="nav" href="findus.php"><div id="findus"><p>Find Us</p></div></a>

        </div>
      </div><!--Navigation area ends-->




    <!--Row begins--><div>

      <!--Content begins #content--><div class="twelve columns background-orange" id="content">

      <h1 class="header-blue header-50">Videos</h1>

      <?php /*perch_content('Videos list');*/ ?>
      <div class="ten columns offset-by-one background-yellow content-box-wide">
        <h1 class="header-purple">Title</h1>
        <div class="video-container">
          <iframe src="//www.youtube.com/embed/izGBqHhqH7k" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>





      </div><!--Content ends-->



    </div><!--Row ends-->

    <div class="row">



    </div>



    <!--Row begins--><div class="row">

      <!--Footer begins #footer--><div class="twelve columns" id="footer">

        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Events</a></li>
          <li><a href="">Diary</a></li>
          <li><a href="">News</a></li>
          <li><a href="">Videos</a></li>
          <li><a href="">Admin</a></li>
          <li><a href="">Find Us</a></li>
        </ul>

        <br />

        <p><strong>&copy; <?php echo date('Y'); ?> Arun Sunshine Group | Designed by <a href="http://www.paulcomputerhelp.co.uk/">Paul Robinson</a></strong><br />

        <p>Arun Sunshine Group, Dove Lodge, 49 Beach Road, Littlehampton, West Sussex BN17 5JG.<br />
          Registered Charity No 1114803.</p>

        <p>Tel: 01903 714930<br />
          Email: derek@arunsunshine.org.uk<br />
          Send mail to info@arunsunshine.org.uk with questions or comments about this website.</p>


        <br />
        <br />
        <a href="perch/">Perch Login</a></p>
        <br />
        <br />
        <br />

      </div><!--Footer ends-->

    </div><!--Row ends-->

  </div><!--Container ends-->

  
<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
