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

    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

    <style>
        #sidebar i {
            font-size: 20px;
        }

        #sidebar {
            position: absolute;
            top: 0px;
            left: -300px;
            width: 300px;
            height: 320vh;
            background: #2F4F4F;
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
            border-bottom: 1px solid grey;
            font-family: 'Raleway', 'sans sarif';
            text-decoration: none;



        }

        #sidebar #sidebar-toggle-btn {
            position: absolute;
            cursor: pointer;
            top: 15px;
            left: 350px;
            color: white;
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

        .navbar {
            background-color: #2F4F4F;
        }

        .feed {
            width: 100%;
        }

        .full {
            height: 30px;

        }

        .green {
            height: 30px;
        }

        nav {
            background-color: #2F4F4F;
        }
    </style>

</head>

<body>




    <!-- header -->
    @include('layout.navbar')

    @include('layout.sidebar')
    <!-- main section -->
    @yield('mainSection')

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

</body>

</html>
