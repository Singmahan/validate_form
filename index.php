<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Validate Form</title>

    <style>
        .error {
            display: block;
            padding-top: 5px;
            font-size: 12px;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h1>Validate form test</h1>
                <form action="" id="add-form">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="submit" class="btn btn-success" value="save data">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function() {
            if ($('#add-form').length > 0) {
                $('#add-form').validate({
                    rules: {
                        name: {
                            required: true
                        },
                        email: {
                            required: true,
                            maxlength: 60,
                            email: true
                        },
                        password: {
                            required: true,
                            maxlength: 10
                            
                        }
                    },
                    messages: {
                        name: {
                            required: '* กรุณาป้อนชื่อ - นามสกุล ของคุณ',
                        },
                        email: {
                            required: '* กรุณาป้อน Email ของคุณ',
                            email: 'กรุณาป้อน Email ของคุณให้ถูกต้อง',
                            maxlength: 'ความยาว Email ของคุณต้องมีขนาดไม่เกิน 60 ขักขระ'
                        },
                        password: {
                            required: '* กรุณาป้อน password ของคุณให้ถูกต้อง',
                            maxlength: 'ความยาว Email ของคุณต้องมีขนาดไม่เกิน 10 ขักขระ'
                        }
                    }
                })
            }
        })
    </script>
</body>

</html>