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
$user=[
    [
        'id'=>'VM01',
        'name'=>"Mèo lông xù",
        'type'=>"Thú cưng",
        'age'=>'2 tuổi',
        'weight'=>'1.5kg',
        'img'=>'https://picsum.photos/id/237/200/200'
    ],
    [
        'id'=>'VM02',
        'name'=>"Chó",
        'type'=>"Thú cưng",
        'age'=>'3 tuổi',
        'weight'=>'2kg',
        'img'=>"https://picsum.photos/id/237/200/200" 
    ],
    [
        'id'=>'VM03',
        'name'=>"Cá vàng",
        'type'=>"Con vật dưới nước",
        'age'=>'1 tuổi',
        'weight'=>'0.5kg',
        'img'=>"https://picsum.photos/id/237/200/200"
    ],
    [
        'id'=>'VM04',
        'name'=>"Mèo lông xù",
        'type'=>"Thú cưng",
        'age'=>'1 tuổi',
        'weight'=>'1.5kg',
        'img'=>"https://picsum.photos/id/237/200/200"
    ]

    ];
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
        <table class="border-b-2 m-auto max-w-[1300px]">
        <thead>
            <tr class="border-b-2 ">
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center ">Mã vật nuôi</th>
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center">Tên vật nuôi</th>
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center">Loại vật nuôi</th>
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center">Tuổi</th>
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center">Cân nặng</th>
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center">Hình ảnh</th>
                <th class="pr-[70px] bg-green-400 border-2 p-[10px] text-center"></th>
              
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($user);$i++){
                $id=$user[$i]['id'];
                $name=$user[$i]['name'];
                $type=$user[$i]['type'];
                $age=$user[$i]['age'];
                $weight=$user[$i]['weight'];
                $img=$user[$i]['img'];
                $url_chinh_sua="edit_pet.php?id=$id&name=$name";
                $url_xoa="edit_pet.php?id=$id&name=$name";
            ?>
                <tr class="border-b-2 border-green-400 items-center">
                    <td class="py-[10px]"><?= $id?></td>
                    <td><?= $name?></td>
                    <td><?= $type?></td>
                    <td><?= $age?></td>
                    <td><?= $weight?></td>
                    <td><img class="" src="<?= $img?>" alt=""></td>
                    <td class="flex">
                        <a href="<?= $url_chinh_sua?>"><button type="submit" class="border-2 px-[30px] py-[5px] bg-yellow-500 rounded text-white block items-center">Sửa</button></a>
                        <a href="<?= $url_xoa?>"><button type="submit" class="border-2 px-[30px] py-[5px] bg-red-500 rounded text-white">Xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
           
        </tbody>
      </table>
      <div class="flex max-w-[1300px] m-auto mt-[30px] justify-end">
          <a href="create_pet.php">
          <button class="border-2 py-[10px] px-[20px] bg-red-400 rounded text-white font-mono mr-[10px]">Thêm mới</button>
            </a> 
            
      </div>
      </div>
      
    </main>
</body>
</html>