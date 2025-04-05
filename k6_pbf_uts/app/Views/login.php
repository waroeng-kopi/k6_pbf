<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Siswa SMA Suka Suka</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mx-5 my-5 d-flex justify-content-center" >
        
        <div class="card mb-3" style="max-width: 540px;">
            <div class="card text-center">
                <div class="card-header">
                    <b>Halaman Login bukan Halaman Rumah</b>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://img.freepik.com/free-vector/key-concept-illustration_114360-6305.jpg?t=st=1716641017~exp=1716644617~hmac=f228144d1d6d7447eb1eee786e8727ccb84fc04b897b94d42db6c89b32efc169&w=740" class="img-fluid rounded-start" alt="...">
                </div>
            <div class="col-md-8">
                <div class="card-body">
                    <form action="<?= base_url('aksilogin') ?>" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">ID User</span>
                            <input type="text" name="f_id" class="form-control" placeholder="Input ID User" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                            <input type="password" name="f_pass" class="form-control" placeholder="Input Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <button type="submit" class="btn btn-primary">LOGIN</button>

                    </form>

                          



                    
                </div>
            </div>
        </div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>