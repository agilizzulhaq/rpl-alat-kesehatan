@extends('../layout2/mainnew')

@section('isi')
    <div class="mt-16 mx-10">
        <div class="flex justify-between items-start">
            <h1 class="text-white font-bold text-3xl mb-5">Data Penjadwalan Ruangan</h1>
            <div class="flex gap-3 items-center">
              <div class="w-10 h-10 bg-[#1e6261] hover:bg-[#184D4C] ease-in-out transition duration-150 text-center rounded-full">
                <a href="/tambahdatapenjadwalanruangan" class="text-4xl no-underline text-white">+</a>
              </div>
              <div id="edit" class="w-10 h-10 bg-[#1e6261] hover:bg-[#184D4C] items-center flex justify-center rounded-full ease-in-out transition duration-150 cursor-pointer">
                <span class="material-icons">edit</span>
              </div>
              <div class="">
                <div class="relative h-10 w-20 min-w-[200px]">
                  <input
                    class="peer h-full w-full rounded-[7px] bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-white focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    placeholder=" "
                  />
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-white peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-white peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-white peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Search
                  </label>
                </div>
              </div>
            </div>
        </div>

            {{-- <h3> Data Penjadwalan</h3> --}}

                {{-- <div class="card-header">
                  <button type ="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('tambahdatapenjadwalanruangan') }}'">
                    <i class="fa-solid fa-plus"></i> Add New Data
                  </button>
                </div> --}}
        <div>
            {{-- @if ($message = Session::get('msg'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif --}}
            <table class="w-full leading-10 text-sm text-white">
                <thead class="text-center border-b-2 border-white">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Ruangan</th>
                        <th scope="col">Nama Ruangan</th>
                        <th scope="col">Jenis Ruangan</th>
                        <th scope="col">Lokasi Ruangan</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Kapasitas Ruangan</th>
                        <th scope="col">status</th>
                        <th scope="col">Tanggal Dipinjam</th>
                        <th scope="col" class="border-b-2 border-[#1d1b31] w-32"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                        <td scope="row">{{ $row->kodeRuangan }}</td>
                        <td scope="row">{{ $row->namaRuangan }}</td>
                        <td scope="row">{{ $row->jenisRuangan }}</td>
                        <td scope="row">{{ $row->lokasiRuangan }}</td>
                        <td scope="row">{{ $row->namaPeminjam }}</td>
                        <td scope="row">{{ $row->kapasitas }}</td>
                        <td scope="row">{{ $row->statusRuangan }}</td>
                        <td scope="row">{{ $row->tanggalDipinjam }}</td>
                        <td id="hapus-edit" class="text-white">
                            <a href="/showdatapenjadwalanruangan/{{ $row ->id }}" title="Edit data">
                                <i class='bx bx-edit text-2xl text-white hover:bg-slate-700 bg-slate-600 p-1 rounded'></i>
                            </button>
                            <a href="/deletedatapenjadwalanruangan/{{ $row ->id }}" class="ml-3" data-id="{{ $row ->id }}" data-nama="{{ $row ->namaRuangan }}" title="Delete data">
                                <i class='bx bx-trash text-2xl text-white bg-slate-600 hover:bg-slate-700 p-1 rounded'></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $data->links() }}
    {{-- <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- <script>
        $('.delete').click( function(){
            var idruangan = $(this).attr('data-id');
            var namaruangan = $(this).attr('data-nama');
            swal({
                title: "Apakah Anda yakin?",
                text: "Anda akan menghapus data ruangan dengan nama "+namaruangan+"",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletedatapenjadwalanruangan/"+idruangan+""
                    swal("Data ruangan berhasil dihapus", {
                    icon: "success",
                    });
                } else {
                    swal("Penghapusan data ruangan dibatalkan");
                }
            });
        })
      </script>
        <script>
            @if (Session::has('msg'))
                toastr.options = {
                    "progressBar" : true,
                    "closeButton" : true,
                }
                toastr.success("{{ Session::get('msg') }}",{timeOut:12000});
            @endif
        </script>
        <script>
            @if (Session::has('msgdelete'))
                toastr.options = {
                    "progressBar" : true,
                    "closeButton" : true,
                }
                toastr.error("{{ Session::get('msgdelete') }}",{timeOut:12000});
            @endif
        </script> --}}
@endsection
