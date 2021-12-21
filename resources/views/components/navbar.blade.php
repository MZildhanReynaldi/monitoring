<input type="checkbox" id="check">
    <!-- NAVBAR ATAS MULAI -->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="sisi_kiri">
            <h3>SIMONPRO</h3>
        </div>
        <div class="sisi_kanan">
            <a href="{{ route('logout') }}" class="logout_btn" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">LOG OUT</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </header>
