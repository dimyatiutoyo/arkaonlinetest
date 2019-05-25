<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css">
    <title>Data Programmer</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">Data Programmer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <form id="form-user" class="well form-inline">
                    <input type="text" id="user" class="span4">
                    <button onclick="addUser()" class="btn">Tambah</button>
                </form>
            </div>
        </div>
        <div class="row">
            <span id="notif-tambah" class="span12"></span>
        </div>
        <div class="row">
            <div class="span12">
                <table class="table table-bordered">
                    <tbody id="tbody">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>


</html>

<script src="bootstrap/js/jquery.js"></script>
