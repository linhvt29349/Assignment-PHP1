<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo mới vật nuôi</title>
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
    <h1 class="font-mono text-[25px] py-[20px]">Form tạo mới vật nuôi</h1>
    <form action="" class="m-auto max-w-[1000px]">
        <label class="block text-[20px] font-mono" for="">Tên vật nuôi</label>
        <input type="text" name="name" id="" class="border-2 w-[70%] h-[40px] border-green-400 rounded pl-[10px]">
        <label class="block text-[20px] font-mono" for="">Loại vật nuôi</label>
        <input type="text" name="pet_type" id="" class="border-2 w-[70%] h-[40px] border-green-400 rounded pl-[10px]" >
        <label class="block text-[20px] font-mono" for="">Tuổi</label>
        <input type="number" name="age" id="" class="border-2 w-[70%] h-[40px] border-green-400 rounded pl-[10px]" >
        <label class="block text-[20px] font-mono" for="">Cân nặng</label>
        <input type="number" name="weight" id="" class="border-2 w-[70%] h-[40px] border-green-400 rounded pl-[10px]" >
        <label class="block text-[20px] font-mono" for="">Hình ảnh</label>
        <input type="file" name="age" id="" class="border-2 w-[70%] h-[40px] border-green-400 rounded pl-[10px]" >
        <button type="submit" class="block font-mono border-2 rounded py-[10px] px-[20px] mt-[20px] bg-red-400 text-white justify-end ">Tạo mới</button>
    </form>
</div>
 </main>
</body>
</html>