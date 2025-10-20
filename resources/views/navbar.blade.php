<nav>
    <ul>
        @auth
            <a href="/home"><li>Home</li></a>
            <a href="/buku"><li>Buku</li></a>

            <li style="float: right;">Selamat datang, {{ Auth::user()->name }}</li>
            
            <li style="float: right;">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" style="background:none; border:none; padding:0; color:blue; text-decoration:underline; cursor:pointer;">
                        Logout
                    </button>
                </form>
            </li>

        @else
            <a href="/login"><li>Login</li></a>
            <a href="/register"><li>Register</li></a>
        @endguest
    </ul>
</nav>
<hr>