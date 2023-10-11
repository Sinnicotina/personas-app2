<!doctype html>
<html lang="en">

<head>
    <title>Listado de Comunas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Listado De Comunas</h1>
        <a href="{{ route('comunas.create') }}" class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">code</th>
                    <th scope="col">Comuna</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comunas as $comuna)
                    <tr>
                        <th scope="row">{{ $comuna->$comu_codi }}</th>
                        <td>{{ $comuna->comu_nomb }}</td>
                        <td>{{ $comuna->muni_nomb }}</td>
                        <td>
                            <form action="{{ route('comunas.destroy', ['comuna' => $comuna->comu_codi]) }}" method="POST"
                                style="display: inline-block">
                                @method('delete')
                                @csfr
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
