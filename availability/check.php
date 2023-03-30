
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
 <button type="button" data-bs-toggle="modal" data-bs-target="#checkbutton" class="btn btn-dark my-5">Check Availability</button>
    <div class="modal fade" id="checkbutton" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Check Availability for movies</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
        <input type="text"  placeholder="Search By Movie Name" id="ID_search" class="form-control" >

       <div id="ID_table"></div>
    </div>
    <div class="modal-footer">
        <button type="button" id="ID_button" class="btn btn-dark">Check Availability</button>
         <button type="button" class="btn btn-danger" id="ID_close" data-bs-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>


    </div>



</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>


$(document).ready(function() {
    
    $('#ID_button').click(function() {
        var search_word = $('#ID_search').val();
        if(search_word != ""){
        $.ajax({
                url: 'search.php',
                type: 'POST',
                data: {
                    data_search: search_word
                },
                success: function(data) {
                    $('#ID_table').html(data);
                }
            })
            }
     
        })
        $("#ID_close").click(function (){
            $('#ID_table').html(null);
            $('#ID_search').val(null);
        })

})

</script>