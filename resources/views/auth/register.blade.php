<x-layout>

    {{-- <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-1 font-header">Registrati</h1>
            </div>
        </div>
    </div> --}}
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
            <form class="p-5 card formloginC" method="POST" action=>
                @csrf
                <h1 class="display-5 font-header pb-3">Registrati</h1>

                <div class="mb-3">
                    <label for="name" class="form-label">Nome Utente</label>
                    <input type="text" class="form-control" name="name" id="name">    
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">    
                </div>


                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">    
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">    
                </div>
                <div class="d-flex justify-content-center">

                <button type="submit" class="btn btn-primary btn-login mt-4">Registrati</button>
                </div>
                <p class="small mt-2">Sei gia registrato? <a href="{{ route('login') }}">Clicca qui</a></p>
            
            </form>
            </div>
        </div>
    </div>
</x-layout>