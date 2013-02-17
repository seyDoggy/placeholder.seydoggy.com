<?php header('Content-type: text/html; charset=utf-8');

function __autoload($class)  
{  
  $filename = str_replace('\\', '/', $class) . '.php';  
  @require_once './classes/'.$filename;  
}

use \Michelf\MarkdownExtra;

if (isset($_GET['md'])) {
    $file = $_GET['md'].'.md';
} else {
    $file = 'README.md';
}
$text = file_get_contents($file);
$html = MarkdownExtra::defaultTransform($text);

/*
  pageState
  - function to set page state
    based on current page

*/
function pageState($thisLink)
{
    $pageState = "normal";
    if (isset($_GET['md'])) {
        if ($_GET['md'] == $thisLink) {
            $pageState = "active";
        }
    } else {
        $pageState = "active";
    }
	
    return $pageState;
}
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PlaceHolder - A Random Image Placeholder Engine</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="/css/page.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Cabin|Droid Serif" rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body id="top">
        <a href="https://github.com/seyDoggy/placeholder"><img style="position: absolute; top: 42px; left: 0; border: 0; z-index: 1;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_red_aa0000.png" alt="Fork me on GitHub"></a>

        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"></button> <a class="brand" href="/">PlaceHolder</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="<?php print pageState("index.md");?> dropdown">
                                <a href="/" class="dropdown-toggle" data-toggle="dropdown">Documentation</a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a href="/#top">Overview</a>
                                    </li>
                                    <li class="">
                                        <a href="/#Requirements">Requirements</a>
                                    </li>
                                    <li class="">
                                        <a href="/#Installation">Installation</a>
                                    </li>
                                    <li class="">
                                        <a href="/#Usage">Usage</a>
                                    </li>
                                    <li class="">
                                        <a href="/#Action">In Action</a>
                                    </li>
                                    <li class="">
                                        <a href="/#Contribute">Contribute</a>
                                    </li>
                                    <li class="">
                                        <a href="/#plug">Thanks!</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="<?php print pageState("examples");?> dropdown">
                                <a href="/examples/" class="dropdown-toggle" data-toggle="dropdown">Examples</a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a href="/examples/#top">Top</a>
                                    </li>
                                    <li class="">
                                        <a href="/examples/#Effects">Effects</a>
                                    </li>
                                    <li class="">
                                        <a href="/examples/#Layouts">Layouts</a>
                                    </li>
                                    <li class="">
                                        <a href="/examples/#CSS">In CSS</a>
                                    </li>
                                    <li class="">
                                        <a href="/examples/#Markdown">In Markdown</a>
                                    </li>
                                    <li class="">
                                        <a href="/examples/#Sliders">In Sliders</a>
                                    </li>
                                    <li class="">
                                        <a href="/examples/#Credits">Image Credits</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="https://github.com/seyDoggy/placeholder" class="normal">Fork me</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subhead
        ================================================== -->
        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <div class="phSlider">
                        <img src="/images/1500-400" alt="random slider image 1" width="100%" height="auto">
                    </div>
                    <div class="carousel-caption">
                        <h4>PlaceHolder - A Random Image Engine</h4>
                        <p>Fill your demo site with real images, not gray boxes. Host your own image server and know it'll be around as long as you are. The above image uses: <code>&lt;img src="/images/1500-400"&gt;</code></p>
                    </div>
                </div>
                <div class="item">
                    <div class="phSlider">
                        <img src="/images/1500-400-sepia" alt="random slider image 2" width="100%" height="auto">
                    </div>
                    <div class="carousel-caption">
                        <h4>Not Just A Pretty Picture</h4>
                        <p>Don't make copies of the same image for multiple sizes, ratios and effects. PlaceHolder can handle that for you. One image, so many possibilities. The above image uses: <code>&lt;img src="/images/1500-400-sepia"&gt;</code></p>
                    </div>
                </div>
                <div class="item">
                    <div class="phSlider">
                        <img src="/images/1500-400-pixelate" alt="random slider image 3" width="100%" height="auto">
                    </div>
                    <div class="carousel-caption">
                        <h4>Keep New, Keep It Fresh</h4>
                        <p>With PlaceHolder the images are new and random each time the page is loaded. Every visit is different. The above image uses: <code>&lt;img src="/images/1500-400-pixelate"&gt;</code></p>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a> <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
        </div>

        <div class="container">

        <?php echo $html; ?>

        </div>
        <!-- Footer
        ================================================== -->
        <footer class="footer">
          <div class="container">
            <p>My name is <a href="http://twitter.com/seyDoggy" title="seyDoggy on twitter">Adam</a>. I make <a href="http://seydesign.com" title="RapidWeaver themes by seydesign">RapidWeaver themes</a>.</p>
            <ul class="footer-links">
              <li><a href="https://github.com/seyDoggy/placeholder">Fork PlaceHolder</a></li>
              <li class="muted">&middot;</li>
              <li><a href="https://github.com/seyDoggy/placeholder/issues?state=open">Issues</a></li>
              <li class="muted">&middot;</li>
              <li><a href="https://github.com/seyDoggy/placeholder/blob/master/CHANGELOG.md">Changelog</a></li>
            </ul>
          </div>
        </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>
