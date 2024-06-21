<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Update un StagiairesEdit</h2>
       <form action="{{ route('Stagiaires.update', $StagiairesEdit->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" value="{{ old('nom', $StagiairesEdit->nom) }}">
    
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" value="{{ old('prenom', $StagiairesEdit->prenom) }}">
    
    <label for="filiere">Filière:</label>
    <input type="text" id="filiere" name="filiere" value="{{ old('filiere', $StagiairesEdit->filiere) }}">
    
    <label for="status">Status:</label>
    <input type="text" id="status" name="status" value="{{ old('status', $StagiairesEdit->status) }}">
    
    <label for="date_naisance">Date de Naissance:</label>
    <input type="date" id="date_naisance" name="date_naisance" value="{{ old('date_naisance', $StagiairesEdit->date_naisance) }}">
    
    <button type="submit">Update</button>
</form>

    </div>

    <!-- Inclure Bootstrap JS et dépendances -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
