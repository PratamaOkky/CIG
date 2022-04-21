{{-- Edit Modal --}}
@foreach ($artikels as $artikel)
<div class="modal fade" id="edit-{{ $artikel->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Edit Artikel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('artikel.update', $artikel) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="image" class="col-form-label">Image</label>
                        <input type="hidden" name="oldImage" value="{{ $artikel->image }}">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" onchange="previewImage()">
                        @if ($artikel->image)
                            <img src="{{asset('storage/' . $artikel->image)}}" class="img-preview img-fluid mt-3 col-sm-4">
                        @else
                            <img class="img-preview img-fluid mt-3 col-sm-4">
                        @endif
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="col-form-label">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{ old('judul',  $artikel->judul) }}">
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="col-form-label">Isi</label>
                        @error('isi')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                        @enderror
                        <textarea name="isi" id="isi" class="form-control" rows="10">{{ old('isi', $artikel->isi) }}</textarea>
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
