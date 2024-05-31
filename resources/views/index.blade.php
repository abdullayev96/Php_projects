<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IT HOUSE - kelajak shu yerda!!!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('set/img/logo2.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('set/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('set/css/style.css')}}" rel="stylesheet">
</head>

<body>


      
    <!-- Category Start -->
    <div class="container-fluid py-5" id="#course">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h1>Bizning kurslar</h1>
                <p>Dunyodagi eng kerakli sohalarni o'zida mujassam etgan, yillar davomida shu sohada faoliyat yuritib
                    kelayotgan kuchli mutaxassislarini qamrab olgan IT HOUSE endi sizning xizmatingizda.</p>
            </div>
            <div class="row">
               @foreach($categorys as $category)
               <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{asset('set/img/'. $category->image)}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="{{route('categoryPosts', $category->slug)}}">
                            <h4 class="text-white font-weight-medium">{{$category->name}}</h4>
                            <!-- <span>100 Courses</span> -->
                        </a>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>
    <!-- Category Start -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('set/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('set/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('set/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('set/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('set/js/main.js')}}"></script>
</body>

</html>