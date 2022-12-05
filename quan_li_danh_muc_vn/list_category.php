
<?php
$user=[
    [
        'id'=>'VM01',
        'name'=>"Mèo lông xù",
        
    ],
    [
    
        'id'=>'VM02',
        'name'=>"Chó",
        
    ],
    [
        'id'=>'VM03',
        'name'=>"Cá vàng",
        
    ],
    [
        'id'=>'VM04',
        'name'=>"Mèo lông xù",
        
    ]

    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục vật nuôi</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body >
    <header>
        <div class="flex items-center justify-between max-w-[1400px] m-auto border-b-2">
            <h1 class="font-bold font-mono text-red-500 text-[35px] py-[15px]">PET-MANAGEMENT</h1>
        </div>
    </header>
    <main>
      <div class="m-auto max-w-[1400px]">
        <h2 class="text-[25px] font-mono p-[20px]">Danh mục vật nuôi</h2>
        <table class="border-b-2 m-auto max-w-[1000px]">
        <thead>
            <tr class="border-b-2">
                <th class="pr-[120px] bg-green-400 border-2 p-[10px] text-center ">Mã vật nuôi</th>
                <th class="pr-[120px] bg-green-400 border-2 p-[10px] text-center">Tên vật nuôi</th>
                <th class="pr-[120px] bg-green-400 border-2 p-[10px] text-center"></th>
            
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($user);$i++){
                $id=$user[$i]['id'];
                $name=$user[$i]['name'];
                $url_chinh_sua="edit_category.php?id=$id&name=$name";
                $url_xoa="edit_category.php?id=$id&name=$name";
            ?>
                <tr class="border-b-2 border-green-400">
                    <td class="py-[10px]"><?= $id?></td>
                    <td><?= $name?></td>
                    
                    <td class="flex">
                        <a href="<?= $url_chinh_sua?>"><button type="submit" class="border-2 px-[30px] py-[5px] bg-yellow-500 rounded text-white block">Sửa</button></a>
                        <a href="<?= $url_xoa?>"><button type="submit" class="border-2 px-[30px] py-[5px] bg-red-500 rounded text-white">Xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
           
        </tbody>
      </table>
      <div class="flex max-w-[1000px] m-auto mt-[30px] justify-end">
        <a href="create_category.php">
           <button class="border-2 py-[10px] px-[20px] bg-red-400 rounded text-white font-mono mr-[10px]">Thêm mới</button>
            </a>
            
      </div>
      </div>
      
    </main>
</body>
</html>