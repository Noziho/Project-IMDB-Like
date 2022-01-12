<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IMDb: Ratings, Reviews, and Where to Watch the Best Movies ...</title>
    <meta name="viewport" content="width=device-width,
  user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon"
          href="https://m.media-amazon.com/images/G/01/imdb/images-ANDW73HA/favicon_desktop_32x32._CB1582158068_.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
<header>
    <div id="topMenu">
        <img id="logoIMDb" src="/assets/img/IMDB_Logo.svg" alt="IMDb">
        <div id="menu">
            <i class="fas fa-bars"></i>
            Menu
        </div>


        <div id="containerSearchBar">
            <div id="divSmallArrow">
                All
                <i class="fas fa-sort-down"></i>
            </div>
            <input id="search" type="text" placeholder="IMDb search">
        </div>

        <div><p>IMDb Pro</p></div>

        <div class="line"></div>

        <div>Watchlist</div>
        <div>Sign in</div>
    </div>
</header>

<div id="container">
    <div id="homePageDiv">
        <div id="carousel">
            <div class="swiper mainSwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide mainSlide"><img class="mainSwiperImages"
                                                             src="https://picsum.photos/800/500" alt=""></div>
                    <div class="swiper-slide mainSlide"><img class="mainSwiperImages"
                                                             src="https://picsum.photos/800/499" alt=""></div>
                    <div class="swiper-slide mainSlide"><img class="mainSwiperImages"
                                                             src="https://picsum.photos/800/498" alt=""></div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>

        <div class="sideSwiper">
            <h1 class="mainColor">Up next</h1>
            <div class="sideSwiperDiv">Test0</div>
            <div class="sideSwiperDiv">Test1</div>
            <div class="sideSwiperDiv">Test2</div>
            <span>Browse Trailer ></span>
        </div>
    </div>

    <div id="containerMidPage">
        <h1 class="mainColor titleSize maxWidth">Featured today</h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide smallSlide"><img src="https://picsum.photos/600/250" alt=""></div>
                <div class="swiper-slide smallSlide"><img src="https://picsum.photos/600/249" alt=""></div>
                <div class="swiper-slide smallSlide"><img src="https://picsum.photos/600/251" alt=""></div>
                <div class="swiper-slide smallSlide"><img src="https://picsum.photos/600/248" alt=""></div>
                <div class="swiper-slide smallSlide"><img src="https://picsum.photos/600/252" alt=""></div>
                <div class="swiper-slide smallSlide"><img src="https://picsum.photos/600/253" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!--
    What to watch Category +
    top picks under Category -->
    <div class="section">
        <div class="underSection">
            <div><h1 class="mainColor titleSize">What to watch</h1></div>
            <div><span class="blue">get more recommendations ></span></div>
        </div>

        <div class="underSection secondUnderSection">
            <h2 class="topPicksTitle">Top picks <span class="yellowHover">></span></h2>
            <div><span class="titleDescription">TV shows and movies just for you</span></div>
            <div><span class="blue signInButton">Sign In</span></div>
        </div>
        <!-- Marque page pour le test php -->
        <div class="swiper mySwiperCategory">
            <div class="swiper-wrapper">
                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </div>

    <!-- From your Watchlist Category -->
    <div class="section">
        <div class="underSection secondUnderSection">
            <h2 class="topPicksTitle">From your Watchlist <span class="yellowHover">></span></h2>
            <div class="containerWatchlist">
                <div><i class="fas fa-plus-circle"></i></div>
                <p>Sign in to access your Watchlist</p>
                <p>Save shows and movies to keep track of what you want to watch.</p>
                <button id="signInButton">Sign in to IMDb</button>
            </div>

        </div>
    </div>

    <!-- Fan favorites Category -->
    <div class="section">

        <div class="underSection secondUnderSection">
            <h2 class="topPicksTitle">Fan favorites <span class="yellowHover">></span></h2>
            <div><span class="titleDescription">This week's top TV and movies</span></div>
        </div>

        <div class="swiper mySwiperCategory">
            <div class="swiper-wrapper">
                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random2 !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>


    <!-- More to watch under category -->
    <div class="section">
        <div class="underSection secondUnderSection">
            <h2 class="topPicksTitle">More to watch</h2>
            <span class="titleDescription">IMDb helps you select the perfect next show or movie to watch.</span>
            <div id="containerButtonWatchGuide">
                <button class="watchGuideAndPopular">Watch Guide</button>
                <button class="watchGuideAndPopular">Most Popular</button>
            </div>
        </div>
    </div>

    <!--
    Exclusive videos Category
    IMDb Originals > -->
    <div class="section">
        <div class="underSection">
            <div><h1 class="mainColor titleSize">Exclusive videos</h1></div>
        </div>

        <div class="underSection secondUnderSection">
            <h2 class="topPicksTitle">IMDb Originals <span class="yellowHover">></span></h2>
            <div><span class="titleDescription">Celebrity interviews, trending entertainment stories, and expert analysis</span>
            </div>
        </div>

        <div class="swiper mySwipe3Slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>
            </div>


            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </div>

    <!-- Explore what’s streaming Category
    PRIME VIDEO
    -->
    <div class="section">
        <div class="underSection">
            <div><h1 class="mainColor titleSize">Explore what’s streaming</h1></div>
            <div id="primeVideoCategoryContainer">
                <div>PRIME VIDEO</div>
            </div>
            <p>Included with Prime</p>
        </div>

        <div class="swiper mySwiperCategory">
            <div class="swiper-wrapper">
                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </div>

    <!-- Explore Movies & TV shows Category
     In theaters
     -->
    <div class="section">
        <div class="underSection">
            <div><h1 class="mainColor titleSize">Explore Movies & TV shows</h1></div>
        </div>

        <div class="underSection secondUnderSection">
            <h2 class="topPicksTitle">In theaters <span class="yellowHover">></span></h2>
            <div><span class="titleDescription">Showtimes near you</span></div>
        </div>

        <div class="swiper mySwiperCategory">
            <div class="swiper-wrapper">
                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sameSmallSlide">
                    <img src="https://picsum.photos/223/290" alt="">
                    <div class="descriptionSlide">
                        <div>
                            <i class="fas fa-star"></i>
                            <span>8.4</span>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Ma super image random !</p>
                        <div class="containerButton">
                            <button class="watchListButton">+ Watchlist</button>
                        </div>

                        <div class="containerTrailerButton">
                            <button class="trailerButton"><i class="fas fa-play"></i> Trailer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </div>

    <!-- Top box office (US) Category under category-->
    <div class="section">
        <div class="underSection secondUnderSection">
            <h2 class="topPicksTitle">Top box office (US) <span class="yellowHover">></span></h2>
            <div id="boxOfficeContainer">
                <div class="boxOffice">
                    <div class="line yellowBorder"></div>
                    <div class="containerLogoBoxOffice"><i class="fas fa-plus-circle box-office-logo"></i> 1</div>
                    <div>Spider-Man: No Way Home</div>
                    <i class="fas fa-ticket-alt"></i>
                    <div>$ 56 M</div>
                </div>

                <div class="boxOffice linearGradientBg">
                    <div class="line yellowBorder"></div>
                    <div class="containerLogoBoxOffice"><i class="fas fa-plus-circle box-office-logo"></i> 4</div>
                    <div>American Underdog</div>
                    <i class="fas fa-ticket-alt"></i>
                    <div>$ 3.9 M</div>
                </div>

                <div class="boxOffice linearGradientBg">
                    <div class="line yellowBorder"></div>
                    <div class="containerLogoBoxOffice"><i class="fas fa-plus-circle box-office-logo"></i> 2</div>
                    <div>Tous en scène 2</div>
                    <i class="fas fa-ticket-alt"></i>
                    <div>$ 20 M</div>
                </div>

                <div class="boxOffice">
                    <div class="line yellowBorder"></div>
                    <div class="containerLogoBoxOffice"><i class="fas fa-plus-circle box-office-logo"></i> 5</div>
                    <div>Matrix Resurrections</div>
                    <i class="fas fa-ticket-alt"></i>
                    <div>$ 3.8 M</div>
                </div>

                <div class="boxOffice">
                    <div class="line yellowBorder"></div>
                    <div class="containerLogoBoxOffice"><i class="fas fa-plus-circle box-office-logo"></i> 3</div>
                    <div>The King's Man: Première mission</div>
                    <i class="fas fa-ticket-alt"></i>
                    <div>$ 4.6 M</div>
                </div>

                <div class="boxOffice linearGradientBg">
                    <div class="line yellowBorder"></div>
                    <div class="containerLogoBoxOffice"><i class="fas fa-plus-circle box-office-logo"></i> 6</div>
                    <div>West Side Story</div>
                    <i class="fas fa-ticket-alt"></i>
                    <div>$ 2.2 M</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Coming soon to theaters (US) under category -->
    <div class="section">
        <div class="underSection secondUnderSection">
            <h2 class="topPicksTitle">Coming soon to theaters (US) <span class="yellowHover">></span></h2>
            <div><span class="titleDescription">Trailers for upcoming releases</span></div>
        </div>

        <div class="swiper mySwipe3Slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>
            </div>


            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </div>

    <!-- More to explore Category + Editor's picks under category-->
    <div class="section">
        <div class="underSection">
            <div><h1 class="mainColor titleSize">More to explore</h1></div>
        </div>

        <div class="underSection secondUnderSection">
            <h2 class="topPicksTitle">Editor's picks <span class="yellowHover">></span></h2>
        </div>

        <div class="swiper mySwipe3Slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>

                <div class="swiper-slide sameSmallSlideForTriple">
                    <img src="https://picsum.photos/430/250" alt="">
                </div>
            </div>


            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </div>

    <!-- Top news under category-->
    <div class="section">
        <div class="underSection secondUnderSection">
            <h2 class="topPicksTitle">Top news <span class="yellowHover">></span></h2>
        </div>

        <div class="swiper mySwipe3Slide swiper3SlideSizeDiff">
            <div class="swiper-wrapper">
                <div class="swiper-slide topNewsSlides">
                    <img class="topNewsSlidesImage" src="https://picsum.photos/430/250" alt="">
                    <div>The White Lotus Books The Sopranos' Michael Imperioli for Season 2 Role
                        <div>Jan 6 TVLine.com</div>
                    </div>

                </div>

                <div class="swiper-slide topNewsSlides">
                    <img class="topNewsSlidesImage" src="https://picsum.photos/430/250" alt="">
                    <div>‘Yellowstone’ Season 4 Finale Wrangles Over 10 Million Viewers, Up 81% From Season 3 Finale
                        <div>Jan 5 Variety - TV News</div>
                    </div>

                </div>

                <div class="swiper-slide topNewsSlides">
                    <img class="topNewsSlidesImage" src="https://picsum.photos/430/250" alt="">
                    <div>Vanessa Kirby to Replace Jodie Comer in Ridley Scott’s ‘Kitbag’ With Joaquin Phoenix
                        <div>Jan 5 The Wrap</div>
                    </div>

                </div>

                <div class="swiper-slide topNewsSlides">
                    <img class="topNewsSlidesImage" src="https://picsum.photos/430/250" alt="">
                    <div>HBO and HBO Max Rounded Out 2021 With 73.8 Million Global Subscribers, Topping Estimates
                        <div>Jan 5 Variety - TV News</div>
                    </div>
                </div>

                <div class="swiper-slide topNewsSlides">
                    <img class="topNewsSlidesImage" src="https://picsum.photos/430/250" alt="">
                    <div>‘Venom’ and Bond Still Lead VOD Charts as ‘Lost Daughter’ Makes Impressive Netflix Debut
                        <div>Jan 3 Undiewire</div>
                    </div>
                </div>

            </div>


            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </div>

    <footer>
        <div class="socialMediaLogo">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitch"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
        </div>

        <div class="externalLinkContainer">
            <div>
                <div class="externalLink">
                    <a
                            href="https://apps.apple.com/us/app/id342792525?_branch_match_id=992390107743026717&_branch_referrer=H4sIAAAAAAAAA8
              soKSkottLXL86pTNJLLCjQy8nMy9YP9k6pDDRzNDGxBABVqlN1IAAAAA%3D%3D&utm_campaign=mdot%20sitewide%20footer%20Branch%20update
              &utm_medium=marketing&utm_source=IMDb%20Mdot">
                        Get the IMDb App <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>

                <div class="externalLink">
                    <a href="https://help.imdb.com/imdb">
                        Help <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>

                <div class="externalLink">
                    <a href="https://help.imdb.com/article/imdb/general-information/imdb-site-index/GNCX7BHNSPBTFALQ#so">
                        Site index <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>

                <div class="externalLink">
                    <a href="https://pro.imdb.com/signup/index.html?rf=cons_tf_pro&u=https%3A%2F%2Fpro.imdb.com%2F%3Fref_%3Dcons_tf_pro%26rf%3Dcons_tf_pro">
                        IMDbPro <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>

                <div class="externalLink">
                    <a href="https://www.boxofficemojo.com/">
                        Box Office Mojo <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>
                <div class="externalLink">
                    <a href="https://developer.imdb.com">
                        IMDb Developer <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>

                <div class="externalLink moreWidth">
                    <a href="https://www.imdb.com/pressroom/?ref_=ft_pr">
                        Press room
                    </a>
                </div>

                <div class="externalLink moreWidth">
                    <a href="https://advertising.amazon.com/resources/ad-specs/imdb/">
                        Advertising <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>

                <div class="externalLink moreWidth">
                    <a href="https://www.amazon.jobs/en/teams/imdb">
                        Jobs <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>

                <div class="externalLink moreWidth">
                    <a href="https://developer.imdb.com">
                        Conditions of Use
                    </a>
                </div>

                <div class="externalLink moreWidth">
                    <a href="https://developer.imdb.com">
                        Privacy Policy
                    </a>
                </div>

                <div class="externalLink moreWidth">
                    <a href="https://www.amazon.com/b/?&node=5160028011">
                        Interest-Based Ads <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>
            </div>

            <div id="amazonLogoContainer">
                <img src="/assets/img/amazonCompanyLogo.png" alt="amazon company logo">
            </div>

            <div id="containerSpanFooter">
                <span id="footerSpan">&copy 1990-2022 by IMDb.com, Inc.</span>
            </div>
        </div>


    </footer>
</div>


<script src="https://kit.fontawesome.com/f06b2f84ad.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="/assets/js/app.js"></script>
</body>
</html>