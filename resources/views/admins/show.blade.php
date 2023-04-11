@extends('../layout2/main')

@section('nav')
    @include('../layout2/nav')
@endsection

@section('isi')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Admin</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admins.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Admin Id:</strong>
            {{ $admin->adminid }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama:</strong>
            {{ $admin->nama }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jabatan:</strong>
            {{ $admin->jabatan }}
        </div>
    </div>
</div>
@endsection