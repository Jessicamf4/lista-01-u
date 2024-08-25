const readline = require('readline');

// Configura o readline para capturar a entrada do usuário
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function configurarNotificacao() {
    rl.question("Digite o nome do remédio que você deve tomar: ", (remedio) => {
        rl.question("Digite o intervalo de tempo (em horas) entre as doses: ", (intervalo) => {

            const intervaloMs = intervalo * 60 * 60 * 1000;

            setInterval(() => {
                console.log(`Hora de tomar o seu remédio: ${remedio}`);
            }, intervaloMs);

            rl.close();
        });
    });
}

configurarNotificacao();
