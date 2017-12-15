<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Landing page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">

  <!-- Temporary CSS -->
  <link rel="stylesheet" href="css/landing.css">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
  <section class="section movie-poster">
    <p class="has-text-left is-size-7">MOVIE - ACTION, THRILLER</p>
    <h2 class="has-text-left has-text-weight-bold is-size-3">JOHN WICK 2</h2>
    <h1 class="has-text-right has-text-weight-bold is-size-3">7.3<h1>
    <a class="button" href="#">&#x271A; WATCHLIST</a>
    <a class="button" id="trailer-button" href="#">TRAILER</a>
  </section>

  <!-- Movies -->
  <section class="columns is-multiline is-mobile is-gapless" id="upcoming">
    <div class="column is-one-quarter">
      <img src="https://cdn.empireonline.com/jpg/70/0/0/1280/960/aspectfit/0/0/0/0/0/0/c/articles/599f53741deb298668eb8728/blade-runner-2049-poster.jpg">
    </div>
    <div class="column is-one-quarter">
      <img src="https://cdn.traileraddict.com/content/warner-bros-pictures/wonder-woman-2017-5.jpg">
    </div>
    <div class="column is-one-quarter">
      <img src="https://orig00.deviantart.net/55a4/f/2017/187/d/9/d90a1a3fe173e96e786dffda9cc50301-dbfa97a.jpg">
    </div>
    <div class="column is-one-quarter">
      <img src="http://starwarsblog.starwars.com/wp-content/uploads/2017/10/the-last-jedi-theatrical-blog.jpg">
    </div>
  </section>

  <section class="columns is-centered is-mobile" id="trailer-section">
    <div class="column" id="trailer-container">
      <iframe height="480" src="https://www.youtube.com/embed/6ZfuNTqbHE8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
  </section>

  <!-- TV shows -->
  <section class="columns is-multiline is-mobile is-gapless" id="upcoming">
    <div class="column is-one-quarter">
      <img src="https://designcontest-com-designcontest.netdna-ssl.com/blog/wp-content/uploads/2015/08/House-of-Cards-TV-Show-Poster-2.jpeg">
    </div>
    <div class="column is-one-quarter">
      <img src="http://cdn.collider.com/wp-content/uploads/beauty-and-the-beast-tv-show-poster.jpg">
    </div>
    <div class="column is-one-quarter">
      <img src="https://images-na.ssl-images-amazon.com/images/I/71vJ3kPE67L._SY717_.jpg">
    </div>
    <div class="column is-one-quarter">
      <img src="https://images-na.ssl-images-amazon.com/images/I/71RRIZioMRL._SL1500_.jpg">
    </div>
  </section>
  
  @include('includes/footer')
</body>

</html>
