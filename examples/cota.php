<?php
declare(strict_types=1);
$plan=json_decode(file_get_contents(__DIR__.'/../plan.json'),true,512,JSON_THROW_ON_ERROR);
if ($argc!==3 || !ctype_digit($argv[1]) || !ctype_digit($argv[2])) {
    fwrite(STDERR,"Uso: php examples/cota.php CONSULTAS_USADAS_NO_MES PUXA_TUDO_USADOS_HOJE\n"); exit(1);
}
echo json_encode([
    'plano'=>$plan['name'],
    'consultas_restantes_mes'=>max(0,$plan['monthly_query_limit']-(int)$argv[1]),
    'puxa_tudo_restantes_hoje'=>max(0,$plan['puxa_tudo_daily_limit']-(int)$argv[2]),
    'observacao'=>'Estimativa local com valores informados; confirme consumo e período no painel oficial.',
],JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR).PHP_EOL;
