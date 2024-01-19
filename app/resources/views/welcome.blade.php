@extends('layouts.masterLayout')

@section('content')
    <section class="application__intro-section intro-section" id="home">
        <div class="intro-section__container container">
            <div class="intro-section__inner">
                <h1 class="intro-section__title">Refresh your Room and Make Awesome Interior Design With Us!</h1>
                <p class="intro-section__descr">We are Interior Design Team Based in Wakanda, 58th street East Waka. We provide Interior Design services since 1899 and have many client from various country.</p>
                <button class="intro-section__btn">Get Started</button>
                <div class="intro-section__benefits">
                    <div class="intro-section__benefits-card benefit">
                        <h2 class="benefit__number">52+</h2>
                        <p class="benefit__descr">Satisfied Clients<br>From Various Country.</p>
                    </div>
                    <div class="intro-section__benefits-card benefit">
                        <h2 class="benefit__number">15+</h2>
                        <p class="benefit__descr">Years of Experience in<br>Interior Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="application__work-section work-section" id="work">
        <div class="work-section__container container">
            <div class="work-section__inner">
                <h2 class="work-section__title">How to work</h2>
                <div class="work-section__subtitle">
                    <span class="work-section__subtitle-span"></span>
                    <p class="work-section__subtitle-text">OUR WORKFLOW</p>
                </div>
                <div class="work-section__swipper">
                    <div class="work-section__swipper-inner swiper-wrapper">
                        <article class="work-section__card article-card swiper-slide">
                            <img src="assets/img/107d994f8d35f766322a.webp" class="article-card__img">
                            <div class="article-card__title">
                                <h3 class="article-card__title-text">Planning</h3>
                                <span class="article-card__title-span">01</span>
                            </div>
                            <p class="article-card__descr">One key part of the strategic planning is to understand your goals and budget.</p>
                        </article>
                        <article class="work-section__card article-card swiper-slide">
                            <img src="assets/img/554f6050f83a907fd23b.webp" class="article-card__img">
                            <div class="article-card__title">
                                <h3 class="article-card__title-text">Concept</h3>
                                <span class="article-card__title-span">02</span>
                            </div>
                            <p class="article-card__descr">We create sketches, we use the paper set of floor plans, and we start to the space planning.</p>
                        </article>
                        <article class="work-section__card article-card swiper-slide">
                            <img src="assets/img/0743848bf4546d244d5a.webp" class="article-card__img">
                            <div class="article-card__title">
                                <h3 class="article-card__title-text">Design</h3>
                                <span class="article-card__title-span">03</span>
                            </div>
                            <p class="article-card__descr">This is the phase in which we proceed to the details of the design.</p>
                        </article>
                        <article class="work-section__card article-card swiper-slide">
                            <img src="assets/img/b70ae9b1905bcd5903ca.webp" class="article-card__img">
                            <div class="article-card__title">
                                <h3 class="article-card__title-text">Installation</h3>
                                <span class="article-card__title-span">04</span>
                            </div>
                            <p class="article-card__descr">After we`ve done about the details of the design, we start to work with our labor.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="application__reviews-section review-sections" id="review">
        <div class="review-section__container container">
            <div class="review-section__inner">
                <h2 class="review-section__title">Reviews from Our Clients</h2>
                <div class="review-section__subtitle">
                    <span class="review-section__subtitle-span"></span>
                    <p class="review-section__subtitle-text">OUR CLIENT SAYS</p>
                </div>
                <div class="review-section__swipper">
                    <div class="review-section__swipper-inner slider-wrapper">
                        <article class="review-section__profile-card profile swiper-slide">
                            <img src="assets/img/777cfe5dcdd30766c043.webp" class="profile__img">
                            <div class="profile__content">
                                <h3 class="profile__name">Mr. Leonardo</h3>
                                <h5 class="profile__profession">Remote Programmer</h5>
                                <p class="profile__descr">“Modern desk style featured with tropical stuff with plant and the lighting for a warm, and comforting take on interior design minimalist. I love this design!. Thanks Interiorqu.” </p>
                            </div>
                        </article>
                        <!-- <article class="review-section__profile-card profile swiper-slide">
                            <div class="profile__img"></div>
                            <div class="profile__content">
                                <h3 class="profile__name">Mr. Leonardo</h3>
                                <h5 class="profile__profession">Remote Programmer</h5>
                                <p class="profile__descr">“Modern desk style featured with tropical stuff with plant and the lighting for a warm, and comforting take on interior design minimalist. I love this design!. Thanks Interiorqu.” </p>
                            </div>
                        </article> -->
                    </div>
                    <div class="review-section__navBtn">
                        <button class="review-section__button-prev review-btn"><i class="bx bx-left-arrow-alt"></i></button>
                        <button class="review-section__button-next review-btn"><i class="bx bx-right-arrow-alt"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="application__projects-section projects-section" id="project">
        <div class="project-section__container container">
            <div class="project-section__inner">
                <h2 class="project-section__title">The Latest Project</h2>
                <h3 class="project-section__subtitle">OUR MINI GALLERY</h3>
                <div class="project-section__project-card project-card">
                    <div class="project-card__content">
                        <h3 class="project-card__title">The Tropical<br>Workspace Style</h3>
                        <p class="project-card__descr">Tropical style is all about comfort, ease and utility and is eclectic by definition. The style is characterized by warm and colors drawn mostly from lighting.</p>
                        <a href="#" class="project-card__btn">Read more</a>
                    </div>
                    <img src="assets/img/b8961cbcec24f8c849fa.webp" class="project-card__img">
                </div>
                <div class="project-section__project-card project-card">
                    <img src="assets/img/61d3456eb5467ada018b.webp" class="project-card__img">
                    <div class="project-card__content">
                        <h3 class="project-card__title">The Modern Wood Classic Style</h3>
                        <p class="project-card__descr">TModern wood style features dynamic layers of the rugged and the organic for a warm, and comforting take on interior design classics.</p>
                        <a href="#" class="project-card__btn">Read more</a>
                    </div>
                </div>
                <div class="project-section__project-card project-card">
                    <div class="project-card__content">
                        <h3 class="project-card__title">The Minimalist Bedroom Style</h3>
                        <p class="project-card__descr">Minimalist style is all about comfort, ease and utility and is eclectic by definition. The style is characterized by calm and colors drawn with monochrome.</p>
                        <a href="#" class="project-card__btn">Read more</a>
                    </div>
                    <img src="assets/img/6738df917809a1e1dbaa.webp" class="project-card__img">
                </div>
            </div>
        </div>
    </section>
@endsection
