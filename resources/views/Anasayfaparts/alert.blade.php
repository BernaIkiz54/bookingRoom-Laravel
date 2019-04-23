@if (session() ->has('mesaj'))
    <div class="container">
      <div class="allert allert-{{session('mesaj_tur')}}">{{session('mesaj')}}</div>
    </div>
@endif