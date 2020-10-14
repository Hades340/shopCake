<!doctype html>
<html lang="en">

<head>
    <title>Just-shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/index.css">
    <script src="/public/JS/jquery-3.4.1.min.js"></script>
    <script src="/public/JS/bootstrap.min.js"></script>
    <script src="/public/JS/action.js"></script>
</head>

<body>
    <!-- Start menu -->
    <?php require_once "./mvc/views/blocks/Menu_Top.php" ?>
    <!-- End menu -->

    <!-- start slide -->
   <?php require_once "./mvc/views/blocks/Slide.php"?>
    <!-- end slide -->

    <!-- start body -->
    <div class="than">
        <div class="Body1 mt-1">
            <div class="container">
                <div class="row ">
               
                    <!-- bắt đầu phần 1 -->
                    <?php require_once "./mvc/views/pages/".$data["Page"].".php"?>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
        <!-- bắt đầu phần thân thứ 2 -->
        <div class="Body2">
            <div class="container ">
                <div class="row ">
                    <div class="col-sm-1 ">

                    </div>
                    <div class="col-sm-10 top bg-white">
                        <div class=" FL mr-3">
                            <div class="media-body">
                                <h5 class="title tin">Giới thiệu sản phẩm</h5>
                                <p class="text font-weight-light">Giới thiệu về một số thông tin về doanh nghiệp của bạn ở đây. Bạn có thể chỉnh sửa nội dung này từ Theme -Options -> Trang chủ -> Giới thiệu / Cài đặt lời chứng thực . Tuyệt vời không phải là không đáng tin cậy trong nền
                                    kinh tế thị trường tự do. Lorem ipsum dolor ngồi amet, consect etuer adipisc trong elit, tự làm empsum dolor ngồi amet, con ở hendrerit vulputate velit tại sectetuer adipisc trong elit.</p>
                                <p class="text font-weight-light"><b>Bạn cũng có thể đặt một nút ở đây </b>để thúc giục khách truy cập biết thêm về bạn hoặc doanh nghiệp của bạn. Duis autem vel eum iriure dolor trong hendrerit trong vulputate velit esse molestie kết quả, vel illum dolore
                                    eu feugiat nulla facilisis tại vero eros et accums and et al iusto z dignissim qui blandit praesent luptatum zzril delenit augues duis dolore te feugait nulla facilisi. Duis autem vel eum iriure dolor hendrerit trong
                                    vulputate velit esse molestie consequat, vel illum dolore eu.</p>
                            </div>
                            <a class=" ml-3" href="#">
                                <img src="/public/img/about.jpg" alt="" style="width:342px;height:260px; border-radius: 5px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-1 "></div>
                </div>
            </div>
        </div>
        <!-- bắt đầu phần thân thứ 3 -->
        <div class="Body1 Body3">
            <div class="container ">
                <h4 class="text-center pt-3 mb-3">SẢN PHẨM MỚI</h4>
                <div class="row ">
                    <div class="col-sm-1 mt-2">
                    </div>
                    <div class="col-sm-10 Chinh">
                        <div class="row">
                            
                            <!-- một phần tin -->
                            <?php require_once "./mvc/views/pages/".$data["NewSP"].".php"?>

                        </div>

                    </div>
                    <div class="col-sm-1 "></div>
                </div>
                <div class="SHIP">
                    <div class="media phanphoi">
                        <a class="d-flex anh" href="#">
                            <img src="/public/img/run.png" alt="">
                        </a>
                        <div class="media-body">
                            <h5 class="title tieude">Tùy chọn Phân phối </h5>
                            <p class="thongtin">Bất kỳ thông báo hoặc hướng dẫn nào mà khách hàng của bạn cần biết trước. Tuyệt vời không phải là không đáng tin cậy trong nền kinh tế thị trường tự do. Danh từ bố trí trong danh mục đầu tư, đường kính không phải là không có
                                trong euismod tincidunt.</p>
                        </div>

                    </div>
                    <div class="media phanphoi">
                        <a class="d-flex anh" href="#">
                            <img src="/public/img/git.png" alt="">
                        </a>
                        <div class="media-body">
                            <h5 class="title tieude">Quà tặng & Bao bì</h5>
                            <p class="thongtin">Chúng tôi có mức giá áp dụng cho gói quà đặc biệt với giá trị tuyệt vời! Tuyệt vời không phải là không đáng tin cậy trong nền kinh tế thị trường tự do. Danh từ bố trí trong danh mục đầu tư, đường kính không phải là không có
                                trong euismod tincidunt..</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end body -->
    <!-- start footter -->
    <?php require_once "./mvc/views/blocks/Footer.php"?>
    <!-- end footter -->
</body>

</html>