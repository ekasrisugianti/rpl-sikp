@extends('layouts.layout')
@section('content')
<div class="row">
   <div class="col-sm-12">
      <h2 class="mb-0">Dashboard</h2>
      <h4 class="mt-0">Selamat Datang</h4>
      <hr>
   </div>
</div>
<div class="row">
   <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
         <div class="card-body">
            <div class="row">
               <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                     <i class="fa fa-smile-o text-warning" aria-hidden="true"></i>
                  </div>
               </div>
               <div class="col-7 col-md-8">
                  <div class="numbers">
                     <h5>1555</h5>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer">
            <hr>
            <div class="stats">
               <p>Jumlah pengunjung website</p>
            </div>
         </div>
      </div>
   </div>
</div>
@stop
