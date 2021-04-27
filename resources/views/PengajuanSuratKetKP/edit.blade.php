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
        <form action="/mahasiswa/pengajuansuratketkp/edit/{{$pengajuansuratketkp->id}}" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id">
            @csrf
            <div class="form-group">
                <label for="semester">Semester :</label>
                <input type="text" class="form-control" id="ruanganUjian" placeholder="Masukkan semester.." name="semester" required value="{{$pengajuansuratketkp->semester}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun :</label>
                <input type="text" class="form-control" id="tahun" placeholder="Masukkan tahun.." name="tahun" required value="{{$pengajuansuratketkp->tahun}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="NIM">NIM :</label>
                <input type="text" class="form-control" id="NIM" placeholder="Masukkan NIM.." name="NIM" required value="{{$pengajuansuratketkp->NIM}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="lembaga">Lembaga :</label>
                <input type="text" class="form-control" id="lembaga" placeholder="Masukkan lembaga.." name="lembaga" required value="{{$pengajuansuratketkp->lembaga}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="pimpinan">Pimpinan :</label>
                <input type="text" class="form-control" id="pimpinan" placeholder="Masukkan pimpinan.." name="pimpinan" required value="{{$pengajuansuratketkp->pimpinan}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="noTelp">No Telp :</label>
                <input type="text" class="form-control" id="noTelp" placeholder="Masukkan noTelp.." name="noTelp" required value="{{$pengajuansuratketkp->noTelp}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat.." name="alamat" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="fax">Fax :</label>
                <input type="text" class="form-control" id="fax" placeholder="Masukkan fax.." name="fax" required value="{{$pengajuansuratketkp->fax}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="dokumen">Dokumen :</label>
                <input type="text" class="form-control" id="dokumen" placeholder="Masukkan dokumen.." name="dokumen" required value="{{$pengajuansuratketkp->dokumen}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="statusverifikasi">Status Verifikasi :</label>
                <input type="text" class="form-control" id="statusverifikasi" placeholder="Masukkan statusverifikasi.." name="statusverifikasi" required value="{{$pengajuansuratketkp->statusverifikasi}}" disabled=true>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 " style="margin-top: 30px;">
                <a href="#myModal" id="btnUpdate" data-toggle="modal" class="btn btn-success" style="display: none;">Update </a>
                <a href="/mahasiswa/pengajuansuratketkp" class="btn btn-danger">Cancel</a>
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
        document.getElementById("semester").disabled = false;
        document.getElementById("tahun").disabled = false;
        document.getElementById("NIM").disabled = false;
        document.getElementById("lembaga").disabled = false;
        document.getElementById("pimpinan").disabled = false;
        document.getElementById("noTelp").disabled = false;
        document.getElementById("alamat").disabled = false;
        document.getElementById("fax").disabled = false;
        document.getElementById("dokumen").disabled = false;
        document.getElementById("statusverifikasi").disabled = false;
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