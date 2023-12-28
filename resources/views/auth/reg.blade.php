<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#user_type').change(function () {
                const selectedType = $('#user_type').val();
                const companyField = $('.companyinfo');
                const addressField = $('.address');

                if (selectedType === 'company') {
                    companyField.removeClass('d-none').addClass('d-block');
                    addressField.addClass('d-none').removeClass('d-block');
                    companyField.find('input').attr('required', 'required');
                    addressField.find('input').removeAttr('required');
                } else {
                    companyField.addClass('d-none').removeClass('d-block');
                    addressField.removeClass('d-none').addClass('d-block');
                    addressField.find('input').attr('required', 'required');
                    companyField.find('input').removeAttr('required');
                }
            });
        });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<section class="vh-100">
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="https://hips.hearstapps.com/hmg-prod/images/lago-1257-home-office-36e8-with-air-desk-1593015859.jpg?crop=1.00xw:0.937xh;0,0.0537xh&resize=2048:*"
                     alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>

            <div class="col-sm-6 text-black">
                <br><br><br><br><br><br>
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form style="width: 23rem;" action="{{route('user.store')}}" method="POST">
                        @csrf
                        @if (session('error'))
                            <div class="alert alert-success">
                                {{ session('error') }}
                            </div>
                        @endif
                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registration</h3>
                        <div class="form-outline mb-4">
                            <label for="user_type" class="form-select"
                                   aria-label="Default select example">User Type:</label>
                            <select id="user_type" name="user_type">
                                <option value="user">User</option>
                                <option value="company">Company</option>
                            </select>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="username" placeholder="Username"
                                   class="form-control form-control-lg" required />
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" name="email" placeholder="Email"
                                   class="form-control form-control-lg" required />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example28"
                                   class="form-control form-control-lg" placeholder="Password" required />
                        </div>

                        <div class="form-outline mb-4">
                            <input type="number" name="phone" placeholder="Phone"
                                   class="form-control form-control-lg" required />
                        </div>
                        <div class="form-outline mb-4 companyinfo d-none">
                            <input type="text" name="company_name" id="company_name" placeholder="Company Name"
                                   class="form-control form-control-lg" />
                        </div>
                        <div class="form-outline mb-4 companyinfo d-none">
                            <input type="text" name="company_address" id="company_address"
                                   placeholder="Company Address" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4 address">
                            <input type="text" name="address" id="address" placeholder="Address"
                                   class="form-control form-control-lg" />
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg btn-block" type="submit">Register</button>
                            <p>You have an account? <a href="{{ route('login') }}"
                                                       class="link-info">login</a></p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
</body>
</html>
