@extends('user.layout.master')
@section('content')
    <main>
        <section class="swiper-container js-swiper-slider slideshow full-width_padding"
            data-settings='{
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": 1,
        "effect": "fade",
        "loop": true,
        "pagination": {
          "el": ".slideshow-pagination",
          "type": "bullets",
          "clickable": true
        }
      }'>
            <div class="swiper-wrapper">
                <div class="swiper-slide full-width_border border-1" style="border-color: #f5e6e0;">
                    <div class="overflow-hidden position-relative h-100">
                        <div class="slideshow-bg" style="background-color: #f5e6e0;">
                            <img loading="lazy" src="{{ asset('user/assets/images/slideshow-pattern.png') }}" width="1761"
                                height="778" alt="Pattern" class="slideshow-bg__img object-fit-cover" />
                        </div>
                        <!-- <p class="slideshow_markup font-special text-uppercase position-absolute end-0 bottom-0">Summer</p> -->
                        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
                            <img loading="lazy" src="{{ asset('user/assets/images/slideshow-character1.png') }}"
                                width="400" height="733" alt="Woman Fashion 1"
                                class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 h-auto w-auto" />
                            <div class="character_markup">
                                <p
                                    class="text-uppercase font-sofia fw-bold animate animate_fade animate_rtl animate_delay-10">
                                    Summer</p>
                            </div>
                        </div>
                        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
                            <h6
                                class="text_dash text-uppercase text-red fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
                                New Trend</h6>
                            <h2 class="text-uppercase h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">
                                Summer Sale Stylish</h2>
                            <h2 class="text-uppercase h1 fw-bold animate animate_fade animate_btt animate_delay-5">Womens
                            </h2>
                            <a href="#"
                                class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-7">Discover
                                More</a>
                        </div>
                    </div>
                </div><!-- /.slideshow-item -->

                <div class="swiper-slide full-width_border border-1" style="border-color: #f5e6e0;">
                    <div class="overflow-hidden position-relative h-100">
                        <div class="slideshow-bg" style="background-color: #f5e6e0;">
                            <img loading="lazy" src="{{ asset('user/assets/images/slideshow-pattern.png') }}" width="1761"
                                height="778" alt="Pattern" class="slideshow-bg__img object-fit-cover" />
                        </div>
                        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
                            <img loading="lazy" src="{{ asset('user/assets/images/slideshow-character2.png') }}"
                                width="400" height="690" alt="Woman Fashion 2"
                                class="slideshow-character__img animate animate_fade animate_rtl animate_delay-10 h-auto w-auto" />
                        </div>
                        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
                            <h6
                                class="text_dash text-uppercase text-red fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
                                Summer 2020</h6>
                            <h2 class="text-uppercase h1 fw-bold animate animate_fade animate_btt animate_delay-3">Hello New
                                Season</h2>
                            <h6 class="text-uppercase mb-5 animate animate_fade animate_btt animate_delay-3">Limited Time
                                Offer - Up to 60% off & Free Shipping</h6>
                            <a href="#"
                                class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-3">Discover
                                More</a>
                        </div>
                    </div>
                </div><!-- /.slideshow-item -->
            </div><!-- /.slideshow-wrapper js-swiper-slider -->

            <div class="container">
                <div class="slideshow-pagination d-flex align-items-center position-absolute bottom-0 mb-5"></div>
                <!-- /.products-pagination -->
            </div><!-- /.container -->

            <div
                class="slideshow-social-follow d-none d-xxl-block position-absolute top-50 start-0 translate-middle-y text-center">
                <ul class="social-links list-unstyled mb-0 text-secondary">
                    <li>
                        <a href="#" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_facebook" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_twitter" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_instagram" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_pinterest" />
                            </svg>
                        </a>
                    </li>
                </ul><!-- /.social-links list-unstyled mb-0 text-secondary -->
                <span class="slideshow-social-follow__title d-block mt-5 text-uppercase fw-medium text-secondary">Follow
                    Us</span>
            </div><!-- /.slideshow-social-follow -->
            <a href="#section-collections-grid_masonry"
                class="slideshow-scroll d-none d-xxl-block position-absolute end-0 bottom-0 text_dash text-uppercase fw-medium">Scroll</a>
        </section><!-- /.slideshow -->

        <div class="mb-5 pb-5"></div>
        <div class="pb-1"></div>

        <section class="products-grid container">
            <h2 class="section-title text-uppercase text-center mb-1 mb-md-3 pb-xl-2 mb-xl-4">Our Trendy
                <strong>Products</strong>
            </h2>

            <ul class="nav nav-tabs mb-3 text-uppercase justify-content-center" id="collections-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link nav-link_underscore active" id="collections-tab-1-trigger" data-bs-toggle="tab"
                        href="#collections-tab-1" role="tab" aria-controls="collections-tab-1"
                        aria-selected="true">All</a>
                </li>
            </ul>

            <div class="tab-content pt-2" id="collections-tab-content">
                <div class="tab-pane fade show active" id="collections-tab-1" role="tabpanel"
                    aria-labelledby="collections-tab-1-trigger">
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                                <div class="pc__img-wrapper">
                                    <a href="{{ url('/shop-detail') }}">
                                        <img loading="lazy" src="{{ asset('user/assets/images/products/product_1.jpg') }}"
                                            width="330" height="400" alt="Cropped Faux leather Jacket"
                                            class="pc__img">
                                        <img loading="lazy" src="{{ asset('user/assets/images/products/product_1.jpg') }}"
                                            width="330" height="400" alt="Cropped Faux leather Jacket"
                                            class="pc__img pc__img-second">
                                    </a>
                                    <a href="{{ url('/shop-cart') }}"
                                        class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart"
                                        title="Add To Cart">Add To Cart</a>
                                </div>

                                <div class="pc__info position-relative">
                                    <p class="pc__category">Dresses</p>
                                    <h6 class="pc__title"><a href="{{ url('/shop-detail') }}">Cropped Faux Leather Jacket</a>
                                    </h6>
                                    <div class="product-card__price d-flex">
                                        <span class="money price">$29</span>
                                    </div>
                                    <div class="product-card__review d-flex align-items-center">
                                        <div class="reviews-group d-flex">
                                            <svg class="review-star" viewBox="0 0 9 9"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_star" />
                                            </svg>
                                            <svg class="review-star" viewBox="0 0 9 9"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_star" />
                                            </svg>
                                            <svg class="review-star" viewBox="0 0 9 9"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_star" />
                                            </svg>
                                            <svg class="review-star" viewBox="0 0 9 9"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_star" />
                                            </svg>
                                            <svg class="review-star" viewBox="0 0 9 9"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_star" />
                                            </svg>
                                        </div>
                                        <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
                                    </div>

                                    <button
                                        class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                                <div class="pc__img-wrapper">
                                    <a href="{{ url('/shop-detail') }}">
                                        <img loading="lazy" src="{{ asset('user/assets/images/products/product_2.jpg') }}"
                                            width="330" height="400" alt="Cropped Faux leather Jacket"
                                            class="pc__img">
                                        <img loading="lazy" src="{{ asset('user/assets/images/products/product_2.jpg') }}"
                                            width="330" height="400" alt="Cropped Faux leather Jacket"
                                            class="pc__img pc__img-second">
                                    </a>
                                    <a href="{{ url('/shop-cart') }}"
                                        class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart"
                                        title="Add To Cart">Add To Cart</a>
                                </div>

                                <div class="pc__info position-relative">
                                    <p class="pc__category">Dresses</p>
                                    <h6 class="pc__title"><a href="{{ url('/shop-detail') }}">Calvin Shorts</a></h6>
                                    <div class="product-card__price d-flex">
                                        <span class="money price">$62</span>
                                    </div>

                                    <button
                                        class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                                <div class="pc__img-wrapper">
                                    <a href="{{ url('/shop-detail') }}">
                                        <img loading="lazy"
                                            src="{{ asset('user/assets/images/products/product_3.jpg') }}" width="330"
                                            height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                        <img loading="lazy"
                                            src="{{ asset('user/assets/images/products/product_3.jpg') }}" width="330"
                                            height="400" alt="Cropped Faux leather Jacket"
                                            class="pc__img pc__img-second">
                                    </a>
                                    <a href="{{ url('/shop-cart') }}"
                                        class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart"
                                        title="Add To Cart">Add To Cart</a>
                                </div>

                                <div class="pc__info position-relative">
                                    <p class="pc__category">Dresses</p>
                                    <h6 class="pc__title"><a href="{{ url('/shop-detail') }}">Kirby T-Shirt</a></h6>
                                    <div class="product-card__price d-flex">
                                        <span class="money price">$17</span>
                                    </div>

                                    <button
                                        class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                                <div class="pc__img-wrapper">
                                    <a href="{{ url('/shop-detail') }}">
                                        <img loading="lazy"
                                            src="{{ asset('user/assets/images/products/product_4.jpg') }}" width="330"
                                            height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                        <img loading="lazy"
                                            src="{{ asset('user/assets/images/products/product_4.jpg') }}" width="330"
                                            height="400" alt="Cropped Faux leather Jacket"
                                            class="pc__img pc__img-second">
                                    </a>
                                    <a href="{{ url('/shop-cart') }}"
                                        class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart"
                                        title="Add To Cart">Add To Cart</a>
                                </div>

                                <div class="pc__info position-relative">
                                    <p class="pc__category">Dresses</p>
                                    <h6 class="pc__title"><a href="{{ url('/shop-detail') }}">Cableknit Shawl</a></h6>
                                    <div class="product-card__price d-flex">
                                        <span class="money price price-old">$129</span>
                                        <span class="money price price-sale">$99</span>
                                    </div>

                                    <button
                                        class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.tab-pane fade show-->
            </div><!-- /.tab-content pt-2 -->
        </section><!-- /.products-grid -->
    </main>
@endsection
