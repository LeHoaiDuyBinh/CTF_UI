<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/public/css/login.css">
    <link rel="stylesheet" href="https://unpkg.com/sweetalert2@11.0.0/dist/sweetalert2.min.css">

    <script src="https://unpkg.com/sweetalert2@11.0.0/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>CTF</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form id="registryForm">
                <h1>Tạo tài khoản</h1>
                <input name="username" type="text" placeholder="Tài khoản">
                <input name="password" type="password" placeholder="Mật khẩu">
                <input name="email" type="email" placeholder="Email">
                <button>Đăng ký</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="/Auth/Login" method="POST">
                <h1>Đăng nhập</h1>
                <?php if(isset($_SESSION['message'])): ?>
                <div style="width: 100%; text-align: center;  font-style:italic; font-size: 16px;" class="alert alert-danger"><?php echo $_SESSION['message']; ?></div>
                    <?php unset($_SESSION['message']); ?>
                <?php endif; ?>
                <input type="text" placeholder="Tài Khoản" name="username">
                <input type="password" placeholder="Mật khẩu" name="password">
                <button>Đăng nhập</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Chào mừng bạn đến với cuộc thi CTF</h1>
                    <p>Đăng nhập tài khoản và chiến đấu thôi nào !</p>
                    <button class="hidden" id="login">Đăng nhập</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Chào mừng bạn đến với cuộc thi CTF</h1>
                    <p>Đăng ký ngay tài khoản để có thể vào chinh chiến và giành thành tích thật tốt nhé !</p>
                    <button class="hidden" id="register">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/public/js/login.js"></script>
</body>

</html>
<script>
    function showLoadingSwal() {
            return Swal.fire({
                title: 'Loading...',
                text: 'Vui lòng chờ trong giây lát!',
                timer: 2000,
                showConfirmButton: false,
                imageUrl: '/public/img/gif/loading.gif',
                allowOutsideClick: false // Không cho phép đóng khi click ra ngoài
            });
        }

    $('#registryForm').submit(function(e){
        e.preventDefault();

        // gửi data
        var sw = showLoadingSwal();
            $.ajax({
                url:'/Auth/Registry',
                method: 'POST',
                data:$(this).serialize(),
                error:err=>{
                    console.log(err)
                },
                success:function(resp){
            if(resp.trim() == "done"){
            Swal.fire(
                'Completed!',
                'Đăng kí thành công!',
                'success'
                )
            setTimeout(function() {
                location.reload();
            }, 1000);
            }else{
                
                Swal.fire(
                'Wrong!',
                resp,
                'error'
                )
                //nhớ thêm cái này cho mấy trang kia
               
            }
        }
    })
    });
</script>