@extends('user/u-dashboard')
@section('content')
<div class="panel-header bg-success-gradient">
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
                    <h4 class="card-title">Data Maps</h4>
                </div>
                <div class="card-body">
                    <iframe width="100%" height="520" frameborder="0" src="https://rama12388.carto.com/builder/50b54363-82b8-47bc-b27e-c2b7dff0a977/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
