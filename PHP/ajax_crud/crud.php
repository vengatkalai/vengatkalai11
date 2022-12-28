<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<style>
        .error{
            color:red;
        }
        .sus{
            color: green;
        }
    </style>
    <div id="result"></div>



    <form action="" method="post" id="form" autocomplete="off">
         <input type="hidden" name="id" id="id">
        <input type="text" name="name" id="name" placeholder="name"><br><br>
        <input type="text" name="email" id="email" placeholder="Email"><br><br>
        <input type="password" name="password" id="password" placeholder="password"><br><br>
        <input type="submit" value="submit" name="submit" id="submit">
        <input type="submit" value="update" id="update" name="update" style="display:none">
    </form>

    <table  border=1>
        <thead>
        <tr>
            <td>Sno</td>
            <td>Name</td>
            <td>Email</td>
            <td>password</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody  id="tabledata">
        <tr >
            <td>Sno</td>
            <td>Name</td>
            <td>Email</td>
            <td>password</td>
            <td>Action</td>
        </tr>
        </tbody>
    </table>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>


       $(document).ready(function(){

        // ============================//insert action==========================

        $('#submit').click(function(e){
                e.preventDefault();
                var formdata = $("#form").serializeArray();

                console.log(formdata);

                $.ajax({
                    url: 'insert.php',
                    type: 'post',
                    data: formdata,

                    success: function(result){

                        console.log(result);

                       result = JSON.parse(result);
                       console.log(result);

                        if(result.status){
                            $('#result').html(result.msg).addClass('sus');
                            $('#tabledata').append("<tr id='tr"+result.id+"'><td>"+result.id+"</td><td>"+result.data.name+"</td><td>"+result.data.email+"</td><td>"+result.data.password+"</td><td><button data-id='"+result.id+"' class='edit'>Edit</button> | <button data-id='"+result.id+"' class='delete'>Delete</button></td></tr>");
                            $("#form").trigger("reset");

                             } else{
                            $('#result').html(result.msg).addClass('error');
                        }
                    }
                });
            });

            // ==============================loaddate==========================================

            const loadData = () =>{
                $.ajax({
                    url:'load.php',
                    type:'get',
                    success:function(result){
                        // console.log(result);
                        $("#tabledata").html(result);
                    }
                });
            }
          

            //   ================================ Edit ===============================================     

            $("body").on("click",".edit",function(e){
                var id=$(this).data('id');
                console.log(id);
                $.ajax({
                    url: 'editLoad.php',
                    type: 'post',
                    data: {id:id},
                    success: function(result){
                        result = JSON.parse(result);
                        console.log(result);
                        if(result.status){
                            $('#name').val(result.data.name);
                            $('#id').val(result.data.id);
                            $('#email').val(result.data.email);
                            $('#password').val(result.data.password);
                            $('#submit').hide();
                            $('#update').show();
                        }
                    }
                });
                
            });

            // ===================================update==========================================
            $("#update").click(function(e){
                e.preventDefault();
                var formdata = $("#form").serializeArray();
                $.ajax({
                    url: 'update.php',
                    type: 'post',
                    data: formdata,
                    success: function(result){
                        result = JSON.parse(result);
                        if(result.status){
                            $('#result').html(result.msg).addClass('sus');
                            $("#form").trigger("reset");
                            $('#submit').show();
                            $('#update').hide();
                            loadData();
                        } else{
                            $('#result').html(result.msg).addClass('error');
                        }
                        
                    }
                });
            });

              //   ============================== Delete =========================================       
              const deleteData = (id) =>{
                $.ajax({
                    url:'delete.php',
                    type:'POST',
                    data:{id:id},
                    success:function(result){
                        result = JSON.parse(result);
                        if(result.status){
                            console.log(id);
                            $('#tr'+id).remove();
                            $("#result").html(result.msg).addClass("success");
                        }
                    }
                });
            }
                    $('body').on("click",".delete",function(){
                        var id = $(this).data('id');
                        deleteData(id);
                    });
                    loadData();

        });
    </script>


</body>

</html>