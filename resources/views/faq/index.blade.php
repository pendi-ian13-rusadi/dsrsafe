@extends('layouts/app')
@section("main")
<style>
    #reportsChart {
        width: 100%;
        height: 350px;
        /* Sesuaikan dengan tinggi yang diinginkan */
    }
</style>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>FAQ</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">FAQ</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-6">

                <div class="card basic">
                    <div class="card-body">
                        <h5 class="card-title">Basic Questions</h5>

                        <div>
                            <h6>1. What is Disused Sealed Radioactive Sources (DSRS)?</h6>
                            <p>DSRS are radioactive sources that are no longer in use and have been encapsulated with
                                radiation-tight shielding to prevent unintended radiation exposure.</p>
                        </div>

                        <div class="pt-2">
                            <h6>2. Why is the management of DSRS so important? </h6>
                            <p>DSRS management is crucial because DSRS can emit harmful radiation, which can pose risks
                                to human health and the environment if not managed properly.</p>
                        </div>

                        <div class="pt-2">
                            <h6>3. What are the main risks associated with improperly managed DSRS?</h6>
                            <p>The main risks include radiation exposure, potential radiation-related crimes,
                                environmental impacts, and violations of nuclear regulations.</p>
                        </div>

                    </div>
                </div>



            </div>

            <div class="col-lg-6">

                <div class="card basic">
                    <div class="card-body">
                        <h5 class="card-title">Specific Question</h5>

                        <div class="pt-2">
                            <h6>1. How do I safely identify DSRS that are no longer in use?</h6>
                            <p>Identifying DSRS should be done by individuals or organizations experienced in handling
                                radioactive materials. This involves inspection, testing, and the use of radiation
                                detection equipment.</p>
                        </div>

                        <div class="pt-2">
                            <h6>2. What should I do if I come across unused or abandoned DSRS?</h6>
                            <p>Do not touch the DSRS. Immediately report the discovery to nuclear authorities
                                or relevant agencies and follow their guidelines.</p>
                        </div>

                        <div class="pt-2">
                            <h6>3. How can I check the eligibility status of DSRS for reuse?</h6>
                            <p> The eligibility status of DSRS for reuse should be assessed by a licensed nuclear
                                expert. This involves examining the integrity of the shielding, radiation levels, and
                                other factors.</p>
                        </div>

                        <div class="pt-2">
                            <h6>4. Do unused DSRS always need to be disposed of?</h6>
                            <p>Not necessarily. DSRS that are still in good condition can often be remotely stored or
                                relocated to a safe location for potential reuse. This decision depends on a feasibility
                                assessment.</p>
                        </div>

                        <div class="pt-2">
                            <h6>5. What should be done to manage DSRS that have reached their half-life?</h6>
                            <p> DSRS that have reached their half-life should be managed more carefully and often need
                                to be disposed of at a radioactive waste processing facility.</p>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection