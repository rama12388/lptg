@extends('user/u-dashboard') <!--menampilkan sidebar-->
@section('content')
<div class="panel-header bg-success-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Comment</h2>
                <h5 class="text-white op-7 mb-2">Sistem Informasi Geografis Jurnal Geodesi</h5>
            </div>
        </div>
    </div>
</div>

<div class="page-inner">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{route('comment.post')}}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title text-center">Tinggalkan Komentar</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
										<div class="form-group">
											<label>Nama Anda</label>
											<input type="text" name="nama" class="form-control">
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="email" name="email" class="form-control">
										</div>
										<div class="form-group">
											<label>Isi</label>
											<textarea class="form-control" name="komen" maxlength="111"></textarea>
										</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action text-center">
                                <button class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
		</div>
	
	@foreach ($komentar as $k)
    <div class="card mb-3 mr-5 ml-5" >
		<div class="card-body">
			<form>
			@csrf
				<div class="row">
					<div class="col-sm-12">
                        <div class="media-body">
                            <h3 class="mt-0 mb-0">{{ $k->nama }}</h3>
                        </div>
                        <div class="media-body">
                            <h10 class="mt-0 font-italic">{{ $k->email }}</h10>
                        </div>
                        <hr>
                        <div class="media-body">
                        <p class="mt-0">{{ $k->komen }}</p>
                        </div>
                	</div>
				</div>        
			</form>
		</div>
    </div>
        @endforeach
@endsection
