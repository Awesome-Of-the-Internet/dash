@extends('layouts.app')
@section('content')
  {{--   <div class="col-12 px-0 " style="max-height: 30px;">
        <div style="height: 120px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-55.30,-42.92 C78.43,114.95 357.22,67.59 523.69,1.48 L491.53,-115.95 L-34.99,-72.53 Z" style="stroke: none; fill: #2b5bbb;"></path>
            </svg></div>
    </div> --}}
 
        
        <div class="col-12 d-flex justify-content-center" style="align-items: center;margin: auto;min-height: 80vh;background: #fff">
            
        
        <form method="POST" action="{{ route('register') }}" style="max-width: 100%;width: 600px;border:1px solid #f1f1f1" class="p-3">
            @csrf

            <div class="col-12">
                
            
                <x-jet-validation-errors class="mb-4" />
            </div>
            
            <div class="col-12 ">
                <div class="input-group">
                    <span class="col-12 py-3" >
                        الاسم
                    </span>
                    <input type="" class="form-control" placeholder="" name="name" style="    border-radius: 0;">
                </div>
            </div>
 
            <div class="col-12 ">
                <div class="input-group">
                    <span class="col-12 py-3" >
                        البريد الالكتروني
                    </span>
                    <input type="email" class="form-control" placeholder="" name="email" style="    border-radius: 0;">
                </div>
            </div>


            
            <div class="col-12 ">
                <div class="input-group">
                    <span class="col-12 py-3" >
                        كلمة المرور
                    </span>
                    <input type="password" class="form-control" placeholder="" name="password" style="    border-radius: 0;">
                </div>
            </div>

 
            <div class="col-12 ">
                <div class="input-group">
                    <span class="col-12 py-3" >
                        تأكيد كلمة المرور
                    </span>
                    <input type="password_confirmation" class="form-control" placeholder="" name="password_confirmation" style="    border-radius: 0;">
                </div>
            </div> 

            <div class="col-12 col-lg-4 mt-4"  >
                <button style=" padding:10px 0px ; width: 100%;border-radius: 0;" class="btn btn-primary ">
                    <h6 style="color: #fff;">تسجيل</h6>
                </button>
            </div>

            {{-- <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    تسجيل
                </x-jet-button>
            </div> --}}
        </form>

        </div> 
@endsection