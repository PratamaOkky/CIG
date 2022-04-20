
    @foreach ($artikel as $item)
    <div id="detail-{{$item->id}}">

                    <h5 >{{$item->judul}}</h5>
                   </div>

            
                            <p>{{ $item->isi }}</p>
                        
         
    @endforeach