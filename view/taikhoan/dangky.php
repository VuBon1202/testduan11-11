<div class="container">
    <div class="dieuhuong mb-4">
        <div class="row mt-3">
            <div class="col">
                <a href="index.php" class="text-decoration-none text-dark">Trang chủ</a> /
                 <span class="text-danger">Đăng ký</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 container0 ">
                <form action="" method="post">
                    <h5 class="tt">Đăng ký tài khoản</h5>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Họ & Tên</label><span> &#x2217;</span>
                        <input name="user" type="text" class="form-control" id="validationDefault01" placeholder="Họ tên" required>
                    </div>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Số điện thoại</label><span> &#x2217;</span>
                        <input type="text" name='tel' class="form-control" id="validationDefault01" placeholder="Số điện thoại" required>
                    </div>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Email</label><span> &#x2217;</span>
                        <input name="email" type="email" class="form-control" id="validationDefault01" placeholder="Email" required>
                    </div>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Mật khẩu </label> <span
                            for="">&#x2217;</span>
                        <input name="pass" type="password" class="form-control" id="validationDefault01" placeholder="Mật khẩu"
                            required>
                    </div>
                    <div class="col-12">
                    <button class="btn btn-primary" type="submit" value="Đăng Kí" name="dangky">Đăng Kí</button>
                    <div class="has-error">
                        <?php
                        if(isset($thongbao) && ($thongbao !="")){
                            echo $thongbao;
                        }
                        ?>
                    </div>
                    </div>
                    <hr class="hr mt-4 mb-4">
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .hr {
        max-width: 300px;
        margin: auto;

    }

    .qm {
        text-align: center;

    }

    .qm a {
        color: brown;

    }

    .qm .qmk {
        margin-left: -25px;
    }

    ::placeholder {
        font-weight: 100;

    }

    span {
        color: red;

    }

    .tt {
        padding: 20px 10px;
        text-align: center;
    }

    .container0 {
        margin: auto;
        background-color: rgb(240, 204, 204);
        margin-bottom: 0.5rem;
        margin-top: 0.5rem;
        border-radius: 3px;
    }

    .container0 button[type="submit"] {
        margin: 10px 0 25px 69px;
        width: 500px;
        background-color: rgb(167, 32, 32);
        border: none;
        border-radius: 3px;
        height: 40px;
    }

    .container0 button[type="submit"]:active {
        background-color: rgb(167, 32, 32) !important;
    }

    .container0 button[type="submit"]:hover {
        background-color: rgb(232, 85, 85) !important;
    }

    .container0 input[type="text"],input[type="email"],
    input[type="password"] {
        max-width: 500px;
        margin: auto;
        margin-bottom: 20px;
        border-radius: 3px;
    }


    .container0 label {
        margin-left: 70px;
        font-weight: 500;
    }
</style>