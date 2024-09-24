@extends('layouts/app')
@section("main")

<main id="main" class="main">
    <div class="pagetitle">
        <h1>DSRS DATABASE</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">DSRS DATABASE</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">DSRS DATA</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Serial Number</th>
                                    <th>Jenis Radionuklir</th>
                                    <th>Aktivitas Awal</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Tanggal Produksi</th>
                                    <th>Aktivitas Saat Ini</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Tanggal Saat Ini</th>
                                    <th>Waktu Pauh Sumber </th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Perkiraan Waktu Paruh Habis</th>
                                    <th>Layak Reuse</th>
                                    <th>Status Saat Ini</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1 @endphp
                                @foreach ($transInputs as $transInput)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $transInput->serial_number }}</td>
                                    <td>{{ $transInput->jenis_radio }}</td>
                                    <td>{{ $transInput->aktifitas_awal }}</td>
                                    <td>{{ date('d-m-Y', strtotime($transInput->tanggal_produksi)) }}</td>
                                    <td>{{ $transInput->aktivitas_saat_ini }}</td>
                                    <td>{{ date('d-m-Y') }}</td>
                                    <td>{{ $transInput->waktu_paruh_sumber }}</td>
                                    <td>{{ date('d-m-Y', strtotime($transInput->perkiraan_waktu_habis)) }}</td>
                                    <td>{{ $transInput->layak_reuse }}</td>
                                    <td>{{ $transInput->status_saat_ini }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
