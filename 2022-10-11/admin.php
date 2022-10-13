<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
    <h3>Add news</h3>
    <div class="container">
        <form action="save.php" method="post">
            <table class="table table-bordered">
                <tr>
                    <th>HeadLine</th>
                    <td><input type="text" class="form-control" name="headline"></td>
                </tr>
                <tr>
                    <th>Sub title</th>
                    <td><input type="text" class="form-control" name="subtitle"></td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td><input type="text" class="form-control" name="photo"></td>
                </tr>
                <tr>
                    <th>Details</th>
                    <td><textarea id="" cols="30" rows="10" class="form-control" name="content"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" class="btn btn-block btn-primary" value="Save"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>