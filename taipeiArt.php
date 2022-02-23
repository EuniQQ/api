<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>臺北市立美術館_展覽資訊</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h3 class="col-12 text-center pt-3">臺北市立美術館_展覽資訊</h3>
        </div>
    </div>

    <div class="container mt-5">
        <table id="table_id" class="table table-striped">
            <thead>
                <tr>
                <th>編號</th>
                    <th>展出名稱</th>
                    <th>內容</th>
                    <th>來源</th>
                    <th>文物描述</th>
                </tr>
            </thead>

            <tbody>


            </tbody>

        </table>
    </div>
<!-- 先載入 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
crossorigin="anonymous"></script>
<!-- 先載入 END-->


<!-- dataTable 和資料js檔-->
<script type="text/javascript" charset="utf8"
scr="art_3.php"></script>

<script>
$(document).ready(function(){
    $.getJSON("art_3.php",(res)=>{
        console.log('res',res);

        for(let i=0 ; i<200 ; i++){
            $('tbody').append(`
            <tr>
                <td>${i+1}</td>
                <td>${res[i].title}</td>
                <td>${res[i].內容}</td>

            </tr>  
            `)

        } 
        

    })
})



</script>

</body>
</html>