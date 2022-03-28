{{-- Modal Tambah --}}
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Lowongan Karir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('karir.store')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="image" class="col-form-label">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" onchange="previewImage()">
                        <img class="img-preview img-fluid mt-3 col-sm-4">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lowongan" class="col-form-label">Nama Karir</label>
                        <input type="text" class="form-control @error('lowongan') is-invalid @enderror" name="lowongan" id="lowongan" placeholder="Masukan Nama Karir" required autofocus value="{{ old('lowongan')}}">
                        @error('lowongan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="posisi" class="col-form-label">Posisi</label>
                        <input type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" id="posisi" placeholder="Posisi" required autofocus value="{{ old('posisi')}}">
                        @error('posisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="col-form-label">Detail</label>
                        @error('detail')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                        @enderror
                        <textarea class="form-control" id="detail" name="detail" rows="10" value="{{ old('detail') }}" required autofocus></textarea>
                    </div>
                    <div class="button mb-3">
                        <button type="submit" class="btn btn-danger btn-modal">Simpan</button>
                    </div>
                    <div class="button mb-3">
                        <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Modal Tambah --}}
