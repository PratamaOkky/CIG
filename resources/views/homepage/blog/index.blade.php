@section('title', 'Garda Mitra Nasional')

@extends('layouts.homepage.template')

@section('content')
  <!-- @foreach($data as $item)
    <h1>{{$item['judul']}}</h1>
    <p>{{$item['isi']}}</p>
  @endforeach
   -->
<div class="container" style="padding-top:100px">
<h1>berikut adalah kegiatan kami</h1>
  @foreach($data as $item)
  <div class="card mb-3">
    <img class="card-img-top" src="{{$item['gambar']}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$item['judul']}}</h5>
      <p class="card-text">{{ \Illuminate\Support\str::limit($item->isi, 20, '...') }}</p>
      <p class="card-text"><small class="text-muted">{{$item['created_at']}}</small></p>
      <!-- <a href="/detail/{{ $item->id }}" class="btn-red btn-danger">Lanjut Baca</a> -->
      <button type="submit" class="btn-red btn-danger" data-bs-target="#detail-{{ $item->id }}" data-bs-toggle="modal">Lihat Detail</button>
    </div>
  </div>
@endforeach
{{$data->Links()}}
</div>
{{-- Detail --}}
    @foreach ($data as $item)
    <div class="modal fade" id="detail-{{$item->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{$item->judul}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <img src="{{$item->gambar}}">
                            <p>{{ $item->isi }}</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    {{-- Detail --}}

@endsection