<style>
    .dropdown {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        text-decoration: none;
    }
    .dropdown:hover {
        background: #4e555b;
    }
    #list {
        background: rgba(169, 182, 186, 0.37);

    }
</style>
<nav class="navbar navbar-inverse">
    <p class="navbar-text"></p>
    <p class="navbar-text"
       style="color:#2b9328; font-size:18px; font-weight: bold; font-family: 'Montserrat', sans-serif ">HOŞGELDİNİZ</p>
    <ul class="nav navbar-nav" id="AnasayfaNavbar">

        @guest

            <li style="margin-top: 6px;"><img src="../icon/logout.png"/></li>
            <li><a href="{{route('signin')}}">SIGN-IN</a></li>
            <li style="margin-top: 6px;"><img src="../icon/login.png"/></li>
            <li><a href="{{route('signup')}}">SIGN-UP</a></li>
        @endguest
        @auth
            <li>
                <a href="#"><i class="fa fa-envelope-o"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                   aria-expanded="false" aria-haspopup="true" v-pre><img src="../icon/Home.png"/>&nbsp;Ev Sahibi Ol
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" id="list">
                    <li>
                        <a href="###">Oda Ekle</a>
                    </li>
                    <li>
                        <a href="###">Kaldığınız Odalar</a>
                    </li>

                    <li>
                        <a href="###">Rezervasyonlarınız</a>
                    </li>
                    <li>
                        <a href="###">Odalarınız</a>
                    </li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                   aria-expanded="false" aria-haspopup="true" v-pre><img src="../icon/userprofile.png"/>&nbsp;Profil
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" id="list">
                    <li>
                        <a href="{{ route('profil') }}">Edit Profile</a>
                    </li>
                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                        <form id="logout-form" action="{{route('kullanici.signout')}}" method="post" style="display: none">
                            {{csrf_field()}}
                        </form>
                    </li>
                </ul>
            </li>
    </ul>
    @endauth
</nav>