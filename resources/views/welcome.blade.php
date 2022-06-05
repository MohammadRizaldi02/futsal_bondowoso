<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gladitor Futsal</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/landingpage.css" rel="stylesheet" />

        {{-- Owljs --}}

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Gladiator Futsal</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="register">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">GLADIATOR FUTSAL</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Pesan Lapangan Futsal disini dan bermain dengan sportif</h2>
                        <a class="btn btn-primary" href="#about">Download Aplikasi</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Gladiator Futsal Bondowoso</h2>
                        <p class="text-white-50">
                            Selamat datang di Sistem Informasi penyewaan Lapangan Futsal
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Galeri --}}
        <section class="galeri-section">
            <div class="container px-4 px-lg-5">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="mb-5">Galeri</h2>
                    </div>
                </div>

                <div class="row">
                    {{-- <div class="owl-carousel"> --}}
                    @foreach ($area as $item)
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <img src="{{ url('/public/image/'. $item->photo)}}" height="200" width="300">
                            <h4 class="py-2">{{$item->name}}</h4>
                            <p>{{\Str::limit($item->description, 100)}}</p>
                            <button class="btn btn-primary">selengkapnya</button>
                        </div>
                    @endforeach
                    {{-- </div> --}}
                    <!-- Set up your HTML -->
                </div>
            </div>
        </section>

        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="text-center">Harga Sewa Lapangan</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Pagi - Sore</h5>
                              <h6 class="card-subtitle mb-2 text-muted">Jam 08.00 WIB - 17.00 WIB</h6>
                              <p class="fw-bold">Rp.80.000,- Per Jam</p>
                              <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Malam</h5>
                              <h6 class="card-subtitle mb-2 text-muted">Jam 18.00 WIB - 23.00 WIB </h6>
                              <p class="fw-bold">Rp.100.000,- Per Jam</p>
                              <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                            </div>
                          </div>
                    </div>
                </div>

            </div>
            <div class="container px-4 px-lg-5 mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="text-center">Schedule Lapangan</h4>
                        <br><br>
                        <input type="date" name="" id="" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="col-lg-12 ">
                        <div class="row mt-4">
                            <div class="col-lg-2">
                                <h5>Lapangan 1</h5>
                            </div>
                            <div class="col-lg-10">
                                @php

                                    $begin = new DateTime("09:00:00");
                                    $end   = new DateTime("24:00:00");

                                    $interval = DateInterval::createFromDateString('60 min');

                                    $times    = new DatePeriod($begin, $interval, $end);

                                    use App\Models\{Transaction,Schedule, Area};

                                    $l1 = Transaction::where('area_id', 1)
                                                        ->whereNotNull('evidence_of_transfer')
                                                        ->value('time_schedule');
                                    foreach ($times as $time) {
                                        @endphp

                                        <span class='badge bg-{{ $l1 == $time->format('H:i:s') ? 'danger' : 'success'}}'>{{$time->format('H:i')}}</span>
                                  @php
                                    }
                                @endphp
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-2">
                                <h5>Lapangan 2</h5>
                            </div>
                            <div class="col-lg-10">
                                @php
                                    $begin = new DateTime("09:00");
                                    $end   = new DateTime("24:00");

                                    $interval = DateInterval::createFromDateString('60 min');

                                    $times    = new DatePeriod($begin, $interval, $end);

                                    foreach ($times as $time) {
                                        echo  "<span class='badge bg-success'>".$time->format('H:i')."</span>", "\n";
                                    }
                                @endphp
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-2">
                                <h5>Lapangan 3</h5>
                            </div>
                            <div class="col-lg-10">
                                @php
                                $begin = new DateTime("09:00");
                                $end   = new DateTime("24:00");

                                $interval = DateInterval::createFromDateString('60 min');

                                $times    = new DatePeriod($begin, $interval, $end);

                                foreach ($times as $time) {
                                    echo  "<span class='badge bg-success'>".$time->format('H:i')."</span>", "\n";
                                }
                            @endphp
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-10">
                                <button type="button" class="btn btn-danger">
                                    {{-- Notifications <span class="badge bg-secondary">4</span> --}}
                                  </button>
                                  <span>Sudah di booking</span>

                            </div>
                            <br>
                            <div class="col-lg-10 mt-2">
                                <button type="button" class="btn btn-success">
                                    {{-- Notifications <span class="badge bg-secondary">4</span> --}}
                                  </button>
                                  <span>Belum di booking</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Gladiator Futsal Bondowoso</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Contact Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Bondowoso</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">gladiatorfutsalbondowoso@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+62 823-3890-6182</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Gladiator Futsal Bondowoso 2022</div></footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </body>
</html>
