<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >
<header>
        <div class="flex items-center justify-between max-w-[1480px] m-auto border-b-2">
            <h1 class="font-bold font-mono text-red-500 text-[35px] py-[15px]">PET-MANAGEMENT</h1>
        </div>
 </header>
 <main>
 <div class="m-auto max-w-[1480px]">
    <h1 class="font-mono text-[25px] py-[20px]">Form đăng nhập</h1>
    
    <form action="" class="m-auto max-w-[1000px]" method="POST">
        <label class="block text-[20px] font-mono" for="">Email <span class="text-red-500">*</span></label>
        <input type="email" name="email" id="" class="border-2 w-[70%] h-[40px]  border-green-400  rounded pl-[10px]" placeholder="Nhập email....">
        <label class="block text-[20px] font-mono" for="">Password <span class="text-red-500">*</span></label>
        <input type="password" name="password" id="" class="border-2 w-[70%] h-[40px]  border-green-400  rounded pl-[10px]" >
        <button type="submit" name="btn_submit" class="block font-mono border-2 rounded py-[10px] px-[20px] mt-[20px] bg-red-500 text-white justify-end">Login</button>
    </form>
    <?php
  
    if(isset($_POST['btn_submit'])){
       if($_POST['email']==null){
            echo "Vui lòng nhập email!";
       }else{
            $email=$_POST['email'];
       }
       if($_POST['password']==null){
            echo "Vui lòng nhập password!";
       }else{
            $password=$_POST['password'];
       }
       $email=$_POST['email'];
       $password=$_POST['password'];
        if($email && $password){
           include "./connect.php";
           $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
           $statement=$connect->prepare($sql);
           $statement->execute();
          if( $statement->fetch()){
            header ('location:quan_ly_vat_nuoi/list_pet.php');
          }else{
            echo "Đăng nhập thất bại vui lòng kiểm tra lại tài khoản đăng nhập!";
          }
        }

    }
?>
</div>
 </main>
</body>
</html>