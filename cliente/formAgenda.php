<head>
    <link rel="stylesheet" href="../estilo/agenda.css">
    <title>Agendamento</title>
</head>

<body>

     <header>
         <h3>MARQUE AQUI SEU HORÁRIO</h3>
    </header>
        <div class="main-content">

             <form action="../cliente/agendamento.php" method="post">

             Nome: <input type="text" name="nome" required><br>

             Data e Horário: <input type="datetime-local" name="horario" required><br>

             Observação: <input type="text" name="observacao"><br>

             <input type="submit" value="MARCAR"><br>


             </form> 

        </div>

</body>