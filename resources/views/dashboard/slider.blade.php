<!doctype html>
<html lang="en">

<head>
    <title>Admin Panel </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #sidebar i {
            font-size: 20px;
        }

        #sidebar {
            position: absolute;
            top: 0px;
            left: -200px;
            width: 200px;
            height: 100vh;
            background: #343a40;
            z-index: 100;
            transition: 0.5s;

        }

        #sidebar.active {
            left: 0px;
        }

        #sidebar .links a {
            display: block;
            padding: 20px;
            color: white;
            text-align: center;
            border-bottom: 1px solid grey;
            font-family: 'Raleway', 'sans sarif';
            text-decoration: none;


        }

        #sidebar #sidebar-toggle-btn {
            position: absolute;
            cursor: pointer;
            top: 20px;
            left: 250px;
            color: black;
            width: 30px;
            height: 30px border:2px solid red;
            z-index: 0;

        }

        #sidebar-toggle-btn i {
            font-size: 25px;
        }



        .links a:hover {
            background: grey;
        }

        .card {
            margin: auto;
        }

        body {
            background-image: url('https://i.stack.imgur.com/zGR9G.jpg');
            font-family: 'Raleway', 'sans sarif';
        }

        #upload-modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            z-index: 1;


        }



        #upload-btn {
            cursor: pointer;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            outline: none;
        }

        /* Style the close button */
        .close-btn {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
        }
    </style>

</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler justify-content-end " type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <form class="form-inline ml-4 ">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>

                    </form>
                    <a class="nav-link ml-5 justify-content-end " data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                        <i class="far fa-bell ml-3"></i>
                        <span class="badge badge-warning navbar-badge">3</span>
                    </a>

                </ul>
            </div>
        </nav>
    </div>
    <div id="sidebar">
        <div id="sidebar-toggle-btn">
            <i class="fa-solid fa-bars" id=""></i>
        </div>

        <div class="links">
            <a href="dashboard" class="home bg-light text-dark"><i class="fa fa-home p-2 " aria-hidden="true"
                    style="left:-40px;"></i> Dashboard</a>

            <a href="akpgc" class="akpgc">Index Page</a>


            <a href="addpage" class="addpage">Add Page</a>

            <a href="disp-name-logo" class="disp-name-logo">Settings</a>
        </div>
    </div>

    <div class="container">
    <div class="card text-left w-50 mt-4 ">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
        <h4 class="card-title">Add Slide</h4>
        <p class="card-text text-center ">
        <form method="post" action="sliderupload" enctype="multipart/form-data">
        @csrf
            <div class="form-group row">
                <label for="image" class="col-sm-1-12 col-form-label">Image</label>
                <div class="col-sm-1-12">
                    <input type="file" class="form-control" name="image" id="image" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-1-12 col-form-label">Title</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="title" id="title" placeholder="">
                </div>
            </div>


            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        
        </p>
      </div>
    </div>
        
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById("sidebar-toggle-btn").addEventListener("click", function() {
            document.getElementById("sidebar").classList.toggle("active");
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Toggle the sidebar based on page load
            document.getElementById("sidebar").classList.toggle("active");
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>
