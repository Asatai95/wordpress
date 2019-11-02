<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="https://res.cloudinary.com/huu97stsb/image/upload/v1572486177/logo_part_5.png">
        <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


        <link rel="stylesheet" media="screen and (min-width: 897px)" href="https://awamori-in-the-pocket.herokuapp.com/wp-content/themes/dotinstall/style.css" type="text/css">
        <link rel="stylesheet" media="screen and (min-width: 481px) and (max-width: 896px)" href="https://awamori-in-the-pocket.herokuapp.com/wp-content/themes/dotinstall/style_tb.css" type="text/css">
        <link rel="stylesheet" media="screen and (max-width: 480px)" href="https://awamori-in-the-pocket.herokuapp.com/wp-content/themes/dotinstall/style_sp.css" type="text/css">


    </head>
    <body>
      <aside class="sidevar">
        <nav class="navbar navbar-dark bg-white">
          <a href="<?php echo home_url() ?>" class="navbar-brand"><img class="awamori-logo" src="/wp-content/uploads/2019/10/header_logo.png" alt=""></a>
          <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target="#navmenu1"
            aria-controls="navmenu1"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bar_1"></span>
            <span class="navbar-toggler-icon bar_2"></span>
            <span class="navbar-toggler-icon bar_3"></span>
          </button>
        </nav>
      </aside>
      <?php if ( wp_is_mobile() ) : ?>
      <div class="nav_header_menu sp" id="navmenu1">
      <?php else : ?>
      <div class="nav_header_menu" id="navmenu1">
      <?php endif ; ?>
        <div class="navbar-nav">
          <div class="about_nav">
            <span>ABOUT</span>
            <a class="nav-item nav-link" href="http://awamori-in-the-pocket.herokuapp.com/about/">「ポケットに泡盛」について</a>
          </div>
          <div class="cast">
            <div>
              <h3>PODCAST</h3>
            </div>
            <div>
              <ul>
                <li>
                  <a href="https://anchor.fm/pockeawa">
                    Anchor
                  </a>
                </li>
                <li>
                  <a href="https://podcasts.apple.com/us/podcast/awamori-in-the-pocket/id1485462376?uo=4">
                    Apple Podcast
                  </a>
                </li>
                <li>
                  <a href="https://www.google.com/podcasts?feed=aHR0cHM6Ly9hbmNob3IuZm0vcy9mYTc2NmVjL3BvZGNhc3QvcnNz">
                    Google Podcast
                  </a>
                </li>
                <li>
                  <a href="https://open.spotify.com/show/74ChfX0zYfFfJMcXzA01Yx">
                    Spotify
                  </a>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sidebar/3.1.0/jquery.sidebar.min.js"></script>
      <script type='text/javascript' src='/wp-content/themes/dotinstall/main.js'></script>
