<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/view/css/login.css">
    <title>CTF</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Tạo tài khoản</h1>
                <input type="text" placeholder="Tên của bạn">
                <input type="text" placeholder="Tài khoản">
                <input type="password" placeholder="Mật khẩu">
                <button>Đăng ký</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Đăng nhập</h1>
                <input type="text" placeholder="Tài Khoản">
                <input type="password" placeholder="Mật khẩu">
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

    <script src="/view/js/login.js"></script>
</body>

</html>