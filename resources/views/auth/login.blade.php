@extends('layouts.app')
@section('content')
  {{--   <div class="col-12 px-0 " style="max-height: 30px;">
        <div style="height: 120px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-55.30,-42.92 C78.43,114.95 357.22,67.59 523.69,1.48 L491.53,-115.95 L-34.99,-72.53 Z" style="stroke: none; fill: #2b5bbb;"></path>
            </svg></div>
    </div> --}}
    
        <div style="background: #fff" class="col-12 px-0 d-flex justify-content-center " >
            <div class="col-12 m-auto d-flex justify-content-center" style="min-height: 70vh;">
                <form method="POST" action="{{ route('login') }}" aria-label="Login" class="d-flex" style="align-items: center;">
                    @csrf
                    <div style="width: 600px ; max-width: 100%;background: rgba(250,250,250,.97); ;margin: 0px auto;padding: 40px 0px " class="row">
                        <x-jet-validation-errors class="mb-4" />
                        {{--
                        @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                        @endif
                        --}}
                        <div style="width: 500px; background: #fff;  margin:0px auto ;padding: 10px 0px;      max-width: 100%; " class="row">
                            <div class="col-12 mb-3">
                                <div class="col-12 text-right">
                                    <h6 style="color: #428bca;" class="font-4">تسجيل دخول </h6>
                                </div>
                            </div>
                            <div class="col-12 py-2 ">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3" style="   border-radius: 0;padding: 3px 10px 0px 10px;width: 120px">
                                        البريد الالكتروني
                                    </span>
                                    <input type="email" class="form-control" placeholder="البريد الالكتروني" name="email" style="    border-radius: 0;">
                                </div>
                            </div>
                            <div class="col-12 py-2 ">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3" style="   border-radius: 0;padding: 3px 10px 0px 10px;width: 120px">
                                        كلمة المرور
                                    </span>
                                    <input type="password" class="form-control" placeholder="كلمة المرور    " name="password" style="    border-radius: 0;">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4" style="margin-top: 10px;">
                                <button style=" padding:10px 0px ; width: 100%;border-radius: 0;" class="btn btn-primary ">
                                    <h6 style="color: #fff;">تسجيل دخول </h6>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{--
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
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form> --}} 
@endsection