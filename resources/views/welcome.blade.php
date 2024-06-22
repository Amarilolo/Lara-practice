<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>All Stagiaires</h1>

    <table>
        <thead>
            <th>Nom </th>
            <th>Prenom</th>
            <th>filiere</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($Stagiaires as $Stagiaire)
                <tr>
                    <td>{{ $Stagiaire->nom }}</td>
                    <td>{{ $Stagiaire->prenom }}</td>
                    <td>{{ $Stagiaire->filiere }}</td>
                    <td>
                        <form action="{{ route('Stagiaires.destroy', $Stagiaire->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                        <button><a href="{{route("Stagiaires.edit",$Stagiaire->id)}}">Edit</a></button>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
</body>

</html>
