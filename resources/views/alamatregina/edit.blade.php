@extends('../layout2/mainnew')

@section('isi')
<div class="mt-16 mx-10">

  <h1 class="text-3xl text-black font-bold mb-5">Edit Data Alamat</h1>
  
  <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
    <form action="{{ route('alamatregina.update',$alamatregina->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-3 flex justify-between">
        <label for="namamatkul" class="form-label text-black">Nama Mahasiswa</label>
        <select class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" name="mahasiswa" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="mahasiswa" value="{{ $alamatregina->mahasiswa }}" aria-label="Default select example"> 
          @foreach ($mahasiswa as $item)
              <option value="{{ $item->id }}" @if ($item->id == $alamatregina->mahasiswa) selected @endif>
                  {{ $item->nama}}
              </option>
          @endforeach
        </select>
      </div>
      <div class="mb-3 flex justify-between">
        <label for="alamat" class="form-label text-black">Alamat</label>
        <input type="text" name="alamat" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="alamat" value="{{ $alamatregina -> alamat }}">
      </div>
      <button type="submit" class="px-3 py-2 bg-blue-600 ml-[860px] rounded text-white">Submit</button>
    </form>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection