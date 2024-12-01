@extends('template')

@section('tulisan1', 'Data bus')

@section('linkdata')
<a href="/pegawai" class="btn btn-dark">Data Pegawai</a>
<a href="/bus" class="btn btn-secondary">Data bus</a>
@endsection

@section('link1')
	<a href="/bus/tambah" class="btn btn-primary"> + Tambah bus Baru</a>
@endsection
@section('konten')

	<br/>
	<form action="/bus/cari1" method="GET">
        <div class="row mb-3">
            <label for="merk" class="col-sm-2 col-form-label">Cari merk bus :</label>
            <div class="col-sm-6">
              <input type="text" name="cari1" class="form-control" id="cari1" placeholder="Cari bus .." value="{{ old('cari1') }}">
        	</div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
              </div>
		</div>
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>kode bus</th>
			<th>merk bus</th>
			<th>jumlah bus</th>
			<th>tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($bus as $b)
		<tr>
			<td>{{ $b->kodebus}}</td>
			<td>{{ $b->merkbus }}</td>
			<td>{{ $b->jumlahbus }}</td>
			<td>{{ $b->tersedia }}</td>
			<td>
				<a href="/bus/edit/{{ $b->kodebus }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
				|
				<a href="/bus/hapus/{{ $b->kodebus }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $bus->currentPage() }} <br/>
	Jumlah Data : {{ $bus->total() }} <br/>
	Data Per Halaman : {{ $bus->perPage() }} <br/>


	{{ $bus->links() }}


@endsection
