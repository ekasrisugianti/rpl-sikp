@extends('layouts.layout')

@section('head-script')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
@endsection

@section('content')

<div class="row">
    <div class="col-sm-12 col-md-12">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item"><a href="/dosen/jadwalujian">Pengajuan Surat Ket KP</a></li>
                <li class="breadcrumb-item"><a href="#">Add Pengajuan Surat Ket KP</a></li>
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

<div class="row">
    <div class="col-sm-12 col-md-12">
        <form action="/mahasiswa/pengajuansuratketkp/create" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id">
            @csrf
            <div class="form-group">
                <label for="semester">Semester :</label>
                <input type="date" class="form-control" id="semester" placeholder="Masukkan semester.." name="semester" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun :</label>
                <input type="text" class="form-control" id="tahun" placeholder="Masukkan tahun.." name="tahun" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="NIM">NIM :</label>
                <input type="text" class="form-control" id="NIM" placeholder="Masukkan NIM.." name="NIM" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="lembaga">Lembaga :</label>
                <input type="text" class="form-control" id="lembaga" placeholder="Masukkan lembaga.." name="lembaga" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="pimpinan">Pimpinan :</label>
                <input type="text" class="form-control" id="pimpinan" placeholder="Masukkan pimpinan.." name="pimpinan" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="noTelp">No Telp :</label>
                <input type="text" class="form-control" id="noTelp" placeholder="Masukkan noTelp.." name="noTelp" required>
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
                <input type="text" class="form-control" id="fax" placeholder="Masukkan fax.." name="fax" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="dokumen">Dokumen :</label>
                <input type="text" class="form-control" id="dokumen" placeholder="Masukkan dokumen.." name="dokumen" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="statusverifikasi">Status Verifikasi :</label>
                <input type="text" class="form-control" id="statusverifikasi" placeholder="Masukkan statusverifikasi.." name="statusverifikasi" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary">Submit</button>
                <a href="/mahasiswa/pengajuansuratketkp" class="btn btn-danger">Cancel</a>
            </div>

        </form>
    </div>
</div>

@endsection

@section('footer-script')
<script type="text/javascript">

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