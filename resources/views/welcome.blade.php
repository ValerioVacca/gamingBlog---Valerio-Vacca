<x-layout>

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <header class="container-fluid">
        <div class="row gamingHeader text-center p-5">
            <h1 class="text-white display-3 fw-bold">Homepage</h1>
        </div>
    </header>

</x-layout>
