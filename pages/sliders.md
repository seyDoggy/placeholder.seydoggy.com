## Widgets, Plugins Sliders... Show Them Off Right ##

You're building the latest, greatest whatchamahoey which bedazzles your viewers with sliding images and lazer beams and more pew pew then ever before! But the 10 kagillion people that Smashing Magazine sent your way all saw your widget sliding through the same 3 images... and two years later they'll likely see the same 3 images...

The slider at the top of this page will have 3 different every time you hit the site, and yours can too. Using the carousel from Twitter Bootsrap as an example:

    <div id="myCarousel" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="active item">
            <img src="/images/600-400" alt="random slider image 1">
        </div>
        <div class="item">
            <img src="/images/600-400-bw" alt="random slider image 2">
        </div>
        <div class="item">
            <img src="/images/600-400-sepia" alt="random slider image 3">
        </div>
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>

