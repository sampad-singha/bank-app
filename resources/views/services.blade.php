<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        @include('links.link')
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('layouts.navbar')
            <h1 class="page-head">Services</h1>
            <!-- Services Section-->
            <section class="bg-light py-5 services-section">
                <div class="container text-center">
                    <div class="row services-row">
                        <div class="col services-card">
                            <a class="services-card-link" href="">
                                <img class="services-icon" src="assets/deposit.png" alt="">
                                <h3 class="services-tag">Deposit</h3>
                            </a>
                        </div>
                        <div class="col services-card">
                            <a class="services-card-link" href="">
                                <img class="services-icon" src="assets/transfer.png" alt="">
                                <h3 class="services-tag">Money Transfer</h3>
                            </a>
                        </div>
                        <div class="col services-card">
                            <a class="services-card-link" href="">
                                <img class="services-icon" src="assets/withdraw.png" alt="">
                                <h3 class="services-tag">Withdraw</h3>
                            </a>
                        </div>
                        <div class="col services-card">
                            <a class="services-card-link" href="">
                                <img class="services-icon" src="assets/currency-exchange.png" alt="">
                                <h3 class="services-tag">Currency Exchange</h3>
                            </a>
                        </div>
                    </div>
                    <div class="row services-row">
                        <div class="col services-card">
                            <a class="services-card-link" href="">
                                <img class="services-icon" src="assets/wallet.png" alt="">
                                <h3 class="services-tag">Balance</h3>
                            </a>
                        </div>
                        <div class="col services-card">
                            <a class="services-card-link" href="">
                                <img class="services-icon" src="assets/clock.png" alt="">
                                <h3 class="services-tag">Transaction History</h3>
                            </a>
                        </div>
                        <div class="col services-card">
                            <a class="services-card-link" href="">
                                <img class="services-icon" src="assets/loan.png" alt="">
                                <h3 class="services-tag">Loan</h3>
                            </a>
                        </div>
                        <div class="col services-card">
                            <a class="services-card-link" href="">
                                <img class="services-icon" src="assets/microfinance.png" alt="">
                                <h3 class="services-tag">Microfinance</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        @include('layouts.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        @include('links.script')
    </body>
</html>
