@extends('landing.layouts.app')
@section('content')
<section id="tracking" class="tracking">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <br>
            <h2>Tracking Surat Anda Disini</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi sunt magnam nostrum reiciendis
                distinctio ad illo assumenda maxime, quam minima placeat accusamus voluptatum, dolorem vero voluptate
                asperiores cumque. Doloremque, nam!</p>
        </div>
        <div class="row mb-3">
        <div class="col-5">
            <!-- <form action="" method="GET"> -->
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <div class="input-group mb-3">
                        <input type="text" maxlength="16" class="form-control" name="nik" id="nik"
                            onclick="validateNIK()" placeholder="Masukan NIK"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-primary" type="" id="tracking">Tracking</button>
                    </div>
                    <span id="error-label" style="color: red;"></span>
                </div>
            <!-- </form> -->
            <div id="listTracking">

            </div>
        </div>
    </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        $("#tracking").click(function(){
            var nik = $('#nik').val();
            var data = {
                nik: nik
            };

            route = "{{route('tracking')}}";

            $.ajax({
                url: route,
                type: "POST",
                data: { datanya: JSON.stringify(data) },
                dataType: "json",
                beforeSend: function () {
                    
                },
                success: function(data) {
                    response = JSON.parse(JSON.stringify(data));
                    console.log(response);

                    var html = "";
                    if (data.length) {
                        $.each(data, function(key, value){
                            html += '<tr>';
                            html += '<td>value<td>';
                            html += '<td>Nama<td>';
                            html += '<td>Nama<td>';
                            html += '<td>Nama<td>';
                            html += '<tr>';
                            $('#listTracking').html(html);
                        })
                    }
                    
                        
                    
                }
            })
        })
    });
    function validateNIK() {
            var nikInput = document.getElementById("nik").value;
            var errorLabel = document.getElementById("error-label");

            if (nikInput.length !== 16) {
                errorLabel.textContent = "NIK harus terdiri dari 16 karakter!";
            } else {
                errorLabel.textContent = "";
            }
        }
</script>


@endsection
