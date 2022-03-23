{{-- Edit Modal --}}
@foreach ($pesan as $data)
<div class="modal fade" id="edit-{{ $data->id_pesan }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Pesan Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form>
                <div class="modal-body">
                    {{-- <label for="id_pesan"></label>
                    <input type="hidden" name="id_pesan" id="id_pesan" value="{{$data->id_pesan}}"> --}}
                <div class="mb-3">
                    <label for="nama" class="col-form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $data->email }}">
                </div>
                <div class="mb-3">
                    <label for="suject" class="col-form-label">Subject</label>
                    <input type="text" name="suject" id="subject" class="form-control" value="{{ $data->subject }}">
                </div>
                <div class="mb-3">
                    <label for="isi" class="col-form-label">Isi</label>
                    <textarea name="isi" id="isi" class="form-control" rows="10">{{$data->isi}}</textarea>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
{{-- Edit Modal --}}
