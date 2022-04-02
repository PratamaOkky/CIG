{{-- Add Modal --}}
<div class="modal fade" id="register">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin-left: 27%" id="exampleModalLabel">Tambah Pengguna</h5>
            </div>

            <div class="modal-body">
                <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Input Nama">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nip" class="col-form-label">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip') }}" placeholder="Input NIP">
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    @if (auth()->user()->level_id == 1)

                    <div class="mb-3">
                        <label for="level_id" class="col-form-label">Level</label>
                        <select class="form-select" id="level_id" name="level_id">
                            <option selected>--- Pilih Level ---</option>
                            @foreach ($levels as $item)
                            <option value="{{ $item->id }}" {{ old('level_id') == $item->id ? 'selected' : null }}>
                                {{ $item->level }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    @endif

                    <div class="mb-3">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" placeholder="Input Password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gender_id" class="col-form-label">Gender</label>
                        <select class="form-select" aria-label="Default select example" name="gender_id">
                            <option selected>--- Pilih Jenis Kelamin ---</option>
                            @foreach ($gender as $item)
                            <option value="{{ $item->id }}" {{ old('gender_id') == $item->id ? 'selected' : null }}>
                                {{ $item->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nik" class="col-form-label">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}" placeholder="Input NIK">
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jabatan" class="col-form-label">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('Jabatan') }}" placeholder="Input Jabatan">
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="divisi" class="col-form-label">Divisi</label>
                        <input type="text" class="form-control @error('divisi') is-invalid @enderror" id="divisi" name="divisi" value="{{ old('divisi') }}" placeholder="Input Divisi">
                        @error('divisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="atasan" class="col-form-label">Atasan</label>
                        <input type="text" class="form-control @error('atasan') is-invalid @enderror" id="atasan" name="atasan" value="{{ old('atasan') }}" placeholder="Input Atasan">
                        @error('atasan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ttl" class="col-form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl') }}" placeholder="Input Tempat Lahir">
                        @error('ttl')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tgl_lahir" class="col-form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="flatpickr" name="tgl_lahir" value="{{ old('tgl_lahir') }}" placeholder="Input Tanggal Lahir">
                        @error('tgl_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kewarganegaraan" class="col-form-label">Kewarganegaraan</label>
                        <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" id="kewarganegaraan" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}" placeholder="Input Kewarganegaraan">
                        @error('kewarganegaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="agama" class="col-form-label">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama') }}" placeholder="Input Agama">
                        @error('agama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="col-form-label">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" placeholder="Input Alamat">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="npwp" class="col-form-label">NPWP</label>
                        <input type="text" class="form-control @error('npwp') is-invalid @enderror" id="npwp" name="npwp" value="{{ old('npwp') }}" placeholder="Input NPWP">
                        @error('npwp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no_kes" class="col-form-label">No BPJS Kesehatan</label>
                        <input type="text" class="form-control @error('no_kes') is-invalid @enderror" id="no_kes" name="no_kes" value="{{ old('no_kes') }}" placeholder="Input No. BPJS Kesehatan">
                        @error('no_kes')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no_tk" class="col-form-label">No BPJS Tenaga Kerja</label>
                        <input type="text" class="form-control @error('no_tk') is-invalid @enderror" id="no_tk" name="no_tk" value="{{ old('no_tk') }}" placeholder="Input No. Tenaga Kerja">
                        @error('no_tk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Input email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="instalasi" class="col-form-label">Instalasi</label>
                        <input type="text" class="form-control @error('instalasi') is-invalid @enderror" id="instalasi" name="instalasi" value="{{ old('instalasi') }}" placeholder="Input Instalasi">
                        @error('instalasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="bank" class="col-form-label">Nama Bank</label>
                        <input type="text" class="form-control @error('bank') is-invalid @enderror" id="bank" name="bank" value="{{ old('bank') }}" placeholder="Input Bank">
                        @error('bank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="rek" class="col-form-label">No. Rekening</label>
                        <input type="text" class="form-control @error('rek') is-invalid @enderror" id="rek" name="rek" value="{{ old('rek') }}" placeholder="Input Rekening">
                        @error('rek')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tgl_masuk" class="col-form-label">Tanggal Masuk</label>
		                <input type="text" id="flatpickr" name="tgl_masuk" class="form-control @error('tgl_masuk') is-invalid @enderror" autofocus value="{{ old('tgl_masuk') }}" placeholder="Input Tanggal Masuk">
                        @error('tgl_masuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="awal_pkwt" class="col-form-label">Mulai PKWT</label>
                        <input type="text" class="form-control @error('awal_pkwt') is-invalid @enderror" id="flatpickr" placeholder="Input Mulai PKWT" name="awal_pkwt" value="{{ old('awal_pkwt') }}">
                        @error('awal_pkwt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="akhir_pkwt" class="col-form-label">Akhir PKWT</label>
                        <input type="text" class="form-control @error('akhir_pkwt') is-invalid @enderror" id="flatpickr" placeholder="Input Akhir PKWT" name="akhir_pkwt" value="{{ old('akhir_pkwt') }}">
                        @error('akhir_pkwt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status_pajak" class="col-form-label">Status Pajak</label>
                        <input type="text" class="form-control @error('status_pajak') is-invalid @enderror" id="status_pajak" name="status_pajak" value="{{ old('status_pajak') }}" placeholder="Input Status Pajak">
                        @error('status_pajak')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

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

                    <div class="button mb-3">
                        <button type="submit" class="btn btn-danger btn-modal">Tambah</button>
                    </div>

                    <div class="button mb-3">
                        <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Add Modal --}}
