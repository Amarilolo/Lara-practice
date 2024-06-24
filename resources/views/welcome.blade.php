<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">All Stagiaires</h1>
        <a href="{{ route('Stagiaires.create') }}" class="btn btn-primary mb-3">Add New Stagiaire</a>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Filiere</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Stagiaires as $Stagiaire)
                    <tr>
                        <td>{{ $Stagiaire->nom }}</td>
                        <td>{{ $Stagiaire->prenom }}</td>
                        <td>{{ $Stagiaire->filiere }}</td>
                        <td>
                            <form action="{{ route('Stagiaires.destroy', $Stagiaire->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <a href="{{ route('Stagiaires.edit', $Stagiaire->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
