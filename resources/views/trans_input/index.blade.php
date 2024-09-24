@extends('layouts/app')

@section("main")
<main id="main" class="main">
    <div class="pagetitle">
        <h1>INPUT NEW FORM</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">INPUT NEW FORM</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">DSRS DATA INPUT</h5>
                        @if (session('success'))
                            <hr>
                            <div class="alert alert-success mt-3" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <hr>
                        <form id="kt_modal_add_user_form" class="form" action="{{ route('trans_store') }}" method="POST">
                            @csrf
                            <div class="d-flex flex-column scroll-y px-5 px-lg-10">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Serial Number</label>
                                    <input type="text" name="serial_number" id="serial_number"
                                        class="form-control  mb-3 mb-lg-0" required />
                                    <input type="hidden" name="id" id="id"
                                        class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Plant"
                                        value="0" />
                                </div>
                                <br>
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Jenis Radionuklir</label>
                                    <input type="text" name="jenis_radio" id="jenis_radio"
                                        class="form-control  mb-3 mb-lg-0" required />
                                </div>
                                <br>
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Aktivitas Awal</label>
                                    <input type="text" name="aktivitas_awal" id="aktivitas_awal"
                                        class="form-control  mb-3 mb-lg-0" required />
                                </div>
                                <br>
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Tanggal Produksi</label>
                                    <input type="date" name="tanggal_produksi" id="tanggal_produksi"
                                        class="form-control  mb-3 mb-lg-0" required />
                                </div>
                                <br>
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Aktivitas Saat Ini</label>
                                    <input type="text" name="aktivitas_saat_ini" id="aktivitas_saat_ini"
                                        class="form-control  mb-3 mb-lg-0" required />
                                </div>
                                <br>
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Waktu Paruh Sumber (Tahun)</label>
                                    <input type="text" name="waktu_paruh_sumber" id="waktu_paruh_sumber"
                                        class="form-control  mb-3 mb-lg-0" required />
                                </div>
                                <br>
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Perkiraan Waktu Paruh Habis</label>
                                    <input type="date" name="perkiraan_waktu_habis" id="perkiraan_waktu_habis"
                                        class="form-control  mb-3 mb-lg-0" required />
                                </div>
                                <br>
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Layak Reuse</label>
                                    <select name="layak_reuse" id="layak_reuse" class="form-select">
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                </div>
                                <br>
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Status Saat Ini</label>
                                    <select name="status_saat_ini" id="status_saat_ini" class="form-select">
                                        <option value="Penyimpanan">Penyimpanan</option>
                                        <option value="Tidak di Penyimpanan">Tidak di Penyimpanan</option>
                                    </select>
                                </div>
                                <br>
                                <div class="text-center pt-10">

                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit"
                                        id="kt_button_1">
                                        <span class="indicator-label">Submit</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
