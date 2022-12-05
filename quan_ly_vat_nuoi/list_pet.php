<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách vật nuôi</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<?php
// kết nối php với MySQL
//1. Khởi tạo kết nối
    $connect= new PDO(
        'mysql:host=127.0.0.1;dbname=quan_ly_vat_nuoi;',//loại CSDL:host_lưu_trữ;dbname=tên CSDL
        'root',// tên đăng nhập
        ''     //password
    );
//2. Ngay sau khi có kết nối gán vào $connect
// Định nghĩa câu truy vấn
    $sql="SELECT * FROM pets";
//3. Nạp câu truy vấn
    $statement=$connect->prepare($sql);
//4. Thực thi câu truy vấn
    $statement->execute();
//5. Lấy dữ liệu về sau khi thực thi
    // Nếu dữ liệu nhận về là một danh sách
    $data=$statement->fetchAll();
    // Nếu lấy dữ liệu về là một bản ghi thì dùng fetch();

?>
<body >
    <header>
        <div class="flex items-center justify-between max-w-[1400px] m-auto border-b-2">
            <h1 class="font-bold font-mono text-red-500 text-[35px] py-[15px]">PET-MANAGEMENT</h1>
        </div>
    </header>
    <main>
      <div class="m-auto max-w-[1400px]">
        <h2 class="text-[25px] font-mono p-[20px]">Danh sách vật nuôi</h2>
        <div class="block pl-[1000px] pb-[15px]">
            <a href="../login.php"><button class="border-2 py-[10px] px-[20px] bg-red-400 rounded text-white font-mono mr-[10px]">Back</button></a>
        <a href="../quan_li_danh_muc_vn/list_category.php">
           <button class="border-2 py-[10px] px-[20px] bg-red-400 rounded text-white font-mono mr-[10px]">Quản lý loại vật nuôi</button>
           </a>
        </div>
        <table class="border-b-2 m-auto max-w-[1300px]">
        <thead>
            <tr class="border-b-2 ">
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center ">Mã vật nuôi</th>
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center">Tên vật nuôi</th>
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center">Mã loại vật nuôi</th>
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center">Tuổi</th>
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center">Cân nặng</th>
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center">Hình ảnh</th>
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center"></th>
              
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($data);$i++){
                $id=$data[$i]['id'];
                $name=$data[$i]['name'];
                $type_id=$data[$i]['type_id'];
                $age=$data[$i]['age'];
                $weight=$data[$i]['weight'];
                $img=$data[$i]['img'];
                $url_chinh_sua="edit_pet.php?id=$id";
                $url_xoa="xoa_pet.php?id=$id";
            ?>
                <tr class="border-b-2 border-green-400 items-center">
                    <td class="py-[10px]"><?= $id?></td>
                    <td><?= $name?></td>
                    <td><?= $type_id?></td>
                    <td><?= $age?></td>
                    <td><?= $weight?></td>
                    <td><img class="" src="<?= $img?>" alt=""></td>
                    <td class="flex">
                        <a href="<?= $url_chinh_sua?>"><button type="submit" class="border-2 px-[30px] py-[5px] bg-yellow-500 rounded text-white block items-center">Sửa</button></a>
                        <a href="<?= $url_xoa?>"><button type="submit" class="border-2 px-[30px] py-[5px] bg-red-500 rounded text-white">Xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
           <div>
            <p><?= isset($_GET['thong_bao'])? $_GET['thong_bao']:'' ?></p>
           </div>
        </tbody>
      </table>
      <div class="flex max-w-[1300px] m-auto mt-[30px] justify-end">
          <a href="create_pet.php">
          <button class="border-2 py-[10px] px-[20px] bg-red-500 rounded text-white font-mono mr-[10px]">Thêm mới</button>
            </a> 
            
      </div>
      </div>
      
    </main>
</body>
</html>