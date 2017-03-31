
<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Diary &mdash; Arun Sunshine Group, For Adults With A Learning Difficulty</title>
  <meta name="description" content="A diary of all of our upcoming activities and events at Arun Sunshine Group!">
  <meta name="author" content="The New Montessori Pre-school">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS & JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="../css/normalize.css"><!-- reset file do not change -->
  <link rel="stylesheet" href="../css/skeleton.css"><!-- framework CSS -->
  <link rel="stylesheet" href="../css/style.css"><!--my additions-->
  <link rel="stylesheet" href="../css/breaks.css"><!--breakpoints of mine-->

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="../images/favicon.png">

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
          <li class="vertical-top"><a href="../sitemap/">Sitemap</a></li>
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

            <a class="nav" href="../"><div id="home"><p>Home</p></div></a>
            <a class="nav" href="../events/"><div id="events"><p>Events</p></div></a>
            <a class="nav" href="../diary/"><div id="diary"><p>Diary</p></div></a>
            <a class="nav" href="../news/"><div id="news"><p>News</p></div></a>
            <a class="nav" href="../videos/"><div id="videos"><p>Videos</p></div></a>
            <a class="nav" href="../admin/"><div id="admin"><p>Admin</p></div></a>
            <a class="nav" href="../findus/"><div id="findus"><p>Find Us</p></div></a>

        </div>
      </div><!--Navigation area ends-->




    <!--Row begins--><div>

      <!--Content begins #content--><div class="twelve columns background-blue-dark" id="content">

      <h1 class="header-orange header-50">Diary</h1>

      <div class="ten columns offset-by-one background-orange-light">
        <p class="centre"><?php perch_content('Events and meetings PDF link'); ?></p>
        <p class="centre small">To view downloadable documents on this site,<br />
          <strong>you will need Adobe Acrobat Reader</strong><br />
          (<strong><a href="<?php perch_content('Adobe Acrobat download link global'); ?>">which you can download here - FREE</a></strong>)</p>
      </div>



      <div class="ten columns offset-by-one background-orange-light content-box-wide">
        <h2 class="header-purple">Meetings and Events <?php perch_content('Meetings and Events dates in title'); ?></h2>

        <table id="table" summary="Table of opening hours">
          <thead>
            <tr class="background-orange">
              <th class="centre" scope="col">Date</th>
              <th class="centre" scope="col">Event</th>
              <th class="centre" scope="col">Activities</th>
            </tr>
          </thead>
          <tbody class="diary">
            <?php perch_content('Dates and activities'); ?>
          </tbody>
        </table>

        <p>If you are unable to attend a meeting please let the project leader know as soon as possible.</p>

        <p>CONTACT: Derek Moore MBE<br />
        Tel: <?php perch_content('Phone number'); ?><br />
        Mob: <?php perch_content('Mobile number'); ?></p>
      </div>





      </div><!--Content ends-->



    </div><!--Row ends-->

    <div class="row">



    </div>



    <!--Row begins--><div class="row">

      <!--Footer begins #footer--><div class="twelve columns" id="footer">

        <ul>
          <li><a href="../">Home</a></li>
          <li><a href="../events/">Events</a></li>
          <li><a href="../diary/">Diary</a></li>
          <li><a href="../news/">News</a></li>
          <li><a href="../videos/">Videos</a></li>
          <li><a href="../admin/">Admin</a></li>
          <li><a href="../findus/">Find Us</a></li>
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
        <a href="../perch/">Perch Login</a></p>
        <br />
        <br />
        <br />

      </div><!--Footer ends-->

    </div><!--Row ends-->

  </div><!--Container ends-->

  <script>
  // fix for mobile table layout from http://sitesforprofit.com/responsive-tables-in-wordpress

  var headertext = [];
  var headers = document.querySelectorAll("thead");
  var tablebody = document.querySelectorAll("tbody");

  for (var i = 0; i < headers.length; i++) {
    headertext[i]=[];
    for (var j = 0, headrow; headrow = headers[i].rows[0].cells[j]; j++) {
      var current = headrow;
      headertext[i].push(current.textContent);
      }
  }

  for (var h = 0, tbody; tbody = tablebody[h]; h++) {
    for (var i = 0, row; row = tbody.rows[i]; i++) {
      for (var j = 0, col; col = row.cells[j]; j++) {
        col.setAttribute("data-th", headertext[h][j]);
      }
    }
  }
</script>
<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
