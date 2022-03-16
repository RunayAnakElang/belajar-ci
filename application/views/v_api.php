<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="input-group mb-3">
  <input type="text" class="form-control" id="input_key" placeholder="Cari Film" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <button class="btn btn-primary" id="cari">cari</button>
</div>
            </div>
        </div>
        <div class="row">
            <div id='movie-list'>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
       $(document).ready(function(){
        $("#cari").click(function(){
            // console.log('tombol berhasil di tekan');
            $.ajax({
                url : "http://omdbapi.com/",
                dataType: "JSON",
                type:"get",
                data:{
                    "apikey":"84625a75",
                    "s" : $("#input_key").val()
                },
                success: function(result){
                    let movies = result.Search;
            $('#movie-list').html('');
            if(result.Response == "True"){
                $.each(movies, function(i, data){
                    $('#movie-list').append(`<div class="col-md-4 mb-3">
                        <div class="card" style="width: 18rem;">
                        <img src="`+ data.Poster +`" class="card-img-top" height="300px">
                        <div class="card-body"><h5 class="card-title">`+ data.Title +`</h5>
                        <p class="card-text">Year : `+ data.Year +`</p>
                        <a href="#" class="btn btn-primary" id="btn-details" data-id="`+ data.imdbID +`" 
                        data-toggle="modal" data-target="#exampleModal">Show Details</a>
                        </div></div></div>
                    `);
                })
            }else{
                $('#movie-list').append(`
                    <div class="col-sm-12 text-center">
                        <h1>`+ result.Error +`</h1>
                    </div>
                `);
            }

                }
            })
        })
       })
    </script>
</body>
</html>