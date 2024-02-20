@extends('layout.register')

@section('container')
    <h1 class="">Register</h1>
    <p class="signup-link register">Already have an account? <a href="/login">Log in</a></p>
    <form class="text-left">
        <div class="form">

            <div class="field-wrapper input">
                <label for="t-text">FULLNAME</label>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <input id="t-text" type="text" name="fname" placeholder="Fullname" class="form-control" required>
            </div>

            <div id="username-field" class="field-wrapper input">
                <label for="username">USERNAME</label>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <input id="username" name="username" type="text" class="form-control" placeholder="Username">
            </div>

            <div id="password-field" class="field-wrapper input">
                <div class="d-flex justify-content-between">
                    <label for="password">PASSWORD</label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-lock">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    id="toggle-password" class="feather feather-eye">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
            </div>

            <div class="row  mb-2">

            <div class="col field-wrapper input">
                <label for="outlet">OUTLET</label>
                <select id="outlet" name="outlet" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>

            <div class="col field-wrapper input">
                <label for="role">ROLE</label>
                <select id="role" name="role" class="form-control">
                    <option>admin</option>
                    <option>kasir</option>
                    <option>owner</option>
                </select>
            </div>
        </div>
            {{-- <div class="field-wrapper terms_condition">
                <div class="n-chk">
                    <label class="new-control new-checkbox checkbox-primary">
                        <input type="checkbox" class="new-control-input">
                        <span class="new-control-indicator"></span><span>I agree to the <a href="javascript:void(0);"> terms
                                and conditions </a></span>
                    </label>
                </div>

            </div> --}}

            <div class="d-sm-flex justify-content-between">
                <div class="field-wrapper">
                    <button type="submit" class="btn btn-primary" value="">Get Started!</button>
                </div>
            </div>

        </div>
    </form>
@endsection
