<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class = "card">
                <h1>Đăng Nhập</h1>
                <?php
                if( isset($data['notification']))
                    echo '<p>'.$data['notification'].'</p>';
                ?>

                <form action='' method='post'>
                    <div><input type='text' name='username' placeholder='Tên đăng nhập'></div>
                    <div><input type='password' name='password' placeholder='Mật khẩu'></div>
                    <div>
                        <blockquote>
                            <input type="radio" id = "patient" name="loginType" value="patient" >
                            <label for="doctor">Người khám bệnh</label>
                            <input type="radio" id = "doctor" name="loginType" value="doctor" >
                            <label for="doctor">Bác sĩ</label>
                        </blockquote>
                    </div>
                    <div>
                        <button><input style="padding: 15px 32px; border: none display:inline-block;
                        " class="tbn bg-info text-light" type='submit' name="login" id="login" value='Đăng nhập' ></button>
                        <button ><a class="btn btn-info text-light" href="index.php?controller=registration&action=registration">Đăng ký</a></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>