<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <title>Document</title>
</head>
<body>
<section class="vh-100">
    <div class="container-fluid">
        <div class="row">


            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img
                    src="https://hips.hearstapps.com/hmg-prod/images/lago-1257-home-office-36e8-with-air-desk-1593015859.jpg?crop=1.00xw:0.937xh;0,0.0537xh&resize=2048:*"
                    alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>


            <div class="col-sm-6 text-black">
                <br><br><br><br><br><br><br>
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form style="width: 23rem;" action="{{ route('user.login') }}"
                          method="POST">
                        @csrf
                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
                        <div class="form-outline mb-4">
                            <input type="email" id="form2Example18" name="email" class="form-control form-control-lg"
                                   placeholder="Email address"/>
                            @if($errors->has('email'))
                                <label class="form-label" for="form2Example18">Email address</label>
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example28"
                                   class="form-control form-control-lg" placeholder="Password"/>
                            @if($errors->has('password'))
                                <label class="form-label" for="form2Example28">Password</label>
                                <div class="text-danger">{{ $errors->first('password') }}</div>
                            @endif

                        </div>
                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                        </div>
                        <p class="small  pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                        <p>Don't have an account? <a href="{{ route('user.registration') }}" class="link-info">Register
                                here</a></p>

                    </form>

                </div>

            </div>

        </div>
    </div>
</section>
<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>

    @if(session()->has('success'))
        toastr.success('{{ session()->get('success') }}');
    @elseif(session()->has('error'))
        toastr.error('{{ session()->get('error') }}');
    @endif
</script>

</body>
</html>
