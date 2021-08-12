{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Cadastrar</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="/css/fontawesome.min.css">
   <link rel="stylesheet" href="/css/dashboard.css">
</head>

<body>
   
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="sidebar-toggle text-light mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>
        <a class="navbar-brand" href="index.html">UNILAB</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown">
                        <img class="rounded-circle" src="imagem/unilabsimbolo.png" width="20" height="20"> &nbsp;<span
                            class="d-none d-sm-inline">Usuário</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="d-flex">
        <nav class="sidebar">
            <ul class="list-unstyled">
                <li><a href="index.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li>
                    <a href="#submenu1" data-toggle="collapse">
                        <i class="fas fa-user"></i> Usuário
                    </a>
                    <ul id="submenu1" class="list-unstyled collapse">
                        <li><a href="listar.html"><i class="fas fa-users"></i> Usuários</a></li>
                    </ul>
                </li>

                <li class="active"><a href="#"> Documentações</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
            </ul>
        </nav>

        <div class="content p-1">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <h2 class="display-4 titulo">Cadastrar Usuário</h2>
                    </div>
                    <a href="listar.html">
                        <div class="p-2">
                            <button class="btn btn-outline-info btn-sm">
                                Listar
                            </button>
                        </div>
                    </a>
                </div>
                <hr>
                <hr>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><span class="text-danger">*</span> Nome</label>
                            <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome completo">
                        </div>
                        <div class="form-group col-md-6">
                            <label><span class="text-danger">*</span> E-mail</label>
                            <input name="email" type="email" class="form-control" id="email"
                                placeholder="Seu melhor e-mail">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Senha</label>
                            <input name="senha" type="password" class="form-control" id="senha"
                                placeholder="Senha com mínimo 6 caracteres">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Confirmar Senha</label>
                            <input name="conf_senha" type="password" class="form-control" id="conf_senha"
                                placeholder="Confirma a senha">
                        </div>
                    </div>
                    {{-- <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Endereço</label>
                            <input name="endereco" type="text" class="form-control" id="endereco"
                                placeholder="Rua João...">
                        </div>
                        <div class="form-group col-md-2">
                            <label>Número</label>
                            <input name="numero" type="text" class="form-control" id="numero" placeholder="123">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Complemento</label>
                            <input name="complemento" type="text" class="form-control" id="complemento"
                                placeholder="Sala, Apartamento...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                <option selected>Selecione</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Cidade</label>
                            <select name="cidade" id="cidade" class="form-control">
                                <option selected>Selecione</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label>CEP</label>
                            <input name="cep" type="text" class="form-control" id="cep" placeholder="12345-678">
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label>Nível de Acesso</label>
                        <select name="nivel_acesso" id="nivel_acesso" class="form-control">
                            <option selected>Selecione</option>
                            <option>Gestor</option>
                            <option>Bolsista/Volutário</option>
                            <option>Orientador/Coordenador</option>
                            <option>Membro da Comissão(CAPP)</option>
                        </select>
                    </div>
                    <p>
                        <span class="text-danger">* </span>Campo obrigatório
                    </p>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    <script defer src="js/fontawesome-all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>

@section('content')    
    
@endsection