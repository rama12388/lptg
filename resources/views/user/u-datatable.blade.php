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
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Table</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div id="filter">
                        <div class="card border shadow-none">
                            <div class="card-header">
                                Search
                            </div>
                            <div class="card-body">
                                <form action="{{ route('user.search_data') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" {!!$search != '' ? 'value="'.$search['judul'].'"' : null !!}>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tahun">Tahun</label>
                                                <select name="tahun" id="tahun" class="form-control">
                                                    <option value="">Semua</option>
                                                    @for ($i = 2012; $i <= date('Y') ; $i++)
                                                        <option value="{{$i}}" @if (!empty($search))
                                                            @if ($search['tahun'] == $i)
                                                                {{'selected'}}
                                                            @endif
                                                        @endif>{{$i}}</option>
                                                    @endfor 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lokasi">Lokasi</label>
                                                <select name="lokasi" id="lokasi" class="form-control">
                                                    <option value="">Semua</option>
                                                    @foreach ($lokasi as $lokasi)
                                                        <option value="{{$lokasi->location}}" @if (!empty($search))
                                                            @if ($search['lokasi'] == $lokasi->location)
                                                                {{'selected'}}
                                                            @endif
                                                        @endif>{{$lokasi->location}}</option>
                                                    @endforeach 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="kode">Kode Nasional</label>
                                                <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode Nasional" {!!$search != '' ? 'value="'.$search['kode'].'"' : null !!}>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="jenis_kk">Jenis KK</label>
                                                <select name="jenis_kk" id="jenis_kk" class="form-control">
                                                    <option value="">Semua</option>
                                                    @foreach ($jenis_kk as $jenis)
                                                        <option value="{{$jenis->jenis_kk}}" @if (!empty($search))
                                                            @if ($search['jenis_kk'] == $jenis->jenis_kk)
                                                                {{'selected'}}
                                                            @endif
                                                        @endif>{{$jenis->jenis_kk}}</option>
                                                    @endforeach 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="dosen1">Dosen Pembimbing 1</label>
                                                <input type="text" class="form-control" name="dosen1" id="dosen1" placeholder="Dosen Pembimbing 1" {!!$search != '' ? 'value="'.$search['dosen1'].'"' : null !!}>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="dosen2">Dosen Pembimbing 2</label>
                                                <input type="text" class="form-control" name="dosen2" id="dosen2" placeholder="Dosen Pembimbing 2" {!!$search != '' ? 'value="'.$search['dosen2'].'"' : null !!}>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-4 text-center">
                                            <div class="mt-2">
                                                <input name="search" type="submit" value="Search" class="btn btn-primary">
                                                <a href="{{ route('user.datatable') }}" class="btn btn-danger">Reset</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="multi-filter-select" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</td>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Dosen Pembimbing</th>
                                    <th>Location</th>
                                    <th>Kode Nasional</th>
                                    <th>Jenis KK</th>
                                    <th>Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($datas as $data)
                                    
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{!!$data->dosbing_1.' <b>;</b><br>'.$data->dosbing_2!!}</td>
                                    <td>{{$data->location}}</td>
                                    <td>{{$data->kode_nasional}}</td>
                                    <td>{{$data->jenis_kk}}</td>
                                    <td>{{$data->tahun}}</td>
                                    <td>
                                        <div class="form-button-action">
                                            <!--
                                            <a href="{{route('user.datatable-detail', $data->id)}}"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-info btn-sm" data-original-title="Detail Data">
                                                <i class="fa fa-info"></i>
                                            </button>
                                            </a> 
                                            -->
                                            <a href="{{$data->download}}" target="_blank"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-success btn-sm" data-original-title="Download Data">
                                                <i class="fa fa-download"></i>
                                            </button></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




@endsection
