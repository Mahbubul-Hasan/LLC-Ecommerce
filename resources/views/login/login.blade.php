@extends("login.master")

@section("title")
    Login || {{ config("app.name") }}
@endsection

@section("body")

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <span class="login100-form-title p-b-51">
                    Login
				</span>
                <form class="login100-form validate-form flex-sb flex-w" method="post" action="{{ route("login") }}">
                    @csrf

                    <div class="wrap-input100 mb-3">
                        @include("message.message")
                    </div>

                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="email" placeholder="Email" value="{{ old("email") }}">
                    </div>


                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="password" name="password" placeholder="Password">
                    </div>

                    {{--<div class="flex-sb-m w-full p-t-3 p-b-24">--}}
                        {{--<div class="contact100-form-checkbox">--}}
                            {{--<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">--}}
                            {{--<label class="label-checkbox100" for="ckb1">--}}
                                {{--Remember me--}}
                            {{--</label>--}}
                        {{--</div>--}}

                        {{--<div>--}}
                            {{--<a href="#" class="txt1">--}}
                                {{--Forgot?--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="container-login100-form-btn m-t-17">
                        <input class="login100-form-btn" type="submit" name="login" value="Login"/>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection