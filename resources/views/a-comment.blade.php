@extends('dashboard') <!--menampilkan sidebar-->
@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Comment</h2>
                <h5 class="text-white op-7 mb-2">Sistem Informasi Geografis Jurnal Geodesi</h5>
            </div>
        </div>
    </div>
</div>
    
	@foreach ($komentar as $k)
    <div class="card">
		<div class="card-body">
            <form action="{{ route('comment.destroy', $k->id )}}" method="post" class="d-inline">
            @method('delete')                
			@csrf
				<div class="media row">
					<div class="col-sm-12">
                        <div class="media-body">
                            <h3 class="mt-0">{{ $k->nama }}</h3>
                        </div>
                        <div class="media-body">
                            <h10 class="mt-0 font-italic">{{ $k->email }}</h10>
                        </div>
                        <div class="media-body">
                        <p class="mt-0">{{ $k->komen }}</p>
                        </div>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            
					</div>
				</div>        
			</form>
		</div>
    </div>
        @endforeach
@endsection
