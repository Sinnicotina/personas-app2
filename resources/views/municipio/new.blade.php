<!doctype html>
<html lang="en">

<head>
    <title>añadir comuna</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <h1>Añadir municipio</h1>
            <form method="POST" action="{{ route('municipios.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="id" class="form-label">code</label>
                    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="">
                    <div id="idlHelp" class="form-text">codigo municipio</div>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">municipio</label>
                    <input type="text" required class="form-control" id="name" aria-describedby="nameHelp"
                        name="name" placeholder="municipio nombre.">
                </div>
                <label for="Departament">Departamento</label>
            <select class="form-select" id="Departament" name="code" required>
                <option selected disable value="">CHoose one...</option>
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
                @endforeach
            </select>
                <div class="mt-3">
                <button type="submit" class="btn btn-primary">save</button>
                <a href="{{route('municipios.index')}}" class="btn btn-warning">Cancel</a>
                </div>
            </form>
        </div>




    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
