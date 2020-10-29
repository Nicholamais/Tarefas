<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@300;500;700&display=swap" rel="stylesheet">
    <title>Tarefas</title>
</head>
<body>
    <header>
        
        <h1>Seu app de tarefas <i class="fas fa-list-ul"></i></h1>
    </header>
    <main id="main">
        <div class="adicionar">
            <h2>Adicione uma tarefa</h2>
            <a id="adici"><i class="fas fa-plus"></i></a>
        </div>
    </main>
    <div class="modal">
        <h1>Crie seu lembrete:</h1>
       
        <input type="text" name="nome" id="nome" required>
        <input type="submit" id="criar" value="Criar">
        
    </div>
    <script src="js/all.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>