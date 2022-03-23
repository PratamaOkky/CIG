{{-- Edit Modal --}}
@foreach ($pegawai as $data)
<div class="modal fade" id="edit-{{ $data->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin-left: 29%" id="staticBackdropLabel"> Edit Data Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('pegawai.update', Crypt::encryptString($data->id))}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group-row mb-3">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $data->nama) }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="gender_id" class="col-form-label">Gender</label>
                        <select class="form-select" aria-label="Default select example" name="gender_id">
                            <option selected>--- Pilih Jenis Kelamin ---</option>
                            @foreach ($gender as $item)
                            <option value="{{ $item->id }}" {{ old('gender_id', $pegawai[0]->gender_id ) == $item->id ? 'selected' : null }}>
                                {{ $item->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="nip" class="col-form-label">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip', $data->nip) }}">
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="jabatan" class="col-form-label">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan',$data->jabatan) }}" placeholder="Input Jabatan">
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="divisi" class="col-form-label">Divisi</label>
                        <input type="text" class="form-control @error('divisi') is-invalid @enderror" id="divisi" name="divisi" value="{{ old('divisi', $data->divisi) }}" placeholder="Input Divisi">
                        @error('divisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="ttl" class="col-form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl', $data->ttl) }}" placeholder="Input Temapat Lahir">
                        @error('ttl')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="kewarganegaraan" class="col-form-label">Kewarganegaraan</label>
                        <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" id="kewarganegaraan" name="kewarganegaraan" value="{{ old('kewarganegaraan', $data->kewarganegaraan) }}" placeholder="Input Kewarganegaraan">
                        @error('kewarganegaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="agama" class="col-form-label">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama', $data->agama) }}" placeholder="Input Agama">
                        @error('agama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="alamat" class="col-form-label">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $data->alamat) }}" placeholder="Input Alamat">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="npwp" class="col-form-label">Npwp</label>
                        <input type="text" class="form-control @error('npwp') is-invalid @enderror" id="npwp" name="npwp" value="{{ old('npwp', $data->npwp) }}" placeholder="Input Npwp">
                        @error('npwp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="no_kes" class="col-form-label">No BPJS Kesehatan</label>
                        <input type="text" class="form-control @error('no_kes') is-invalid @enderror" id="no_kes" name="no_kes" value="{{ old('no_kes', $data->no_kes) }}" placeholder="Input No. BPJS Kesehatan">
                        @error('no_kes')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="no_tk" class="col-form-label">No. BPJS Tenaga Kerja</label>
                        <input type="text" class="form-control @error('no_tk') is-invalid @enderror" id="no_tk" name="no_tk" value="{{ old('no_tk', $data->no_tk) }}" placeholder="Input No. BPJS Tenaga Kerja">
                        @error('no_tk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $data->email) }}" placeholder="Input email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="tgl_masuk" class="col-form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control @error('tgl_masuk') is-invalid @enderror" id="tgl_masuk" name="tgl_masuk" value="{{ $pegawai[0]->tgl_masuk }}">
                        @error('tgl_masuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="form-group-row mb-3">
                        <label for="gaji_id" class="col-form-label">Gaji</label>
                        <select class="form-select" aria-label="Default select example" name="gaji_id">
                            <option selected>- Gaji -</option>
                            @foreach ($gaji as $item)
                            <option value="{{ $item->id }}" {{ old('gaji_id', $pegawai[0]->gaji_id ) == $item->id ? 'selected' : null }}>
                                {{ $item->gaji }}
                            </option>
                            @endforeach
                        </select>
                    </div> --}}

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
@endforeach
{{-- Edit Modal --}}
