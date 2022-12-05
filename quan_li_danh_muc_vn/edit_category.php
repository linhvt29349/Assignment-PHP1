<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa danh mục</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >
    <?php
    $id=isset($_GET['id'])?$_GET['id']:0;
    include "../connect.php";
   $sql="SELECT * FROM types WHERE id=$id";
   $statement= $connect->prepare($sql);
   $statement->execute();
   $danh_muc=$statement->fetch();
   ?>
<header>
        <div class="flex items-center justify-between max-w-[1400px] m-auto border-b-2">
            <h1 class="font-bold font-mono text-red-500 text-[35px] py-[15px]">PET-MANAGEMENT</h1>
        </div>
 </header>
 <main>
 <div class="m-auto max-w-[1400px]">
    <h1 class="font-mono text-[25px] py-[20px]">Form chỉnh sửa danh mục</h1>
    <form action="tnyc_sua_dm.php" class="m-auto max-w-[1000px]" method='POST'>
        <input type="text" name="id" id="" class="border-2 w-[70%] h-[40px] border-green-400 rounded pl-[10px] " value="<?= $danh_muc['id'] ?>" hidden>
        <label class="block text-[20px] font-mono" for="">Tên danh mục</label>
        <input type="text" name="name" id="" class="border-2 w-[70%] h-[40px] border-green-400 rounded pl-[10px] " value="<?= $danh_muc['name'] ?>">
        <button type="submit" class="block font-mono border-2 rounded py-[10px] px-[20px] mt-[20px] bg-red-400 text-white justify-end ">Chỉnh sửa</button>
    </form>
</div>
 </main>
</body>
</html>