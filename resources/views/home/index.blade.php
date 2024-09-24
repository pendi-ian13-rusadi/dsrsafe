@extends('layouts/app')
@section("main")
<style>
    #reportsChart {
        width: 100%;
        height: 350px; /* Sesuaikan dengan tinggi yang diinginkan */
    }
</style>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">CURRENT DSRS STOCK</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/d1.png') }}" alt="" style="width: 100%; ">
                            </div>
                            <div class="ps-3">
                                <h6>{{ $currentCount }}</h6>
                                <span class="text-success small pt-1 fw-bold">0%</span> <span
                                    class="text-muted small pt-2 ps-1">INCREASE</span>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">REUSABLE DSRS</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/img/d2.png') }}" alt="" style="width: 100%; ">
                            </div>
                            <div class="ps-3">
                                <h6>{{ $reuseCount }}</h6>
                                <span class="text-success small pt-1 fw-bold">0%</span> <span
                                    class="text-muted small pt-2 ps-1">INCREASE</span>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">DSRS REMAINING STOCK</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/img/d3.png') }}" alt="" style="width: 100%; ">
                            </div>
                            <div class="ps-3">
                                <h6>{{ $remainCount }}</h6>
                                <span class="text-danger small pt-1 fw-bold">0%</span> <span
                                    class="text-muted small pt-2 ps-1">DECREASE</span>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->

            <!-- Reports -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">STORAGE WAREHOUSE STOCK CHART</h4>

                        <!-- Line Chart -->
                        <div id="reportsChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#reportsChart"), {
                                    series: [{
                                        name: 'Current Stock',
                                        data: {!! $r_current !!},
                                    }, {
                                        name: 'REUSEABLE DSRS',
                                        data: {!! $r_reus !!}
                                    }, {
                                        name: 'DSRS REMAINING STOCK',
                                        data: {!! $r_remain !!}
                                    }],
                                    chart: {
                                        height: 350,
                                        type: 'area',
                                        toolbar: {
                                            show: false
                                        },
                                    },
                                    markers: {
                                        size: 4
                                    },
                                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                    fill: {
                                        type: "gradient",
                                        gradient: {
                                            shadeIntensity: 1,
                                            opacityFrom: 0.3,
                                            opacityTo: 0.4,
                                            stops: [0, 90, 100]
                                        }
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        curve: 'smooth',
                                        width: 2
                                    },
                                    xaxis: {
                                        type: 'text',
                                        categories: ["2021", "2022", "2023", "2024"
                                        ]
                                    },
                                    tooltip: {
                                        x: {
                                            format: 'text'
                                        },
                                    }
                                }).render();
                            });
                        </script>
                        <!-- End Line Chart -->

                    </div>

                </div>
            </div><!-- End Reports -->
        </div>
    </section>

</main><!-- End #main -->
@endsection
