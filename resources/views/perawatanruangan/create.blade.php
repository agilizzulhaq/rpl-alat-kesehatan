@extends('../layout2/mainnew')

@section('isi')
    <div class="w-[1040px]">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('perawatanruangan.index') }}"> Back</a>
                </div>
            </div>
        </div>
           
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
           
        <form action="{{ route('perawatanruangan.store') }}" method="POST">
            @csrf
          
            <div class="mb-3">
                <label for="id_perawatan" class="form-label">ID Perawatan</label>
                <input type="number" name="id_perawatan" class="form-control" id="exampleInputEmail">
              </div>
              <div class="mb-3">
                <label for="kodeRuangan" class="form-label">Kode Ruangan</label>
                <select class="form-select" name="kodeRuangan" aria-label="Default select example">
                    <option selected>Pilih Ruangan</option>
                    @foreach ($room as $item)
                      <option value="{{ $item->kodeRuangan }}"> {{ $item->kodeRuangan . " | Ruang " . $item->namaRuangan ." ". $item->lokasi->nama_gedung . " Lantai " . $item->lokasi->lantai}}
                    @endforeach
                  </select>
              </div>
              <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi</label>
                <select class="form-select" name="kondisi" aria-label="Default select example">
                  <option selected>Pilih Status</option>
                  <option value="B">Baik</option>
                  <option value="S">Sedang</option>
                  <option value="R">Rusak</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="history" class="form-label">Terakhir dirawat</label>
                <input type="date" name="history" class="form-control" id="exampleInputEmail">
              </div>
              <div class="mb-3">
                <label for="statusPerawatan" class="form-label">Status Perawatan</label>
                <select class="form-select" name="statusPerawatan" aria-label="Default select example">
                  <option selected>Pilih Status</option>
                  <option value="Belum dirawat">Belum dirawat</option>
                  <option value="Sedang dirawat">Sedang dirawat</option>
                  <option value="Selesai dirawat">Selesai dirawat</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
           
        </form>
    </div>
@endsection