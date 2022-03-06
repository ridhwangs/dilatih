@extends('theme.default')
@section('content')
<section class="hero bg-top py-5" id="hero" style="background: url({!! asset('assets/img/banner-4.png') !!}) no-repeat; background-size: 100% 80%">
        <div class="container py-5">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-white">
              <h3 class="text-title"><span class="badge bg-secondary">Create New</span> Instructure </h3>
            </div>
            <div class="card-body">
              @if($errors->any())
                  {!! implode('', $errors->all('
                    <div class="alert alert-danger" role="alert">
                      :message
                    </div>
                  ')) !!}
              @endif
                <form action="{{ route('instructure.store') }}" id="form-posting" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="kode_instruktur" class="form-label">Kode</label>
                      <input type="text" class="form-control" name="kode_instruktur" id="kode_instruktur" aria-describedby="nama" required>
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama_instruktur" id="nama" aria-describedby="nama" required>
                    </div>
                    <div class="mb-3">
                      <label for="bidang" class="form-label">Bidang</label>
                      <input type="text" class="form-control" name="bidang" id="bidang" aria-describedby="bidang" required>
                    </div>
                    <div class="mb-3">
                      <label for="deskripsi" class="form-label">Deskripsi</label>
                      <input type="hidden" name="deskripsi" value="">
                      <div id="editor" style="min-height: 160px;"></div>
                    </div>
                    <div class="mb-3">
                      <label for="formFileSm" class="form-label">Image</label>
                      <input class="form-control form-control" name="image" id="formFileSm" type="file" required>
                    </div>
                    <div class="mb-3">
                      <label for="linkedin" class="form-label">Linkedin</label>
                      <input type="text" class="form-control" name="linkedin" id="linkedin" aria-describedby="linkedin" required>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" form="form-posting" class="btn btn-primary col-12">Create</button>
            </div>
          </div>
        </div>
    </div>
  </section>
  <script>
   
    var quill = new Quill('#editor', {
      theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
      document.querySelector("input[name='deskripsi']").value = quill.root.innerHTML;
    });

    @if($errors->any())
        document.getElementById("kode_instruktur").value = "{{ old('kode_instruktur') }}";
        document.getElementById("nama_instruktur").value = "{{ old('nama_instruktur') }}";
        document.getElementById("bidang").value = "{{ old('bidang') }}";
        document.getElementById("linkedin").value = "{{ old('linkedin') }}";
    @endif
   
  </script>
@endsection