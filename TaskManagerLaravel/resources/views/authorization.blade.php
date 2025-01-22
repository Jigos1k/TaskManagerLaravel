@extends('layout.app')
@section('title',  'Авторизация')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="vh-100 w-100 d-flex justify-content-center align-items-center">
            <div class="register-panel p-4 shadow-sm bg-body bg-gradient rounded-4">
                <div class="d-flex justify-content-center">
                    <div class="shadow rounded-4 p-2 d-flex align-items-center justify-content-center mb-3">
                        <i class="fa-solid fa-arrow-right-to-bracket fs-2"></i>
                    </div>
                </div>

                <div class="text-center">
                    <label class="fs-5 fw-bolder mb-2">Войдите в свою учетную запись</label>
                    <label class="mb-4">Войти чтобы иметь доступ к системе управления проектами.</label>
                </div>

                <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Почта" required>

                <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Пароль" required>
                
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                <div class="d-flex justify-content-center mb-3">
                    <button type="submit" class="btn btn-primary">Войти</button>
                </div>

                <div class="d-flex justify-content-center" style="font-size: 0.825rem">
                    <label>У вас уже нет акаунта? <a class="btn-link" href="{{ route('register.show') }}">Зарегистрироваться</a></label>
                </div>
            </div>
        </div>
    </form>
@endsection