<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Form Login </title>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/floating-labels/" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet" />
</head>

<body>
    <form class="form-signin" method="POST" action="cek.php">
        <div class="text-center mb-4 ">
            <img class="mb-4 rounded-circle" src="assets/brand/logo onedek.png" class="" alt="" width="180" height="180" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-duration="800" />
            <h1 class="h3 mb-3 font-weight-normal" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-duration="800">Form Login Pendataan Siswa/Siswi</h1>
            <p data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-duration="800">Form Pendataan Siswa/Siswi Baru SMKN 1 Depok</p>
        </div>

        <div class="form-label-group" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-duration="1200">
            <input type="text" name="username" class="form-control" placeholder="Email address" required autofocus />
            <label>Username</label>
        </div>

        <div class="form-label-group" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-duration="1800">
            <input type="password" name="password" class="form-control" placeholder="Password" required />
            <label>Password</label>
        </div>
        <div class="form-label-group" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-duration="2400">
            <select class="form-control" name="pilih" required>
                <option>Pilih</option>
                <option value="Admin">Admin</option>
            </select>
        </div>

        <button class="btn btn-lg btn-primary btn-block" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-duration="2800" type="submit">Sign in</button>

    </form>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>