@extends('user/u-dashboard')
@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Data</h2>
                <h5 class="text-white op-7 mb-2">Sistem Informasi Geografis Jurnal Geodesi</h5>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Detail Data</h4>
                    </div>
                </div>
                <div class="card-body">
                    <h5>Data</h5>
                    <p class="small">{{$data->data}}</p>
                    <br>

                    <h5>Metode</h5>
                    <p class="small">{{$data->metode}}</p>
                    <br>

                    <h5>Hasil</h5>
                    <p class="small">{{$data->hasil}}</p>
                    <br>

                    <h5>Kesimpulan</h5>
                    <p class="small">{{$data->kesimpulan}}</p>
                    <br>

                    <h5>Saran</h5>
                    <p class="small">{{$data->saran}}</p>
                    <br>

                    <h5>Download File</h5><a href="{{$data->download}}" target="_blank"><button type="button" data-toggle="tooltip" title="" class="btn btn-primary btn-sm" data-original-title="Download">
                            <i class="fa fa-download"></i>
                    </button></a>

                </div>
            </div>
        </div>

    </div>
</div>




@endsection
