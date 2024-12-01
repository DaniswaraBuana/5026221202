@extends('template')

@section('tulisan1','Data Pegawai')

@section('link1')
    <a href="/bus"> Kembali</a>
@endsection

@section('konten')

	@foreach($bus as $b)
	<form action="/bus/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $b->kodebus }}"> <br/>
        <div class="row mb-3">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>\
            <div class="col-sm-10">
              <input type="text" name="merk" class="form-control" id="merk" required="required" value="{{ $b->merkbus }}">
            </div>
        </div>

            <div class="row mb-3">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                  <input type="number" name="jumlah" class="form-control" id="jumlah" required="required" value="{{ $b->jumlahbus }}">
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                <div class="col-sm-10 d-flex">
                  <div class="form-check me-3">
                    <input type="radio" class="form-check-input" id="tersedia1" name="tersedia" value="Y" required='required'
                    {{ $b->jumlahbus > 0 ? '' : 'disabled' }} {{ $b->jumlahbus > 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="tersedia1">Ada</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="tersedia2" name="tersedia" value="N" required="required"
                    {{ $b->jumlahbus == 0 ? '' : 'disabled' }} {{ $b->jumlahbus == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="tersedia2">Habis</label>
                  </div>
                </div>
              </div>

		 <br/>
         <div class="row mb-3">
           </div class="col-sm-12">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>

	</form>
	@endforeach
@endsection

@section('script')
<script>
    const stockInput = document.getElementById('jumlah');
    const tersediaOption = document.getElementById('tersedia1');
    const habisOption = document.getElementById('tersedia2');

    stockInput.addEventListener('input', function () {
        const stockValue = parseInt(stockInput.value, 10);

        if (stockValue > 0) {
            tersediaOption.disabled = false; // Aktifkan opsi "Ada"
            habisOption.disabled = true;   // Nonaktifkan opsi "Habis"
            habisOption.checked = false;   // Pastikan tidak terpilih
        } else {
            tersediaOption.disabled = true; // Nonaktifkan opsi "Ada"
            tersediaOption.checked = false; // Pastikan tidak terpilih
            habisOption.disabled = false;   // Aktifkan opsi "Habis"
        }
    });
</script>
@endsection
