<ul class="nav">
  <li>
    <a href="{{url('dashboard')}}">
      <i class="nc-icon nc-bank"></i>
      <p>Dashboard</p>
    </a>
  </li>
  <li>
    <a href="{{url('perlombaans')}}">
      <i class="nc-icon nc-single-02"></i>
      <p>Peserta Lomba</p>
    </a>
  </li>
  <li>
    <a href="{{url('kategori')}}">
      <i class="fa fa-flag-checkered"></i>
      <p>Jenis Lomba</p>
    </a>
  </li>
  <li>
    <a href="{{url('logout')}}">
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
      <p>Logout</p>
    </a>
  </li>
</ul>