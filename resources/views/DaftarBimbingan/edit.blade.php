@extends('layouts.layout')

@section('head-script')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
    .modal-confirm {
        color: #636363;
        width: 400px;
    }

    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }

    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }

    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
    }

    .modal-confirm .modal-body {
        color: #999;
    }

    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
    }

    .modal-confirm .modal-footer a {
        color: #999;
    }

    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid #60d84b;
    }

    .modal-confirm .icon-box i {
        color: #60d84b;
        font-size: 46px;
        display: inline-block;
        margin-top: 13px;
    }

    .modal-confirm .btn,
    .modal-confirm .btn:active {
        color: #fff;
        border-radius: 4px;
        background: #60c7c1;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        min-width: 120px;
        border: none;
        min-height: 40px;
        border-radius: 3px;
        margin: 0 5px;
    }

    .modal-confirm .btn-secondary {
        background: #c1c1c1;
    }

    .modal-confirm .btn-secondary:hover,
    .modal-confirm .btn-secondary:focus {
        background: #a8a8a8;
    }

    .modal-confirm .btn-danger {
        background: #60d84b;
    }

    .modal-confirm .btn-danger:hover,
    .modal-confirm .btn-danger:focus {
        background: #ee3535;
    }
</style>
@endsection

@section('content')

<div class="row">
    <div class="col-sm-12 col-md-12">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item"><a href="/dosen/jadwalujian">Jadwal Ujian</a></li>
                <li class="breadcrumb-item"><a href="#">Edit Jadwal Ujian</a></li>
            </ol>
        </nav>
    </div>
</div>
@if ($message = Session::get('fail'))
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    </div>
</div>
@endif
<div class="row" style="margin-bottom: 30px;">
    <div class="col-sm-12 col-md-12">
        <button class="btn btn-info" onclick="enableInput();">Edit Data</button>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12">
        <form action="/dosen/daftarbimbingan/edit/{{$daftarbimbingan->id}}" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id">
            @csrf
            <div class="form-group">
                <label for="daftarbimbingan">Jadwal Ujian :</label>
                <input type="date" class="form-control" id="NIM" placeholder="Masukkan NIM .." name="NIM" required value="{{$daftarbimbingan->NIM}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="ruanganUjian">Ruangan :</label>
                <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama.." name="Nama" required value="{{$daftarbimbingan->Nama}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="judul">Judul :</label>
                <input type="text" class="form-control" id="judul" placeholder="Masukkan judul.." name="judul" required value="{{$daftarbimbingan->judul}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="lembaga">Lembaga :</label>
                <input type="text" class="form-control" id="lembaga" placeholder="Masukkan lembaga.." name="lembaga" required value="{{$daftarbimbingan->lembaga}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="set pengajuan ujian kp">Set Pengajuan Ujian KP :</label>
                <input type="text" class="form-control" id="set pengajuan ujian kp" placeholder="Masukkan set pengajuan ujian kp.." name="set pengajuan ujian kp" required value="{{$daftarbimbingan->set pengajuan ujian kp}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 " style="margin-top: 30px;">
                <a href="#myModal" id="btnUpdate" data-toggle="modal" class="btn btn-success" style="display: none;">Update </a>
                <a href="/dosen/jadwalujian" class="btn btn-danger">Cancel</a>
            </div>
            <!-- Modal HTML -->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                        <div class="modal-header flex-column">
                            <div class="icon-box">
                                <i class="material-icons">done</i>
                            </div>
                            <h4 class="modal-title w-100">Are you sure?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Do you really want to update data?</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-success">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('footer-script')
<script type="text/javascript">
    function enableInput() {
        document.getElementById("daftarbimbingan").disabled = false;
        document.getElementById("daftarbimbingan").disabled = false;
        document.getElementById("daftarbimbingan").disabled = false;
        $("#btnUpdate").css("display", "");
    }

    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                        $('#myModal').modal('hide');
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        form.classList.add('was-validated');
                        return false;
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

</script>
@endsection