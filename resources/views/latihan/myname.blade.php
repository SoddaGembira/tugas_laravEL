<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Saya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-3">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="card" style="width: 18rem;">
            <img src="https://asset-a.grid.id//crop/0x0:0x0/700x465/photo/2021/07/13/gambar-ilustrasi-bisa-memperjela-20210713123218.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    {{$data["name"]}}
                </h5>
                <p class="card-text">
                    {{$data["alamat"]}}
                </p>
                <a href="#" class="btn btn-primary">hhhhh</a>
            </div>
        </div>
        </div>
        <div class="col"></div>
    </div>
                <!-- {{ $data ["name"] }}<br>
                {{ $data ["alamat"] }} -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>