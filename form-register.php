<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="LoginStyle.css">
</head>
<body>
    <div class="container">
        <form action="process-login.php" method="POST">
            <h2>แบบฟอร์มลงทะเบียน</h2>
            <div class="form-control">
                <label for="username">ชื่อผู้ใช้</label>
                <input name="username_account" type="text" placeholder="Enter Your Username" required>
                <small>error message</small>
            </div>
            <div class="form-control">
                <label for="email">อีเมล</label>
                <input name="email_account" type="email" placeholder="Enter Your Email" required>
                <small>error message</small>
            </div>
            <div class="form-control">
                <label for="password">รหัสผ่าน</label>
                <input name="password_account1" type="password" placeholder="New Password" required>
                <small>error message</small>
            </div>
            <div class="form-control">
                <label for="password">ยืนยันรหัสผ่าน</label>
                <input name="password_account2" type="password" placeholder="Confirm Password" required>
                <small>error message</small>
            </div>
            <button type="submit">สร้างบัญชี</button>
            <button type="submit"><a href="form-login.php">มีบัญชีแล้วใช่ไหม</a></button>
            
        </form>
    </div>
    <script src="LoginScript.js"></script>
</body>
</html>