<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso DataTables - Celke</title>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
</head>

<body>
    <h3>Gerenciamento de usuários</h3>
    <p>Configurações</p>

    <br>
    <hr>
    <br>

    <table id="dtab-usuarios" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Status</th>
                <th>Ult. Login</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- DataTables CDN -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>

    <!-- Inicia datatable nas tabelas -->
    <script src="ini_datatable.js"></script>
</body>

</html>