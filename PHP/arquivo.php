<?php

// Função para configurar a notificação
function configurarNotificacao($remedio, $intervalo) {
    while (true) {
        echo "Hora de tomar o seu remédio: $remedio\n";
        sleep($intervalo * 60); // Converte o intervalo de minutos para segundos
    }
}

// Solicita o nome do remédio e o intervalo em minutos
echo "Digite o nome do remédio que você deve tomar: ";
$remedio = trim(fgets(STDIN));

echo "Digite o intervalo de tempo (em minutos) entre as doses: ";
$intervalo = (int) trim(fgets(STDIN));

// Chama a função para configurar a notificação
configurarNotificacao($remedio, $intervalo);

?>
