@extends('../layout2/mainnew')
@section('isi')
<div class="mt-16 mx-10">
  <h1 class="text-3xl text-black font-bold mb-5">Edit Data Vendor</h1>
    
  <div class="w-full bg-white rounded-xl text-sm text-black-md p-3 border-2 border-green-200">
    <form action="/updatevendor/{{ $data -> id_vendor }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3 flex justify-between">
        <label for="id_vendor" class="form-label text-black">ID Vendor</label>
        <input type="number" name="id_vendor" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="id_vendor" value="{{ $data -> id_vendor }}">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="nama_vendor" class="form-label text-black">Nama Vendor</label>
        <input type="text" name="nama_vendor" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nama_vendor" value="{{ $data -> nama_vendor }}">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="alamat_vendor" class="form-label text-black">Alamat Vendor</label>
        <input type="text" name="alamat_vendor" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="alamat_vendor" value="{{ $data -> alamat_vendor }}">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="email_vendor" class="form-label text-black">Email Vendor</label>
        <input type="email" name="email_vendor" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="email_vendor" value="{{ $data -> email_vendor }}">
      </div>
      <div class="mb-3 flex justify-between">
        <label for="nomor_telepon" class="form-label text-black">Nomor Telepon</label>
        <input type="number" name="nomor_telepon" class="rounded text-sm py-1 px-2 text-black w-[700px]  border-1 border-black" id="nomor_telepon" value="{{ $data -> nomor_telepon }}">
      </div>
      <div class="w-full flex justify-end">
        <button type="submit" class="px-3 py-2 bg-blue-600 rounded text-white">Submit</button>
      </div>
    </form>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection