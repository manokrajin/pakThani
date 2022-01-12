<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/loginAlternate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div id="login-logo">
        <img src="/assets/logo.png" alt="">
    </div>

    <div class="login-card flex">
        <div style="margin: 0 auto; padding: 10% 0; width: 365px;">
            <div class="flex" style="flex-direction: row; justify-content: space-between; align-items: center;">
                <p style="text-align: left;">Daftar</p>
                <a href=""><i class="fas fa-times"></i></a>
            </div>

            <div id="form-signup">

                <?php if (isset($validation)) : ?>
                    <div class="alert alert-warning">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo base_url(); ?>/signup" method="post">

                    <div class="flex">
                        <label for="user-email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>

                    <div class="flex">
                        <label for="user-password">Kata Sandi</label>
                        <input type="password" id="password" name="password" placeholder="Kata Sandi">
                    </div>

                    <div class="flex">
                        <label for="user-password-confirmation">Konfirmasi Kata Sandi</label>
                        <input type="password" id="confirmpassword" name="password" placeholder="Konfirmasi Kata Sandi">
                    </div>

                    <div id="btn-signup">
                        <button type="submit" value="Submit">Daftar</button>
                    </div>

                    <div id="btn-kembali">
                        <a href="<?php echo base_url(); ?>/login">
                            <button type="button" value="Submit">Kembali</button>
                        </a>
                    </div>

                    <!-- <div id="pembatas-atau">
                        <img id="atau" src="assets/LoginAlternate_atau.png" alt="">
                    </div> -->

                    <!-- <div id="btn-daftar">
                        <button type="submit" value="Submit">Daftar</button>
                    </div> -->
                </form>
            </div>
        </div>

    </div>
</body>

</html>