<link rel="stylesheet" href="css/app.css">
 <div>
    <h1 class="title-auth">Inscription</h1>
    <div class="line-auth mt-4"></div>
    <div class="login m-auto">
        <form methode="post" @submit.prevent="register">
            <b-row align-h="center"  class="mt-5">
                <b-col cols="6">
                    <label>Nom</label>
                    <input type="text" placeholder="Nom"><input/>
                </b-col>
                <b-col cols="6">
                    <label>Prénom</label>

                    <input type="text" placeholder="Prénom"><input/>

                </b-col>
            </b-row>

            <label  class="mt-3">Email</label>

            <input type="email" placeholder="Email"><input/>


            <label class="mt-3">Adresse</label>

            <input type="text" placeholder="Adresse"><input/>
            <label class="mt-3">Numéro de téléphone</label>

            <input type="text" placeholder="Numéro de téléphone"><input/>


            <label class="mt-3">Mot de passe</label>

            <b-form-input type="password" placeholder="Confirmation du mot de passe"></b-form-input>
            <div class="button-valider">
                <b-button type="submit" class="mt-4 button-login-register">Valider</b-button>
            </div>
        </form>
    </div>
</div>

<div class="">{{ __('Register') }}</div>


                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="">
                            <label for="name" class="">{{ __('Name') }}</label>

                            <div class="">
                                <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="">
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="">
                            <label for="password" class="">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="">
                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

