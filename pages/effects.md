## Effects Overview ##

PlaceHolder leverages the [GD library] and [SimpleImage][] to dynamically manipulate your random images. The currently available effects are black and white (`bw`), sepia (`sepia`), pixelate (`pixelate`), and sketch (`sketch`). There is also a random (`random`) option which will randomly pick one of the aforementioned effects or choose no effect at all.

Here are examples of each effect. Below each image is the effect used and the code use to generate it.

<div class="row-fluid">
  <div class="span3">
  	<p><img src="/images/280-280-bw" alt="random image" class="img-polaroid"/></p>
    <p>effect: <code>bw</code></p>
    <p markdown="1">`<img src="/images/280-280-bw/">`</p>
  </div>
  <div class="span3">
  	<p><img src="/images/280-280-sepia" alt="random image" class="img-polaroid"></p>
  	<p>effect: <code>sepia</code></p>
  	<p markdown="1">`<img src="/images/280-280-sepia">`</p>
  </div>
  <div class="span3">
  	<p><img src="/images/280-280-sketch" alt="random image" class="img-polaroid"></p>
  	<p>effect: <code>sketch</code></p>
  	<p markdown="1">`<img src="/images/280-280-sketch">`</p>
  </div>
  <div class="span3">
  	<p><img src="/images/280-280-pixelate" alt="random image" class="img-polaroid"></p>
  	<p>effect: <code>pixelate</code></p>
  	<p markdown="1">`<img src="/images/280-280-pixelate">`</p>
  </div>
</div>

[SimpleImage]: https://github.com/seyDoggy/SimpleImage "SimpleImage"
[GD Library]: http://www.php.net/manual/en/book.image.php "GD Library"
