{{-- Edit Modal --}}
@foreach ($artikel as $item)
<div class="modal fade" id="edit-{{ $item->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Edit judul Karir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('artikel.update', Crypt::encryptString($item->id_artikel))}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="image" class="col-form-label">Image</label>
                        <input type="hidden" name="oldImage" value="{{ $item->image }}">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="gambar" id="gambar" onchange="previewImage()">
                        @if ($item->gambar)
                            <img src="{{asset('storage/' . $item->gambar)}}" class="img-preview img-fluid mt-3 col-sm-4">
                        @else
                            <img class="img-preview img-fluid mt-3 col-sm-4">
                        @endif
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="col-form-label">Nama Karir</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" required autofocus value="{{ old('judul',  $item->judul) }}">
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>>
                    <div class="mb-3">
                        <label for="isi" class="col-form-label">isi</label>
                        @error('isi')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                        @enderror
                        <textarea name="isi" id="isi" class="form-control" rows="10">{{ old('isi', $item->isi) }}</textarea>
                    </div>

                    <div class="button mb-3 ml-auto">
                    <button type="submit" class="btn btn-danger btn-modal" style="background-color: #BB1D33">Simpan</button>
                    </div>
                    <div class="button mb-3">
                        <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endforeach
{{-- Edit Modal --}}
