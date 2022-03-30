{{-- Add Modal --}}
@foreach ($user as $item)

<div class="modal fade" id="edit-{{$item->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin-left: 27%" id="exampleModalLabel">Ubah Data Pegawai</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="{{route('pengguna.update', Crypt::encryptString($item->id))}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $item->nama) }}" placeholder="Input Nama">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nip" class="col-form-label">Nip</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip', $item->nip) }}" placeholder="Input Nip">
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
                            @foreach ($levels as $lv)
                            <option value="{{ $lv->id }}" {{ old('level_id', $item->level_id) == $lv->id ? 'selected' : null }}>
                                {{ $lv->level }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    @endif

                    <div class="mb-3">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password', Str::limit($item->password, 10)) }}" placeholder="Input Password">
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
                            @foreach ($gender as $jk)
                            <option value="{{ $jk->id }}" {{ old('gender_id', $item->gender_id) == $jk->id ? 'selected' : null }}>
                                {{ $jk->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nik" class="col-form-label">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik', $item->nik) }}" placeholder="Input NIK">
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jabatan" class="col-form-label">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan', $item->jabatan) }}" placeholder="Input Jabatan">
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="divisi" class="col-form-label">Divisi</label>
                        <input type="text" class="form-control @error('divisi') is-invalid @enderror" id="divisi" name="divisi" value="{{ old('divisi', $item->divisi) }}" placeholder="Input Divisi">
                        @error('divisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="atasan" class="col-form-label">Atasan</label>
                        <input type="text" class="form-control @error('atasan') is-invalid @enderror" id="atasan" name="atasan" value="{{ old('atasan', $item->atasan) }}" placeholder="Input Atasan">
                        @error('atasan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ttl" class="col-form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl', $item->ttl) }}" placeholder="Input Tempat Lahir">
                        @error('ttl')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tgl_lahir" class="col-form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir', $user[0]->tgl_lahir) }}">
                        @error('tgl_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kewarganegaraan" class="col-form-label">Kewarganegaraan</label>
                        <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" id="kewarganegaraan" name="kewarganegaraan" value="{{ old('kewarganegaraan', $item->kewarganegaraan) }}" placeholder="Input Kewarganegaraan">
                        @error('kewarganegaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="agama" class="col-form-label">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama', $item->agama) }}" placeholder="Input Agama">
                        @error('agama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="col-form-label">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $item->alamat) }}" placeholder="Input Alamat">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="npwp" class="col-form-label">Npwp</label>
                        <input type="text" class="form-control @error('npwp') is-invalid @enderror" id="npwp" name="npwp" value="{{ old('npwp', $item->npwp) }}" placeholder="Input Npwp">
                        @error('npwp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no_kes" class="col-form-label">No BPJS Kesehatan</label>
                        <input type="text" class="form-control @error('no_kes') is-invalid @enderror" id="no_kes" name="no_kes" value="{{ old('no_kes', $item->no_kes) }}" placeholder="Input No. BPJS Kesehatan">
                        @error('no_kes')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no_tk" class="col-form-label">No BPJS Tenaga Kerja</label>
                        <input type="text" class="form-control @error('no_tk') is-invalid @enderror" id="no_tk" name="no_tk" value="{{ old('no_tk', $item->no_tk) }}" placeholder="Input No. Tenaga Kerja">
                        @error('no_tk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $item->email) }}" placeholder="Input email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="instalasi" class="col-form-label">instalasi</label>
                        <input type="text" class="form-control @error('instalasi') is-invalid @enderror" id="instalasi" name="instalasi" value="{{ old('instalasi', $item->instalasi) }}" placeholder="Input instalasi">
                        @error('instalasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="bank" class="col-form-label">Nama Bank</label>
                        <input type="text" class="form-control @error('bank') is-invalid @enderror" id="bank" name="bank" value="{{ old('bank', $item->bank) }}" placeholder="Input Bank">
                        @error('bank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="rek" class="col-form-label">No. Rekening</label>
                        <input type="text" class="form-control @error('rek') is-invalid @enderror" id="rek" name="rek" value="{{ old('rek', $item->rek) }}" placeholder="Input No. Rekening">
                        @error('rek')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tgl_masuk" class="col-form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control @error('tgl_masuk') is-invalid @enderror" id="tgl_masuk" name="tgl_masuk" value="{{ old('tgl_masuk', $item->tgl_masuk) }}">
                        @error('tgl_masuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="awal_pkwt" class="col-form-label">Mulai PKWT</label>
                        <input type="date" class="form-control @error('awal_pkwt') is-invalid @enderror" id="awal_pkwt" name="awal_pkwt" value="{{ old('awal_pkwt', $item->awal_pkwt) }}">
                        @error('awal_pkwt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="akhir_pkwt" class="col-form-label">Akhir PKWT</label>
                        <input type="date" class="form-control @error('akhir_pkwt') is-invalid @enderror" id="akhir_pkwt" name="akhir_pkwt" value="{{ old('akhir_pkwt', $item->akhir_pkwt) }}">
                        @error('akhir_pkwt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status_pajak" class="col-form-label">Status Pajak</label>
                        <input type="text" class="form-control @error('status_pajak') is-invalid @enderror" id="status_pajak" name="status_pajak" value="{{ old('status_pajak', $item->status_pajak) }}" placeholder="Input Status Pajak">
                        @error('status_pajak')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="col-form-label">Image</label>
                        <input type="hidden" name="oldImage" value="{{ $item->image }}">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" onchange="previewImage()">
                        <img class="img-preview img-fluid mt-3 col-sm-4">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="button mb-3">
                        <button type="submit" class="btn btn-danger btn-modal">Ubah</button>
                    </div>

                    <div class="button mb-3">
                        <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach
{{-- Add Modal --}}
