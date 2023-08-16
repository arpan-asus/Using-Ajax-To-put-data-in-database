<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button id="getdata">Get</button>
    <div id="container"></div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#getdata').click(function(){
                $.ajax({
                    type:'get',
                    url:'{{route("ajaxfetch")}}',
                    dataType:"json",

                    // success:function(data){
                    //     for(var i=0; i<=data.length; i++){
                    //     let dataContainer=$("#container");
                    //     // dataContainer.empty();

                    //     dataContainer.append('<p>' + data.name + '</p>');
                    //     dataContainer.append('<p>' + data.email + '</p>');
                    //     dataContainer.append('<p>' + data.number + '</p>');
                    //     }
                    // },

                    success:function(data){
                        let dataContainer=$("#container");
                        dataContainer.empty();

                        data.forEach(function(el){
                            dataContainer.append('<p>'+ el.name + '<p>');
                            dataContainer.append('<p>'+ el.email + '<p>');
                            dataContainer.append('<p>'+ el.number + '<p>');
                        });
                    },

                    error:function(error){
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>
</html>
