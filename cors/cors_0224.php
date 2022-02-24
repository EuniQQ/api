<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>

<div class="container">
    <h2 class="text-center">Striped Rows</h2>
    <p class="text-center">The .table-striped class adds zebra-stripes to a table:</p>            
    <form id="myForm" action="http://192.168.211.71/getForm.php" method="post" >
    <!-- <form id="myForm" action="./getForm.php" method="post" > -->
    <table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>name</th>
            <th>chinese</th>
            <th>english</th>
            <th>math</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td><input type="text" name="name" id="name"></td>
            <td><input type="text" name="chinese" id="chinese"></td>
            <td><input type="text" name="english" id="english"></td>
            <td><input type="text" name="math" id="math"></td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td cospan="4">
                <button type="submit" class="btn btn-primary btn-sm">submit</button>
            </td>
        </tr>
    </tfoot>
    </table>
    </form>
</div>

    <!-- 先載入 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- slim檔沒有ajax套件 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    <!-- 先載入 END-->


    <!-- dataTable 和資料js檔-->
    <script type="text/javascript" charset="utf8"
        scr="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    
    <script>

        $(document).ready(function(){
            $("#myForm").submit(function(e){
            e.preventDefault();

            var form = $(this);    
            var url = form.attr('action');
            $.ajax({
                type:"post",
                url:url,
                data:form.serialize(),
                dataType:'json', //若沒有指定json檔，會是string檔
                success:function(data){
                console.log(data);
                }

            })
            })

    
        });

    </script>

</body>

</html>