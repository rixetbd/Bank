<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
</head>

<body>


    <div id="app"></div>


    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
        method: "get",
        url: "/test/data",
        success:function(data){
            // $("#msg").html(data.msg);
            for (let i = 0; i < data.length; i++) {
                $('#app').append(data[i]['email']);
            }
        }
    });

    </script>

</body>
</html>

