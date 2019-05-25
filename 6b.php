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
                <div id="form-user" class="well form-inline">
                    <input type="text" id="user" class="span4">
                    <button onclick="addUser()" class="btn">Tambah</button>
                </div>
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
<script>
    $(document).ready(function () {
        $.ajax('ajax/get_data.php', {
            dataType: 'json',
            success: function (data) {
                writeTable(data);
            }
        });
    });

    function addUser() {
        // e.preventDefault();

        user = $('#user').val();

        $.ajax('ajax/insert_user.php', {
            data: { user: user },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                if (data.status == 'success') {
                    writeTable(data);
                }
                else if (data.status == 'failed') {
                    window.setTimeout(function () {
                        $(".alert").fadeTo(500, 0).slideUp(500, function () {
                            $(this).remove();
                        });
                    }, 4000);
                    $('#notif-tambah').html('<div class="alert alert-error">' + data.message + '</div>');
                }
            }
        });
    }

    function addSkill(id) {
        if($('#skill'+id).val() == ''){
            $('#skill'+id).focus();
        }
        skill = $('#skill'+id).val();

        $.ajax('ajax/insert_skill.php', {
            data: { skill: skill, id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                if (data.status == 'success') {
                    writeTable(data);
                }
                else if (data.status == 'failed') {
                    window.setTimeout(function () {
                        $(".alert").fadeTo(500, 0).slideUp(500, function () {
                            $(this).remove();
                        });
                    }, 4000);
                    $('#notif-tambah').html('<div class="alert alert-error">' + data.message + '</div>');
                }
            }
        });
    }

    function writeTable(data) {
        console.log(data);
        $('#tbody').empty();
        for (i = 0; i < data.data.length; i++) {
            $('#tbody').append('<tr>'
                + '<td width="15px" rowspan="2">' + (i + 1) + '</td>'
                + '<td>' + data.data[i].name + '</td>'
                + '<td width="30%" rowspan="2">'
                + ' <div class="form-inline">'
                + '<input type="text" class="span2" id="skill'+data.data[i].id+'">'
                + '<button type="submit" onclick="addSkill('+data.data[i].id+')" class="btn">Tambah</button>'
                + '</div>'
                + '</td>'
                + '<tr>'
                + '<td>' + ((!data.data[i].skill) ? '<span class="label label-danger">tidak ada data</span>' : data.data[i].skill) + '</td>'
                + '</tr>');
        }
    }
</script>