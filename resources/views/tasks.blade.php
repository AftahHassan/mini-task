<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Tasks</title>
</head>
<body>

    <h1>Ma Liste de Tâches</h1>

    <!-- Formulaire -->
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Entrer une tâche">
        <button type="submit">Ajouter</button>
    </form>

    <hr>

    @foreach($tasks as $task)
        <p>{{ $task->title }}</p>

        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    @endforeach

    <!-- Liste -->
    @foreach($tasks as $task)
        <p>{{ $task->title }}</p>
    @endforeach

</body>
</html>