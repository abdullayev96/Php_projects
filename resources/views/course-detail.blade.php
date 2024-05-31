<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>IT HOUSE - kelajak shu yerda!!!</title>
  <!-- Favicon -->
  <link href="{{asset('set/img/logo2.png')}}" rel="icon">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('set/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css ">
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{asset('set/css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('set/css/templatemo-scholar.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@21.2.4/build/css/intlTelInput.css">
  <link rel="stylesheet" href="{{asset('set/css/owl.css')}}">
  <link rel="stylesheet" href="{{asset('set/css/animate.css')}}">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--



-->
</head>

<body>

  <div class="section about-us ">
    <div class="about-top">
      <h1 class="fs-4 w-75 m-auto">Sifatli ta’lim va axborot texnologiyalarini olishingiz mumkin bo‘lgan ta’lim markazi.
        </h class="">

    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
           @foreach($category->questions as $question)
           <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  {{$question->question}}
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  {!! $question->answer !!}
                </div>
              </div>
            </div>

           @endforeach

          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h2>Web dasturchi nima ish qiladi?</h2>
            <p>
              Veb-dasturchilar veb-saytlarni yaratadilar, ularning ishonchli va samarali ishlashini ta’minlaydilar.
              Ularning asosiy maqsadi veb-saytni vizual tarzda jozibali va oson harakatlanishini ta’minlash bo’lsa-da,
              ko’plab veb-dasturchilar veb-saytning ishlashi va imkoniyatlari uchun ham javobgardir.</p>
            <div class="main-button">
              <a href="{{route('login.page')}}">Ro'yxatdan o'tish</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="section events" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
             @foreach($category->courses as $course)
             <div class="col-lg-3">
                <div class="image">
                  <img src="{{asset('set/img/'.$course->course_image)}}" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Web dasturlash</span>
                    <h4>{{$course->course_name}}</h4>
                  </li>
                  <li>
                    <i class="fa-solid fa-clock"></i>
                    <h6>Davomiylik:</h6>
                    <span>{{$course->course_time}}</span>
                  </li>
                  <li>
                    <i class="fa-solid fa-laptop-code"></i>
                    <h6>Amaliyot:</h6>
                    <span>{{$course->course_practice}}</span>
                  </li>
                  <li>
                    <i class="fa-solid fa-face-smile"></i>
                    <h6>Bonus:</h6>
                    <span>{{$course->course_bonus}}</span>
                  </li>
                </ul>
                <a href="#contact"><i class="fa fa-angle-right"></i></a>
              </div>
             @endforeach
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <section class="timelines section" id="services">
    <div class="timeline">
      <div class="timeline_info">
        <h2>Kurs modullari</h2>
      </div>

      <div class="container">
        <div class="row timeline_bar">
        @foreach($category->moduls as $modul)
        <div class="col-md-6 coleft">
            <div class="timeline_card">
              <div class="card_header">
                <div class="card_number">
                  <p>{{$modul->number}}</p>
                </div>
                <div class="card_title">
                  <h6>{{$modul->title}}</h6>
                  <h2>{{$modul->description}}</h2>
                </div>
              </div>
              <div class="card_body">
                <p>{!! $modul->body !!}</p>
                <img class="img_fluid" src="{{asset('set/img/'. $modul->image)}}" alt="">
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>



  <section class="section portfolio" id="courses">
    <div class="portfolio-top">
      <h2 class="w-75 m-auto fs-3">Kurs tugagandan so'ng quyidagiga o'xshash loyihalar bajarolasiz</h2>
    </div>
    <div class="portfolio-container">

      <div class="slider">
        @foreach($category->steps as $step)
        <div class="slides" style="background-image: url({{asset('set/img/'. $step->image)}});">
          <div class="content">
            <h2>{{$step->title}}</h2>
            <p>{!! $step->content !!}</p>
          </div>
        </div>
        @endforeach
      </div>
      <div class="portfolio-buttons">
        <span class="prev">
          <i class="fa-solid fa-angle-left"></i>
        </span>
        <span class="next">
          <i class="fa-solid fa-angle-right"></i>
        </span>
      </div>
    </div>
  </section>








  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h2>Biz bilan bog'laning</h2>
            <div class="location d-flex">
              <div class="map-icon">
                <i class="fa-solid fa-location-dot" style="font-size: 25px;color: red; margin-top: 5px;"></i>
              </div>
              <div class="map-text ms-2">
                <h3 style="color: rgb(238, 198, 149);">Manzil:</h3>
                <p class="mt-0">Toshkent shaxar, Uchtepa tumani Lutfiy ko'chasi 21A <br>Toshkent shaxar, Yangihayot
                  tumani 8-xudud 332-maktab yonida</p>
              </div>
            </div>
            <div class="location d-flex mt-3 mb-3">
              <div class="map-icon">
                <i class="fa-brands fa-telegram" style="font-size: 25px;color: rgb(0, 140, 255); margin-top: 5px;"></i>
              </div>
              <div class="map-text ms-2">
                <h3 style="color: rgb(238, 198, 149);">Telegram:</h3>
                <p class="mt-0">@ITHouse_admin</p>
              </div>
            </div>
            <div class="location d-flex">
              <div class="map-icon">
                <i class="fa-solid fa-phone-volume" style="font-size: 25px;color: rgb(2, 221, 2); margin-top: 5px;"></i>
              </div>
              <div class="map-text ms-2">
                <h3 style="color: rgb(238, 198, 149);">Bog'lanish uchun:</h3>
                <p class="mt-0">+998 (90) 035 27 27<br>

                  +998 (95) 048 27 27</p>
              </div>
            </div>
            <div class="special-offer">
              <span class="offer"><em>50%</em></span>
              <h4>Ingliz tili uchun <em style="color: red; font-weight: bold; font-size: 30px;">50%</em> chegirma</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="{{ route('admin.contact.store')}}" method="POST">
              @csrf
              <div class="row">
              @if(Session::has('created'))
                  <div class="modal" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>{{ Session::get('created') }}</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
              @endif
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="firstname" class="@error('firstname') is-invalid @enderror" placeholder="Ismingiz..." required>
                    @error("firstname") <span class="invalid-feedback">{{$message}}</span> @enderror
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="lastname" class="@error('lastname') is-invalid @enderror" placeholder="Familiyangiz..." required="">
                    @error("lastname") <span class="invalid-feedback">{{$message}}</span> @enderror
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="phone" class="@error('phone') is-invalid @enderror"  placeholder="Telefon nomeringiz..." required="">
                    @error("phone") <span class="invalid-feedback">{{$message}}</span> @enderror
                  </fieldset>
                </div>
                <div class="col-lg-12 mb-4">
                  <fieldset>
                    <select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror"
                      style="border-radius: 25px; background-color: rgb(35, 41, 73); color: rgb(238, 198, 149); height: 50px;">
                        <option value="">Kursni tanlang</option>
                          @foreach($categorys as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                    </select>
                  </fieldset>
                  @error("category_id") <span class="invalid-feedback">{{$message}}</span>  @enderror
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Ro'yxatdan o'tish</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="agency-footer">
    <footer>
      <div class="container">

        <div class="footer-text text-center">
          <h3>Bizning ijtimoiy tarmoqlar</h3>
        </div>
        <div class="footer-icons">
          <div class="footer-icon">
            <a href="https://t.me/ithouse_edu">
              <img src="{{asset('set/img/network/icons8-telegram-48.png')}}" alt="">
            </a>
          </div>
          <div class="footer-icon">
            <a href="https://www.facebook.com/ithousedu.uz">
              <img src="{{asset('set/img/network/icons8-facebook-48.png')}}" alt="">
            </a>
          </div>
          <div class="footer-icon">
            <a href="https://www.instagram.com/ithouse_edu/">
              <img src="{{asset('set/img/network/icons8-instagram-48.png')}}" alt="">
            </a>
          </div>
          <div class="footer-icon">
            <a href="https://www.youtube.com/@ithouse_edu">
              <img src="{{asset('set/img/network/icons8-youtube-48.png')}}" alt="">
            </a>
          </div>
        </div>

      </div>
    </footer>
  </div>






  <!-- Scripts -->

  <script src="{{asset('set/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('set/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('set/js/isotope.min.js')}}"></script>
  <script src="{{asset('set/js/owl-carousel.js')}}"></script>
  <script src="{{asset('set/js/counter.js')}}"></script>
  <script src="{{asset('set/js/custom.js')}}"></script>
  <script src="{{asset('set/js/style.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@21.2.4/build/js/intlTelInput.min.js"></script>
  <script>
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@21.2.4/build/js/utils.js",
    });
  </script>

</body>

</html>