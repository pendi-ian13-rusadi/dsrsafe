@extends('layouts/app')
@section('main')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>DSRS ON GPT</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">DSRS ON GPT</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row g-0 justify-content-center">
                        <div class="col-md-11 ">
                            <hr>
                            <div class="card-body" id="isi_chat" style="height: 650px; overflow-y:scroll; display:none">


                            </div>
                            <div class="card-body" id="awal_chat" style="height: 650px; overflow-y:auto;">
                                <div style="height: 430px;">

                                </div>
                                <div class="row g-0 justify-content-center">
                                    <div class="col-md-5">
                                        <div class="card" style="border: 1px solid blue; cursor:pointer" onclick="panggil_chat('WHY IS IT IMPORTANT TO MANAGE DSRS CAREFULLY ?')">
                                            <div class="card-body" style="text-align: center;">
                                                <b>WHY IS IT</b> <br>
                                                IMPORTANT TO MANAGE DSRS CAREFULLY
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-5">
                                        <div class="card" style="border: 1px solid blue; cursor:pointer" onclick="panggil_chat('WHAT MAKES DSRS POTENTIALY DANGEROUS ?')">
                                            <div class="card-body" style="text-align: center;">
                                                <b>WHAT MAKES</b> <br>
                                                DSRS POTENTIALY DANGEROUS
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card" style="border: 1px solid blue; cursor:pointer" onclick="panggil_chat('HOW ARE DSRS COMMONLY USED IN APPLICATIONS LIKE MEDICAL DEVICES OR INDUSTRY ?')">
                                            <div class="card-body" style="text-align: center;">
                                                <b>HOW ARE DSRS COMMONLY USED</b> <br>
                                                IN APPLICATIONS LIKE MEDICAL DEVICES OR INDUSTRY ?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-5">
                                        <div class="card" style="border: 1px solid blue; cursor:pointer" onclick="panggil_chat('WHY IS IT IMPORTANT TO MANAGE DSRS CAREFULLY ?')">
                                            <div class="card-body" style="text-align: center;">
                                                <b> WHY IS IT</b> <br>
                                                IMPORTANT TO MANAGE DSRS CAREFULLY ?
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="card-footer" style="background: none;">
                                <div class="row">
                                    <div class="col-md-10">
                                        <input type="text" name="chat-text" id="chat-text" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <a class="btn btn-outline-primary form-control" onclick="kirim()"><i class="bi bi-chat"></i> Send</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->


<script>
    var globali = 0;

    function panggil_chat($val){
        $("#chat-text").val($val);
        kirim();

    }

    function kirim() {
        $('#isi_chat').show();
        $('#awal_chat').hide();
        var text = $("#chat-text").val();
        var ids = "idini_" + globali;
        var newChatContent = '<div class="chat-content-rightside">' +
            '<div class="d-flex ms-auto">' +
            '<div class="flex-grow-1 me-2">' +

            '<p class="chat-right-msg text-end" style="color:blue" " >' + text + '</p>' +
            '</div>' +
            '</div>' +
            '</div>';


        $('#isi_chat').append(newChatContent);

        // Mengosongkan nilai teks input setelah pengiriman berhasil
        $('#chat-text').val('');

        // Menggulirkan halaman ke bawah agar elemen baru terlihat
        $('#isi_chat').scrollTop($('#isi_chat')[0].scrollHeight);

        var userMessage = $('#chat-text').val();

        $.ajax({
            type: 'POST',
            url: "{{ route('gpt_message') }}",
            data: {
                user_message: text,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                var hasil = JSON.parse(data)

                var newChatContent1 = '<div class="chat-content-rightside">' +
                    '<div class="d-flex">' +
                    '<div class="flex-grow-1 me-2"><p style="color:green" id="' + ids + '"></p></div>' +
                    '</div>' +
                    '</div>';
                $('#isi_chat').append(newChatContent1);

                // for (var i = 0; i < hasil.content.length; i++) {

                //     $('#isi_chat').append(hasil.content[i]);
                // }

                var delay = 30; // 1000 milliseconds = 1 second
                var ids2 = "#" + ids;
                // Iterate through the content array
                for (var i = 0; i < hasil.content.length; i++) {
                    // Use setTimeout to add delay
                    setTimeout(function(index) {
                        $(ids2).append(hasil.content[index]);

                        // Scroll to the bottom after each content addition (adjust as needed)
                        $('#isi_chat').scrollTop($('#isi_chat')[0].scrollHeight);
                    }, delay * i, i); // Multiply delay by index to stagger the effects
                }


                var newChatContent2 =

                    $('#isi_chat').append(newChatContent2);


            }
        });

        globali = globali + 1;
    }
</script>
@endsection
