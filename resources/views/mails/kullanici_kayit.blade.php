<h1>{{config('app.name')}}</h1>
<p>Hoşgeldiniz {{$kullanici->ad}} {{$kullanici->soyad}},
Kaydınız başarılı bir şekilde gerçekleştirilmiştir.
Kaydınızı aktifleştirmek için <a href="{{config('app.url')}}/kullanici/aktiflestir/{{$kullanici->aktivasyon_anahtari}}">tıklayın</a>
    İyi Günler..
</p>