<x-layout>
    <header class="container-fluid">
        <div class="row gamingHeader text-center p-5">
            <h1 class="text-white display-3 fw-bold">Contattaci</h1>
        </div>
    </header>

    @if (session('emailError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('emailError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <section class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">

                <form class="w-50 shadow text-white fw-bold p-5" method="POST"
                    action="{{ route('contact_us_submit') }}">
                    {{-- inserisco il csrf token --}}
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Completo</label>
                        <input name="name" type="text" class="form-control" id="name"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Lascia il tuo messaggio</label>
                        <textarea name="user_message" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-dark">Contattaci</button>
                </form>

            </div>
        </div>
    </section>

</x-layout>
