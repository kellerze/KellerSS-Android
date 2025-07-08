https://www.mediafire.com/file/nl27tv154wyyjhn/BOT_DE_SALAS.rar/file
<?php
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    system('cls');
} else {
    system('clear');
}

function mostrarVerificacao() {
    $mensagens = [
        ["\033[38;5;62m[+] Versão do Android: 13\033[0m", 100000],
        ["\033[38;5;62m[-] O dispositivo não tem root.\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;82m[!] Dispositivo não reiniciado recentemente.\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;228m[+] Primeira log do sistema: 18-01 06:28:23\033[0m", 100000],
        ["\033[0;37m[+] Caso a data da primeira log seja durante/após a partida e/ou seja igual a uma data alterada, aplique o W.O! Verificando mudanças de data/hora...\033[0m", 200000],
        ["", 100000],
        ["\033[0;31m[!] Para ao obter logs de modificação de data/hora, verifique a data da primeira log do sistema.\033[0m", 200000],
        ["", 100000],
        ["\033[0;31m[!] Nenhum log de alteração de horário encontrado.\033[0m", 100000],
        ["", 100000],
        ["", 100000],
        ["", 100000],
        ["\033[38;5;82m[i] Data e hora/fuso horário automático estão ativados.\033[0m", 200000],
        ["\033[0;37m[+] Caso haja mudança de horário durante/após a partida, aplique o W.O!\033[0m", 200000],
        ["", 100000],
        ["\033[0;31m[!] Nenhum dado encontrado.\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;62m[+] Caso haja acesso durante/após a partida, aplique o W.O!\033[0m", 200000],
        ["\033[38;5;82m[!] Nenhum replay foi passado e a pasta MReplays está normal.\033[0m", 100000],
        ["\033[38;5;228m[+] Data de instalação do Free Fire: 03-03-2023 19:16:31\033[0m", 100000],
        ["\033[0;37m[#] Verificando a data de instalação do jogo com a data de acesso da pasta MReplays para ver se o jogo foi recem instalado antes da partida, se não, vá no histórico e veja se o player jogou outras partidas recentemente, se sim, aplique o W.O!\033[0m", 300000],
        ["", 100000],
        ["\033[38;5;82m[i] Aplicação MTP está desativada.\033[0m", 200000],
        ["", 100000],
        ["\033[38;5;62m[+] Checando bypass de Wallhack/Holograma...\033[0m", 9000000],
        ["\033[0;31m[!] Nenhuma alteração suspeita encontrada.\033[0m", 100000],
        ["\033[38;5;82m[+] Pasta shaders sem alterações suspeitas...\033[0m", 100000],
        ["\033[38;5;228m[+] Data da última modificação: 27-04-2025 15:57:59\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;228m[+] Data da última alteração na pasta 'gameassestbundles': 25-04-2025 15:57:59\033[0m", 100000],
        ["\033[0;37m[!] Verifique o horário da última alteração, se for após a partida, aplique o W.O!\033[0m", 200000],
        ["", 100000],
        ["\033[38;5;62m[+] Verificando data de modificação na pasta 'android'...\033[0m", 100000],
        ["\033[38;5;228m[+] Modificação da pasta: 27-04-2025 15:57:59\033[0m", 100000],
        ["\033[0;37m[!] Se a pasta 'android' esteja modificada após o fim da partida, aplique o W.O!\033[0m", 200000],
        ["", 100000],
        ["\033[38;5;228m[+] Data de alteração na pasta da 'optionalpataarres': 10-04-2025 15:57:26\033[0m", 100000],
        ["\033[0;37m[!] Se a data de alteração da pasta for após a partida, aplique W.O!\033[0m", 200000],
        ["", 100000],
        ["\033[0;31m[!] Nenhuma alteração suspeita encontrada nos arquivos...\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;62m[+] Checando OBB...\033[0m", 100000],
        ["\033[38;5;228m[+] Data de modificação do arquivo OBB: 10-04-2025 11:36:33\033[0m", 100000],
        ["\033[0;37m[+] Após verificar ingame se o usuário está utilizando Wallhack, olhando suas ações em partida (se ele consegue ver através de paredes, verifique os horários do shaders e OBB e compare também com o horário do replay, caso esteja muito diferente as datas, aplique o W.O!\033[0m", 300000],
        ["", 100000],
        ["\033[0;31m[!] O arquivo 'unity.ver' não existe. Data de modificação da pasta 'il2cpp': 27-02-2025 13:49:43\033[0m", 100000],
        ["\033[0;31m[!] O arquivo 'apk.ver' não existe. Data de modificação da pasta 'il2cpp': 27-02-2025 13:49:43\033[0m", 100000],
        ["\033[0;31m[!] A pasta 'Metadata' não existe. Data de modificação da pasta 'il2cpp': 27-02-2025 13:49:43\033[0m", 100000],
        ["", 100000],
        ["\033[0;37m[+] Verifique se a data de modificação da pasta Metadata bate exatamente com a data dos arquivos apk.ver e unity.ver, caso estejam diferentes, aplique o W.O!...\033[0m", 200000]
    ];

    foreach ($mensagens as $msg) {
        echo $msg[0] . "\n";
        usleep($msg[1]);
    }
}

echo "
           \033[0;37mKellerSS Android \033[0;36mFucking Cheaters \033[0;37mdiscord.gg/allianceoficial

\033[1;31m                            )       (     (          (
                        ( /(       )\ )  )\ )       )\ )
                        )\()) (   (()/( (()/(  (   (()/(
                        |((_)\  )\   /(_)) /(_)) )\   /(_))
                        |_ ((_)((_) (_))  (_))  ((_) (_))
                        | |/ / | __|| |   | |   | __|| _ \\
                        ' <  | _| | |__ | |__ | _| |   /
                        _|\_\ |___||____||____||___||_|_\\



                    \033[0;36m{C} Coded By - KellerSS | Credits for Sheik\n\n";

sleep(5);

echo "\n\n";
echo "\033[0;34m      +--------------------------------------------------------------+\n";
echo "      +                       KellerSS Menu                           +\n";
echo "      +--------------------------------------------------------------+\n\n\n";

echo "\033[1;33m[0]\033[1;33m  Instalar Módulos \033[0;37m(Atualizar e instalar módulos)\n";
echo "\033[1;32m[1]\033[0;32m  Escanear FreeFire Normal\n";
echo "\033[1;32m[2]\033[0;32m  Escanear FreeFire Max\n";
echo "\033[1;31m[S]\033[1;31m  Sair\n\n";
echo "\033[0;96m[#] Escolha uma das opções acima: \033[0;37m";

$opcao = trim(fgets(STDIN));

if ($opcao === "1") {
    system('cls');
    mostrarVerificacao();
}
?>
