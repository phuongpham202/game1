<?php
    session_start();
    require "./config/config.php";
    
    if (isset($_POST["login"])) {
        
        $user = $_POST["user_name"];
        $pass = md5($_POST["pass_word"]);
        $sql = "SELECT * FROM user where user_name='".$user."' and pass_word='".$pass."'";  

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION["user_name"] = "$user";
            header('Location: index.php');
        } else {
            echo "<span style='color: red;position: absolute;top:47vh;right: 26vw;font-size: 12px;'>*Sai tên đăng nhập hoặc mật khẩu!</span>";
        }
    }
        
        
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/style_login.css">
</head>
<body>
    <div class="cart--login">
        <div class="container">
            <div class="login--navbar">
                <div class="navbar--logo">
                    <img src="./img/logo.png" alt="">
                    <span>Đăng nhập</span>
                </div>
                <div class="login--suppot">
                    <a href="#">Cần trợ giúp?</a>
                </div>
            </div>
        </div>
    </div>
    <div class="login--body">
        <div class="container">
            <div class="body--left">
                <div class="left--icon login--text">
                    <i class="fas fa-shopping-bag" style="margin-left: 12vw;"></i>
                </div>
                <div class="login--text">
                    <p>Nền tảng thương mại điện tử</p>
                    <p style="margin-left: 2vw;">yêu thích ở Đông Nam Á</p>
                </div>
            </div>
            <div class="body--right">
                <div class="right--appter">
                    <span class="login--magin">Đăng nhập</span>
                    
                </div>
                <div class="right--body">
                    <div class="body--user login--magin">
                        <form action="#" method="post">
                            <input class="user--input" type="text" name="user_name" placeholder="Email/Số điện thoại/Tên Đăng nhập">
                            <div class="body--pass login--top">
                                <input class="user--input" type="password" name="pass_word" placeholder="Mật khẩu">
                            </div>
                            <div class="login--top">
                                <input class="body--submit" type="submit" name="login" value="ĐĂNG NHẬP">
                            </div>
                        </form>
                    </div>
                    <div class="supper">

                        <div class="body--forget login--magin">
                            <a href="#">Quên mật khẩu</a>
                            <a href="#">Đăng nhập với SMS</a>
                        </div>
                        <div class="body--or login--magin">
                            <div class="or--1">
                            </div>
                            <div class="or--mit">
                                <Span style="opacity: 0.7;">HOẶC</Span>
                            </div>
                            <div class="or--1"></div>
                        </div>
                        <div class="body--app login--magin">
                            <div class="app--face">
                                <div class="face--logo">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1024px-Facebook_Logo_%282019%29.png" alt="">
                                </div>
                                <div class="face--text">
                                    <span>Facebook</span>
                                </div>
                            </div>
                            <div class="app--google">
                                <div class="google--logo">
                                    <img src="https://freesvg.org/img/1534129544.png" alt="">
                                </div>
                                <div class="google--text">
                                    <span>Google</span>
                                </div>
                            </div>
                            <div class="app--apple">
                                <div class="apple--logo">
                                    <img src="https://athgroup.vn/Images/Img_Products/images/ath-y-nghia-logo-Apple(2).png" alt="">
                                </div>
                                <div class="apple--text">
                                    <span>Apple</span>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="right--befor">
                    <span>Bạn mới biết đến Shop? </span>
                    <a href="dangky.php" style="color: #ff0000;margin-left: 0.2vw; text-decoration: none;">Đăng kí</a>
                </div>
            </div>
        </div>
    </div>
    <div class="cart--footer">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <p class="footer--header">Chăm sóc khách hàng</p>
                    <span class="footer--text">Trung tâm trợ giúp</span>
                    <span class="footer--text">Shopee Blog</span>
                    <span class="footer--text">Shopee Mall</span>
                    <span class="footer--text">Hướng dẫn mua hàng</span>
                    <span class="footer--text">Hướng dẫn mua hàng</span>
                </div>
                <div class="col-3">
                    <p class="footer--header">Về Shop</p>
                    <span class="footer--text">Giới thiệu về Shopee Việt Nam</span>
                    <span class="footer--text">Tuyển dụng</span>
                    <span class="footer--text">Điều Khoản Shopee</span>
                    <span class="footer--text">Chính sách bảo mật</span>
                    <span class="footer--text">Kênh Người bán</span>
                </div>
                <div class="col-3">
                    <h6>Tìm cửa hàng</h6>
                    <span>Tìm cửa hàng gần nhất</span>
                    <span>Mua hàng từ xa</span>
                    <span>
                        <a href="https://www.facebook.com/profile.php?id=100025352810031">Gặp trực tiếp cửa hàng gần nhất (Fanpage)</a>
                    </span>
                    <h6 style="margin-top: 2vh;">Phương thức thanh toán</h6>
                    <span>
                        <img src="https://mms.businesswire.com/media/20210126006164/en/854905/4/Visa+Brand+Mark+-+Blue+-+900x291.jpg?download=1" alt="">
                        <img src="data:image/png;base64,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" alt="">
                        <img src="http://blog.abit.vn/wp-content/uploads/2020/04/zalopay-tiki.png" alt="">
                        <img src="data:image/png;base64,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" alt="">
                        <img src="https://banktop.vn/wp-content/uploads/2020/07/vay-tien-atm-online.jpg" alt="">
                    </span>
                    <span>
                        <img src="https://mms.businesswire.com/media/20210126006164/en/854905/4/Visa+Brand+Mark+-+Blue+-+900x291.jpg?download=1" alt="">
                        <img src="data:image/png;base64,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" alt="">
                        <img src="http://blog.abit.vn/wp-content/uploads/2020/04/zalopay-tiki.png" alt="">
                        <img src="data:image/png;base64,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" alt="">
                        <img src="https://banktop.vn/wp-content/uploads/2020/07/vay-tien-atm-online.jpg" alt="">
                    </span>
                </div>
                <div class="col-3">
                    <div class="footer--text">
                        <span>Gọi mua hàng: </span>
                        <span style="font-weight: 700;">1800.2097</span>
                        <span> (8h00 - 22h00)</span>
                    </div>
                    <div class="footer--text">
                        <span>Gọi mua hàng: </span>
                        <span style="font-weight: 700;">1800.2063</span>
                        <span> (8h00 - 21h30)</span>
                    </div>
                    <div class="footer--text">
                        <span>Gọi mua hàng: </span>
                        <span style="font-weight: 700;">1800.2064</span>
                        <span> (8h00 - 21h00)</span>
                    </div>
                    <h6 style="margin-top: 2vh;">Đối tác dịch vụ bảo hành</h6>
                    <span>Điện Thoại - Máy tính</span>
                    <img src="https://dienthoaivui.com.vn/wp-content/uploads/2019/03/logo-DTV_cn1.png" alt="">
                </div>
                <div class="col-3">
                    <span>Mua hàng và thanh toán Online</span>
                    <span>Mua hàng trả góp Online</span>
                    <span>Tra thông tin đơn hàng</span>
                    <span>Tra điểm Smember</span>
                    <span>Tra thông tin bảo hành</span>
                    
                </div>
                <div class="col-3">
                    <span>Quy chế hoạt động</span>
                    <span>Chính sách Bảo hành</span>
                    <span>Liên hệ hợp tác kinh doanh</span>
                    <span>Đơn Doanh nghiệp</span>
                    <span>Ưu đãi từ đối tác</span>
                    <span>Tuyển dụng</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>