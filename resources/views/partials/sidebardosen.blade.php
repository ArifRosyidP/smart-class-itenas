{{-- <div id="mySidenav" class="sidenav sticky-top"> --}}
<div id="mySidenav" class="sidenav">
    <a href="/" id="side1" class="textw"><i class="fa-solid fa-house logowsidebaro"></i>Home</a>
    <a href="/dashboard" id="side2" class="asettext"><i class="fa-solid fa-pen-to-square logowsidebarw"></i>Pemesanan
        Ruangan</a>
    {{-- <a href="/statuspesan" id="side3" class="textw">
        <i class="fa-solid fa-building-circle-exclamation logowsidebaro"></i>
        Status Pemesanan
    </a> --}}
    @if (auth()->user()->level == 'admin')
        <a href="/truangan" id="side3" class="asettext"><i class="fa-solid fa-plus logowsidebaro"></i>Tambah
            Ruangan</a>
    @endif
</div>
