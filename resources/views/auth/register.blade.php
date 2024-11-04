@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Add PhoneNumber Field -->
                            <div class="row mb-3">
                                <label for="phoneNumber"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="phoneNumber" type="text"
                                        class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber"
                                        value="{{ old('phoneNumber') }}" required>

                                    @error('phoneNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" required>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <!-- Add City Field -->
                            <div class="row mb-3">
                                <label for="city"
                                    class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <select id="city" class="form-control @error('city') is-invalid @enderror"
                                        name="city" value={{ old('city') }} required>
                                        <option value="Cairo">Cairo</option>
                                        <option value="Giza">Giza</option>
                                        <option value="Alexandria">Alexandria</option>
                                        <option value="Shubrā al Khaymah">Shubrā al Khaymah</option>
                                        <option value="Ḩalwān">Ḩalwān</option>
                                        <option value="Al Maḩallah al Kubrá">Al Maḩallah al Kubrá</option>
                                        <option value="Ţanţā">Ţanţā</option>
                                        <option value="Asyūţ">Asyūţ</option>
                                        <option value="Al Fayyūm">Al Fayyūm</option>
                                        <option value="Az Zaqāzīq">Az Zaqāzīq</option>
                                        <option value="Al ‘Ajamī">Al ‘Ajamī</option>
                                        <option value="Kafr ad Dawwār">Kafr ad Dawwār</option>
                                        <option value="Damanhūr">Damanhūr</option>
                                        <option value="Al Minyā">Al Minyā</option>
                                        <option value="Mallawī">Mallawī</option>
                                        <option value="Damietta">Damietta</option>
                                        <option value="Qinā">Qinā</option>
                                        <option value="Banī Suwayf">Banī Suwayf</option>
                                        <option value="Shibīn al Kawm">Shibīn al Kawm</option>
                                        <option value="Banhā">Banhā</option>
                                        <option value="Kafr ash Shaykh">Kafr ash Shaykh</option>
                                        <option value="Disūq">Disūq</option>
                                        <option value="Mīt Ghamr">Mīt Ghamr</option>
                                        <option value="Munūf">Munūf</option>
                                        <option value="Fāqūs">Fāqūs</option>
                                        <option value="Qalyūb">Qalyūb</option>
                                        <option value="Jirjā">Jirjā</option>
                                        <option value="Akhmīm">Akhmīm</option>
                                        <option value="Al Badrashayn">Al Badrashayn</option>
                                        <option value="Al Khānkah">Al Khānkah</option>
                                        <option value="‘Izbat al Burj">‘Izbat al Burj</option>
                                        <option value="Kirdāsah">Kirdāsah</option>
                                        <option value="Abnūb">Abnūb</option>
                                        <option value="Al Minshāh">Al Minshāh</option>
                                        <option value="Al Qurayn">Al Qurayn</option>
                                        <option value="Al Balyanā">Al Balyanā</option>
                                        <option value="Al ‘Ayyāţ">Al ‘Ayyāţ</option>
                                        <option value="Al Badārī">Al Badārī</option>
                                        <option value="Kafr al Kurdī">Kafr al Kurdī</option>
                                        <option value="Abū Qīr">Abū Qīr</option>
                                        <option value="Al Karnak">Al Karnak</option>
                                        <option value="Mīt Namā">Mīt Namā</option>
                                        <option value="Banī Murr">Banī Murr</option>
                                        <option value="Al Madāmūd">Al Madāmūd</option>
                                        <option value="Birqāsh">Birqāsh</option>
                                        <option value="Kafr Ţaḩlah">Kafr Ţaḩlah</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
