{{-- Edit Modal --}}
@foreach ($karirs as $data)
<div class="modal fade" id="edit-{{ $data->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Edit Lowongan Karir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('karir.update', Crypt::encryptString($data->id))}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                <div class="mb-3">
                    <label for="lowongan" class="col-form-label">Nama Karir</label>
                    <input type="text" class="form-control @error('lowongan') is-invalid @enderror" name="lowongan" id="lowongan" required autofocus value="{{ $data->lowongan }}">
                    @error('lowongan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="posisi" class="col-form-label">Posisi</label>
                    <input type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" id="posisi" required autofocus value="{{ $data->posisi }}">
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
                    <textarea name="detail" id="detail" class="form-control" rows="10">{{$data->detail}}</textarea>
                </div>

                <div class="button mb-3 ml-auto">
                <button type="submit" class="btn btn-danger btn-modal" style="color: #BB1D33">Simpan</button>
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
