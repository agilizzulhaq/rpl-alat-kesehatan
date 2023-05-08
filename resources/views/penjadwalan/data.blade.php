@extends('../layout2/mainnew')

@section('isi')
    <div class="mt-16">
        <div class="container">
            <h3> Data Penjadwalan</h3>
            <div class="card">
                <div class="card-header">
                  <button type ="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('tambahdatapenjadwalanruangan') }}'">
                    <i class="fa-solid fa-plus"></i> Add New Data
                  </button>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('msg'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    @endif
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Ruangan</th>
                                <th scope="col">Nama Ruangan</th>
                                <th scope="col">Jenis Ruangan</th>
                                <th scope="col">Lokasi Ruangan</th>
                                <th scope="col">Kapasitas Ruangan</th>
                                <th scope="col">status</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td scope="row">{{ $row->kodeRuangan }}</td>
                                <td scope="row">{{ $row->namaRuangan }}</td>
                                <td scope="row">{{ $row->jenisRuangan }}</td>
                                <td scope="row">{{ $row->lokasiRuangan }}</td>
                                <td scope="row">{{ $row->kapasitas }}</td>
                                <td scope="row">{{ $row->statusRuangan }}</td>
                                <td>
                                    <a href="/showdatapenjadwalanruangan/{{ $row ->id }}" class="btn btn-info" title="Edit data">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a href="/deletedatapenjadwalanruangan/{{ $row ->id }}" class="btn btn-danger" title="Delete data">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection
