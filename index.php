
<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Home &mdash; Arun Sunshine Group, For Adults With A Learning Difficulty</title>
  <meta name="description" content="We meet at Dove Lodge, 49 Beach road, Littlehampton on alternate Sundays from 2pm to 5pm. Our objective is to advance the education and welfare of adults with learning difficulties, and to provide support for their families and carers, in order to provide a better standard of life for such people.">
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
                  <?php perch_content('Phone number'); ?>
                </strong></p>
              </div>
              <div id="tagline-email">
                <p><strong>
                  <?php perch_content('Email Derek'); ?>
                </strong></p>
              </div>
            </div>
            <div id="tagline-address">
              <p>
                <strong><?php perch_content('Address'); ?></strong>
              </p>
            </div>
            <div id="tagline-charity">
              <p><strong>
                <em><?php perch_content('Charity number'); ?></em>
              </strong></p>
            </div>
          </div>

        </div>

      </header><!--Header ends-->



      <!--Navigation area begins--><div class="twelve columns" id="nav">

        <div class="twelve columns" id="navbuttons">

            <a class="nav" href=""><div id="home"><p>Home</p></div></a>
            <a class="nav" href="events/"><div id="events"><p>Events</p></div></a>
            <a class="nav" href="diary/"><div id="diary"><p>Diary</p></div></a>
            <a class="nav" href="news/"><div id="news"><p>News</p></div></a>
            <a class="nav" href="videos/"><div id="videos"><p>Videos</p></div></a>
            <a class="nav" href="admin/"><div id="admin"><p>Admin</p></div></a>
            <a class="nav" href="findus/"><div id="findus"><p>Find Us</p></div></a>

        </div>
      </div><!--Navigation area ends-->




    <!--Row begins--><div>

      <!--Content begins #content--><div class="twelve columns background-orange" id="content">

        <!--top home page area-->

        <div class="background-orange-light content-box-wide"><!--Where and When-->
          <h1 class="header-blue">Where and When?</h1>

          <p class="centre content-box-p"><strong><?php perch_content('Front page Where and When?'); ?></strong></p>
        </div>

        <div><!--Four side-by-side images-->
          <div class="content-box-img-fullwidth-25">
            <?php perch_content('Top strip image 1'); ?>
          </div>
          <div class="content-box-img-fullwidth-25">
            <?php perch_content('Top strip image 2'); ?>
          </div>
          <div class="content-box-img-fullwidth-25">
            <?php perch_content('Top strip image 3'); ?>
          </div>
          <div class="content-box-img-fullwidth-25">
            <?php perch_content('Top strip image 4'); ?>
          </div>
        </div>

        <div class="spacer"></div>

        <div id="content-objectivebox"><!--Objective-->
          <h1 class="header-blue">Our Objective</h1>

          <p class="background-orange-light centre content-box-p-objective"><strong>To advance the education and welfare of adults with learning difficulties, and to provide support for their families and carers, in order to provide a better standard of life for such people.</strong></p>

          <div class="background-orange-light-resize" id="content-objectivebox-image">
              <?php perch_content('Front page objective image'); ?><img class="content-box-img-fullwidth" src="images/photo-home-objective.jpg" alt="Our staff and members on an outing - group photo!">
          </div>
        </div>

        <div class="row"><!--Activities & Events columns-->
          <div class="eight columns offset-by-two content-box-col-yellow"><!--Activities-->
            <h1 class="header-purple">Activities</h1>

            <p class="centre content-box-p"><strong>Just a few of the excellent activities on offer are:</strong></p>

            <p class="centre content-box-p-big"><strong>Computer Games and Skills, Arts &amp; Crafts including Flower Arranging, Board Games, Jigsaws, Bingo, Quizes and Film Shows.</strong></p>

            <div class="spacer"></div>

            <div class="five columns offset-by-one">
              <?php perch_content('Activities image 1'); ?><img src="images/lottery.png" alt="" class="content-box-img-fullwidth">
            </div>
            <div class="five columns">
              <?php perch_content('Activities image 2'); ?><img src="images/lottery.png" alt="" class="content-box-img-fullwidth">
            </div>

            <div class="spacer"></div>

            <p class="centre content-box-p"><strong>Members often decide on what activities they would like to do.</strong></p>

            <p class="centre content-box-p"><strong>Refreshments are available throughout every meeting.</strong></p>
          </div>

          <div class="eight columns offset-by-two content-box-col-yellow"><!--Events-->
            <h1 class="header-purple">Events</h1>

            <p class="centre content-box-p"><strong>We often go on exciting outings, including:</strong></p>

            <p class="centre content-box-p-big"><strong><?php perch_content('Events outings list'); ?>Pantomimes, Restaurants, Pubs, 10 pin bowling, and summer outings to Marwell Zoo, the Isle of Wight and Brighton. (Summer outings can last up to 8 hours).</strong></p>

            <div class="spacer"></div>

            <div class="five columns offset-by-one">
              <?php perch_content('Events image 1'); ?><img src="images/lottery.png" alt="" class="content-box-img-fullwidth">
            </div>
            <div class="five columns">
              <?php perch_content('Events image 2'); ?><img src="images/lottery.png" alt="" class="content-box-img-fullwidth">
            </div>

            <div class="spacer"></div>

            <div class="five columns offset-by-one">
              <?php perch_content('Events image 3'); ?><img src="images/lottery.png" alt="" class="content-box-img-fullwidth">
            </div>
            <div class="five columns">
              <?php perch_content('Events image 4'); ?><img src="images/lottery.png" alt="" class="content-box-img-fullwidth">
            </div>

            <div class="spacer"></div>
          </div>
        </div>

        <div class="row"><!--Membership & Volunteers columns-->
          <div class="five columns offset-by-one content-box-col-yellow"><!--Membership-->
            <h1 class="header-purple">Membership</h1>

            <p class="centre content-box-p"><strong>Members must be aged 18 years or over and are invited to contribute <em>£3</em> per meeting plus a yearly membership fee of <em>£15</em>.</p>
          </div>

          <div class="four columns offset-by-one content-box-col-yellow "><!--Volunteers-->
            <h1 class="header-purple">Volunteers</h1>

            <p class="centre content-box-p"><strong>All of our volunteers:
              <ul class="body">
                <?php perch_content('Volunteers box'); ?>
                <li>are fully referenced and if required, Disclosure and Barring Service (DBS) checked,</li>
                <li>have completed an Emergency Life Support First Aid course,</li>
                <li>have attended a West Sussex Adult Protection Awareness Briefing.</li>
              </ul>
            </strong></p>
          </div>
        </div>

        <div><!--Four side-by-side images-->
          <div class="content-box-img-fullwidth-25">
            <?php perch_content('Bottom strip image 1'); ?><img class="content-box-img-fullwidth" src="images/lottery.png" alt="">
          </div>
          <div class="content-box-img-fullwidth-25">
            <?php perch_content('Bottom strip image 1'); ?><img class="content-box-img-fullwidth" src="images/lottery.png" alt="">
          </div>
          <div class="content-box-img-fullwidth-25">
            <?php perch_content('Bottom strip image 1'); ?><img class="content-box-img-fullwidth" src="images/lottery.png" alt="">
          </div>
          <div class="content-box-img-fullwidth-25">
            <?php perch_content('Bottom strip image 1'); ?><img class="content-box-img-fullwidth" src="images/lottery.png" alt="">
          </div>
        </div>

        <div class="twelve columns background-yellow"><!--Box with extra info-->
          <p class="centre content-box-p"><strong>We are a small, friendly and happy group. If you would like to become a member, or you know someone who would, please ring!</strong></p>

          <p class="centre content-box-p-big"><strong>Contact: Derek Moore MBE. TEL 01903 714930</strong></p>

          <p class="centre content-box-p"><strong>For forms, policies and info on other websites which may be of interest to you, <a href="">please take a look at our Admin page</a>.</strong></p>

          <div class="img-box-tiny">
            <img alt="" class="fluid" src="images/lottery.png">
          </div>

          <div class="spacer"></div>
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

        <p><?php perch_content('Address'); ?><br />
          <?php perch_content('Charity number'); ?></p>

        <p>Tel: <?php perch_content('Phone number'); ?><br />
          Email: <?php perch_content('Email Derek'); ?><br />
          Send mail to <?php perch_content('Email Info'); ?> with questions or comments about this website.</p>


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
