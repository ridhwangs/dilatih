@extends('theme.default')
@section('content')
<section class="hero bg-top py-5" id="hero" style="background: url({!! asset('assets/img/banner-4.png') !!}) no-repeat; background-size: 100% 80%">
        <div class="container py-5">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-white">
              <h3 class="text-title"><span class="badge bg-secondary">Create New</span> Training & Certification </h3>
            </div>
            <div class="card-body">
              @if($errors->any())
                  {!! implode('', $errors->all('
                    <div class="alert alert-danger" role="alert">
                      :message
                    </div>
                  ')) !!}
              @endif
                <form action="{{ route('training.store') }}" id="form-posting" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="instruktur" class="form-label">Instruktur</label>
                      <select class="form-select" name="kode_instruktur" id="kode_instruktur" aria-label="Instruktur" required>
                        <option selected value="" disabled>Pilih Instruktur</option>
                        @foreach($instruktur AS $key => $rows)
                          <option value="{{ $rows->kode_instruktur }}">{{ $rows->kode_instruktur }} - {{ $rows->nama_instruktur }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="jenis" class="form-label">Jenis</label>
                      <select class="form-select" name="jenis" id="jenis" aria-label="Default select example" required>
                        <option selected value="" disabled>Jenis Training</option>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" required>
                    </div>
                    <div class="mb-3">
                      <label for="deskripsi" class="form-label">Deskripsi</label>
                      <input type="hidden" name="deskripsi" value="">
                      <div id="editor" style="min-height: 160px;"></div>
                    </div>
                    <div class="mb-3">
                      <div class="row g-2 align-items-center">
                        <div class="col-auto">
                         <label for="date_start" class="form-label">Waktu Mulai</label>
                          <input type="datetime-local" class="form-control" name="date_start" id="date_start" aria-describedby="date_start" required>
                        </div>
                        <div class="col-auto">
                         <label for="date_end" class="form-label">Waktu Selesai</label>
                          <input type="datetime-local" class="form-control" name="date_end" id="date_end" aria-describedby="date_end" required>
                        </div>
                        <div class="col">
                          <label for="biaya" class="form-label">Biaya</label>
                          <input type="number" class="form-control" name="biaya" id="biaya" aria-describedby="biaya" required>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="formFileSm" class="form-label">Image</label>
                      <input class="form-control form-control" name="image" id="formFileSm" type="file" required>
                    </div>
                    <div class="mb-3">
                      <label for="kategori" class="form-label">Kategori</label>
                      <input type="text" class="form-control" name="kategori" id="kategori" aria-describedby="kategori" required>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" form="form-posting" class="btn btn-primary col-12">Posting</button>
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
        document.getElementById("jenis").value = "{{ old('jenis') }}";
        document.getElementById("nama").value = "{{ old('nama') }}";
        document.getElementById("date_start").value = "{{ old('date_start') }}";
        document.getElementById("date_end").value = "{{ old('date_end') }}";
        document.getElementById("biaya").value = "{{ old('biaya') }}";
        document.getElementById("kategori").value = "{{ old('kategori') }}";
    @endif
   
  </script>
@endsection