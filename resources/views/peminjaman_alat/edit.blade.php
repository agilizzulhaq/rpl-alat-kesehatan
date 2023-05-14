@extends('../layout2/mainnew')

@section('isi')
    <div class="w-[1040px]">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Data Pinjam</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('peminjaman_alat.index') }}"> Back</a>
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
      
        <form action="{{ route('peminjaman_alat.update',$peminjaman_alat->id_peminjaman) }}" method="POST">
            @csrf
            @method('PUT')
       
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Peminjaman:</strong>
                        <input type="text" name="id_peminjaman" value="{{ $peminjaman_alat->id_peminjaman }}" class="form-control" placeholder="Id Peminjaman">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Alat:</strong>
                        <select class="form-select" name="kode_alat" class="form-control" id="kode_alat" value="{{ $peminjaman_alat->nama_alat }}" aria-label="Default select example"> 
                            @foreach ($inventory as $item)
                                <option value="{{ $item->kodeAlat }}" @if ($item->kodeAlat == $peminjaman_alat->kode_alat) selected @endif>
                                    {{ $item->kodeAlat . ' | ' . $item->nama_alat->nama_alat}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Peminjam:</strong>
                        <select class="form-select" name="nama_peminjam" class="form-control" id="nama_peminjam" value="{{ $peminjaman_alat->nama_peminjam }}" aria-label="Default select example"> 
                            @foreach ($pengguna as $item)
                                <option value="{{ $item->id_user }}" @if ($item->id_user == $peminjaman_alat->nama_peminjam) selected @endif>
                                    {{ $item->nama_user}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Pinjam:</strong>
                        <input type="datetime-local" value="{{ $peminjaman_alat->tanggal_peminjaman }}" class="form-control" name="tanggal_peminjaman" placeholder="Tanggal Pinjam">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Kembali:</strong>
                        <input type="datetime-local" value="{{ $peminjaman_alat->tanggal_pengembalian }}" class="form-control" name="tanggal_pengembalian" placeholder="Tanggal Kembali">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status Peminjaman:</strong>
                        <select class="form-select" name="status_peminjaman" aria-label="Default select example">
                            <option selected>{{ $peminjaman_alat -> status_peminjaman }}</option>
                            <option value="Dipinjam">Dipinjam</option>
                            <option value="Dikembalikan">Dikembalikan</option>
                          </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alasan Peminjaman:</strong>
                        <input type="text" value="{{ $peminjaman_alat->alasan_peminjaman }}" class="form-control" name="alasan_peminjaman" placeholder="Alasan Peminjaman">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
       
        </form>
    </div>
@endsection