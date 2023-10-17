<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Maze Bank Online Portal</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

                <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('layouts.navbar')


            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Maze Bank: Your Gateway to Digital Finance</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Your trusted digital banking companion, blending security and convenience for a brighter financial future.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                     <a class="btn btn-primary btn-lg px-4 me-sm-3" href="{{route('p-account-store')}}">Apply Now</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="{{route('about')}}">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="/assets/maze-bank.png" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">No more stuck in a queue.</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Deposit/Withdraw</h2>
                                    <p class="mb-0">Maze Bank simplifies deposits and withdrawals, making managing your money effortless and secure.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Send/Receive</h2>
                                    <p class="mb-0">With SecureStream Bank, sending and receiving money is a breeze, all while maintaining top-notch security and convenience.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Availability</h2>
                                    <p class="mb-0">SecureStream Bank: 24/7 Accessibility for Your Convenience.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Control</h2>
                                    <p class="mb-0">Your bank, control is yours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"I envision a future where Maze Bank not only simplifies finances but also enriches lives, providing a bridge to a more secure and prosperous tomorrow."</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" width="40px" src="assets/man.png" alt="..." />
                                    <div class="fw-bold">
                                        Sampad Singha
                                        <span class="fw-bold text-primary mx-1">/</span>
                                        CEO, Maze Bank
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Our Schemes</h2>
                                <p class="lead fw-normal text-muted mb-5">Unlock your financial potential with our diverse range of schemes and loans, each crafted to suit your unique financial goals and dreams.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="assets/student.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Student</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Student Account</h5></a>
                                    <p class="card-text mb-0">Our student schemes are designed to empower the next generation of leaders and learners. With competitive rates and flexible terms, we aim to make higher education more accessible and affordable.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="assets/business.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Business</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Business Schemes</h5></a>
                                    <p class="card-text mb-0">Explore our bank's exclusive business scheme with a principal of ৳100,000 and an attractive interest rate of 7%. Secure your capital while growing your business.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="assets/microfinance.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Loan</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Microfinance</h5></a>
                                    <p class="card-text mb-0">Our Microfinance Loan Scheme is your gateway to success, with a loan amount of $50,000, a convenient 5-year repayment period, and premium payments every 6 months. Empower your business with flexible financing tailored to your unique needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        </div>
    @include('layouts.footer')
    </body>
</html>
