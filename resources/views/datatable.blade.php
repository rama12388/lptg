@extends('dashboard')
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
                        <h4 class="card-title">Data Table</h4>
                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                            <i class="fa fa-plus"></i>
                            Add Data
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header no-bd">
                                    <h5 class="modal-title">
                                        <span class="fw-mediumbold">
                                        Add Data</span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('datatable.post')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>Name</label>
                                                    <input name="nama" type="text" class="form-control" placeholder="fill name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>NIM</label>
                                                    <input name="nim" type="text" class="form-control" placeholder="fill NIM">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Title</label>
                                                    <textarea name="title" rows="3" class="form-control" placeholder="fill title"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Dosen Pembimbing 1</label>
                                                    <input name="dosbing_1" type="text" class="form-control" placeholder="fill dosen pembimbing 1">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Dosen Pembimbing 2</label>
                                                    <input name="dosbing_2" type="text" class="form-control" placeholder="fill dosen pembimbing 2">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Lokasi Penelitian</label>
                                                    <input name="location" type="text" class="form-control" placeholder="fill location">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Kode Nasional</label>
                                                    <input name="kode_nasional" type="text" class="form-control" placeholder="fill kode nasional">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Jenis Kompetensi Keahlian</label>
                                                    <input name="jenis_kk" type="text" class="form-control" placeholder="fill kompetensi keahlian">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Tahun</label>
                                                    <input name="tahun" type="number" class="form-control" placeholder="fill number">
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Data</label>
                                                    <textarea name="data" rows="4" class="form-control" placeholder="fill data"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Metode</label>
                                                    <input name="metode" type="text" class="form-control" placeholder="fill metode">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Hasil</label>
                                                    <input name="hasil" type="text" class="form-control" placeholder="fill hasil">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Kesimpulan</label>
                                                    <textarea name="kesimpulan" rows="4" class="form-control" placeholder="fill kesimpulan"></textarea>
                                                </div>
                                            </div>-->
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Saran</label>
                                                    <textarea name="saran" rows="4" class="form-control" placeholder="fill saran"></textarea>
                                                </div>
                                            </div> 
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Link Download</label>
                                                    <input name="download" type="text" class="form-control" placeholder="fill link download">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer no-bd">
                                    <button type="submit" class="btn btn-primary">Add Data</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>

                    <!SEARCH1>
                    <div id="filter">
                        <div class="card border shadow-none">
                            <div class="card-header">
                                Search
                            </div>
                            <div class="card-body">
                                <form action="{{ route('search_data') }}" method="POST">
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
                                                <a href="{{ url('/datatable') }}" class="btn btn-danger">Reset</a>
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
                                            <a href="{{route('datatable.detail', $data->id)}}"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-info btn-sm m-0" data-original-title="Detail Data">
                                                <i class="fa fa-info"></i>
                                            </button>
                                            </a>
                                            <a href="{{route('datatable.edit', $data->id)}}"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-sm m-0" data-original-title="Edit Data">
                                                <i class="fa fa-edit"></i>
                                            </button></a>
                                            <button title="Remove Data" class="btn btn-link btn-danger m-0" data-toggle="modal" data-target="#delete-{{$data->id}}">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <a href="{{$data->download}}" target="_blank"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-success btn-sm m-0" data-original-title="Download Data">
                                                <i class="fa fa-download"></i>
                                            </button></a>

                                            
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="delete-{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header no-bd">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">Delete Data {{$data->nama}}</span>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="{{route('datatable.delete')}}" method="POST">
                                                @csrf
                                                <p>Yakin akan menghapus Jurnal dengan judul: {{$data->title}}</p>
                                            </div>
                                            <div class="modal-footer no-bd">
                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            
                                                <button type="submit" class="btn btn-danger">Delete Data</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
