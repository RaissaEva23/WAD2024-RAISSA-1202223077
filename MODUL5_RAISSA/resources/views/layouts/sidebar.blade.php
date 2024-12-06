<div class="d-flex flex-column bg-dark text-white" style="height: 100vh; width: 250px;">
    <div class="p-3">
        <h2 class="text-center">Universitas EAD</h2>
    </div>
    <ul class="nav flex-column p-3 mt-3">
        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center gap-2 p-2 rounded-3 mb-2 hover-shadow" href="{{ route('dashboard') }}">
                <span class="material-symbols-rounded">dashboard</span> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center gap-2 p-2 rounded-3 mb-2 hover-shadow" href="{{ route('dosen.index') }}">
                <span class="material-symbols-rounded">person</span> Dosen
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center gap-2 p-2 rounded-3 mb-2 hover-shadow" href="{{ route('mahasiswa.index') }}">
                <span class="material-symbols-rounded">school</span> Mahasiswa
            </a>
        </li>
    </ul>
</div>

<!-- Add some custom CSS -->
<style>
    /* Add smooth hover effect on nav items */
    .nav-link {
        transition: background-color 0.3s ease;
    }
    .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }
    .hover-shadow:hover {
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
    }
</style>
