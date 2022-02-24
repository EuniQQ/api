<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Noto+Serif+TC:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./stylesheet.css">
</head>
<style>
    .bg {
        /* object-fit:cover; */
        position: relative;
        width: 100vw;
        background-color: darkgray;
    }
</style>

<body>
    <div class="container-fruid">
        <div class="row">
            <img src="./imgbin_chiang-kai-shek-memorial-hall-beef-noodle-soup-banana-pancakes-food-chinese-cuisine-png.png" style="width:20%;" class="mx-auto my-5">

            <h1 class="col-12 text-center pt-3 text-white" style="font-family: 'Inter', sans-serif;font-family: 'Noto Serif TC', serif; ">中 正 紀 念 堂 典 藏 文 物</h1>
        </div>
    </div>



    <div class="container mt-5" style="background-color:white;">
        <table id="dataTable" class="table table-striped">

            <!-- 分類下拉選單             -->
            <div class="row mt-5">
                <form action="/action_page.php">
                    <label for="cars">選擇分類：</label>
                    <select id="cars" name="cars">
                        <option value="藝術類">藝術類</option>
                        <option value="文物類">文物類</option>
                    </select>
                    <input type="submit">
                </form>
            </div>

            <thead>
                <tr>
                    <th style="width:10%" class="text-center">編號</th>
                    <th style="width:20%" class="text-center">藏品名稱</th>
                    <th style="width:30%" class="text-center">類別</th>
                    <th style="width:40" class="text-center">文物描述</th>
                </tr>
            </thead>

            <tbody>

            </tbody>

        </table>
    </div>

    <div class="container-fruid">
        <div class="row">
            <div class="col-12" style="display:flex;align-items:flex-end">
                <img src="./59786c5b3aced.png" style="width:100vw;">
                <div class="col-12" style=" background-color:black;opacity:0.7;z-index:1;position:absolute">
                    <p class=" text-center my-5 text-white">©2022 copyright by Eunice Chang</p>
                </div>
            </div>
        </div>
    </div>
    <!-- 先載入 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- 先載入 END-->


    <!-- dataTable 和資料js檔-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" scr="art2.php"></script>

    <script>
        $(document).ready(function() {
            $.getJSON("art2.php", (res) => {
                console.log('res', res);


                for (let i = 1500; i < res.length; i++) {
                    str = res[i].Description.substr(0, 90) + " ...(觀看全文)";

                    $('tbody').append(`  
                    <tr> 
                        <td class="text-center">${i}</td>
                        <td class="text-center">${res[i].MainTitle}</td>
                        <td class="text-center">${res[i].Type}</td>
                        <td class="switch">
                            <div class="short">${str}</div>
                            <div class="full" style="display:none;">${res[i].Description}</div>
                        </td>
                    </tr>  
            `)
                }
                $('#dataTable').DataTable();

                $(".switch").on("click", function() {
                $(this).parent().find(".short,.full").toggle();
            })
        })

            
            
        })
    </script>

</body>

</html>