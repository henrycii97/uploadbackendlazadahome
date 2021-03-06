<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lazada/home</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>home2.css">
    <link rel="stylesheet" href="<?= base_url() ?>slidebanner.css">
    <link rel="stylesheet" href="<?= base_url() ?>scrolltop.css">
</head>
<body>
    <div class="ads item-1">
     <div class="banner-ads ">
         <div class="icon">
            <ion-icon name="close-outline"></ion-icon>
         </div>
         
        </div>
    </div>

      <!-- end banner ads -->
      <div class="header item-1">
        <div class="header-content ">
            <div class="link-all-header">

           
           <ul class="link-header container-full">
               <li class="app"><span>TIẾT KIỆM HƠN VỚI ỨNG DỤNG</span></li>
               <li class="sales-together"><a href="">BÁN HÀNG CÙNG LAZADA</a></li>
               <li class="customer-carer"><span>CHĂM SÓC KHÁCH HÀNG</span></li>
               <li class="order-check"><span>KIỂM TRA ĐƠN HÀNG</span></li>
               <li class="login"><a href="">ĐĂNG NHẬP</a></li>
               <li class="signup"><a href="">ĐĂNG KÝ</a></li>
               <li class="language"><span>CHANGE LANGUAGE</span></li>
           </ul>
        </div>
           <!-- end link-header -->
           <div class="content-link-header">
            <div class="content-app-all">
                <h2>Tải ứng dụng để có trải nghiệm tốt nhất</h2>
                <div class="content-app">
                  <div class="qr"><img src="<?= base_url() ?>images/qr.png" alt=""></div>  
                    <div class="text-app">
                        <a href=""> Mua sắm thông qua ứng <br> dụng của chúng tôi để được:</a>
                        <ul>
                            <li><a href=""> Voucher độc quyền</a></li>
                            <li><a href=""> Deal tốt hơn</a></li>
                            <li><a href=""> Các khuyến mãi chỉ dành cho bạn</a></li>
                            <li><a href="">  Luôn cập nhật đầu tiên </a></li>
                        </ul>
                    </div>
                      
                </div>
                <div class="type-app">
                  <input type="text" placeholder="eg.0123456789">
                  <div class="icon-type">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                  </div>
                </div>
                <div class="app-img">
                   <a href=""><img src="<?= base_url() ?>images/ios.png" alt=""></a>
                   <a href=""><img src="<?= base_url() ?>images/androi.png" alt=""></a>
               </div>
            </div> 
            <!-- end-app -->
            <div class="customer-care mp" >
               
                     <div class="content-customer">
                         <div class="icon-customer"><ion-icon name="person-circle-outline"></ion-icon></div>
                           <div class="text-customer"><a href="">Trung tâm hỗ trợ</a>  </div>
                     </div> 
                     <div class="content-customer">
                         <div class="icon-customer"><ion-icon name="card-outline"></ion-icon></div>
                           <div class="text-customer"><a href="">Đơn hàng & thanh toán</a></div>
                     </div> 
                     <div class="content-customer">
                         <div class="icon-customer"> <i class="fas fa-shipping-fast"></i></div>
                           <div class="text-customer"><a href="">Giao hàng & nhận hàng</a></div>
                     </div> 
                     <div class="content-customer">
                         <div class="icon-customer"><i class="fas fa-box-open"></i></div>
                           <div class="text-customer"><a href="">Đổi trả hàng & Hoàn tiền</a></div>
                     </div> 
                     <div class="content-customer">
                         <div class="icon-customer"><ion-icon name="person-circle-outline"></ion-icon></div>
                           <div class="text-customer"><a href="">Liên hệ với lazada</a></div>
                     </div> 
            </div>  
            <!-- end customer -->
            <div class="content-order-check">
                <h2> Kiểm tra đơn hàng</h2>
                <div class="enter-order-check">
                    <div class="enter-address">
                      <div class="title-ars">Vui lòng nhập địa chỉ email:</div> 
                      <input type="text">
                      
                    </div>
                    <div class="tenter-item-code">
                      <div class="title-icode">Vui lòng nhập mã đơn hàng:</div> 
                     
                      <div class="type-order">
                        <input type="text"  placeholder="eg.0123456789">
                        <div class="icon-order">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                       
                      </div>
                    </div>
                    <div class="click-pleale">
                      Nếu bạn có thắc mắc nào khác,<a href=""> Nhấn <br> vào đây</a>
                    </div>
                </div>
             </div>
             <!-- end order-check -->
             <div class="content-link-language">
                <div class="content-language">
                    <img src="" alt="">
                    <div class="text-language">VN/ <br> Vietnamese </div>
                </div>
                <div class="content-language">
                    <img src="" alt="">
                    <div class="text-language">EN/ <br> English </div>
                </div>
              
             </div>
             <!-- end language -->
           </div>
        </div>
        <div class="navbar item-1">
          <div class="nav-bar-menu  container-full">
           <a href=""><div class="logo">
              <img src="<?= base_url() ?>images/logolazada.png" alt="">
            </div>
        </a> 
            <div class="search-all">
              <input type="text" placeholder="Tìm kiếm trên lazada">
              <a href=""><div class="icon-search">
                <ion-icon name="search-outline" ></ion-icon>
              </div>
            </a>
            </div>
           <a href=""> <div class="cart">
              <ion-icon name="cart-outline"></ion-icon>
            </div>
        </a>
           <a href=""> <div class="sale-bar">
              <img src="images/sale-bar.png" alt="">
            </div>
        </a>
          </div>
        </div>
      
    </div>
    <div class="slide-banner-laz item-1">
      <header class="slide_banner_top item-1">
            <div class="slides">
              <?php 
                    
                     $dem = 1;
                    ?>
               <?php foreach ($get as $key => $value): ?>
                 
              
              <div class="slide  <?php if($dem ==1){echo 'active'; $dem++; } ?>" style="background-color: <?= $value['backgroundcolor'] ?>;">
                  <a href=""><div class="bg-slide" style="background-image: url('<?php echo $value["images"];?>');"></div></a>
              </div>
               <?php endforeach ?>
          </div>
          <div class="button">
              <div class="next" style="display: none;"><ion-icon name="chevron-forward-outline"></ion-icon></div>
              <div class="prev"  style="display: none;"><ion-icon name="chevron-back-outline"></ion-icon></div>
              
          </div>
          <div class="button-center">
              <ul>
                  <li class="active_button">1</li>
                  <li>2</li>
                  <li>3</li>
                  <li>4</li>
                  <li>5</li>
                  <li>6</li>
                  <li>7</li>
                  <li>8</li>
                  <li>9</li>
                  <li>10</li>
                  <li>11</li>
                  <li>12</li>
              </ul>
          </div>
      </header>
      <div class="menu-laz">
      <div class="category-laz">
          <div class="categorys-title">
              Danh mục 
              <span class="ionic-cts">
                <ion-icon name="chevron-down-outline"></ion-icon>
              </span>
          </div>
          <div class="categorys-1">
              
              <ul>
              <li class="electronic-device">
                  <a href="">
                      <span >
                          Thiết Bị Điện Tử
                          
                      </span>
                      <div class="icon-nav">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                      </div>
                     
                  </a>
                  <div class="catetory-2 electronic-device-item">
                      <ul>
                          <li>
                              <a href="">Điện thoại di động </a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                          </li>
                          <li>
                              <a href="">Máy tính bảng</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                          </li>
                          <li class="laptop">
                              <a href="">laptop</a>
                             <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 laptop-item">
                                  <ul>
                                      <li><a href="">Laptop cơ bản </a></li>
                                      <li><a href="">Laptop chơi game </a></li>
                                      <li><a href="">Dòng 2 trong 1</a></li>
                                  </ul>
                              </div>
                             
                          </li>
                          <li class="Desktop-computer">
                              <a href="">Máy tính để bàn</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Desktop-computer-item">
                                  <ul>
                                      <li><a href="">Máy tính nguyên bộ </a></li>
                                      <li><a href="">Máy tính để bàn chơi game</a></li>
                                      <li><a href="">Máy tính tự ráp</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Sound">
                              <a href="">Âm thanh</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3  Sound-item">
                                  <ul>
                                      <li><a href="">Các loại tại nghe</a></li>
                                      <li><a href="">Loa di động </a></li>
                                      <li><a href="">Âm thanh tại nhà</a></li>
                                      <li><a href="">Thiết bị Audio chuyên nghiệp </a></li>
                                      <li><a href="">Thiệt bị DJ</a></li>
                                      <li><a href="">Máy đọc đĩa than</a></li>
                                      <li><a href="">Phụ kiện tai nghe</a></li>
                                      <li><a href="">Phụ kiện loa di động </a></li>
                                      <li><a href="">Phụ kiện âm thanh tại nhà</a></li>
                                      <li><a href="">Phụ kiện âm thanh chuyên nghiệp </a></li>
                                      <li><a href="">Thiết bị âm thanh di động </a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Surveillance-camera">
                              <a href="">Camera giám sát</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Surveillance-camera-item">
                                  <ul>
                                      <li><a href="">Camera IP kết nối internet</a></li>
                                      <li><a href="">Camera an ninh CCTV</a></li>
                                      <li><a href="">Hệ thống an ninh IP</a></li>
                                      <li><a href="">Hệ thống an ninh CCTV</a></li>
                                      <li><a href="">Camera chống chộm</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Digital-camera">
                              <a href="">Máy ảnh kỹ thuật số</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Digital-camera-item">
                                  <ul>
                                      <li><a href="">Máy ảnh DSLR</a></li>
                                      <li><a href="">Máy ảnh không gương lật</a></li>
                                      <li><a href="">Máy ảnh du lịch </a></li>
                                      <li><a href="">Máy ảnh siêu zoom</a></li>
                                      <li><a href="">Máy bay camera</a></li>
                                      <li><a href="">Máy chụp lấy ngay & phụ kiện</a></li>
                                      <li><a href="">Ống kính</a></li>
                                      <li><a href="">Ống nhòm </a></li>
                                      <li><a href="">Các loại máy ảnh khác, Phụ kiện, Camera Mini không dây Joshe live</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Camcorders-Video-Cameras">
                              <a href="">Máy quay phim & Máy quay</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Camcorders-Video-Cameras-item">
                                  <ul>
                                      <li><a href="">Camera thể thao & Hành động </a></li>
                                      <li><a href="">Máy quay phim</a></li>
                                      <li><a href="">Máy quay phim chuyên nghiệp </a></li>
                                      <li><a href="">Camera 360 </a></li>
                                      <li><a href="">Máy quay dưới nước</a></li>
                                  </ul>
                               </div>
                          </li>
                          <li >
                              <a href="">Màn hình vi tính</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                             
                          </li>
                          <li class="Printer">
                              <a href="">Máy in</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Printer-item">
                                  <ul>
                                      <li><a href="">Máy in</a></li>
                                      <li><a href="">Máy Scan</a></li>
                                      <li><a href="">Máy fax</a></li>
                                      <li><a href="">Máy in 3D</a></li>
                                      <li><a href="">Mực máy in</a></li>
                                      <li><a href="">Bộ nhớ máy in</a></li>
                                     
                                  </ul>
                               </div>
                          </li>
                          <li class="Smart-watch">
                              <a href="">Đồng hồ thông minh</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Smart-watch-item">
                                  <ul>
                                      <li><a href="">Đồng hồ thông minh  </a></li>
                                      <li><a href="">Đồng hồ thông minh trẻ em</a></li>
                                      <li><a href="">Đồng hồ thông minh thiết kế</a></li>
                                     
                                  </ul>
                               </div>
                          </li>
                          <li class="Game-machine">
                              <a href="">Máy chơi game</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Game-machine-item">
                                  <ul>
                                      <li><a href="">Máy chơi game  </a></li>
                                      <li><a href="">Trò chơi máy console</a></li>
                                      <li><a href="">Tay nghe chơi game</a></li>
                                      <li><a href="">Ốp lưng & Bao da máy tính bảng</a></li>
                                      <li><a href="">Miếng dán màn hình điện thoại</a></li>
                                     
                                  </ul>
                               </div>
                          </li>
                      </ul>
                  </div>
                  <!-- end catetory-2 -->
              </li>
                  <li class="electronic-accessories"> <a href="">
                      <span>Phụ Kiện Điện Tử</span>
                      <div class="icon-nav">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                      </div>
                   </a>
                   <div class="catetory-2 electronic-accessories-item">
                      <ul>
                          <li class="Mobile-accessories">
                              <a href="">Phụ kiện di động </a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Mobile-accessories-item">
                                  <ul>
                                      <li><a href="">Pin sạc dự phòng </a></li>
                                      <li><a href="">Cáp & Dock sạc </a></li>
                                      <li><a href="">Bộ sạc có dây</a></li>
                                      <li><a href="">Bộ sạc không dây </a></li>
                                      <li><a href="">Ốp lưng & Bao da điện thoại</a></li>
                                      <li><a href="">Ốp lưng & Bao da máy tính bảng </a></li>
                                      <li><a href="">Miếng dán màn hình điện thoại </a></li>
                                      <li><a href="">Gậy chụp ảnh</a></li>
                                      <li><a href="">Sạc trên xe hơi</a></li>
                                      <li><a href="">Sim & Thẻ cào</a></li>
                                      <li><a href="">Dock sạc & Giá đỡ</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Smart-device">
                              <a href="">Thiết bị thông minh</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Smart-device-item">
                                  <ul>
                                      <li><a href="">Đồng hồ thông minh và phụ kiện  </a></li>
                                      <li><a href="">Thiết bị theo dõi vận động & Phụ kiện  </a></li>
                                      <li><a href="">Loa thông minh</a></li>
                                      <li><a href="">Công tắc thông minh </a></li>
                                      <li><a href="">Mắt kính thông minh </a></li>
                                      <li><a href="">Nhẫn thông minh</a></li>
                                      <li><a href="">Phụ kiện thiết bị thực tế ảo </a></li>
                                      <li><a href="">Thiết bị thực tế ảo </a></li>
                                      <li><a href="">Thiết bị điều khiển qua cử chỉ</a></li>
                                      <li><a href="">Thiết bị giám sát thông minh</a></li>
                                      <li><a href="">Thiết bị streaming</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Digital-device">
                              <a href="">Thiết bị số</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Digital-device-item">
                                  <ul>
                                      <li><a href="">Bút laser</a></li>
                                      <li><a href="">Máy do kim loại</a></li>
                                      <li><a href="">Kim tự điển & Máy thông dịch</a></li>
                                      <li><a href="">Bộ sạc đa năng</a></li>
                                      <li><a href="">Bảng vẽ </a></li>
                                      <li><a href="">Bộ đàm</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Camera-accessories">
                              <a href="">Phụ kiện Máy ảnh</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Camera-accessories-item">
                                  <ul>
                                      <li><a href="">Balo máy ảnh</a></li>
                                      <li><a href="">Pin máy ảnh</a></li>
                                      <li><a href="">Sạc pin máy ảnh</a></li>
                                      <li><a href="">Tay cầm chống rung</a></li>
                                      <li><a href="">TriPods & MonoPods</a></li>
                                      <li><a href="">Bộ sạc </a></li>
                                      <li><a href="">Dây đeo</a></li>
                                      <li><a href="">Đèn flash</a></li>
                                      <li><a href="">Hộp chống ẩm</a></li>
                                      <li><a href="">Kính lọc máy ảnh</a></li>
                                      <li><a href="">Micro quay phim</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Camera-aircraft-accessories">
                              <a href="">Phụ kiện máy bay camera</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Camera-aircraft-accessories-item"> 
                                  <ul>
                                      <li><a href="">Túi đựng máy bay Camera</a></li>
                                      <li><a href="">Pin máy bay Camera</a></li>
                                      <li><a href="">Điều khiển từ xa</a></li>
                                      <li><a href="">Cánh và các bộ phận khác</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Storage-device">
                              <a href="">Thiết bị lưu trữ</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Storage-device-item"> 
                                  <ul>
                                      
                                      <li><a href="">Ổ cứng gắn trong</a></li>
                                      <li><a href="">Ổ cứng gắn ngoài</a></li>
                                      <li><a href="">Thẻ nhớ</a></li>
                                      <li><a href="">Thiết bị lưu trữ mạng NAS</a></li>
                                      <li><a href="">USB UTG</a></li>
                                      <li><a href="">USB</a></li>
                                      <li><a href="">Bộ nhớ ngoài Macbook</a></li>
                                      <li><a href="">Ổ cứng SSD gắn trong</a></li>
                                      <li><a href="">Ổ cứng SSD gắn ngoài</a></li>
                                      
                                  </ul>
                              </div>
                          </li>
                          <li class="Computer-accessories">
                              <a href="">Phụ kiện máy tính</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Computer-accessories-item"> 
                                  <ul>
                                      <li><a href="">Phụ kiện Macbook</a></li>
                                      <li><a href="">Bàn phím</a></li>
                                      <li><a href="">Chuột</a></li>
                                      <li><a href="">Wedcam</a></li>
                                      <li><a href="">Đế tản nhiệt</a></li>
                                      <li><a href="">Ổ đĩa rời</a></li>
                                      <li><a href="">Pin laptop</a></li>
                                      <li><a href="">Phần mềm</a></li>
                                      <li><a href="">Miếng lót chuột</a></li>
                                      <li><a href="">Decal dán</a></li>
                                      <li><a href="">USB hub</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="PC-accessories">
                              <a href="">Linh kiện máy tính</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 PC-accessories-item">
                                  <ul>
                                      <li><a href="">Bo mạch chủ</a></li>
                                      <li><a href="">Bộ vi xử lý</a></li>
                                      <li><a href="">Card âm thanh</a></li>
                                      <li><a href="">Card đồ họa</a></li>
                                      <li><a href="">RAM máy tính</a></li>
                                      <li><a href="">Case máy tính</a></li>
                                      <li><a href="">Hệ Thống Làm Mát Bằng Nước</a></li>
                                      <li><a href="">Máy tính một Board</a></li>
                                      <li><a href="">Nguồn máy tính</a></li>
                                      <li><a href="">Ổ đĩa quang</a></li>
                                      <li><a href="">Quạt (cho Case)</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Lens-Accessories">
                              <a href="">Phụ kiện ống kính</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Lens-Accessories-item">
                                  <ul>
                                      <li><a href="">Loa che nắng</a></li>
                                      <li><a href="">Thiết bị vệ sinh ống kính</a></li>
                                      <li><a href="">Nắp ống kính</a></li>
                                      <li><a href="">Kính lọc</a></li>
                                      <li><a href="">Túi đựng ống kính</a></li>
                                      <li><a href="">Bộ chuyển đổi</a></li>
                                      <li><a href="">Vòng hỗ trợ lấy nét</a></li>
                                      <li><a href="">Hộp che nắng ống kính</a></li>
                                      <li><a href="">Ống tăng tiêu cự</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Network-equipment">
                              <a href="">Thiết bị mạng </a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Network-equipment-item">
                                  <ul>
                                      <li><a href="">Router</a></li>
                                      <li><a href="">Điểm truy cập mạng</a></li>
                                      <li><a href="">Switch</a></li>
                                      <li><a href="">Card mạng</a></li>
                                      <li><a href="">Bộ thu sóng Wifi</a></li>
                                      <li><a href="">Modems</a></li>
                                      <li><a href="">Bộ khuếch đại wifi</a></li>
                                      <li><a href="">Wifi Modems</a></li>
                                      <li><a href="">Modem USB</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Gaming-accessories">
                              <a href="">Phụ kiện chơi game </a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Gaming-accessories-item">
                                  <ul>
                                      <li><a href="">Tay cầm chơi game</a></li>
                                      <li><a href="">Ốp lưng & bao da máy tính bảng</a></li>
                                      <li><a href="">Kệ treo & Chân đế</a></li>
                                      <li><a href="">Cáp & Bộ sạc</a></li>
                                      <li><a href="">Mô hình tương tác chơi game</a></li>
                                      <li><a href="">Miếng dán màn hình điện thoại</a></li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
                  <!-- end catetory-2 -->
                  </li>
                  <li class="TVs-Household-Electrical-Appliances"><a href="">
                      <span>TV & Thiết Bị Điện Gia Dụng</span>
                      <div class="icon-nav">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                      </div>
                  </a>
                  
              <div class="catetory-2 TVs-Household-Electrical-Appliances-item">
                  <ul>
                      <li class="TV-Video">
                          <a href="">Tivi & Video</a>
                          <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 TV-Video-item">
                              <ul>
                                  <li><a href="">Tivi thông minh</a></li>
                                  <li><a href="">Tivi kỹ thuật số</a></li>
                                  <li><a href="">Tivi Analog</a></li>
                                  <li><a href="">Video</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="Small-household-electricity">
                          <a href="">Điện gia dụng nhỏ</a>
                          <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Small-household-electricity-item">
                              <ul>
                                  <li><a href="">Thiết bị làm mát</a></li>
                                  <li><a href="">Đồ gia dụng nhỏ</a></li>
                                  <li><a href="">Đồ gia dụng nhà bếp</a></li>
                                  <li><a href="">Phụ kiện đồ gia dụng</a></li>
                                  <li><a href="">Đồ gia dụng chăm sóc cá nhân</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="Large-household-electricity">
                          <a href="">Điện gia dụng lớn</a>
                          <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Large-household-electricity-item">
                              <ul>
                                  <li><a href="">Máy lạnh</a></li>
                                  <li><a href="">Tủ lạnh</a></li>
                                  <li><a href="">Tủ đông</a></li>
                                  <li><a href="">Máy rửa chén</a></li>
                                  <li><a href="">Máy sấy chén dĩa</a></li>
                                  <li><a href="">Bếp điện</a></li>
                                  <li><a href="">Cây nước nóng lạnh</a></li>
                                  <li><a href="">Hệ thống lọc nước uống</a></li>
                                  <li><a href="">Máy giặt</a></li>
                                  <li><a href="">Máy sấy</a></li>
                                  <li><a href="">Máy giặt - sấy</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="TV-accessories">
                          <a href="">Phụ kiện tivi</a>
                          <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          
                      </li>
                  </ul>
              </div>
              <!-- end catetory-2 -->
              </li>
                  <li class="Health-Beauty"><a href="">
                      <span>Sức Khỏe & Làm Đẹp</span>
                      <div class="icon-nav">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                      </div>
                  </a>
                  <div class="catetory-2 Health-Beauty-item">
                      <ul>
                          <li class="Skin-Care">
                              <a href="">Chăm sóc da</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Skin-Care-item">
                                  <ul>
                                      <li><a href="">Dưỡng Da Chuyên Sâu</a></li>
                                      <li><a href="">Mặt Nạ Lột & Tẩy Tế Bào</a></li>
                                      <li><a href="">Sữa Rửa Mặt</a></li>
                                      <li><a href="">Nước Hoa Hồng</a></li>
                                      <li><a href="">Tinh Chất Dưỡng Da Chuyên Sâu</a></li>
                                      <li><a href="">Tinh Chất Dưỡng Da</a></li>
                                      <li><a href="">Kem Dưỡng Ẩm </a></li>
                                      <li><a href="">Dưỡng Môi</a></li>
                                      <li><a href="">Điều Trị Mụn</a></li>
                                      <li><a href="">Kem Mắt</a></li>
                                      <li><a href="">Kem Chống Nắng</a></li>
                                  </ul>
                              </div>
                             
                          </li>
                          <li class="Make-up">
                              <a href="">Trang điểm</a>
                              <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Make-up-item ">
                                  <ul>
                                      <li><a href="">Mắt</a></li>
                                      <li><a href="">Mascara</a></li>
                                      <li><a href="">Mặt</a></li>
                                      <li><a href="">Kem Nền BB</a></li>
                                      <li><a href="">Kem Nền Trang Điểm</a></li>
                                      <li><a href="">Phấn Phủ</a></li>
                                      <li><a href="">Phấn Má</a></li>
                                      <li><a href="">Môi</a></li>
                                      <li><a href="">Phụ Kiện Trang Điểm</a></li>
                                      <li><a href="">Tẩy Trang</a></li>
                                      <li><a href="">Sơn Móng Tay</a></li>
                                  </ul>
                              </div>
                             
                          </li>
                          <li class="Beauty-instruments">
                              <a href="">Dụng cụ làm đẹp</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Beauty-instruments-item">
                                  <ul>
                                      <li><a href="">Máy Giảm Cân</a></li>
                                      <li><a href="">Dụng Cụ Mát Xa Chân</a></li>
                                      <li><a href="">Dụng Cụ Tẩy Lông/Tóc</a></li>
                                      <li><a href="">Sản Phẩm Spa</a></li>
                                      <li><a href="">Dụng Cụ Chăm Sóc Cơ Thể</a></li>
                                      <li><a href="">Chăm Sóc Mặt</a></li>
                                  </ul>
                              </div>
                              
                          </li>
                          <li class="Body-care">
                              <a href="">Chăm sóc cơ thể</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Body-care-item">
                                  <ul>
                                      <li><a href="">Sữa Tắm</a></li>
                                      <li><a href="">Muối Tắm & Sữa Tắm Tạo Bọt</a></li>
                                      <li><a href="">Tẩy Tế Bào Chết</a></li>
                                      <li><a href="">Sữa Dưỡng Thể</a></li>
                                      <li><a href="">Phụ Kiện Phòng Tắm</a></li>
                                      <li><a href="">Cải Thiện & Chăm Sóc Cơ Thể</a></li>
                                      <li><a href="">Tinh Dầu Tắm</a></li>
                                      <li><a href="">Chăm Sóc Ngực</a></li>
                                      <li><a href="">Chăm Sóc Tay</a></li>
                                      <li><a href="">Chăm Sóc Chân</a></li>
                                      <li><a href="">Tẩy Lông</a></li>
                                  </ul>
                              </div>
                             
                          </li>
                          <li class="Hair-care">
                              <a href="">Chăm sóc tóc</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Hair-care-item">
                                  <ul>
                                      <li><a href="">Dầu Gội</a></li>
                                      <li><a href="">Dầu Xả</a></li>
                                      <li><a href="">Chăm Sóc Tóc Chuyên Sâu</a></li>
                                      <li><a href="">Tạo Kiểu Tóc</a></li>
                                      <li><a href="">Thuốc Nhuộm Tóc</a></li>
                                      <li><a href="">Phụ Kiện Chăm Sóc Tóc</a></li>
                                      <li><a href="">Gói Khuyến Mãi</a></li>
                                  </ul>
                              </div>
                             
                          </li>
                          <li class="Personal-care">
                              <a href="">Chăm sóc cá nhân</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Personal-care-item">
                                  <ul>
                                      <li><a href="">Khử Mùi</a></li>
                                      <li><a href="">Chăm Sóc Răng Miệng</a></li>
                                      <li><a href="">Vệ Sinh Phụ Nữ</a></li>
                                      <li><a href="">Chăm Sóc Cho Người Cao Tuổi</a></li>
                                      <li><a href="">Bảo Vệ An Toàn</a></li>
                                      <li><a href="">Chăm Sóc Mắt</a></li>
                                      <li><a href="">Chống Côn Trùng</a></li>
                                      <li><a href="">Nước Súc Miệng</a></li>
                                      <li><a href="">Làm Trắng Răng</a></li>
                                      <li><a href="">Kem Đánh Răng</a></li>
                                      <li><a href="">Nước Rửa Phụ Khoa</a></li>
                                  </ul>
                              </div>
                              
                          </li>
                          <li class="For-men">
                              <a href="">Dành cho nam giới</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 For-men-item">
                                  <ul>
                                      <li><a href="">Tắm & Chăm Sóc Cơ Thể</a></li>
                                      <li><a href="">Khử Mùi</a></li>
                                      <li><a href="">Chăm Sóc Tóc</a></li>
                                      <li><a href="">Cạo Râu Và Chăm Sóc</a></li>
                                      <li><a href="">Chăm Sóc Da Mặt</a></li>
                                      <li><a href="">Tạo Kiểu Tóc</a></li>
                                      <li><a href="">Dao Cạo</a></li>
                                      <li><a href="">Sữa Rửa Mặt</a></li>
                                      <li><a href="">Kem Dưỡng Ẩm Nam</a></li>
                                      <li><a href="">Tinh Chất Dưỡng Da</a></li>
                                      <li><a href="">Nước Hoa Hồng & Xịt Khoáng</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Perfume">
                              <a href="">Nước hoa</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Perfume-item">
                                  <ul>
                                      <li><a href="">Nam</a></li>
                                      <li><a href="">Nữ</a></li>
                                      <li><a href="">Unisex</a></li>
                                  </ul>
                              </div>
                             
                          </li>
                          <li class="Functional-foods">
                              <a href="">Thực phẩm chức năng</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Functional-foods-item">
                                  <ul>
                                      <li><a href="">Thực Phẩm Sắc Đẹp</a></li>
                                      <li><a href="">Dinh Dưỡng Thể Thao</a></li>
                                      <li><a href="">Kiểm Soát Cân Nặng</a></li>
                                      <li><a href="">Chăm Sóc Sức Khỏe</a></li>
                                      <li><a href="">Trắng Da</a></li>
                                      <li><a href="">Chăm Sóc Da Mụn</a></li>
                                      <li><a href="">Sức Khỏe Phái Nam</a></li>
                                      <li><a href="">Tăng Cơ</a></li>
                                      <li><a href="">Kiểm Soát & Đốt Mỡ</a></li>
                                      <li><a href="">Trà Giảm Cân</a></li>
                                      <li><a href="">Hỗ Trợ Xương Khớp</a></li>
                                  </ul>
                              </div>
                             
                          </li>
                          <li class="Food-for-beauty">
                              <a href="">Thực phẩm cho sắc đẹp</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Food-for-beauty-item">
                                  <ul>
                                      <li><a href="">Kem Ngực</a></li>
                                      <li><a href="">Gói Khuyến Mãi</a></li>
                                      <li><a href="">Tóc & Móng</a></li>
                                      <li><a href="">Dưỡng Da</a></li>
                                      <li><a href="">Trắng da</a></li>
                                      <li><a href="">Chăm sóc da mụn</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Sexual-health">
                              <a href="">Sức khỏe tình dục</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Sexual-health-item">
                                  <ul>
                                      <li><a href="">Bao Cao Su</a></li>
                                      <li><a href="">Chất Bôi Trơn</a></li>
                                      <li><a href="">Đồ Chơi Tình Dục</a></li>
                                  </ul>
                              </div>
                              
                          </li>
                          <li class="Medical-equipment">
                              <a href="">Thiết bị y tế</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Medical-equipment-item">
                                  <ul>
                                      <li><a href="">Dụng Cụ Sơ Cứu</a></li>
                                      <li><a href="">Dụng Cụ Chăm Sóc Sức Khỏe</a></li>
                                      <li><a href="">Cân & Phân Tích Lượng Mỡ Cơ Thể</a></li>
                                      <li><a href="">Thiết Bị Theo Dõi Sức Khỏe</a></li>
                                      <li><a href="">Chăm Sóc Chấn Thương</a></li>
                                      <li><a href="">Các Xét Nghiệm Y Tế</a></li>
                                      <li><a href="">Máy Xông Mũi Họng</a></li>
                                      <li><a href="">Thuốc Mỡ & Kem</a></li>
                                      <li><a href="">Máy Đo Bước</a></li>
                                      <li><a href="">Ống Nghe</a></li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
                   <!-- end catetory-2 -->
              </li>
                  <li class="Mother-Baby-Toys">
                      <a href="">
                      <span>Hàng Mẹ, Bé & Đồ Chơi</span>
                      <div class="icon-nav">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                      </div>
                        </a>
                
                  <div class="catetory-2 Mother-Baby-Toys-item">
                      <ul>
                          <li class="Diapers-Hygiene-Supplies">
                              <a href="">Tã bỉm & Dụng cụ vệ sinh</a>
                                 <div class="icon-nav2">
                               <ion-icon name="chevron-forward-outline"></ion-icon>
                           </div>
                           <div class="catetory-3 Diapers-Hygiene-Supplies-item">
                              <ul>
                                  <li><a href="">Tã giấy</a></li>
                                  <li><a href="">Tã vải cho bé</a></li>
                                  <li><a href="">Khăn ướt</a></li>
                                  <li><a href="">Chăm sóc thay tã</a></li>
                                  <li><a href="">Kem và dầu thoa</a></li>
                                  <li><a href="">Túi đựng tã cho bé</a></li>
                                  <li><a href="">Bàn thay tã cho trẻ sơ sinh</a></li>
                                  <li><a href="">Miếng lót chống thấm</a></li>
                                  <li><a href="">Miếng lót tã</a></li>
                                  <li><a href="">Ghế ngồi đi vệ sinh</a></li>
                                  <li><a href="">Thang bậc cho trẻ</a></li>
                              </ul>
                             
                          </div>
                           </li>
                          <li class="Milk-Baby-Food">
                              <a href="">Sữa bộ & Thức ăn cho bé</a>
                                 <div class="icon-nav2">
                               <ion-icon name="chevron-forward-outline"></ion-icon>
                           </div>
                           <div class="catetory-3 Milk-Baby-Food-item">
                              <ul>
                                  <li><a href="">Sản phẩm sữa cho mẹ</a></li>
                                  <li><a href="">Sữa cho bé sơ sinh</a></li>
                                  <li><a href="">Sữa cho trẻ 6-12 tháng tuổi</a></li>
                                  <li><a href="">Sữa cho trẻ tập đi từ 1-3 tuổi</a></li>
                                  <li><a href="">Sữa cho trẻ từ 1-3 tuổi</a></li>
                                  <li><a href="">Sữa dinh dưỡng</a></li>
                                  <li><a href="">Sản phẩm đồ uống cho bé</a></li>
                                  <li><a href="">Ngũ cốc cho bé</a></li>
                                  <li><a href="">Bánh quy cho bé</a></li>
                                  <li><a href="">Thức ăn dặm cho bé</a></li>
                                  <li><a href="">Bột ăn dặm</a></li>
                              </ul>
                          </div>
                           </li>
                          <li class="Kid-fashion">
                              <a href="">Thời trang cho bé</a>
                                 <div class="icon-nav2">
                               <ion-icon name="chevron-forward-outline"></ion-icon>
                           </div>
                           <div class="catetory-3 Kid-fashion-item">
                              <ul>
                                  <li><a href="">Bộ áo quần cho trẻ sơ sinh</a></li>
                                  <li><a href="">Áo liền quần cho trẻ sơ sinh</a></li>
                                  <li><a href="">Phụ kiện cho trẻ sơ sinh</a></li>
                                  <li><a href="">Quần áo bé gái</a></li>
                                  <li><a href="">Đầm bé gái</a></li>
                                  <li><a href="">Giày dép bé gái</a></li>
                                  <li><a href="">Phụ kiện bé gái</a></li>
                                  <li><a href="">Đồ đi bơi bé gái</a></li>
                                  <li><a href="">Quần áo bé trai</a></li>
                                  <li><a href="">Giày dép của bé trai</a></li>
                                  <li><a href="">Phụ kiện bé trai</a></li>
                                  <li><a href="">Đồ bơi bé trai</a></li>
                              </ul>
                          </div>
                           </li>
                          
                          <li class="Weaning-Breastfeeding-Supplies">
                              <a href="">Đồ dùng ăn dặm & Bú sữa</a>
                                 <div class="icon-nav2">
                               <ion-icon name="chevron-forward-outline"></ion-icon>
                           </div>
                           <div class="catetory-3 Weaning-Breastfeeding-Supplies-item">
                              <ul>
                                  <li><a href="">Bình sữa phụ kiện</a></li>
                                  <li><a href="">Bình sữa</a></li>
                                  <li><a href="">Núm ty</a></li>
                                  <li><a href="">Máy tiệt trùng ủ bình sữa</a></li>
                                  <li><a href="">Dụng cụ hút sữa</a></li>
                                  <li><a href="">Phụ kiện máy hút sữa</a></li>
                                  <li><a href="">Chăm sóc núm vú</a></li>
                                  <li><a href="">Gối và ghế đòn</a></li>
                                  <li><a href="">Ghé ngồi ăn cho bé</a></li>
                                  <li><a href="">Dụng cụ chế biến thức ăn</a></li>
                                  <li><a href="">Đồ dùng ăn dặm cho bé</a></li>
                                  <li><a href="">Chén tập ăn</a></li>
                              </ul>
                          </div>
                           </li>
                          <li class="Cars-Seats-Belts">
                              <a href="">Xe, ghế & Đai địu</a>
                                 <div class="icon-nav2">
                               <ion-icon name="chevron-forward-outline"></ion-icon>
                           </div>
                           <div class="catetory-3 Cars-Seats-Belts-item">
                              <ul>
                                  <li><a href="">Địu dạng võng</a></li>
                                  <li><a href="">Địu mềm cho bé</a></li>
                                  <li><a href="">Xe đẩy cao cấp</a></li>
                                  <li><a href="">Ghế ngồi ô tô</a></li>
                                  <li><a href="">Nôi chơi</a></li>
                                  <li><a href="">Dụng cụ tập đi - ghế rung</a></li>
                                  <li><a href="">Khung tập đi cho bé</a></li>
                                  <li><a href="">Ghế xe đạp rơ moóc em bé</a></li>
                                  <li><a href="">Túi cho bé</a></li>
                                  <li><a href="">Hành lý cho bé</a></li>
                                  <li><a href="">Dây đai an toàn cho bé</a></li>
                              </ul>
                          </div>
                           </li>
                          <li class="Bedroom-furniture">
                              <a href="">Đồ dùng phòng ngủ</a>
                                 <div class="icon-nav2">
                               <ion-icon name="chevron-forward-outline"></ion-icon>
                           </div>
                           <div class="catetory-3 Bedroom-furniture-item">
                              <ul>
                                  <li><a href="">nệm cho trẻ</a></li>
                                  <li><a href="">chăn cho bé</a></li>
                                  <li><a href="">đồ dùng cho nôi</a></li>
                                  <li><a href="">đồ dùng đi ngủ</a></li>
                                  <li><a href="">chăn bông ra giường cho trẻ</a></li>
                                  <li><a href="">phụ kiện phòng ngủ trẻ sơ sinh</a></li>
                                  <li><a href="">nội thất phòng ngủ cho bé</a></li>
                                  <li><a href="">sản phẩm cũi bé sơ sinh</a></li>
                                  <li><a href="">nôi trẻ sơ sinh</a></li>
                                  <li><a href="">rương tủ ngăn kéo</a></li>
                                  <li><a href="">đồ dùng sắp xếp</a></li>
                                  <li><a href="">trang trí phòng cho trẻ</a></li>
                              </ul>
                          </div>
                           </li>
                          <li class="Bath-Body-Care">
                              <a href="">Tắm gội & Chăm sóc cơ thể </a>
                                 <div class="icon-nav2">
                               <ion-icon name="chevron-forward-outline"></ion-icon>
                           </div>
                           <div class="catetory-3 Bath-Body-Care-item">
                              <ul>
                                  <li><a href="">Dưỡng da cho bé sơ sinh</a></li>
                                  <li><a href="">Dầu gội trẻ sơ sinh</a></li>
                                  <li><a href="">Xà phòng sữa rửa mặt cho bé</a></li>
                                  <li><a href="">Sản phẩm chăm sóc răng miệng bé sơ sinh</a></li>
                                  <li><a href="">Chậu tắm phụ kiện</a></li>
                                  <li><a href="">Khăn tắm - khăn choàng</a></li>
                                  <li><a href="">Chống nắng cho trẻ</a></li>
                                  <li><a href="">Tinh dầu tắm</a></li>
                                  <li><a href="">Dụng cụ chăm sóc cơ thể trẻ em</a></li>
                                  <li><a href="">Thảm tắm chống trượt cho bé</a></li>
                                  <li><a href="">Bong bóng tắm cho bé</a></li>
                              </ul>
                          </div>
                           </li>
                          <li class="Baby-toys">
                              <a href="">Đồ chơi cho bé</a>
                                 <div class="icon-nav2">
                               <ion-icon name="chevron-forward-outline"></ion-icon>
                           </div>
                           <div class="catetory-3 Baby-toys-item">
                              <ul>
                                  <li><a href="">Đồ chơi bộ sưu tập nhân vật</a></li>
                                  <li><a href="">Bộ sưu tập nhân vật</a></li>
                                  <li><a href="">Mô hình mini cho bé</a></li>
                                  <li><a href="">Thủ công nghệ thuật</a></li>
                                  <li><a href="">Đồ chơi lắp ráp xây dựng</a></li>
                                  <li><a href="">Búp bê nhà búp bê</a></li>
                                  <li><a href="">Đồ chơi hóa trang</a></li>
                                  <li><a href="">Đồ chơi giáo dục trẻ em</a></li>
                                  <li><a href="">Trò chơi truyền thống</a></li>
                                  <li><a href="">Sở thích & Giải trí</a></li>
                                  <li><a href="">Đồ chơi nhồi bông</a></li>
                                  <li><a href="">Đồ dùng tiệc cho bé</a></li>
                              </ul>
                          </div>
                           </li>
                          <li class="Electronic-Toys-Remote-Controls">
                              <a href="">Đồ chơi điện tử & Điều khiển từ xa</a>
                                 <div class="icon-nav2">
                               <ion-icon name="chevron-forward-outline"></ion-icon>
                           </div>
                           <div class="catetory-3 Electronic-Toys-Remote-Controls-item">
                              <ul>
                                  <li><a href="">Giải trí video game</a></li>
                                  <li><a href="">Bộ mô hình xe lửa đường ray</a></li>
                                  <li><a href="">Máy bay drone trực thăng 4 cánh</a></li>
                                  <li><a href="">Xe mô hình die-cast</a></li>
                                  <li><a href="">Xe mô hình điều khiển từ xa</a></li>
                                  <li><a href="">Xe mô hình điều khiển từ xa pin</a></li>
                                  <li><a href="">Robot nhân vật mô hình điều khiển</a></li>
                                  <li><a href="">Máy bay trực thăng</a></li>
                                  <li><a href="">Bộ đàm cho bé</a></li>
                              </ul>
                          </div>
                           </li>
                          <li class="Sports-outdoor-toys">
                              <a href="">Đồ chơi thể thao và ngoài trời</a>
                                 <div class="icon-nav2">
                               <ion-icon name="chevron-forward-outline"></ion-icon>
                           </div>
                           <div class="catetory-3 Sports-outdoor-toys-item">
                              <ul>
                                  <li><a href="">đồ chơi hồ bơi</a></li>
                                  <li><a href="">trò chơi thể thao cho bé</a></li>
                                  <li><a href="">đồ chơi ngoài trời cho bé</a></li>
                                  <li><a href="">đồ chơi bắn súng</a></li>
                                  <li><a href="">nhà banh phụ kiện</a></li>
                                  <li><a href="">đồ chơi trên không</a></li>
                                  <li><a href="">diều chong chóng</a></li>
                                  <li><a href="">nhà hơi</a></li>
                                  <li><a href="">yoyo & kendama</a></li>
                                  <li><a href="">bộ đồ chơi và thiết bị cho sân chơi</a></li>
                                  <li><a href="">lều cho bé</a></li>
                                  <li><a href="">nhà chơi cho bé</a></li>
                              </ul>
                          </div>
                           </li>
                          <li class="Toys-retarded-babies">
                              <a href="">Đồ chơi cho bé chậm chững</a>
                                 <div class="icon-nav2">
                               <ion-icon name="chevron-forward-outline"></ion-icon>
                           </div>
                           <div class="catetory-3 Toys-retarded-babies-item">
                              <ul>
                                  <li><a href="">Thảm chơi cho trẻ</a></li>
                                  <li><a href="">Đồ chơi xếp khối</a></li>
                                  <li><a href="">Đồ chơi bồn tắm cho bé</a></li>
                                  <li><a href="">Đồ chơi treo cũi cho bé</a></li>
                                  <li><a href="">Đồ chơi giáo dục</a></li>
                                  <li><a href="">Đồ chơi âm thanh cho bé</a></li>
                                  <li><a href="">Đồ chơi kéo đẩy dây cót</a></li>
                                  <li><a href="">Đồ chơi thả hình khối</a></li>
                                  <li><a href="">Đồ chơi lúc lắc xúc xắc</a></li>
                                  <li><a href="">Bộ đồ chơi vận động trong nhà</a></li>
                                  <li><a href="">Đồ chơi nhún và bập bênh trong nhà cho bé</a></li>
                              </ul>
                          </div>
                           </li>
                          <li class="Educational-toys">
                              <a href="">Đồ chơi giáo dục</a>
                                 <div class="icon-nav2">
                               <ion-icon name="chevron-forward-outline"></ion-icon>
                           </div>
                           <div class="catetory-3 Educational-toys-item">
                              <ul>
                                  <li><a href="">máy tính giáo dục</a></li>
                                  <li><a href="">đồ chơi kỹ năng cơ bản</a></li>
                                  <li><a href="">flash cards cho bé</a></li>
                                  <li><a href="">địa lý cho bé</a></li>
                                  <li><a href="">đồ chơi đọc viết</a></li>
                                  <li><a href="">mô hình hệ mặt trời</a></li>
                                  <li><a href="">đồ chơi gỗ học tập</a></li>
                                  <li><a href="">đồ chơi nghiên cứu khoa học</a></li>
                              </ul>
                          </div>
                           </li>
                      </ul>
               </div>
                <!-- end catetory-2 -->
              </li>
                     
                  
                  <li class="Supermarket-Grocery"><a href="">
                      <span>Siêu Thị Tạp Hóa</span>
                      <div class="icon-nav">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                      </div>
                  </a>
                  <div class="catetory-2 Supermarket-Grocery-item">
                      <ul>
                          <li class="Pasteurized-Milk-Milk-Powder">
                              <a href="">Sữa tiệt trùng & Sữa bột </a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Pasteurized-Milk-Milk-Powder-item">
                                  <ul>
                                      <li><a href="">Sữa tiệt trùng</a></li>
                                      <li><a href="">Sữa bột</a></li>
                                      <li><a href="">Sữa Đặc</a></li>
                                      <li><a href="">Bột kem</a></li>
                                      <li><a href="">Sữa Hương Vị</a></li>
                                      <li><a href="">Sữa đậu nành</a></li>
                                      <li><a href="">Sữa Đậu Nành Tiệt Trùng</a></li>
                                  </ul>
                  
                              </div>
                          </li>
                          <li class="Drinks-Beer-Alcohol">
                              <a href="">Đồ uống,Bia,Rượu</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Drinks-Beer-Alcohol-item">
                                  <ul>
                                      <li><a href="">Bia</a></li>
                                      <li><a href="">Cider</a></li>
                                      <li><a href="">Nước tăng lực, thể thao</a></li>
                                      <li><a href="">Nước ngọt</a></li>
                                      <li><a href="">Cà phê</a></li>
                                      <li><a href="">Trà</a></li>
                                      <li><a href="">Bột socola</a></li>
                                      <li><a href="">Đồ uống khác</a></li>
                                      <li><a href="">Nước</a></li>
                                      <li><a href="">Nước Trái Cây</a></li>
                                      <li><a href="">Bột pha nước trái cây</a></li>
                                      <li><a href="">Siro</a></li>
                                  </ul>
                              </div>
                              
                          </li>
                          <li class="Dairy-Food-Cold-Food">
                              <a href="">Thực phẩm từ sữa & Đồ lạnh</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Dairy-Food-Cold-Food-item">
                                  <ul>
                                      <li><a href="">Bơ, Bơ thực vật & Bơ phết</a></li>
                                      <li><a href="">Phô mai</a></li>
                                      <li><a href="">Sữa chua</a></li>
                                      <li><a href="">Nguyên liệu nấu ăn</a></li>
                                      <li><a href="">Món tráng miệng lạnh</a></li>
                                      <li><a href="">Nước ép & Thức uống làm lạnh</a></li>
                                      <li><a href="">Kem tươi</a></li>
                                      <li><a href="">Kim chi, Dưa chua & Chutney</a></li>
                                      <li><a href="">Thực phẩm chế biến sẵn</a></li>
                                    
                                  </ul>
                              </div>
                          </li>
                          <li class="Canned-Packaged-Dried-Food">
                              <a href="">Đồ hộp, Thực phẩm đóng gói & Sấy khô</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Canned-Packaged-Dried-Food-item">
                                  <ul>
                                      <li><a href="">Thực Phẩm Đóng Hộp</a></li>
                                      <li><a href="">Mì ăn liền</a></li>
                                      <li><a href="">Mì Ý</a></li>
                                      <li><a href="">Thực Phẩm Chế Biến Sẳn</a></li>
                                      <li><a href="">Đậu và Các Loại Ngũ Cốc</a></li>
                                      <li><a href="">Nông Phẩm Khô</a></li>
                                      <li><a href="">Thực phẩm đóng lọ</a></li>
                                      <li><a href="">Đồ ăn sẵn</a></li>
                                      <li><a href="">Các loại hạt</a></li>
                                      <li><a href="">Nước sốt các loại</a></li>
                                      <li><a href="">Gia vị & Rau thơm sấy khô</a></li>
                                      <li><a href="">Tương ớt</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Candy-Chocolate-Snacks">
                              <a href="">Kẹo & Socola & Đồ ăn vặt</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Candy-Chocolate-Snacks-item">
                                  <ul>
                                      <li><a href="">Socola viên & Socola hộp</a></li>
                                      <li><a href="">Kẹo bạc hà</a></li>
                                      <li><a href="">Kẹo</a></li>
                                      <li><a href="">Bánh quy</a></li>
                                      <li><a href="">Bánh crackers</a></li>
                                      <li><a href="">Bánh cookies</a></li>
                                      <li><a href="">Khoai tây chiên</a></li>
                                      <li><a href="">Các loại hạt & Trái cây khô</a></li>
                                      <li><a href="">Trái cây và rau củ sấy</a></li>
                                      <li><a href="">Snack bắp</a></li>
                                      <li><a href="">Snack mặn và bánh xoắn</a></li>
                                      <li><a href="">Snack rong biển</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Cooking-baking-ingredients">
                              <a href="">Nguyên liệu nấu ăn & làm bánh</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Cooking-baking-ingredients-item">
                                  <ul>
                                      <li><a href="">Đường và nguyên liệu làm bánh</a></li>
                                      <li><a href="">Mật ong</a></li>
                                      <li><a href="">Thực Phẩm Đóng Hộp</a></li>
                                      <li><a href="">Ngũ cốc ăn sáng & Bánh mì phết</a></li>
                                      <li><a href="">Dầu ăn</a></li>
                                      <li><a href="">Gạo</a></li>
                                      <li><a href="">Thực phẩm ăn liền</a></li>
                                      <li><a href="">Mì và bún</a></li>
                                      <li><a href="">Muối và gia vị</a></li>
                                      <li><a href="">Gia vị và sốt ăn liền</a></li>
                                      <li><a href="">Sốt nấu ăn và phụ gia</a></li>
                                      <li><a href="">Nguyên liệu khác</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Paper-house-cleaning">
                              <a href="">Giấy & vệ sinh nhà cửa</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Paper-house-cleaning-item">
                                  <ul>
                                      <li><a href="">Giấy vệ sinh</a></li>
                                      <li><a href="">Khăn giấy</a></li>
                                      <li><a href="">Nước lau sàn</a></li>
                                      <li><a href="">Nước và dụng cụ lau bếp</a></li>
                                      <li><a href="">Khử mùi và xịt thơm phòng</a></li>
                                      <li><a href="">Chất tẩy phòng tắm</a></li>
                                      <li><a href="">Chất tẩy trắng và khử trùng</a></li>
                                      <li><a href="">Dụng cụ làm sạch</a></li>
                                      <li><a href="">Chất thông tắc cống, ống nước</a></li>
                                      <li><a href="">Chất tẩy đa năng</a></li>
                                      <li><a href="">Vệ sinh cửa sổ cửa kính</a></li>
                                      <li><a href="">Diệt côn trùng</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Kitchen-cleaning">
                              <a href="">Lau chùi vệ sinh nhà bếp</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Kitchen-cleaning-item">
                                  <ul>
                                      <li><a href="">Nước rửa chén cho máy</a></li>
                                      <li><a href="">Nước rửa chén bằng tay</a></li>
                                      <li><a href="">Diêm-hộp quẹt</a></li>
                                      <li><a href="">Bao đựng rác</a></li>
                                      <li><a href="">Chén dĩa dùng một lần</a></li>
                                      <li><a href="">Giấy bóng, Giấy bạc, Giấy nướng bánh</a></li>
                                      <li><a href="">Túi đựng thực phẩm</a></li>
                                      <li><a href="">Hộp đựng thực phẩm</a></li>
                                      <li><a href="">Pin</a></li>
                                      <li><a href="">Bóng đèn</a></li>
                                    
                                  </ul>
                              </div>
                          </li>
                          <li class="Laundry-utensils">
                              <a href="">Đồ dùng giặt giũ</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Laundry-utensils-item">
                                  <ul>
                                      <li><a href="">Nước giặt</a></li>
                                      <li><a href="">Bột giặt</a></li>
                                      <li><a href="">Nước xả</a></li>
                                      <li><a href="">Chất tẩy</a></li>
                                      <li><a href="">Chất tẩy vết bẩn</a></li>
                                      <li><a href="">Nước làm thơm, nước ủi quần áo</a></li>
                                      <li><a href="">Chăm sóc đặc biệt</a></li>
                                      <li><a href="">Nước rửa máy giặt</a></li>
                                     
                                  </ul>
                              </div>
                          </li>
                          <li class="Pet-accessories">
                              <a href="">Phụ kiện thú cưng</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Pet-accessories-item">
                                  <ul>
                                      <li><a href="">Thiết bị hồ cá</a></li>
                                      <li><a href="">Nệm ngủ, Thảm & Nhà thú cưng</a></li>
                                      <li><a href="">Lồng, cũi, cửa nhà cho thú cưng</a></li>
                                      <li><a href="">Nhà cây, bàn cào móng cho mèo</a></li>
                                      <li><a href="">Dụng cụ đựng thức ăn thú cưng</a></li>
                                      <li><a href="">Dụng cụ vận chuyển và balo du lịch</a></li>
                                      <li><a href="">Phụ kiện làm đẹp</a></li>
                                      <li><a href="">Dây dắt,vòng cổ & rọ mõm</a></li>
                                      <li><a href="">Cát và dụng cụ vệ sinh</a></li>
                                      <li><a href="">Đồ chơi</a></li>
                                      <li><a href="">Hỗ trợ huấn luyện chó</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Food-pet-care">
                              <a href="">Thức ăn và chăm sóc thú cưng</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Food-pet-care-item">
                                  <ul>
                                      <li><a href="">Thức ăn cho mèo</a></li>
                                      <li><a href="">Thức ăn cho chó</a></li>
                                      <li><a href="">Thức ăn cho cá</a></li>
                                      <li><a href="">Thức ăn cho chim</a></li>
                                      <li><a href="">Thức ăn cho bò sát</a></li>
                                      <li><a href="">Thức ăn cho thú nhỏ</a></li>
                                      <li><a href="">Chăm sóc răng miệng và sức khỏe</a></li>
                                      <li><a href="">Trị ve rận, bọ chét</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Fresh-produce">
                              <a href="">Sản phẩm tươi sống</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Fresh-produce-item">
                                  <ul>
                                      <li><a href="">Rau củ tươi</a></li>
                                      <li><a href="">Trái Cây</a></li>
                                      <li><a href="">Thịt Tươi Sống</a></li>
                                      <li><a href="">Hải Sản Tươi Sống</a></li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
                   <!-- end catetory-2 -->
                </li>
                  <li class="Household-Life-Goods"><a href="">
                      <span>Hàng Gia dụng & Đời sống</span>
                      <div class="icon-nav">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                      </div>
                  </a>
                    
              <div class="catetory-2 Household-Life-Goods-item">
                  <ul>
                      <li class="Kitchen-Dining-Room">
                          <a href="">Bếp & Phòng Ăn</a>
                             <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Kitchen-Dining-Room-item">
                              <ul>
                                  <li><a href="">Nồi & Chảo</a></li>
                                  <li><a href="">Bình nước</a></li>
                                  <li><a href="">Bình giữ nhiệt</a></li>
                                  <li><a href="">Chứa đồ nhà bếp & phụ kiện</a></li>
                                  <li><a href="">Dao bếp và phụ kiện</a></li>
                                  <li><a href="">Đồ dùng uống nước</a></li>
                                  <li><a href="">Đồ dùng nhà bếp đặc biệt</a></li>
                                  <li><a href="">Dụng cụ làm bánh</a></li>
                                  <li><a href="">Đồ dùng uống trà & café</a></li>
                                  <li><a href="">Dụng cụ nấu ăn</a></li>
                                
                              </ul>
                          </div>
                      </li>
                      <li class="House-repairs">
                          <a href="">Sửa chữa nhà cửa</a>
                             <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 House-repairs-item">
                              <ul>
                                  <li><a href="">Thiết bị điện</a></li>
                                  <li><a href="">Đồ dùng làm vườn</a></li>
                                  <li><a href="">Đồ kim khí</a></li>
                                  <li><a href="">Bảo vệ nhà cửa</a></li>
                                  <li><a href="">Dụng cụ an toàn lao động</a></li>
                                  <li><a href="">Sơn & trang trí nhà</a></li>
                                  <li><a href="">Dụng cụ điện ngoài trời & làm vườn</a></li>
                                  <li><a href="">Ổ cắm điện</a></li>
                                  <li><a href="">Hệ thống tưới nước</a></li>
                                  <li><a href="">Hạt giống hoa quả</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="Electric-tools">
                          <a href="">Dụng cụ điện</a>
                             <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Electric-tools-item">
                              <ul>
                                  <li><a href="">Máy khoan</a></li>
                                  <li><a href="">Máy khoan cắt đa năng</a></li>
                                  <li><a href="">Bộ dụng cụ cầm tay</a></li>
                                  <li><a href="">Máy khoan cắt bê tông</a></li>
                                  <li><a href="">Máy cầm tay đa năng</a></li>
                                  <li><a href="">Máy mài</a></li>
                                  <li><a href="">Máy cưa</a></li>
                                  <li><a href="">Máy bào</a></li>
                                  <li><a href="">Súng hơi</a></li>
                                  <li><a href="">Máy bắn đinh & ghim</a></li>
                                  <li><a href="">Dụng cụ hàn tiện</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="Hand-tools">
                          <a href="">Dụng cụ cầm tay</a>
                             <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Hand-tools-item">
                              <ul>
                                  <li><a href="">Súng bắn keo</a></li>
                                  <li><a href="">Dao & dụng cụ đa năng</a></li>
                                  <li><a href="">Dụng cụ lau chùi</a></li>
                                  <li><a href="">Kìm</a></li>
                                  <li><a href="">Máy vặn ốc</a></li>
                                  <li><a href="">Mài, dũa</a></li>
                                  <li><a href="">Búa</a></li>
                                  <li><a href="">Phụ kiện dụng cụ cầm tay</a></li>
                                  <li><a href="">Khoá lục giác</a></li>
                                  <li><a href="">Bộ tuýp</a></li>
                                  <li><a href="">Cưa</a></li>
                                  <li><a href="">Đai, keo & hàn</a></li>
                              </ul>
                          </div>
                      </li>
                    
                      <li class="Bedroom">
                          <a href="">Phòng ngủ</a>
                             <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Bedroom-item">
                              <ul>
                                  <li><a href="">Bộ chăn ga gối</a></li>
                                  <li><a href="">Ga giường</a></li>
                                  <li><a href="">Gối</a></li>
                                  <li><a href="">Chăn mền</a></li>
                                  <li><a href="">Chăn chần gòn</a></li>
                                  <li><a href="">Chăn điện</a></li>
                                  <li><a href="">Phụ kiện giường ngủ</a></li>
                                  <li><a href="">Vỏ gối</a></li>
                                  <li><a href="">Ren ga giường chống trượt</a></li>
                                  <li><a href="">Vỏ lót bảo vệ nệm</a></li>
                                  <li><a href="">Tấm trải nệm</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="Bathroom">
                          <a href="">Phòng tắm</a>
                             <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Bathroom-item">
                              <ul>
                                  <li><a href="">Khăn tắm</a></li>
                                  <li><a href="">Kệ phòng tắm</a></li>
                                  <li><a href="">Thiết bị phòng tắm</a></li>
                                  <li><a href="">Hộp đựng giấy vệ sinh</a></li>
                                  <li><a href="">Giá treo khăn</a></li>
                                  <li><a href="">Cân sức khoẻ</a></li>
                                  <li><a href="">Thảm phòng tắm</a></li>
                                  <li><a href="">Gương phòng tắm</a></li>
                                  <li><a href="">Áo choàng tắm</a></li>
                                  <li><a href="">Rèm phòng tắm</a></li>
                                  <li><a href="">Phủ bồn cầu</a></li>
                                  <li><a href="">Giá treo vòi sen</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="Lights-Lighting-Equipment">
                          <a href="">Đèn & Thiết bị đèn</a>
                             <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Lights-Lighting-Equipment-item">
                              <ul>
                                  <li><a href="">Bóng đèn</a></li>
                                  <li><a href="">Đèn trần</a></li>
                                  <li><a href="">Đèn tường</a></li>
                                  <li><a href="">Đèn bàn</a></li>
                                  <li><a href="">Đèn ngoài trời</a></li>
                                  <li><a href="">Đèn trang trí</a></li>
                                  <li><a href="">Chụp đèn</a></li>
                                  <li><a href="">Linh kiện đèn</a></li>
                                  <li><a href="">Đèn chuyên dụng</a></li>
                                  <li><a href="">Đèn đứng</a></li>
                                  <li><a href="">Đèn pin & Đèn flash</a></li>
                                  <li><a href="">Đèn trang trí phòng tắm</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="Home-decoration">
                          <a href="">Trang trí nhà cửa</a>
                             <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Home-decoration-item">
                              <ul>
                                  <li><a href="">Giấy dán tường, decal</a></li>
                                  <li><a href="">Trang trí tường</a></li>
                                  <li><a href="">Phụ kiện làm thơm phòng</a></li>
                                  <li><a href="">Thảm</a></li>
                                  <li><a href="">Đồng hồ</a></li>
                                  <li><a href="">Rèm & Màn cửa</a></li>
                                  <li><a href="">Tranh & khung ảnh</a></li>
                                  <li><a href="">Cây & hoa giả</a></li>
                                  <li><a href="">Lọ & Bình trang trí</a></li>
                                  <li><a href="">Điểm nhấn trang trí</a></li>
                                  <li><a href="">Bộ nến trang trí</a></li>
                                  <li><a href="">Gương</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="Furniture">
                          <a href="">Đồ nội thất</a>
                             <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Furniture-item">
                              <ul>
                                  <li><a href="">Nệm</a></li>
                                  <li><a href="">Tủ quần áo</a></li>
                                  <li><a href="">Bàn làm việc</a></li>
                                  <li><a href="">Tủ sắp xếp giày</a></li>
                                  <li><a href="">Nội thất phòng ngủ</a></li>
                                  <li><a href="">Nội thất phòng khách</a></li>
                                  <li><a href="">Nội thất phòng làm việc</a></li>
                                  <li><a href="">Nội thất bếp & phòng ăn</a></li>
                                  <li><a href="">Nội thất phòng giải trí</a></li>
                                  <li><a href="">Nội thất ngoài trời</a></li>
                                  <li><a href="">Nội thất hành lang & lối vào</a></li>
                                  <li><a href="">Tủ chứa & Sắp xếp đồ</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="Stationery-crafts">
                          <a href="">Văn phòng phẩm & thủ công</a>
                             <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Stationery-crafts-item">
                              <ul>
                                  <li><a href="">Phụ kiện trường học & văn phòng</a></li>
                                  <li><a href="">Máy tính học sinh</a></li>
                                  <li><a href="">Bộ dụng cụ học tập</a></li>
                                  <li><a href="">Bút viết các loại</a></li>
                                  <li><a href="">Quà tặng & Đồ dùng gói quà</a></li>
                                  <li><a href="">Đồ thủ công</a></li>
                                  <li><a href="">Dụng cụ vẽ</a></li>
                                  <li><a href="">Dụng cụ may vá</a></li>
                                  <li><a href="">Sản phẩm từ giấy</a></li>
                                  <li><a href="">Quà lưu niệm</a></li>
                                  <li><a href="">Giấy in các loại</a></li>
                                  <li><a href="">Thùng carton</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="Books-Musical-Instruments">
                          <a href="">Sách & Nhạc cụ</a>
                             <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Books-Musical-Instruments-item">
                              <ul>
                                  <li><a href="">Đàn guitar</a></li>
                                  <li><a href="">Piano & organ di động</a></li>
                                  <li><a href="">Phụ kiện âm nhạc</a></li>
                                  <li><a href="">Nhạc cụ truyền thống</a></li>
                                  <li><a href="">Trống và bộ gõ</a></li>
                                  <li><a href="">Sáo các loại</a></li>
                                  <li><a href="">Nghệ thuật sống</a></li>
                                  <li><a href="">Văn học</a></li>
                                  <li><a href="">Kinh tế</a></li>
                                  <li><a href="">Sách Ngôn ngữ học & Kỹ năng viết</a></li>
                                  <li><a href="">Thường thức đời sống</a></li>
                                  <li><a href="">Sách cho cha mẹ</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="Washing-Charging-Equipment">
                          <a href="">Thiết bị giặt & làm sạch</a>
                             <div class="icon-nav2">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                          </div>
                          <div class="catetory-3 Washing-Charging-Equipment-item">
                              <ul>
                                  <li><a href="">Thùng rác & Thùng tái chế</a></li>
                                  <li><a href="">Xô Nhựa</a></li>
                                  <li><a href="">Chổi & Cây lau nhà</a></li>
                                  <li><a href="">Dụng cụ giặt ủi</a></li>
                                  <li><a href="">Giỏ giặt ủi</a></li>
                                  <li><a href="">Giá phơi quần áo</a></li>
                                  <li><a href="">Móc treo & Kẹp quần áo</a></li>
                                  <li><a href="">Cầu là quần áo</a></li>
                                  <li><a href="">Túi Giặt & bóng giặt</a></li>
                              </ul>
                          </div>
                      </li>
                  </ul>
              </div>
              <!-- end catetory-2 -->
              </li>
                  <li class="Womens-Fashion"><a href=""> 
                      <span>Thời Trang Nữ</span>
                      <div class="icon-nav">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                      </div>
                  </a>
                  <div class="catetory-2 Womens-Fashion-item">
                      <ul>
                          <li>
                              <a href="">Đầm nữ</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                          </li>
                          <li class="Pants-skirts">
                              <a href="">Quần và chân váy</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Pants-skirts-item">
                                  <ul>
                                      <li><a href="">Quần dài và quần bó</a></li>
                                      <li><a href="">Jeans</a></li>
                                      <li><a href="">Chân váy</a></li>
                                      <li><a href="">Quần short</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Womens-shirt">
                              <a href="">Áo nữ</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Womens-shirt-item">
                                  <ul>
                                      <li><a href="">Áo khoác</a></li>
                                      <li><a href="">Áo hoodies</a></li>
                                      <li><a href="">Áo len và áo cardigan</a></li>
                                      <li><a href="">Áo sơ mi</a></li>
                                      <li><a href="">Áo polo</a></li>
                                      <li><a href="">Áo sơ mi kiểu</a></li>
                                      <li><a href="">Áo thun</a></li>
                                      <li><a href="">Áo hai dây</a></li>
                                      <li><a href="">Áo kiểu nữ</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li>
                              <a href="">Jumpsuits</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                          </li>
                          <li>
                              <a href="">Đồ đôi và gia đình</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                          </li>
                          <li class="Pajamas-lingerie">
                              <a href="">Đồ ngủ và nội y</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Pajamas-lingerie-item">
                                  <ul>
                                      <li><a href="">Đồ ngủ nữ</a></li>
                                      <li><a href="">Quần lót nữ</a></li>
                                      <li><a href="">Áo ngực</a></li>
                                      <li><a href="">Đồ lót định hình</a></li>
                                      <li><a href="">Bộ đồ lót nữ</a></li>
                                      <li><a href="">Phụ kiện đồ lót</a></li>
                                      <li><a href="">Áo lót hai dây</a></li>
                                      <li><a href="">Áo choàng nữ</a></li>
                                      <li><a href="">Đồ lót gợi cảm</a></li>
                                      <li><a href="">Đồ bơi một mảnh</a></li>
                                      <li><a href="">Bikini</a></li>
                                      <li><a href="">Phụ kiện đồ lót và đồ bơi nữ</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Womens-Accessories">
                              <a href="">Phụ kiện nữ</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Womens-Accessories-item">
                                  <ul>
                                      <li><a href="">Vớ và quần vớ nữ</a></li>
                                      <li><a href="">Phụ kiện tóc nữ</a></li>
                                      <li><a href="">Nón thời trang nữ</a></li>
                                      <li><a href="">Dù nữ</a></li>
                                      <li><a href="">Thắt lưng nữ</a></li>
                                      <li><a href="">Phụ kiện thời trang khác</a></li>
                                      <li><a href="">Khăn choàng thời trang</a></li>
                                      <li><a href="">Găng tay nữ</a></li>
                                      <li><a href="">Khẩu trang vải</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Womens-shoes">
                              <a href="">Giày nữ</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Womens-shoes-item">
                                  <ul>
                                      <li><a href="">Sneakers</a></li>
                                      <li><a href="">Giày cao gót</a></li>
                                      <li><a href="">Dép</a></li>
                                      <li><a href="">Sandals</a></li>
                                      <li><a href="">Giày đế bằng</a></li>
                                      <li><a href="">Giày đế xuồng</a></li>
                                      <li><a href="">Giày bốt</a></li>
                                      <li><a href="">Phụ kiện giày</a></li>
                                      <li><a href="">Mules</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Baby-girl-costume">
                              <a href="">Trang phục bé gái</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Baby-girl-costume-item">
                                  <ul>
                                      <li><a href="">Đầm bé gái</a></li>
                                      <li><a href="">Đồ lót & Đồ ngủ</a></li>
                                      <li><a href="">Phụ kiện tóc</a></li>
                                      <li><a href="">Áo bé gái</a></li>
                                      <li><a href="">Quần & Chân váy</a></li>
                                      <li><a href="">Áo khoác</a></li>
                                      <li><a href="">Nón</a></li>
                                      <li><a href="">Vớ & Quần vớ</a></li>
                                      <li><a href="">Dù</a></li>
                                      <li><a href="">Găng tay, Khăn choàng, Phụ kiện</a></li>
                                      <li><a href="">Khẩu trang bé gái</a></li>
                                      <li><a href="">Áo Hoodies</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Girls-shoes">
                              <a href="">Giày bé gái</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Girls-shoes-item">
                                  <ul>
                                      <li><a href="">Dép &à Sandals</a></li>
                                      <li><a href="">Sneakers</a></li>
                                      <li><a href="">Giày đế bằng</a></li>
                                      <li><a href="">Giày đi học</a></li>
                                      <li><a href="">Giày bốt</a></li>
                                      <li><a href="">Phụ kiện giày</a></li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
                  <!-- end catetory-2 -->
              </li>
                  <li class="Mens-clothing"><a href="">
                      <span>Thời Trang Nam</span>
                      <div class="icon-nav">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                      </div>
                  </a>
                  <div class="catetory-2 Mens-clothing-item">
                      <ul>
                          <li class="Mens-clothing">
                              <a href="">Trang phục nam</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Mens-clothing-item">
                                  <ul>
                                      <li><a href="">Áo thun nam</a></li>
                                      <li><a href="">Áo sơ mi nam</a></li>
                                      <li><a href="">Áo polo nam</a></li>
                                      <li><a href="">Áo khoác nam</a></li>
                                      <li><a href="">Quần jean nam</a></li>
                                      <li><a href="">Quần dài nam</a></li>
                                      <li><a href="">Quần short nam</a></li>
                                      <li><a href="">Đồ vest nam</a></li>
                                      <li><a href="">Áo hoodie nam</a></li>
                                      <li><a href="">Áo trùm đầu & cardigan nam</a></li>
                                      <li><a href="">Đồ bơi nam</a></li>
                                      <li><a href="">Trang phục Hồi Giáo</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Mens-shoes">
                              <a href="">Giày dép nam</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Mens-shoes-item">
                                  <ul>
                                      <li><a href="">Giày sneaker</a></li>
                                      <li><a href="">Dép & sandal</a></li>
                                      <li><a href="">Giày lười</a></li>
                                      <li><a href="">Giày công sở</a></li>
                                      <li><a href="">Giày bốt</a></li>
                                      <li><a href="">Phụ kiện giày dép</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Mens-underwear">
                              <a href="">Đồ lót nam</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Mens-underwear-item">
                                  <ul>
                                      <li><a href="">Quần lót boxer nam</a></li>
                                      <li><a href="">Quần lót tam giác nam</a></li>
                                      <li><a href="">Đồ mặc ngủ nam</a></li>
                                      <li><a href="">Quần lọt khe</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Mens-fashion-accessories">
                              <a href="">Phụ kiện thời trang nam</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Mens-fashion-accessories-item">
                                  <ul>
                                      <li><a href="">Nón mũ nam</a></li>
                                      <li><a href="">Thắt lưng nam</a></li>
                                      <li><a href="">Tất vớ nam</a></li>
                                      <li><a href="">Khẩu trang vải</a></li>
                                      <li><a href="">Găng tay nam</a></li>
                                      <li><a href="">Dây đai quần nam</a></li>
                                      <li><a href="">Cà vạt</a></li>
                                      <li><a href="">Khăn choàng nam</a></li>
                                      <li><a href="">Ô dù</a></li>
                                      <li><a href="">Nơ thời trang</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Baby-boy-costume">
                              <a href="">Trang phục bé trai</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Baby-boy-costume-item">
                                  <ul>
                                      <li><a href="">Áo thun bé trai</a></li>
                                      <li><a href="">Đồ bơi bé trai</a></li>
                                      <li><a href="">Đồ ngủ bé trai</a></li>
                                      <li><a href="">Quần đùi bé trai</a></li>
                                      <li><a href="">Áo khoác bé trai</a></li>
                                      <li><a href="">Quần dài bé trai</a></li>
                                      <li><a href="">Nón bé trai</a></li>
                                      <li><a href="">Quần lót bé trai</a></li>
                                      <li><a href="">Tất bé trai</a></li>
                                      <li><a href="">Áo mưa bé trai</a></li>
                                      <li><a href="">Áo hoodie bé trai</a></li>
                                      <li><a href="">Găng tay, khăn choàng bé trai</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Boys-shoes">
                              <a href="">Giày bé trai</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Boys-shoes-item">
                                  <ul>
                                      <li><a href="">Dép & sandal bé trai</a></li>
                                      <li><a href="">Giày sneaker bé trai</a></li>
                                      <li><a href="">Giày lười bé trai</a></li>
                                      <li><a href="">Giày bốt bé trai</a></li>
                                      <li><a href="">Giày đi học bé trai</a></li>
                                      <li><a href="">Phụ kiện giày bé trai</a></li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
                   <!-- end catetory-2 -->
              </li>
                  <li class="Fashion-accessories"><a href="">
                      <span>Phụ Kiện Thời Trang</span>
                      <div class="icon-nav">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                      </div>
                  </a>
                  <div class="catetory-2 Fashion-accessories-item">
                      <ul>
                          <li class="Womens-Watch"> 
                              <a href="">Đồng Hồ Nữ</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Womens-Watch-item">
                                  <ul>
                                      <li><a href="">Đồng Hồ Đi Chơi</a></li>
                                      <li><a href="">Đồng Hồ Đi Làm</a></li>
                                      <li><a href="">Đồng Hồ Thể Thao</a></li>
                                      <li><a href="">Đồng Hồ Đã Qua Sử Dụng</a></li>
                                      <li><a href="">Đồng Hồ Cao Cấp</a></li>
                                      <li><a href="">Phụ Kiện Đồng Hồ</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Womens-Jewelry">
                              <a href="">Trang Sức Nữ</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Womens-Jewelry-item">
                                  <ul>
                                      <li><a href="">Trang Sức Thời Trang</a></li>
                                      <li><a href="">Vòng Tay Thời Trang</a></li>
                                      <li><a href="">Vòng Cổ Thời Trang</a></li>
                                      <li><a href="">Bông Tay Thời Trang</a></li>
                                      <li><a href="">Nhẫn Thời Trang</a></li>
                                      <li><a href="">Trang Sức Đính Hôn</a></li>
                                      <li><a href="">Trang Sức Cao Cấp</a></li>
                                      <li><a href="">Trang Sức Kim Cương</a></li>
                                      <li><a href="">Trang Sức Ngọc Bích</a></li>
                                      <li><a href="">Vàng Nguyên Chất</a></li>
                                      <li><a href="">Đá Quý</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Sunglasses">
                              <a href="">Kính Mát</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Sunglasses-item">
                                  <ul>
                                      <li><a href="">Kính Mát Nam</a></li>
                                      <li><a href="">Kính Mát Nữ</a></li>
                                      <li><a href="">Kính Mát Trẻ Em</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Fashion-glasses">
                              <a href="">Kính Thời Trang</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Fashion-glasses-item">
                                  <ul>
                                      <li> <a href="">Kính Cận Nam</a> </li>
                                      <li><a href="">Kính Cận Nữ</a> </li>
                                      <li><a href=""> Kính Cận Trẻ Em</a></li>
                                      <li><a href="">Phụ Kiện Đồng Hồ</a> </li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Womens-handbags">
                              <a href="">Túi Xách Nữ</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Womens-handbags-item">
                                  <ul>
                                      <li><a href="">Túi Đeo Chéo</a></li>
                                      <li><a href="">Túi Xách</a></li>
                                      <li><a href="">Ví Dự Tiệc</a></li>
                                      <li><a href="">Túi Tote</a></li>
                                      <li><a href="">Ví & Phụ Kiện</a></li>
                                      <li><a href="">Túi Đeo Tay</a></li>
                                      <li><a href="">Charm Phụ Kiện Gắn Túi</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li>
                              <a href="">Ba Lô Nữ</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                          </li>
                          <li class="Mens-watch">
                              <a href="">Đồng Hồ Nam</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Mens-watch-item">
                                  <ul>
                                      <li><a href="">Đồng Hồ Đi Chơi</a></li>
                                      <li><a href="">Đồng Hồ Đi Làm</a></li>
                                      <li><a href="">Đồng Hồ Thể Thao</a></li>
                                      <li><a href="">Đồng Hồ Đã Qua Sử Dụng</a></li>
                                      <li><a href="">Đồng Hồ Cao Cấp</a></li>
                                      <li><a href="">Phụ Kiện Đồng Hồ</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Mens-Jewelry">
                              <a href="">Trang Sức Nam</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Mens-Jewelry-item">
                                  <ul>
                                      <li><a href="">Trang Sức Đính Hôn</a></li>
                                      <li><a href="">Trang Sức Thời Trang</a></li>
                                      <li><a href="">Nhẫn Nam</a></li>
                                      <li><a href="">Vòng Tay Nam</a></li>
                                      <li><a href="">Mặt Dây Chuyền Nam</a></li>
                                      <li><a href="">Bông Tai Cho Nam</a></li>
                                      <li><a href="">Trang Sức Cao Cấp</a></li>
                                      <li><a href="">Phụ Kiện Trang Phục Nam</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Mens-bags">
                              <a href="">Túi Xách Nam</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Mens-bag-item">
                                  <ul>
                                      <li><a href="">Ba Lô Nam</a></li>
                                      <li><a href="">Cặp Xách Công Sở</a></li>
                                      <li><a href="">Túi Messenger</a></li>
                                      <li><a href="">Túi Đeo Nam</a></li>
                                      <li><a href="">Ví Nam</a></li>
                                      <li><a href="">Túi Đeo Hông</a></li>
                                      <li><a href="">Ví Đựng Thẻ Cho Nam</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li>
                              <a href="">Túi Đeo Chéo Nam</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                             
                          </li>
                          <li class="Suitcases-Travel-Bags">
                              <a href="">Vali & Túi Du Lịch</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Suitcases-Travel-Bags-item">
                                  <ul>
                                      <li><a href="">Ba Lô & Túi Laptop</a></li>
                                      <li><a href="">Vali Du Lịch</a></li>
                                      <li><a href="">Phụ Kiện Du Lịch</a></li>
                                      <li><a href="">Túi Du Lịch</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Baby-Bags">
                              <a href="">Túi Trẻ Em</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Baby-Bags-item">
                                  <ul>
                                      <li><a href="">Ba Lô Kéo Trẻ Em</a></li>
                                      <li><a href="">Ba Lô Trẻ Em</a></li>
                                      <li><a href="">Túi Trẻ Em</a></li>
                                      <li><a href="">Phụ Kiện Túi Trẻ Em</a></li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
                   <!-- end catetory-2 -->
              </li>
                  <li class="Sports-Travel"><a href="">
                      <span>Thể Thao & Du Lịch</span>
                      <div class="icon-nav">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                      </div>
                  </a>
                  <div class="catetory-2 Sports-Travel-item">
                      <ul>
                          <li class="Mens-Sports-Shoes">
                              <a href="">Giày Thể Thao Nam</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Mens-Sports-Shoes-item">
                                  <ul>
                                      <li><a href="">Giày chạy bộ</a></li>
                                      <li><a href="">Giày đá bóng</a></li>
                                      <li><a href="">Giày tennis nam</a></li>
                                      <li><a href="">Giày cầu lông nam</a></li>
                                      <li><a href="">Giày thể thao sneakers nam</a></li>
                                      <li><a href="">Giày chơi bóng rổ</a></li>
                                      <li><a href="">Giày leo núi</a></li>
                                      <li><a href="">Sandal thể thao nam</a></li>
                                      <li><a href="">Giày chơi thể thao dưới nước</a></li>
                                      <li><a href="">Giày đạp xe</a></li>
                                      <li><a href="">Giày tập golf</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Mens-Outfits">
                              <a href="">Trang Phục Nam</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Mens-Outfits-item">
                                  <ul>
                                      <li><a href="">Áo thun thể thao</a></li>
                                      <li><a href="">Quần dài thể thao nam</a></li>
                                      <li><a href="">Quần shorts thể thao nam</a></li>
                                      <li><a href="">Áo khoác thể thao nam</a></li>
                                      <li><a href="">Đồ bơi</a></li>
                                      <li><a href="">Áo Jersey</a></li>
                                      <li><a href="">Túi thể thao</a></li>
                                      <li><a href="">Phụ kiện thể thao</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Womens-sports-shoes">
                              <a href="">Giày Thể Thao Nữ</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Womens-sports-shoes-item">
                                  <ul>
                                      <li><a href="">Giày chạy bộ</a></li>
                                      <li><a href="">Giày thể thao sneakers nữ</a></li>
                                      <li><a href="">Giày chơi bóng rổ</a></li>
                                      <li><a href="">Giày đá bóng</a></li>
                                      <li><a href="">Giày leo núi</a></li>
                                      <li><a href="">Giày cầu lông nữ</a></li>
                                      <li><a href="">Sandal thể thao nữ</a></li>
                                      <li><a href="">Giày chơi thể thao dưới nước</a></li>
                                      <li><a href="">Giày đạp xe</a></li>
                                      <li><a href="">Giày tập golf</a></li>
                                      <li><a href="">Giày tennis nữ</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Womens-Outfits">
                              <a href="">Trang Phục Nữ</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Womens-Outfits-item">
                                  <ul>
                                      <li><a href="">Áo thun thể thao</a></li>
                                      <li><a href="">Quần dài thể thao </a></li>
                                      <li><a href="">Quần shorts thể thao </a></li>
                                      <li><a href="">Áo lót thể thao </a></li>
                                      <li><a href="">Áo khoác thể thao</a></li>
                                      <li><a href="">Đồ bơi</a></li>
                                      <li><a href="">Túi thể thao</a></li>
                                      <li><a href="">Phụ kiện thể thao</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Suitcases-Travel-Bag">
                              <a href="">Vali & Túi Du Lịch</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Suitcases-Travel-Bag-item">
                                  <ul>
                                      <li><a href="">Ba Lô & Túi Laptop</a></li>
                                      <li><a href="">Vali Du Lịch</a></li>
                                      <li><a href="">Phụ Kiện Du Lịch</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Picnic-Activities">
                              <a href="">Hoạt Động Dã Ngoại</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Picnic-Activities-item">
                                  <ul>
                                      <li><a href="">Đạp Xe</a></li>
                                      <li><a href="">Câu Cá</a></li>
                                      <li><a href="">Dã Ngoại & Đi Bộ Đường Trường</a></li>
                                      <li><a href="">Leo Núi</a></li>
                                      <li><a href="">Golf</a></li>
                                      <li><a href="">Trượt Patin</a></li>
                                      <li><a href="">Trượt Ván</a></li>
                                      <li><a href="">Xe Scooter</a></li>
                                      <li><a href="">Bắn Súng</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Sports-Fitness">
                              <a href="">Thể Thao & Thể Hình</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Sports-Fitness-item">
                                  <ul>
                                      <li><a href="">Máy Tập Thể Hình</a></li>
                                      <li><a href="">Máy Tập Thể Lực</a></li>
                                      <li><a href="">Tạ</a></li>
                                      <li><a href="">Yoga</a></li>
                                      <li><a href="">Pilates</a></li>
                                      <li><a href="">Chạy Bộ</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Racquet-Sports">
                              <a href="">Thể Thao Dùng Vợt</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Racquet-Sports-item">
                                  <ul>
                                      <li><a href="">Vợt Cầu Lông</a></li>
                                      <li><a href="">Vợt Bóng Bàn</a></li>
                                      <li><a href="">Vợt Tennis</a></li>
                                      <li><a href="">Quả Cầu Lông</a></li>
                                      <li><a href="">Bóng Bàn</a></li>
                                      <li><a href="">Bóng Tennis</a></li>
                                      <li><a href="">Bóng Quần</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Team-sport">
                              <a href="">Thể Thao Đồng Đội</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Team-sport-item">
                                  <ul>
                                      <li><a href="">Bóng Rổ</a></li>
                                      <li><a href="">Bóng Chuyền</a></li>
                                      <li><a href="">Bóng Đá</a></li>
                                      <li><a href="">Bóng Chày</a></li>
                                      <li><a href="">Bóng Bầu Dục</a></li>
                                      <li><a href="">Cầu Mây</a></li>
                                      <li><a href="">Cổ Động</a></li>
                                      <li><a href="">Cricket</a></li>
                                      <li><a href="">Khúc Côn Cầu</a></li>
                                      <li><a href="">Thể Dục Dụng Cụ</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Boxing-Martial-Arts">
                              <a href="">Đấm Bốc & Võ Thuật</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Boxing-Martial-Arts-item">
                                  <ul>
                                      <li><a href="">Thiết Bị Tập Võ Thuật</a></li>
                                      <li><a href="">Thiết Bị Tập Đấm Bốc</a></li>
                                      <li><a href="">Bao Cát & Phụ Kiện</a></li>
                                      <li><a href="">Bao Tay</a></li>
                                      <li><a href="">Đích Đá</a></li>
                                      <li><a href="">Đồng Phục Võ Thuật</a></li>
                                      <li><a href="">Dụng Cụ Bảo Hộ</a></li>
                                      <li><a href="">Găng Tay Đấm Bốc</a></li>
                                      <li><a href="">Găng Tay MMA</a></li>
                                      <li><a href="">Tấm Lót Đấm Bốc</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Water-sport">
                              <a href="">Thể Thao Dưới Nước</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Water-sport-item">
                                  <ul>
                                      <li><a href="">Bơi Lội</a></li>
                                      <li><a href="">Chèo Thuyền</a></li>
                                      <li><a href="">Lặn & Lặn Dùng Ống Thở</a></li>
                                      <li><a href="">Lướt Ván</a></li>
                                      <li><a href="">Phao Trượt</a></li>
                                      <li><a href="">Áo Cứu Hộ</a></li>
                                      <li><a href="">Túi Chống Nước</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Sports-Accessories">
                              <a href="">Phụ Kiện Thể Thao</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Sports-Accessories-item">
                                  <ul>
                                      <li><a href="">Bình Nước Thể Thao</a></li>
                                      <li><a href="">Ống Bơm</a></li>
                                      <li><a href="">Nẹp & Hỗ Trợ</a></li>
                                      <li><a href="">Túi Y Tế</a></li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
                  <!-- end catetory-2 -->
              </li>
                  <li class="Cars-Motorcycles-Navigation-Devices"><a href="">
                      <span>Ôtô, Xe Máy & Thiết Bị Định Vị</span>
                      <div class="icon-nav">
                          <ion-icon name="chevron-forward-outline"></ion-icon>
                      </div>
                  </a>
                  <div class="catetory-2 Cars-Motorcycles-Navigation-Devices-item">
                      <ul>
                          <li class="Motorcycle">
                              <a href="">Xe máy</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Motorcycle-item">
                                  <ul>
                                      <li><a href="">Xe tay ga</a></li>
                                      <li><a href="">Xe côn tay</a></li>
                                      <li><a href="">Xe số</a></li>
                                      <li><a href="">Xe máy điện</a></li>
                                      <li><a href="">Xe 50cc</a></li>
                                  </ul>
                              </div>
                          </li>
                             
                          <li class="Car-care">
                              <a href="">Chăm sóc ô tô</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Car-care-item">
                                  <ul>
                                      <li><a href="">Nội thất ô tô</a></li>
                                      <li><a href="">Gói chăm sóc xe</a></li>
                                      <li><a href="">Máy bơm lốp</a></li>
                                      <li><a href="">Máy hút bụi ô tô</a></li>
                                      <li><a href="">Xịt khử mùi dành cho ô tô</a></li>
                                      <li><a href="">Bộ sản phẩm vệ sinh nội thất</a></li>
                                      <li><a href="">Chất làm mờ vết xước</a></li>
                                      <li><a href="">Bộ sản phẩm vệ sinh xe</a></li>
                                      <li><a href="">Dụng cụ làm sạch nước</a></li>
                                      <li><a href="">Xịt chống rỉ sét gầm ô tô</a></li>
                                      <li><a href="">Nước lau kiếng xe</a></li>
                                      <li><a href="">Xịt bảo dưỡng vỏ & mâm xe</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Car-interior-decoration">
                              <a href="">Trang trí nội thất ô tô</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Car-interior-decoration-item">
                                  <ul>
                                      <li><a href="">Xịt thơm xe</a></li>
                                      <li><a href="">Lót sàn ô tô</a></li>
                                      <li><a href="">Gạt tàn ô tô</a></li>
                                      <li><a href="">Bọc vô lăng xe hơi</a></li>
                                      <li><a href="">Bao ghế & phụ kiện</a></li>
                                      <li><a href="">Móc khóa ô tô</a></li>
                                      <li><a href="">Tấm che nắng kính chắn gió</a></li>
                                      <li><a href="">Bọc cần số</a></li>
                                      <li><a href="">Dụng cụ thoát hiểm</a></li>
                                      <li><a href="">Lọc không khí ô tô</a></li>
                                      <li><a href="">Bộ dụng cụ sơ cứu</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Car-exterior-decoration">
                              <a href="">Trang trí ngoại thất ô tô</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Car-exterior-decoration-item">
                                  <ul>
                                      <li><a href="">Decal và trang trí ô tô</a></li>
                                      <li><a href="">Vật dụng sắp xếp hàng hóa</a></li>
                                      <li><a href="">Phụ kiện trang trí ăng ten xe hơi</a></li>
                                      <li><a href="">Decal nam châm</a></li>
                                      <li><a href="">Khung bọc biển số</a></li>
                                      <li><a href="">Chắn mưa ô tô</a></li>
                                      <li><a href="">Chắn bùn xe hơi</a></li>
                                      <li><a href="">Còi ô tô</a></li>
                                      <li><a href="">Ốp crom xe hơi</a></li>
                                      <li><a href="">Logo xe hơi</a></li>
                                      <li><a href="">Viền carbon xe ô tô</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Auto-Parts-Accessories">
                              <a href="">Phụ tùng & phụ kiện ô tô</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Auto-Parts-Accessories-item">
                                  <ul>
                                      <li><a href="">Đèn trợ sáng ô tô</a></li>
                                      <li><a href="">Ắc quy xe hơi</a></li>
                                      <li><a href="">Body bảo vệ xe hơi</a></li>
                                      <li><a href="">Nắp chụp trang trí ô tô</a></li>
                                      <li><a href="">Hệ thống phanh xe</a></li>
                                      <li><a href="">Điều hòa xe hơi</a></li>
                                      <li><a href="">Thiết bị lọc nhiên liệu</a></li>
                                      <li><a href="">Thiết bị lọc nhớt</a></li>
                                      <li><a href="">Bugi xe hơi</a></li>
                                      <li><a href="">Bộ đánh lửa xe ô tô</a></li>
                                      <li><a href="">Hệ thống định vị</a></li>
                                      <li><a href="">Bộ dụng cụ sữa chữa</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Automotive-electronics">
                              <a href="">Đồ điện tử dành cho ô tô</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Automotive-electronics-item">
                                  <ul>
                                      <li><a href="">Camera xe hơi</a></li>
                                      <li><a href="">Thiết bị định vị GPS</a></li>
                                      <li><a href="">Phụ kiện điện tử xe hơi</a></li>
                                      <li><a href="">Bộ chuyển đổi âm thanh</a></li>
                                      <li><a href="">Thiết bị kỹ thuật số xe hơi</a></li>
                                      <li><a href="">Camera hành trình</a></li>
                                      <li><a href="">Bộ khuếch đại âm thanh</a></li>
                                      <li><a href="">Camera lùi</a></li>
                                      <li><a href="">Phụ kiện âm thanh & hình ảnh</a></li>
                                      <li><a href="">Phụ kiện điện thoại trên xe</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Automotive-lubricants-additives">
                              <a href="">Dầu nhớt & phụ gia ô tô</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Automotive-lubricants-additives-item">
                                  <ul>
                                      <li><a href="">Dầu nhớt động cơ</a></li>
                                      <li><a href="">Nước mát</a></li>
                                      <li><a href="">Nước vệ sinh kính chắn gió</a></li>
                                      <li><a href="">Nước làm sạch động cơ</a></li>
                                      <li><a href="">Chất phụ gia động cơ</a></li>
                                      <li><a href="">Dầu phanh</a></li>
                                      <li><a href="">Nước xả cho xe</a></li>
                                      <li><a href="">Mỡ & dầu nhờn</a></li>
                                      <li><a href="">Nhớt hộp số</a></li>
                                      <li><a href="">Thiết bị đo nhớt</a></li>
                                      <li><a href="">Chất vệ sinh máy lạnh</a></li>
                                      <li><a href="">Keo chuyên dụng</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Motobike-accessories">
                              <a href="">Phụ tùng xe máy</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Motobike-accessories-item">
                                  <ul>
                                      <li><a href="">Đèn xe máy</a></li>
                                      <li><a href="">Khung bảo vệ xe máy</a></li>
                                      <li><a href="">Gương xe</a></li>
                                      <li><a href="">Chân chống & phụ kiện</a></li>
                                      <li><a href="">Lọc gió và nhiên liệu</a></li>
                                      <li><a href="">Khung & thân xe máy</a></li>
                                      <li><a href="">Phuộc nhún</a></li>
                                      <li><a href="">Ắc quy xe máy</a></li>
                                      <li><a href="">Đèn led xe máy</a></li>
                                      <li><a href="">Đèn trợ sáng</a></li>
                                      <li><a href="">Pô xe</a></li>
                                      <li><a href="">Lọc gió xe máy</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Protective-gear-riding-motorbike">
                              <a href="">Đồ bảo hộ khi đi xe máy</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Protective-gear-riding-motorbike-item">
                                  <ul>
                                      <li><a href="">Mũ bảo hiểm</a></li>
                                      <li><a href="">Áo mưa</a></li>
                                      <li><a href="">Phụ kiện mũ bảo hiểm</a></li>
                                      <li><a href="">Nón bảo hiểm full face</a></li>
                                      <li><a href="">Găng tay lái xe</a></li>
                                      <li><a href="">Giầy đi xe máy</a></li>
                                      <li><a href="">Áo khoát chuyên dụng</a></li>
                                      <li><a href="">Khẩu trang</a></li>
                                      <li><a href="">Bảo vệ cổ</a></li>
                                      <li><a href="">Áo giáp</a></li>
                                      <li><a href="">Bảo vệ đầu gối</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Motorcycle-accessories-toys">
                              <a href="">Phụ kiện & đồ chơi xe máy</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Motorcycle-accessories-toys-item">
                                  <ul>
                                      <li><a href="">Decal trang trí xe máy</a></li>
                                      <li><a href="">Bọc yên xe máy</a></li>
                                      <li><a href="">Khung biển số xe máy</a></li>
                                      <li><a href="">Baga xe máy</a></li>
                                      <li><a href="">Bạt trùm xe máy</a></li>
                                      <li><a href="">Kính chắn gió xe máy</a></li>
                                      <li><a href="">Ốc vít & phụ kiện trang trí xe máy</a></li>
                                      <li><a href="">Baga hành lý xe máy</a></li>
                                      <li><a href="">Yên xe máy</a></li>
                                      <li><a href="">Tựa lưng xe máy</a></li>
                                      <li><a href="">Khóa bảo vệ xe máy</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li class="Motorcycle-lubricants-additives">
                              <a href="">Dầu nhớt & phụ gia xe máy</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Motorcycle-lubricants-additives-item">
                                  <ul>
                                      <li><a href="">Dầu động cơ</a></li>
                                      <li><a href="">Dầu hộp số</a></li>
                                      <li><a href="">Nước làm mát</a></li>
                                      <li><a href="">Dầu bôi trơn dung môi</a></li>
                                      <li><a href="">Mỡ bôi trơn</a></li>
                                      <li><a href="">Dầu thắng</a></li>
                                      <li><a href="">Chất tẩy rửa xe</a></li>
                                      <li><a href="">Dầu nhớt phuộc nhún</a></li>
                                     
                                  </ul>
                              </div>
                          </li>
                          <li class="Motorcycle-wheel-cover-Wheels">
                              <a href="">Vỏ ruột bánh xe máy & Mâm xe</a>
                                 <div class="icon-nav2">
                                  <ion-icon name="chevron-forward-outline"></ion-icon>
                              </div>
                              <div class="catetory-3 Motorcycle-wheel-cover-Wheels-item">
                                  <ul>
                                      <li><a href="">Lốp & Ruột xe máy</a></li>
                                      <li><a href="">Bộ bánh, lốp xe máy</a></li>
                                      <li><a href="">Mâm, vành xe máy</a></li>
                                      <li><a href="">Đùm xe máy</a></li>
                                      <li><a href="">Dán vành & Trang trí bánh</a></li>
                                      <li><a href="">Phụ kiện bánh xe máy</a></li>
                                      <li><a href="">Vít lốp xe</a></li>
                                      <li><a href="">Nắp van xe</a></li>
                                      <li><a href="">Vòng bi đệm lốp xe</a></li>
                                      <li><a href="">Trục & đệm phuộc xe máy</a></li>
                                      <li><a href="">Bộ phận khác cho lốp & mâm xe</a></li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
                   <!-- end catetory-2 -->
              </li>
              </ul>
          </div>
          <!-- end catetorys-1 -->
         
      </div>
  </div>
  </div>
  <!-- end slide banner -->
  <div id="flashdeal"   class="flashdeal item-1">
    <div class="content-flashdeal">
   
        <div class="card-content">
            <a href="">
            <div class=" laz-fl lazmall-ads ">
                <div class="img-flash">
                    <img src="<?= base_url() ?>images/lazmall.png" alt="">
                </div>
                <div class="text-flash"> LazMall</div>
            </div>
            </a>
            <a href="">
            <div class=" laz-fl discount-code">
             <div class="img-flash">
                 <img src="<?= base_url() ?>images/discount-code.png" alt="">
             </div>
             <div class="text-flash">Mã Giảm Giá</div>
            </div>
           </a>
           <a href="">
            <div class="laz-fl recharge-vouchers">
             <div class="img-flash">
                 <img src="<?= base_url() ?>images/recharge-vouchers.png" alt="">
             </div>
             <div class="text-flash"> Nạp Thẻ & eVoucher</div>
            </div>
          </a> 
           <a href="">
            <div class="laz-fl laz-global">
             <div class="img-flash">
                 <img src="<?= base_url() ?>images/laz-global.png" alt="">
             </div>
             <div class="text-flash">LazGlobal</div>
            </div>
           </a>
        </div>
        <div class="card-flashdeal-content">
            <div class="title-flash-deal">
             Deal Chớp Nhoáng
            </div>
           
            <div class="product-flash-deal">
                <div class="time-flash-deal">
                    <div class="on-sale">
                        Đang bán
                    </div>
                    <div class="time-fl-deal">
                        <div class="text-time">Kết thúc trong</div>
                        <div class="time-deal" >
                            <span id="hours"></span>
                            <span>:</span>
                            <span id="minutes"></span>
                            <span>:</span>
                            <span id="seconds"></span>
                        </div>
                    </div>
                    <a href=""><div class="click-buy-flash-deal">
                     MUA SẮM TOÀN BỘ SẢN PHẨM
                  </div>
                   </a>
                </div>
               
                <div class="product-all-fl">
                  <?php foreach ($product as $key => $value): ?>
                <a href="">
                <div class="products-fl">
                  
                    
                 
                       <div class="product-item-fl">
                           <div class="img-fl-product">
                               <img src="<?= $value['image'] ?>" alt="">
                            </div>
                            <div class="fl-card-text">
                            <div class="title-product-fl">
                                <div class="logo-fl"></div>
                                <div class="text-fl"><?= $value['productname'] ?></div>
                            </div>
                            <div class="price-product-fl-deal">
                                    <span class="price"><?= $value['price'] ?></span>
                                    <span class="currency">đ</span>

                            </div>
                            <div class="price-product-fl">
                             <span class="cost-fl">
                                 <span class="price">
                                     <?= $value['prices'] ?>
                                 </span> 
                                 <span class="currency">
                                     đ
                                 </span > 
                             </span>
                             <span class="percent-discount">-20%</span>
                            </div>
                         </div>
                       </div>
                        
                </div>
               </a>
                <?php endforeach ?>
                <a href="">
                <div class="products-fl">
                       <div class="product-item-fl">
                           <div class="img-fl-product">
                               <img src="images/galaxyA3.jpg" alt="">
                            </div>
                            <div class="fl-card-text">
                            <div class="title-product-fl">
                                <div class="logo-fl"></div>
                                <div class="text-fl">[SALE TO 12-14.12] Điện thoại Samsung Galaxy A12 (4GB/128GB) - Cụm 4 camera 48MP - Pin trâu 5.000mAH - Sạc nhanh 15W - Miễn phí vận chuyển - Trả góp 0% - Bảo hành chính hãng 12 tháng</div>
                            </div>
                            <div class="price-product-fl-deal">
                                    <span class="price">3450000</span>
                                    <span class="currency">đ</span>

                            </div>
                            <div class="price-product-fl">
                             <span class="cost-fl">
                                 <span class="price">
                                     4.290.000
                                 </span> 
                                 <span class="currency">
                                     đ
                                 </span > 
                             </span>
                             <span class="percent-discount">-20%</span>
                            </div>
                         </div>
                       </div>
                </div>
               </a>
                <a href="">
                <div class="products-fl">
                       <div class="product-item-fl">
                           <div class="img-fl-product">
                               <img src="images/galaxyA3.jpg" alt="">
                            </div>
                            <div class="fl-card-text">
                            <div class="title-product-fl">
                                <div class="logo-fl"></div>
                                <div class="text-fl">[SALE TO 12-14.12] Điện thoại Samsung Galaxy A12 (4GB/128GB) - Cụm 4 camera 48MP - Pin trâu 5.000mAH - Sạc nhanh 15W - Miễn phí vận chuyển - Trả góp 0% - Bảo hành chính hãng 12 tháng</div>
                            </div>
                            <div class="price-product-fl-deal">
                                    <span class="price">3450000</span>
                                    <span class="currency">đ</span>

                            </div>
                            <div class="price-product-fl">
                             <span class="cost-fl">
                                 <span class="price">
                                     4.290.000
                                 </span> 
                                 <span class="currency">
                                     đ
                                 </span > 
                             </span>
                             <span class="percent-discount">-20%</span>
                            </div>
                         </div>
                       </div>
                </div>
               </a>
                <a href="">
                <div class="products-fl">
                       <div class="product-item-fl">
                           <div class="img-fl-product">
                               <img src="images/galaxyA3.jpg" alt="">
                            </div>
                            <div class="fl-card-text">
                            <div class="title-product-fl">
                                <div class="logo-fl"></div>
                                <div class="text-fl">[SALE TO 12-14.12] Điện thoại Samsung Galaxy A12 (4GB/128GB) - Cụm 4 camera 48MP - Pin trâu 5.000mAH - Sạc nhanh 15W - Miễn phí vận chuyển - Trả góp 0% - Bảo hành chính hãng 12 tháng</div>
                            </div>
                            <div class="price-product-fl-deal">
                                    <span class="price">3450000</span>
                                    <span class="currency">đ</span>

                            </div>
                            <div class="price-product-fl">
                             <span class="cost-fl">
                                 <span class="price">
                                     4.290.000
                                 </span> 
                                 <span class="currency">
                                     đ
                                 </span > 
                             </span>
                             <span class="percent-discount">-20%</span>
                            </div>
                         </div>
                       </div>
                </div>
               </a>
                <a href="">
                <div class="products-fl">
                       <div class="product-item-fl">
                           <div class="img-fl-product">
                               <img src="images/galaxyA3.jpg" alt="">
                            </div>
                            <div class="fl-card-text">
                            <div class="title-product-fl">
                                <div class="logo-fl"></div>
                                <div class="text-fl">[SALE TO 12-14.12] Điện thoại Samsung Galaxy A12 (4GB/128GB) - Cụm 4 camera 48MP - Pin trâu 5.000mAH - Sạc nhanh 15W - Miễn phí vận chuyển - Trả góp 0% - Bảo hành chính hãng 12 tháng</div>
                            </div>
                            <div class="price-product-fl-deal">
                                    <span class="price">3450000</span>
                                    <span class="currency">đ</span>

                            </div>
                            <div class="price-product-fl">
                             <span class="cost-fl">
                                 <span class="price">
                                     4.290.000
                                 </span> 
                                 <span class="currency">
                                     đ
                                 </span > 
                             </span>
                             <span class="percent-discount">-20%</span>
                            </div>
                         </div>
                       </div>
                </div>
               </a>
             </div>
           </div>
           

           
        </div>
    
    </div>
</div>
<!-- end flashdeal -->
<div class="popular-search">
    <div class="card-popular-search">
        <div class="title-popular-search">Tìm kiếm phổ biến</div>
        <div class="card-product-search">
            <div class="content-product-search">
                <a href="">
                <div class="item-product-search-left" style="background-color: #ecf5f8;">
                <div class="img-popular-search-left"><img src="images/aokhoac.jpg" alt=""></div>
                <div class="text-popular-search-left">
                    <div class="title-content-popular-search"> Áo Khoác Nam </div>
                    <div class="text-content-popular-search"> 11,289 Sản phẩm </div>
                </div>
               </div>
               </a>
            </div>
            <div class="content-product-search">
                <a href="">
                <div class="item-product-search" style="background-color: #f8f1ea;">
                    <div class="img-popular-search"><img src="images/romano.jpg" alt=""></div>
                    <div class="text-popular-search">
                        <div class="title-content-popular-search"> Dau Goi Romano </div>
                        <div class="text-content-popular-search"> 102 Sản phẩm </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="item-product-search" style="background-color: #f8f1ea;">
                    <div class="img-popular-search"><img src="images/romano.jpg" alt=""></div>
                    <div class="text-popular-search">
                        <div class="title-content-popular-search"> Dau Goi Romano </div>
                        <div class="text-content-popular-search"> 102 Sản phẩm </div>
                    </div>
                </div>
            </a>
            </div>
            
            <div class="content-product-search">
                <a href="">
                <div class="item-product-search" style="background-color: #f9ebea;">
                    <div class="img-popular-search"><img src="images/romano.jpg" alt=""></div>
                    <div class="text-popular-search">
                        <div class="title-content-popular-search"> Dau Goi Romano </div>
                        <div class="text-content-popular-search"> 102 Sản phẩm </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="item-product-search" style="background-color: #f9ebea;">
                    <div class="img-popular-search"><img src="images/romano.jpg" alt=""></div>
                    <div class="text-popular-search">
                        <div class="title-content-popular-search"> Dau Goi Romano </div>
                        <div class="text-content-popular-search"></div>
                    </div>
                </div>
            </a>
            </div>
            
            <div class="content-product-search">
                <a href="">
                <div class="item-product-search" style="background-color: #eceef7;">
                    <div class="img-popular-search"><img src="images/romano.jpg" alt=""></div>
                    <div class="text-popular-search">
                        <div class="title-content-popular-search"> Dau Goi Romano </div>
                        <div class="text-content-popular-search"> 102 Sản phẩm </div>
                    </div>
                </div>
            </a>
             <a href="">
                <div class="item-product-search" style="background-color: #eceef7;">
                    <div class="img-popular-search"><img src="images/romano.jpg" alt=""></div>
                    <div class="text-popular-search">
                        <div class="title-content-popular-search"> Dau Goi Romano </div>
                        <div class="text-content-popular-search"> 102 Sản phẩm </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="content-product-search">
            <a href="">
                <div class="item-product-search" style="background-color: #f2eee9;">
                    <div class="img-popular-search"><img src="images/romano.jpg" alt=""></div>
                    <div class="text-popular-search">
                        <div class="title-content-popular-search"> Dau Goi Romano </div>
                        <div class="text-content-popular-search"> 102 Sản phẩm </div>
                    </div>
                </div>
            </a> 
            <a href="">
                <div class="item-product-search" style="background-color: #f2eee9;">
                    <div class="img-popular-search"><img src="images/romano.jpg" alt=""></div>
                    <div class="text-popular-search">
                        <div class="title-content-popular-search"> Dau Goi Romano </div>
                        <div class="text-content-popular-search"> 102 Sản phẩm </div>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>
</div>
<!-- end popularsearch -->
<div class="collection-laz">
    <div class="content-collection">
        <div class="card-title-collection">
       <div class="title-collection">Bộ sưu tập</div>
      <a href=""><span class="link-collection">Xem thêm 
           <span class="icon-collection">
            <ion-icon name="chevron-forward-outline"></ion-icon>
           </span>
       </span>
    </a> 
       </div>
        <div class="card-collection">
        <div class="items-collection">
            <a href="">
         <div class="item-collection">
             <div class="title-colection-item">
                Siêu Phẩm Công Nghệ Đổ Bộ >
             </div>
             <div class="text-colection-item">
                3,642 Sản phẩm
             </div>
             <div class="img-colection">
                 <img src="images/ocung.jpg" alt="">
                 <img src="images/hopdungocung.jpg" alt="">
                 <img src="images/ocungpc.jpg" alt="">
             </div>
         </div>
        </a>
        <a href="">
         <div class="item-collection">
             <div class="title-colection-item">
                Siêu Phẩm Công Nghệ Đổ Bộ >
             </div>
             <div class="text-colection-item">
                3,642 Sản phẩm
             </div>
             <div class="img-colection">
                 <img src="images/ocung.jpg" alt="">
                 <img src="images/hopdungocung.jpg" alt="">
                 <img src="images/ocungpc.jpg" alt="">
             </div>
         </div>
        </a>
        </div>
        <div class="items-collection">
            <a href="">
         <div class="item-collection">
             <div class="title-colection-item">
                Siêu Phẩm Công Nghệ Đổ Bộ >
             </div>
             <div class="text-colection-item">
                3,642 Sản phẩm
             </div>
             <div class="img-colection">
                 <img src="images/ocung.jpg" alt="">
                 <img src="images/hopdungocung.jpg" alt="">
                 <img src="images/ocungpc.jpg" alt="">
             </div>
         </div>
        </a>
        <a href="">
         <div class="item-collection">
             <div class="title-colection-item">
                Siêu Phẩm Công Nghệ Đổ Bộ >
             </div>
             <div class="text-colection-item">
                3,642 Sản phẩm
             </div>
             <div class="img-colection">
                 <img src="images/ocung.jpg" alt="">
                 <img src="images/hopdungocung.jpg" alt="">
                 <img src="images/ocungpc.jpg" alt="">
             </div>
         </div>
        </a>
        </div>
        <div class="items-collection">
            <a href="">
         <div class="item-collection">
             <div class="title-colection-item">
                Siêu Phẩm Công Nghệ Đổ Bộ >
             </div>
             <div class="text-colection-item">
                3,642 Sản phẩm
             </div>
             <div class="img-colection">
                 <img src="images/ocung.jpg" alt="">
                 <img src="images/hopdungocung.jpg" alt="">
                 <img src="images/ocungpc.jpg" alt="">
             </div>
         </div>
        </a>
        <a href="">
         <div class="item-collection">
             <div class="title-colection-item">
                Siêu Phẩm Công Nghệ Đổ Bộ >
             </div>
             <div class="text-colection-item">
                3,642 Sản phẩm
             </div>
             <div class="img-colection">
                 <img src="images/ocung.jpg" alt="">
                 <img src="images/hopdungocung.jpg" alt="">
                 <img src="images/ocungpc.jpg" alt="">
             </div>
         </div>
        </a>
        </div>
        <div class="items-collection">
            <a href="">
         <div class="item-collection">
             <div class="title-colection-item">
                Siêu Phẩm Công Nghệ Đổ Bộ >
             </div>
             <div class="text-colection-item">
                3,642 Sản phẩm
             </div>
             <div class="img-colection">
                 <img src="images/ocung.jpg" alt="">
                 <img src="images/hopdungocung.jpg" alt="">
                 <img src="images/ocungpc.jpg" alt="">
             </div>
         </div>
        </a>
        <a href="">
         <div class="item-collection">
             <div class="title-colection-item">
                Siêu Phẩm Công Nghệ Đổ Bộ >
             </div>
             <div class="text-colection-item">
                3,642 Sản phẩm
             </div>
             <div class="img-colection">
                 <img src="images/ocung.jpg" alt="">
                 <img src="images/hopdungocung.jpg" alt="">
                 <img src="images/ocungpc.jpg" alt="">
             </div>
         </div>
        </a>
        </div>
        </div>
    </div>
</div>
<!-- end collection -->
<div id="lazmall" class="lazmall">
    <div class="content-lazmall">
        <div class="title-lazmall">LazMall</div>
        <div class="items-lazmall">
            <a href="">
            <div class="item-lazmall">
                <div class="img-lazmall">
                    <img src="images/lata-product.jpg" alt="">
                </div>
                <div class="company-logo">
                    <img src="images/logo-lata.jpg" alt="">
                </div>
                <div class="text-lazmall">
                    <div class="title-lazmall-item"> LATA </div>
                    <div class="text-lazmall-item">Cần Túi Da - Có LATA </div>
                </div>
            </div>
              </a> 
            <a href="">
            <div class="item-lazmall">
                <div class="img-lazmall">
                    <img src="images/lata-product.jpg" alt="">
                </div>
                <div class="company-logo">
                    <img src="images/logo-lata.jpg" alt="">
                </div>
                <div class="text-lazmall">
                    <div class="title-lazmall-item"> LATA </div>
                    <div class="text-lazmall-item">Cần Túi Da - Có LATA </div>
                </div>
            </div>
           </a>
            <a href="">
            <div class="item-lazmall">
                <div class="img-lazmall">
                    <img src="images/lata-product.jpg" alt="">
                </div>
                <div class="company-logo">
                    <img src="images/logo-lata.jpg" alt="">
                </div>
                <div class="text-lazmall">
                    <div class="title-lazmall-item"> LATA </div>
                    <div class="text-lazmall-item">Cần Túi Da - Có LATA </div>
                </div>
            </div>
        </a>
            <a href="">
            <div class="item-lazmall">
                <div class="img-lazmall">
                    <img src="images/lata-product.jpg" alt="">
                </div>
                <div class="company-logo">
                    <img src="images/logo-lata.jpg" alt="">
                </div>
                <div class="text-lazmall">
                    <div class="title-lazmall-item"> LATA </div>
                    <div class="text-lazmall-item">Cần Túi Da - Có LATA </div>
                </div>
            </div>
        </a>
            <a href="">
            <div class="item-lazmall">
                <div class="img-lazmall">
                    <img src="images/lata-product.jpg" alt="">
                </div>
                <div class="company-logo">
                    <img src="images/logo-lata.jpg" alt="">
                </div>
                <div class="text-lazmall">
                    <div class="title-lazmall-item"> LATA </div>
                    <div class="text-lazmall-item">Cần Túi Da - Có LATA </div>
                </div>
            </div>
        </a> 
            <a href="">
            <div class="item-lazmall">
                <div class="img-lazmall">
                    <img src="images/lata-product.jpg" alt="">
                </div>
                <div class="company-logo">
                    <img src="images/logo-lata.jpg" alt="">
                </div>
                <div class="text-lazmall">
                    <div class="title-lazmall-item"> LATA </div>
                    <div class="text-lazmall-item">Cần Túi Da - Có LATA </div>
                </div>
            </div>
        </a>
        </div>

    </div>
    
</div>
<!-- end lazmall -->
<div class="category-list">
    <div class="content-category-list">
        <div class="title-category-list">Danh mục ngành hàng</div>
        <div class="card-category-list">
            <div class="items-category-list">
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
            </div>
            <div class="items-category-list">
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
            </div>
            <div class="items-category-list">
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
            </div>
            <div class="items-category-list">
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
            </div>
            <div class="items-category-list">
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
            </div>
            <div class="items-category-list">
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
            </div>
            <div class="items-category-list">
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
            </div>
            <div class="items-category-list">
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
                <a href="">
                <div class="item-category-list">
                    <div class="img-category-list">
                        <img src="images/aoquan.jpg" alt="">
                    </div>
                    <div class="text-category-list">
                        Áo hoodies & sweatshirts nam
                    </div>
                </div>
              </a>
            </div>
        </div>
       
    </div>
</div>
<!-- end category-list -->
<div class="exclusively-for-you">
    <div class="content-exclusively-for-you">
        <div class="title-exclusively-for-you">
            Dành riêng cho bạn
        </div>
        <div class="cards-exclusively-for-you">
        <div class="card-exclusively-for-you">
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
               
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/laptopdell.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                Laptop Dell Vostro 3400 14 inches FHD (Intel / i5-1135G7 / 8GB / 256GB SSD / McAfee MDS / Win 10 Home SL) l Black l P132G003 (70234073)
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">16.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">18.290.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-10%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                                Vietnam
                            </span>
                        </div>
                    </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/dellg3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">
                                NB  Dell Gaming G3 15 i7 10750H/16GB/512GB/15.6"FHD
                            </span>
                        </div>
                        <div class="price-efy">
                            <span class="price">31.990.000 </span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">33.990.000 ₫</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-5%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphe.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Cà phê hòa tan Nescafé 3in1 đậm đà hài hòa (hộp 20 gói x 17g)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">55.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">75.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-27%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/caphefin.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">TRỢ GIÁ ĐẶC BIỆT] 1kg cà phê rang mộc DUC ANH COFFEE 100% Robusta Đậm vị hậu ngọt Dạng bột dùng pha phin Cam kết nguyên chất Rang xay khi đặt hàng - 2 gói zipper 500g ca phe ban chay - cafe pha phin</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">149.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">250.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-40%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/iphone12promax.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">iPhone 12 Pro Max VN/A - Hàng Chính Hãng (Giao Nhanh)</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">36.490.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">43.990.000</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                            <span class="location">Hồ Chí Minh</span>
                        </div>
                      </div>
                    </div>
                </a>
                <a href="">
                    <div class="item-exclusively-for-you ">
                        <div class="img-exclusively-for-you">
                          <img src="images/galaxyfold3.jpg" alt="">
                        </div>
                        <div class="title-content-efy">
                        <div class="logo-lazmall-efy">
                            <img src="images/logo-lazmall-efy.jpg" alt="">
                        </div>
                        <div class="img-title-efy">
                            <span class="icon-efy">
                                <img src="images/logoxahang.png" alt="">
                            </span>
                            <span class="title-efy">Điện Thoại Samsung Galaxy Z Fold 3 5G (256GB/512GB) SM-F926B - Hàng Chính Hãng</span>
                        </div>
                        <div class="price-efy">
                            <span class="price">34.990.000</span>
                            <span class="currency">đ</span>
                        </div>
                        <div class="price-efy-deal">
                            <span class="price-efy-item">
                                <span class="price">41.990.000 ₫

</span>
                                <span class="currency">đ</span>
                            </span>
                            <span class="percent">-17%</span>
                        </div>
                        <div class="star-location-efy">
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-index">(20)</span>
                            </span>
                           
                            <span class="location">
                               Hà Nội
                            </span>
                        </div>
                      </div>
                    </div>
                </a>
        </div>
        <button class="loadMore">Tải thêm </button>
        <div class="end-load-more" style="display: none;">Bạn đã kết thúc <br>
            Tìm kiếm thêm để tiếp tục khám phá</div>
    </div>
</div>
</div>
end 
 <div class="partners-contacts">
        <div class="content-partners-contacts">
            <div class="img-partners-contacts">
                <img src="<?= base_url() ?>images/nganhangvadoitac.png" alt="" class="Bank">
                <img src="<?= base_url() ?>images/techcombank.png" alt="" class="techcombank">
                <img src="<?= base_url() ?>images/lazada-platinum.png" alt="" class="lazada-platinum">
            </div>
            <div class="contact-information-lazada">
                <div class="contact-lazada">
                    <div class="title-contact-lazada">
                        LIÊN HỆ VỚI LAZADA
                    </div>
                   <ul class="contact-lazada">
                       <li><a href="">Hotline & Chat trực tuyến (24/7)</a></li>
                       <li><a href="">Trung tâm hỗ trợ</a></li>
                       <li><a href="">Hướng dẫn đặt hàng</a></li>
                       <li><a href="">Giao hàng & Nhận hàng</a></li>
                       <li><a href="">Chính sách hàng nhập khẩu</a></li>
                       <li><a href="">Hướng dẫn đổi trả hàng</a></li>
                   </ul>
                </div>
            
                <div class="lazada-vietnam">
                    <div class="title-lazada-vietnam">
                        LAZADA VIỆT NAM
                    </div>
                    <ul class="lazada-vietnam">
                        <li><a href="">Về Lazada Việt Nam</a></li>
                        <li><a href="">Bán hàng cùng Lazada</a></li>
                        <li><a href="">Chương trình Lazada Afﬁliate</a></li>
                        <li><a href="">Tuyển dụng</a></li>
                        <li><a href="">Điều khoản sử dụng</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>
                        <li><a href="">Báo chí</a></li>
                        <li><a href="">
                            Bảo vệ quyền sở hữu trí tuệ</a></li>
                        <li><a href="">Quy chế hoạt động sàn Lazada</a></li>
                        <li><a href="">Quy trình giải quyết tranh chấp, khiếu nại</a></li>
                    </ul>
             
                </div>
                <div class="download-lazada-app">
                    <div class="app-lazada-vn">
                        <span class="img-logo-laz-vn">
                         <img src="<?= base_url() ?>images/lazada-logo.png" alt="">
                        </span>
                        <span class="title-app-laz-vn">
                         <div class="title-laz-vn">Go where your heart beats</div>
                         <div class="text-laz-vn">Tải App Lazada</div>
                        </span>
                        <span class="img-app-laz-vn">
                             <a href=""><img src="<?= base_url() ?>images/appstore2.png" alt="" class="app-laz"></a>
                           <a href=""> <img src="<?= base_url() ?>images/androi2.png" alt=""></a>
                        </span>
                    </div>
                    <div class="company">
                        CÔNG TY TNHH RECESS <br>
                        Giấy CNĐKDN: 0308808576 – Ngày cấp: 06/5/2009, được sửa đổi lần thứ 19 ngày 15/8/2019. <br>
                        Cơ quan cấp: Phòng Đăng ký kinh doanh – Sở kế hoạch và Đầu tư TP.HCM <br>
                        Địa chỉ đăng ký kinh doanh: Tầng 19, Tòa nhà Saigon Centre – Tháp 2, 67 Lê Lợi, Phường Bến Nghé, Quận 1, Tp. <br>
                        Hồ Chí Minh, Việt Nam
                    </div>
                </div>
            </div>
        </div>

    </div> 
<!-- end partners-contacts -->
<div class="certification-service-payment">
    <div class="content-certification-service-payment">
    <div class="payment">
       <div class="title-payment">
        CÁCH THỨC THANH TOÁN
       </div>
       <div class="<?= base_url() ?>img-payment">
         <img src="<?= base_url() ?>images/visa.png" alt="">
         <img src="<?= base_url() ?>images/mastercard.png" alt="">
         <img src="<?= base_url() ?>images/jcb.png" alt="">
         <img src="<?= base_url() ?>images/cardon.png" alt="">
         <img src="<?= base_url() ?>images/napas.png" alt="">
         <img src="<?= base_url() ?>images/card.png" alt="">
         <img src="<?= base_url() ?>images/zalo-pay.png" alt="">
         <img src="<?= base_url() ?>images/momo.png" alt="" class="momo">
       </div>

    </div>
    <div class="service">
        <div class="title-service">
            DỊCH VỤ GIAO HÀNG
        </div>
        <div class="img-service">
              <div class="img-laz-service">
                <img src="<?= base_url() ?>images/lazada-logistics-logo.png" alt="">
              </div>
              
               <div class="img-ship">
                   <img src="<?= base_url() ?>images/ghn.png" alt="" class="ghn">
                   <img src="<?= base_url() ?>images/ninjavan.png" alt="" >
               </div>
               <div class="img-ship2">
                   <img src="<?= base_url() ?>images/ship60.png" alt="" class="ship60">
                   <img src="<?= base_url() ?>images/best.png" alt="" >
               </div>
               <div class="img-express">
                <img src="<?= base_url() ?>images/ahamove.png" alt="">
               </div>
               <div class="img-ahamove">
                <img src="<?= base_url() ?>images/J&xexpress.png" alt="">
               </div>
               
        </div>

    </div>
    <div class="certification">
        <div class="title-certification">
            CHỨNG NHẬN
        </div>
        <div class="img-certification">
            <div class="img-certification-real">
                <img src="<?= base_url() ?>images/pcidss.png" alt="" class="pcids">
                <img src="<?= base_url() ?>images/saynotofakes.png" class="saynotofakes" alt="">
                <img src="<?= base_url() ?>images/bsi.png" alt="" class="bsi">
            </div>
            <div class="img-certification-vn">
               <a href=""><img src="<?= base_url() ?>images/certification1.png" alt=""></a>
               <a href=""><img src="<?= base_url() ?>images/certification2.png" alt=""></a>
               <a href=""><img src="<?= base_url() ?>images/certification3.png" alt=""></a>
            </div>
        </div>

    </div>
</div>
</div>
 <!-- end certification-service-payment -->
 <div class="banner-introduce">
    <div class="content-banner-introduce">
        <div class="Introducing-lazada">
            <div class="title-Introducing-lazada">
                LAZADA - NỀN TẢNG MUA SẮM TRỰC TUYẾN HÀNG ĐẦU VIỆT NAM
            </div>
            <div class="text-Introducing-lazada">
                Thành lập từ năm 2012, Lazada là nền<br>
                tảng thương mại điện tử hàng đầu Đông<br>
                 Nam Á, tiên phong thúc đẩy sự phát triển<br>
                  tại khu vực thông qua Thương mại &<br>
                   Công nghệ. Hiện nay, với nền tảng<br>
                    logistics và hệ thống thanh toán lớn nhất<br>
                     khu vực, Lazada trở thành một phần<br>
                      trong đời sống của người tiêu dùng và<br>
                      hướng đến mục tiêu phục vụ cho 300 <br>
                       triệu khách hàng trên toàn khu vực Đông<br>
                        Nam Á vào năm 2030.
            </div>
            <div class="text-Introducing-lazada2">
                Tại Việt Nam, Lazada là nền tảng<br>
                 Thương mại điện tử quen thuộc của<br>
                 hàng triệu người tiêu dùng bởi sự đa<br>
                  dạng hàng đầu về chủng loại sản phẩm,<br>
                  ứng dụng công nghệ mua sắm và giải trí<br>
                  thông minh cùng khả năng logistics
            </div>

        </div>
        <div class="genuine-product">
          <div class="text-Introducing-lazada">
            mạnh mẽ và dịch vụ chăm sóc khách<br> 
            hàng tối ưu. Đáng chú ý, bên cạnh các<br>
             chương trình ưu đãi trực tuyến hấp dẫn <br>
             hàng tháng hấp dẫn thường xuyên, <br>
              Lazada Việt Nam còn thu hút người dùng <br>
              với các Lễ Hội Mua Sắm siêu lớn trong  <br>
              năm, đây được xem là các thời điểm <br>
               mua sắm không thể bỏ lỡ của các tín đồ <br> 
               mua sắm trên toàn quốc.
          </div>
          <div class="text-Introducing-lazada2">
            Hãy truy cập website hoặc tải ngay ứng <br>
             dụng Lazada để gia tăng thêm nhiều trải <br>
              nghiệm độc đáo cho hành trình mua <br>
               sắm – giải trí tuyệt vời và siêu tiết kiệm  <br>
               ngay hôm nay!
          </div>
          <div class="title-genuine-product">
            SẢN PHẨM CHÍNH HÃNG
          </div>
          <div class="genuine-products">
             <a href=""> Samsung</a> , <a href=""> Apple </a> , <a href=""> Xiaomi </a> , <a href=""> Bluestone  </a>  <br>, <a href="">  L’oreal </a>,<a href=""> Maybeline</a> ,<a href=""> Enfa</a> ,<a href=""> Bobby </a><br> , <a href=""> Huggies </a>,<a href=""> Adidas </a>,<a href=""> Casio </a> ,<a href=""> Mediamart </a> <br> ,<a href=""> Juno  </a>,  <a href=""> Gumac</a>
          </div>
        </div>
        <div class="featured-products">
            <div class="title-featured-products">
                SẢN PHẨM NỔI BẬT
            </div>
            <div class="smart-phone-il">
                <div class="title-smart-phone-il">
                     <a href="">SMARTPHONE</a>
                </div>
                <div class="content-smart-phone-il">
                   <a href=""> iPhone </a> ,<a href=""> Samsung </a> , <a href=""> Xiaomi  </a>,<a href=""> Vivo  </a>, <a href=""> Vsmart </a> , <br> <a href=""> Oppo </a> ,<a href=""> Huawei</a> ,<a href=""> iPhone 12 </a>,<a href=""> iPhone 11</a> , <br><a href=""> Redmi Note 8 </a> ,<a href=""> Galaxy Note </a>, <a href="">   Galaxy A51 </a>, <br><a href=""> Galaxy S21 Ultra </a> ,<a href=""> Vsmart Live 4 </a> ,<br><a href=""> Vsmart Joy 3</a>
                </div>
            </div>
            <div class="tablet-il">
                <div class="title-tablet-il">
                  <a href="">MÁY TÍNH BẢNG</a>
                </div>
                <div class="content-tablet-il">
                   <a href=""> iPad  </a>, <a href=""> Samsung </a> ,<a href=""> Huawei </a> ,<a href=""> Lenovo </a>,<a href=""> Kindle</a> , <br><a href=""> iPad Pro </a>,<a href=""> iPad mini</a> ,<a href=""> Masstel </a> ,<a href=""> iPad Air 2 </a> , <br><a href=""> iPad Mini 5 </a> ,<a href=""> LAPTOPS </a>,<a href=""> Dell </a> ,<a href=""> Asus </a> , <br><a href=""> Macbook  </a>,<a href=""> HP </a>,<a href=""> Lenovo </a>,<a href=""> Acer </a>,<a href=""> MSI </a> , <br><a href=""> Microsoft Surface </a>,<a href=""> Macbook Pro </a>,<br> <a href=""> Macbook Air 2018 </a>
                </div>
            </div>
            <div class="tv-il">
                <div class="title-tv-il">
                  <a href="">TIVI</a>
                </div>
                <div class="content-tv-il">
                   <a href=""> Sony </a>, <a href=""> LG  </a> ,<a href=""> Vsmart </a> ,<a href=""> Xiaomi </a>,<a href=""> Toshiba</a> , <br><a href=""> Samsung </a>,<a href=""> Panasonic</a> ,<a href=""> Sharp</a> ,<a href=""> Asanzo </a> , <br><a href=""> Asano </a> ,<a href="">TCL </a>
                </div>
            </div>
             
            <div class="sound-il">
                <div class="title-sound-il">
                    <a href="">ÂM THANH</a>
                  </div>
                  <div class="content-sound-il">
                     <a href=""> Loa Bluetooth  </a>, <a href=""> Loa Karaoke  </a> ,<a href="">JBL </a> ,<a href="">  Sony </a>, <br><a href=""> Harman Kardon</a> , <a href=""> Bose </a>,<a href=""> Tronsmart</a> ,<a href=""> Kiomic</a> ,<br><a href="">Zealot</a> , <a href=""> LG </a> ,<a href=""> Temeisheng</a>,<a href=""> Hoco </a> ,<a href=""> Kimiso</a> 
                  </div>
            </div>
            <div class="refrigerator-il">
                <div class="title-refrigerator-il">
                    <a href="">TỦ LẠNH</a>
                  </div>
                  <div class="content-refrigerator-il">
                     <a href="">  Tủ lạnh mini </a>, <a href="">Sanyo  </a> ,<a href=""> Electrolux </a> ,<a href=""> Panasonic</a>,<br><a href=""> Toshiba</a> , <a href=""> Toshiba</a>,<a href="">  Samsung</a> 
                  </div>
            </div>
            <div class="cosmetics-beauty-il">
                <div class="cosmetics-beauty-il">
                    <a href="">MỸ PHẨM & LÀM ĐẸP</a>
                  </div>
                  <div class="content-cosmetics-beauty-il">
                     <a href="">  La Roche Posay   </a>, <a href=""> MAC  </a> ,<a href="">Maybelline </a> ,<a href="">   Laneige </a>, <br><a href=""> Innisfree</a> , <a href=""> Vichy </a>,<a href=""> Hadalabo </a> ,<a href=""> Senka</a> ,<a href=""> Anessa </a> ,<br> <a href=""> The Face Shop</a> ,<a href=""> Son Black Rouge</a>,<a href="">Kiehl’s </a> ,<br><a href=""> Kem Chống Nắng</a>,<a href=""> Sữa Rửa Mặt</a>,<br><a href="">Nước Tẩy Trang</a>
                  </div>
            </div>
        </div>
        <div class="search-trends">
           <div class="camera-il">
            <div class="title-camera-il">
                <a href="">MÁY ẢNH</a>
              </div>
              <div class="content-camera-il">
                 <a href="">   Fujifilm</a>, <a href="">Nikon </a> ,<a href=""> Canon</a> ,<a href=""> Sony</a>,<a href=""> Camcorder</a> ,<br> <a href=""> GoPro</a>,<a href="">  Flycam</a>,
                 <a href=""> Xiaomi</a> 
              </div>
           </div>
           <div class="washing-machine-il">
            <div class="title-washing-machine-il">
                <a href="">MÁY GIẶT</a>
              </div>
              <div class="content-washing-machine-il">
                 <a href="">   Electrolux</a>, <a href=""> Sanyo  </a> ,<a href=""> Toshiba</a> ,<a href="">Aqua</a>,<a href=""> Hitachi</a> ,<br> <a href=""> Panasonic</a>,<a href="">   Samsung </a>,
                 <a href=""> LG </a> ,<a href="">Bosch </a>,<a href=""> Midea</a>
              </div>
           </div>
           <div class="microwave-oven-il">
            <div class="title-microwave-oven-il">
                <a href="">LÒ VI SÓNG</a>
              </div>
              <div class="content-microwave-oven-il">
                 <a href="">   Sharp</a>, <a href="">Electrolux  </a> ,<a href=""> Bluestone</a> ,<a href="">Samsung</a>,<br> <a href="">  Xiaomi</a> ,<a href=""> Beko</a>,<a href="">Panasonic </a>,
                 <a href=""> LG </a> ,<a href="">Bosch </a>,<a href=""> Midea</a>
              </div>
           </div>
           <div class="car-motorcycle-il">
            <div class="title-car-motorcycle-il">
                <a href="">Ô TÔ XE MÁY</a>
              </div>
              <div class="content-car-motorcycle-il">
                 <a href="">   Honda</a>, <a href="">Xe máy Yamaha   </a> ,<a href=""> Taya Motor</a> ,<br><a href=""> Suzuki</a>, <a href="">  Piaggio</a> ,<a href="">  Xe Máy Điện</a>
              </div>
           </div>
           <div class="best-comics-il">
            <div class="title-best-comics-il">
                <a href="">TRUYỆN TRANH HAY NHẤT 2021</a>
              </div>
            
              <div class="content-best-comics-il">
                 <a href="">    Thám tử lừng danh Conan </a>, <a href="">Thanh Gươm Diệt Quỷ Kimetsu Yaiba   </a> ,<br><a href=""> One Piece</a> ,<a href="">Đảo Hải Tặc</a>
              </div>
           </div>
           <div class="online-department-il">
            <div class="title-online-department-il">
                <a href="">BÁCH HÓA ONLINE</a>
              </div>
              <div class="content-online-department-il">
                 <a href="">  Thức Uống Có Cồn   </a>, <a href="">Strongbow  </a> ,<a href="">Heineken</a> , <br><a href="">  Tiger </a>,<a href="">Bia 333</a> , <a href=""> Budweiser  </a>,<a href=""> Corona </a> , <br><a href="">  Hoegaarden</a> ,<a href=""> Thức Uống Có Ga </a> ,<a href=""> Coca-cola</a> , <br><a href="">7Up </a>,<a href="">Pepsi</a> ,<br><a href=""> La Vie</a>,<a href=""> Star Kombucha</a>
              </div>
            </div>
            <div class="search-trends-il">
                <div class="title-search-trends-il">
                  <a href="">XU HƯỚNG TÌM KIẾM NỔI BẬT 2021</a>
                </div> 
                <div class="content-search-trends-il">
                   <a href="">  Sản phẩm mùa dịch Covid-19 </a>, <a href="">  Khẩu trang 3M  </a> <br>,<a href=""> Khẩu trang Unicharm</a> ,<a href=""> Khẩu trang y tế </a>,<br><a href=""> Nước Rửa Tay Khô </a> , <a href=""> Cà Phê  </a>,<a href=""> Nồi Cơm Điện</a> ,<br><a href=""> Giường Ngủ  </a> ,<a href="">  Đồng Hồ Nữ </a> , <br><a href=""> Đồng Hồ Nam </a> ,<br><a href=""> Máy Chạy Bộ Điện </a>,<a href=""> Đàn Guitar </a> ,<a href="">Đàn Piano </a> , <br><a href=""> Ghế Mát Xa  </a>,<a href=""> Dép Crocs</a>,<a href=""> Cờ Vua </a>,<a href=""> Nón Sơn </a>,<br><a href=""> Xe Cẩu </a> ,
                   <a href=""> Hoa</a>,<a href="">Bảng Chữ Cái</a>,<br> <a href=""> Đá Bóng </a>,
                   <a href=""> Áo Bóng Đá</a>,<a href="">Bikini</a>,<br> <a href="">  Elsa </a>,
                   <a href=""> BKAV </a>,<br><a href="">Ivy Moda</a>,<br> <a href="">   MLB  </a>,
                   <a href=""> Dirty Coin  </a>,<a href="">Quần Ống Rộng </a>,<br> <a href="">  Vascara  </a>
                </div>
            </div>
            <div class="Shop-around-the-world-aliexpress-il">
                <div class="title-Shop-around-the-world-aliexpress-il">
                    <a href="">MUA SẮM TRÊN TOÀN THẾ GIỚI VỚI ALIEXPRESS</a>
                  </div>
                  <div class="content-Shop-around-the-world-aliexpress-il">
                     <a href="">   Nga </a>, <a href="">Tây Ban Nha </a> ,<a href="">Pháp</a> , <a href="">  Đức  </a>,<a href="">Ba Lan</a> , <br><a href=""> Brazil  </a>,<a href="">Ả Rập Xê-út </a> 
                  </div>
            </div>
            <div class="Shop-around-the-world-dazaz-il">
                <div class="title-Shop-around-the-world-dazaz-il">
                    <a href="">MUA SẮM TRÊN TOÀN THẾ GIỚI VỚI  DARAZ</a>
                  </div>
                  <div class="content-Shop-around-the-world-dazaz-il">
                     <a href="">   Pakistan </a>, <a href="">Bangladesh </a> ,<a href="">Sri Lanka</a> , <a href="">   Myanmar  </a>,
                     <br><a href="">Nepal</a> 
                  </div>
            </div>
        </div>
    </div>
</div>
<!-- end banner-introduce -->
        <div class="Lazada-Southeast-Asia">
             <div class="contentLazada-Southeast-Asia">
                 <div class="ensign-asia">
                     <div class="title-asia">
                        Lazada Southeast Asia
                     </div>
                     <div class="img-ensign-asia">
                         
                         <a href=""><img src="<?= base_url() ?>images/asia1.png" alt="" class="asia1"></a>
                         <a href=""><img src="<?= base_url() ?>images/asia2.png" alt="" class="asia2"></a>
                         <a href=""><img src="<?= base_url() ?>images/asia3.png" alt="" class="asia3"></a>
                         <a href=""><img src="<?= base_url() ?>images/asia4.png" alt="" class="asia4"></a>
                         <a href=""><img src="<?= base_url() ?>images/asia5.png" alt="" class="asia5"></a>
                         <a href=""><img src="<?= base_url() ?>images/co-vn.png" alt="" class="ensign-vn"></a>
                     </div>
                 </div>
                 <div class="connection-lazada">
                     <div class="title-connection-lazada">
                        Kết nối với chúng tôi
                     </div>
                     <div class="img-connection-lazada">
                         <a href=""><img src="<?= base_url() ?>images/fb.png" alt="" class="fb"></a>
                         <a href=""><img src="<?= base_url() ?>images/in.png" alt="" class="in"></a>
                         <a href=""><img src="<?= base_url() ?>images/google.png" alt="" class="google"></a>
                         <a href=""><img src="<?= base_url() ?>images/youtobe.png" alt="" class="youtobe"></a>
                         <a href=""><img src="<?= base_url() ?>images/pinterest.png" alt="" class="pinterest"></a>
                         <a href=""><img src="<?= base_url() ?>images/zing.png" alt="" class="zing"></a>
                     </div>
                 </div>
                 <div class="license-lazada">
                    © Lazada 2021
                 </div>
             </div>
        </div>
        <div class="scroll-laz">
            <div class="scroll-laz-icon icon-scroll-top "><div class="icon "><ion-icon name="chevron-up-outline"></ion-icon></div> </div>
            <div class="scroll-laz-icon icon-scroll-flashdeal"><div class="icon "><i class="fab fa-gripfire"></i></div><span class="scr flashdeal-csr">Deal chớp nhoáng</span></div>
            <div class="scroll-laz-icon icon-scroll-popular-search"><div class="icon "><i class="far fa-clock"></i></div><span class="scr search-csr">Tìm kiếm phổ biến</span></div>
            <div class="scroll-laz-icon icon-scroll-lazmall"><div class="icon "><i class="far fa-envelope"></i></div><span class="scr lazmall-csr">LazMall</span></div>
            <div class="scroll-laz-icon icon-scroll-menu"><div class="icon "><ion-icon name="apps-outline"></ion-icon></div><span class="scr menu-csr">Danh mục ngành hàng</span></div>
            <div class="scroll-laz-icon icon-scroll-user"><div class="icon "><ion-icon name="person-add-outline"></ion-icon></div><span class="scr user-scr">Dành riêng cho bạn </span></div>
        </div>


 <!-- link script -->
 <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="<?= base_url() ?>home.js"></script>
<script src="<?= base_url() ?>slidebanner.js"></script>
<script src="<?= base_url() ?>countdown.js"></script>
<script src="<?= base_url() ?>exclusivelyforyou2.js"></script>
<script src="<?= base_url() ?>scrolltop.js"></script>

</body>
</html>