@extends('layouts.appnonav')

@section('content')

<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xxl"> <a class="navbar-brand block" href="#">eSveska</a>

            <section class="panel panel-default bg-white m-t-lg">

                <header class="panel-heading text-center"> <strong>Uloguj se</strong> </header>

                <form method="POST" action="{{ route('login') }}" class='panel-body wrapper-lg'>
                    @csrf

                    <div class="form-group">
                        <label class="control-label">Korisničko ime</label>
                        <input type="text" placeholder="ime.prezime" class="form-control input-lg @error('username') is-invalid @enderror" name='username'required autocomplete="username" autofocus> 

                        @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="control-label">Lozinka</label>
                        <input type="password" id="inputPassword" placeholder="Lozinka" class="form-control input-lg @error('password') is-invalid @enderror" name='password' required autocomplete="current-password"> 
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                        {{ __('Zapamti me') }}
                            </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Prijavi se</button>
                </form>
                
                
            </section>
            
            <small>{{ config('app.name')}} je nezavisna platforma.</small>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder">
            <p> <small>{{ config('app.name')}}<br>Copyright &copy; 2019</small> </p>
        </div>
    </footer>

@endsection
