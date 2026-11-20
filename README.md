# CPF Buscas painel Start — guia de uso e calculadora PHP

CPF Buscas plano Start: guia do painel, 300 consultas/mês, 10 Puxa Tudo/dia e calculadora PHP de cotas.

> **Conheça o CPF Buscas:** consulte os módulos disponíveis pelo painel ou integre seu sistema com a API. [Acesse cpfbuscas.net](https://cpfbuscas.net/?utm_source=github&utm_medium=readme&utm_campaign=exemplos_php), [compare os planos da API](https://cpfbuscas.net/api) e [crie sua conta](https://cpfbuscas.net/cadastro). Painel e API têm assinaturas separadas.

## Plano Start

| Mensalidade | Consultas por mês | Puxa Tudo por dia |
|---:|---:|---:|
| R$ 30,00 | 300 | 10 |

O painel é usado no navegador. Este plano não inclui acesso à API; a calculadora PHP funciona apenas no computador e não acessa a conta.

## Exemplo de uso do painel

1. [Crie sua conta](https://cpfbuscas.net/cadastro) e escolha o plano Start em [planos do painel](https://cpfbuscas.net/planos).
2. Após a confirmação do pagamento, entre no painel.
3. Escolha o módulo apropriado, como CPF ou CNPJ, e informe os campos solicitados com finalidade legítima.
4. Confira as informações retornadas; disponibilidade varia conforme o módulo.
5. Acompanhe o consumo e o histórico. Se exportar resultados, proteja o arquivo e defina prazo de descarte.

Para uma rotina inicial, confira a cota antes de abrir o módulo, faça a consulta manual e revise o resultado disponível no histórico.

## Calculadora de cotas com PHP 8.2+

```bash
git clone https://github.com/777Morall/cpfbuscas-painel-start-guia-php.git
cd cpfbuscas-painel-start-guia-php
php examples/cota.php 25 3
```

Os argumentos são consultas usadas no mês e Puxa Tudo usados hoje. Não informe CPF, CNPJ ou dados pessoais: somente totais numéricos. A calculadora não registra dados nem realiza requisições. Ela subtrai cada contador de sua respectiva cota; não presume se Puxa Tudo também consome consultas mensais. Confirme essa regra, o ciclo e o consumo no painel. Os números não são lidos automaticamente da assinatura.

## Preciso automatizar consultas CPF e CNPJ em PHP?

Contrate um [plano de API](https://cpfbuscas.net/api) e veja os exemplos separados abaixo. Não há endpoint público de automação do painel documentado; este guia não inventa esse acesso.

- [cpfbuscas-api-start-php](https://github.com/777Morall/cpfbuscas-api-start-php)
- [cpfbuscas-api-plus-php](https://github.com/777Morall/cpfbuscas-api-plus-php)
- [cpfbuscas-api-pro-php](https://github.com/777Morall/cpfbuscas-api-pro-php)
- [cpfbuscas-api-scale-php](https://github.com/777Morall/cpfbuscas-api-scale-php)
- [cpfbuscas-painel-start-guia-php](https://github.com/777Morall/cpfbuscas-painel-start-guia-php)
- [cpfbuscas-painel-pro-guia-php](https://github.com/777Morall/cpfbuscas-painel-pro-guia-php)
- [cpfbuscas-painel-elite-guia-php](https://github.com/777Morall/cpfbuscas-painel-elite-guia-php)

## Fontes e atualização

Conferido em **20/11/2026**: [documentação](https://cpfbuscas.net/api-docs), [planos da API](https://cpfbuscas.net/api) e [planos do painel](https://cpfbuscas.net/planos). Valores e limites podem mudar. Exemplos independentes; não afirmam vínculo oficial.

## Licença

MIT para o exemplo PHP. Serviço e dados seguem os termos do CPF Buscas.
