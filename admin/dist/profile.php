<?php include("templates/header.php"); ?>

<!-- bảng -->
<div id="layoutSidenav_content">
   
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                        <h2>Quản lý tài khoản</h2>
                    </div>
                    

                    <!-- profile -->
                    <div class='card-body shadow p-3 mb-5 bg-white rounded'>    
                        <div class="container rounded bg-white mt-2">
                            <div class="container">
                                <div class="row gutters">
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="card h-100 card-col">
                                            <div class="card-body">
                                                <div class="account-settings">
                                                    <div class="user-profile">
                                                        <div class="user-avatar">
                                                            <img src="" id="ava" alt="Ảnh đại diện Admin">
                                                        </div>
                                                        <h5 class="user-name"></h5>
                                                        <h6 class="user-email"></h6>
                                                    </div>
                                                    <div class="about">
                                                        <h5 class="mb-2 text-primary">Quyền</h5>
                                                        <p>Có quyền quản lý các tài khoản của người dùng, quản lý 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="card card-col h-100">
                                            <div class="card-body">
                                                <div class="row gutters">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <h6 class="mb-3 text-primary">Thông tin tài khoản</h6>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="fullName">Họ và tên</label>
                                                            <input type="text" value="" class="form-control" id="txtHoTen" readonly >
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="fullName">Tên tài khoản</label>
                                                            <input type="text" value="" class="form-control" id="txtTK" readonly >
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="eMail">Email</label>
                                                            <input type="email" value="" class="form-control" id="txtEmail"  readonly >
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="phone">Số điện thoại</label>
                                                            <input type="tel" value="" class="form-control" id="sdt"  readonly >
                                                        </div>
                                                    </div>
                                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="Street">Địa chỉ</label>
                                                            <input type="name" value="" class="form-control" id="txtDiaChi"  readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="website">Ngày sinh</label>
                                                            <input type="date" value="" class="form-control" id="ngaySinh"  readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                        <label class="labels">Giới tính</label>
                                                        <input type="text" value="" class="form-control"  id="txtGioiTinh" readonly>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row gutters">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                                        <div class="text-right">
                                                            <button type="button" id="edit-modal" name="submit" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Sửa thông tin</button>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>

                        <!-- Modal -->
                        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <div class="row gutters">
                                        <!-- avtar -->
                                        <div class="col-3 " style="height: 365px;" >
                                            <div class="card h-100 card-col">
                                                <div class="card-body">
                                                    <div class="account-settings">
                                                        <div class="user-profile">
                                                            <div class="user-avatar">
                                                                <img src="https://thptvap.000webhostapp.com/images/avatar/ava.png" id="ava1" alt="Ảnh đại diện Admin">
                                                            </div>
                                                            <h5 class="user-name">Ánh</h5>
                                                            <h6 class="user-email">Ánh xing</h6>
                                                        </div>

                                                        <!-- edit avtar -->
                                                        <form action="update-profile.php" method="POST" enctype="multipart/form-data" id="form_avatar">
                                                            <div class="row justify-content-center align-items-center w-100 m-auto rounded" style="background-color:#e4e4e4;">
                                                                <div class="col-8 ps-4" style="font-weight: 500; color: #223035;"> Chọn ảnh đại diện:</div>
                                                                <div class="col-4 file-upload">
                                                                    <input type="file" name="file_image" />
                                                                </div>
                                                            </div>
                                                            <button type="submit" name="up-avatar" class="btn btn-outline-primary mt-2 btn-rounded rounded-pill w-100" data-mdb-ripple-color="dark">Cập nhật ảnh</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- edit -->
                                        <div class="col-9">
                                            <form action="update-profile.php" method="POST" name="form_edit">
                                                <div class="a">
                                                    <div class="card card-col h-100">
                                                        <div class="card-body">
                                                            <div class="row gutters">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                    <h6 class="mb-3 text-primary fs-5 text">Thông tin tài khoản</h6>
                                                                </div>
                                                                
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Họ và tên</label>
                                                                        <input type="text" value="" class="form-control form-profile" name="txtHoTen" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Tên tài khoản</label>
                                                                        <input type="text" value=">" class="form-control form-profile" name="txtTK" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="eMail">Email</label>
                                                                        <input type="email" value="" class="form-control form-profile" name="txtEmail" placeholder="acb@gmail.com">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="phone">Số điện thoại</label>
                                                                        <input type="tel" value="" class="form-control form-profile" name="sdt" placeholder="09x xxx xxxx">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="Street">Địa chỉ</label>
                                                                        <input type="text" value="" class="form-control form-profile" name="txtDiaChi" placeholder="Xã,phường/huyện/tỉnh">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="website">Ngày sinh</label>
                                                                        <input type="date" value = "" name="ngaySinh" class="form-control form-profile" id="website" >
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                                    <label class="labels">Giới tính</label>
                                                                    <select class="form-select" aria-label="Default select example" name=txtGioiTinh>
                                                                        
                                                                    </select>
                                                                </div>
                                                                
                                                            </div>                                  
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="modal-footer ">
                                                    <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Hủy</button>
                                                    <button type="button" name="up-profile" class="btn"style="background: #6600CC; color:#fff;" data-bs-toggle="modal" data-bs-target="#change-password">Thay đổi mật khẩu</button>
                                                    <button type="submit" name="up-profile" class="btn"style="background: #6600CC; color:#fff;" >Lưu thay đổi</button>
                                                </div>   
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("templates/footer.php"); ?>

