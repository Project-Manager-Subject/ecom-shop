<div class="contsiner" style="margin-top: 20px;">
    <div class="col-md-6">
    <?php
        if(!empty($_GET['msg'])){
            $msg = unserialize(urldecode($_GET['msg']));
            foreach($msg as $value){
                echo '<span style="color: red;">'.$value.'</span>';
            }
        }
        ?>
        <h1 style ="margin: 15px 0;">Đăng Ký Tài Khoản</h1>
        <form action="<?php echo  BASE_URL ?>/user_login/auth_signup"method="POST">
        <div class="form-group">
            <label>Tên Khách Hàng:</lable>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</lable>
            <input required  type="email" name="email" class="form-control" >
        </div>
        <div class="form-group">
            <label>Password:</lable>
            <input required  type="password" name="password" class="form-control" >
        </div>
        <div class="form-group">
            <label>Số Điện Thoại:</lable>
            <input required  type="text" name="phone" class="form-control" >
        </div>
        <div class="form-group">
            <label>Địa Chỉ Nhận Hàng:</lable> <br>
            <label for="tinh">Tỉnh</lable> 
            <select name="tinh" class="form-control" id="tinh" required>
                <option value="">--Tỉnh--</option> 
                <?php foreach($tinh as $key=>$value):?>
                    <option value="<?php echo $value['matp'] ?>"><?php echo $value['name'] ?>
                    </option> 
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="quanhuyen">Quận/Huyện</lable> 
            <select name="quanhuyen" class="form-control" id="quanhuyen" required>
            </select>
        </div>
        <div class="form-group">
            <label for="quanhuyen">Xã/Phường/Thị Trấn</lable> 
            <select name="xa" class="form-control" id="xa" required>
            </select>
        </div>
        <button type="submit" class="btn btn-default btn-sm">Sign Up</button>
        <lable style = "float: right; "for=""><a href="<?php echo BASE_URL?>/user_login/">Đã có tài khoản ?</a></lable>
        </form>
     </div>
    </div>
<div class="clear" stype="margin-bottom: 20p; "></div>
