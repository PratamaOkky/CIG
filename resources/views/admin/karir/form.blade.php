
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
        <input id="detail" type="hidden" name="detail" value="{{ old('detail') }}">
        <trix-editor input="detail"></trix-editor>
    </div>
