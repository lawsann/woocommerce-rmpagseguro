# Módulo PagSeguro para WooCommerce - Ricardo Martins (com descontos) #
**Official Website:** http://r-martins.github.io/PagSeguro-Magento-Transparente/woocommerce.html
 
**Contributors:** [claudiosanches](https://profiles.wordpress.org/claudiosanches), [Gabriel Reguly](https://profiles.wordpress.org/Gabriel Reguly)
**Modified by:** [martins56](https://profiles.wordpress.org/martins56)  
**Donate link:** https://claudiosanches.com/doacoes/  
**Tags:** woocommerce, pagseguro, payment  
**Requires at least:** 4.0  
**Tested up to:** 5.8.2
**Stable tag:** 3.3.7
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html  

Adds PagSeguro gateway to the WooCommerce plugin with discount on PagSeguro Taxes.

Adiciona o PagSeguro como meio de pagamento e dá descontos nas taxas oficiais. 

## Description ##

### Add PagSeguro gateway to WooCommerce ###

This plugin adds PagSeguro gateway to WooCommerce.

Please notice that WooCommerce must be installed and active.

### Contribute ###

You can contribute to the source code in our [GitHub](https://github.com/r-martins/woocommerce-rmpagseguro/) page.

### Descrição em Português: ###

Adicione o PagSeguro como método de pagamento em sua loja WooCommerce.

[PagSeguro](https://pagseguro.uol.com.br/) é um serviço de pagamento brasileiro desenvolvido pela UOL.

O plugin WooCommerce PagSeguro foi originalmente desenvolvido sem nenhum incentivo do PagSeguro ou da UOL por Claudio Sanches e outros colaboradores. Nenhum dos desenvolvedores deste plugin possuem vínculos com estas duas empresas.

Este plugin foi desenvolvido a partir da [documentação oficial do PagSeguro](https://pagseguro.uol.com.br/v2/guia-de-integracao/visao-geral.html) e utiliza a última versão da API de pagamentos.

Estão disponíveis as seguintes modalidades de pagamento:

- **Padrão:** Cliente é redirecionado ao PagSeguro para concluir a compra.
- **Lightbox:** Uma janela do PagSeguro é aberta na finalização para o cliente fazer o pagamento.
- **Transparente:** O cliente faz o pagamento direto no seu site sem precisar ir ao site do PagSeguro.


### Descontos nas taxas ###

Graças a uma parceria com o PagSeguro, as transações realizadas por este módulo, possuem [condições especiais junto ao PagSeguro](https://r-martins.github.io/PagSeguro-Magento-Transparente/pro/app.html).

Você não paga nada a mais por isso e ainda ajuda este e [outros projetos](https://pagsegurotransparente.zendesk.com/hc/pt-br/articles/208158763).


### Compatibilidade ###

Compatível com versões posteriores ao WooCommerce 3.0.

Este plugin também é compatível com o [WooCommerce Extra Checkout Fields for Brazil](http://wordpress.org/plugins/woocommerce-extra-checkout-fields-for-brazil/), desta forma é possível enviar os campos de "CPF", "número do endereço" e "bairro" (para o Checkout Transparente é obrigatório o uso deste plugin).

### Instalação ###

Confira o nosso guia de instalação e configuração do PagSeguro na aba [Installation](https://wordpress.org/plugins/woo-pagseguro-rm/#installation).

### Integração ###

Este plugin funciona perfeitamente em conjunto com:

* [WooCommerce Extra Checkout Fields for Brazil](http://wordpress.org/plugins/woocommerce-extra-checkout-fields-for-brazil/).
* [WooCommerce Multilingual](https://wordpress.org/plugins/woocommerce-multilingual/).

### Dúvidas? ###

Você pode esclarecer suas dúvidas usando:

* A nossa sessão de [FAQ](http://wordpress.org/plugins/woo-pagseguro-rm/faq/).
* Acessando a [Central de Ajuda](https://pagsegurotransparente.zendesk.com/hc/pt-br)
* [Abrindo um chamado](https://pagsegurotransparente.zendesk.com/hc/pt-br/requests/new) gratuitamente *caso não encontre sua resposta nos canais acima*

Dica: O suporte é uma cortesia que presto em meu tempo livre. Todos os chamados serão respondidos. Tempo médio de retorno é de 48 horas. Quanto melhor detalhar seu problema e como reproduzi-lo, mais fácil conseguiremos resolvê-lo.

### Colaborar ###

Você pode contribuir com código-fonte em nossa página no [GitHub](https://github.com/r-martins/woocommerce-rmpagseguro/).

### Agradecimentos ###

* [Leandro Matos](http://is-uz.com/) ajudou com o layout e os ícones do Checkout Transparente.

## Installation ##

* Upload plugin files to your plugins folder, or install using WordPress built-in Add New Plugin installer;
* Activate the plugin (Módulo PagSeguro - Ricardo Martins (com descontos);
* Navigate to WooCommerce -> Settings -> Payment Gateways, choose PagSeguro and fill in your PagSeguro Email, Token and App Key.
* To get your app key, authorize your store [here](https://r-martins.github.io/PagSeguro-Magento-Transparente/woocommerce/wizard.html). 

### Instalação e configuração em Português: ###

### Instalação do plugin: ###

* Envie os arquivos do plugin para a pasta wp-content/plugins, ou instale usando o instalador de plugins do WordPress.
* Ative o plugin.

### Requerimentos: ###

* É necessário possuir uma conta no [PagSeguro](http://pagseguro.uol.com.br/) do tipo Vendedor ou Empresarial;
* Ter instalado o [WooCommerce](http://wordpress.org/plugins/woocommerce/)
* Ter [autorizado a Aplicação em sua conta PagSeguro](https://r-martins.github.io/PagSeguro-Magento-Transparente/woocommerce/wizard.html)  

### Configurações no PagSeguro: ###

No PagSeguro é necessário desativar a opção de "Pagamento via Formulário HTML", você pode fazer isso em "Preferências" > "[Integrações](https://pagseguro.uol.com.br/preferencias/integracoes.jhtml)".

Apenas com isso já é possível receber os pagamentos e fazer o retorno automático de dados.

<blockquote>Atenção: Não é necessário configurar qualquer URL em "Página de redirecionamento" ou "Notificação de transação", pois o plugin é capaz de comunicar o PagSeguro pela API quais URLs devem ser utilizadas para cada situação.</blockquote>

### Configurações do Plugin: ###

Com o plugin instalado acesse o admin do WordPress e entre em "WooCommerce" > "Configurações" > "Finalizar compra" > "PagSeguro".

Habilite o PagSeguro, adicione o seu e-mail e o token do PagSeguro. O token é utilizado para gerar os pagamentos e fazer o retorno de dados.

Você pode conseguir um token no PagSeguro em "Integrações" > "[Token de Segurança](https://pagseguro.uol.com.br/integracao/token-de-seguranca.jhtml)".

É possível escolher entre três opções de pagamento que são:

- **Checkout no PagSeguro (padrão):** O cliente e redirecionado para o site do PagSeguro
- **Checkout em Lighbox:** O cliente permanece no seu site é aberto um Lightbox do PagSeguro onde o cliente fará o pagamento
- **Checkout Transparente:** O cliente faz o pagamento direto em seu site na página de finalizar pedido utilizando a API do PagSeguro.

Você ainda pode definir o comportamento da integração utilizando as opções:

- **Enviar apenas o total do pedido:** Permite enviar apenas o total do pedido no lugar da lista de itens, esta opção deve ser utilizada apenas quando o total do pedido no WooCommerce esta ficando diferente do total no PagSeguro.
- **Prefixo de pedido:** Esta opção é útil quando você esta utilizando a mesma conta do PagSeguro em várias lojas e com isso você pode diferenciar os pagamentos pelo prefixo.

### Checkout Transparente ###

Para utilizar o checkout transparente é necessário utilizar o plugin [WooCommerce Extra Checkout Fields for Brazil](http://wordpress.org/plugins/woocommerce-extra-checkout-fields-for-brazil/).

Com o **WooCommerce Extra Checkout Fields for Brazil** instalado e ativado você deve ir até "WooCommerce > Campos do Checkout" e configurar a opção "Exibir Tipo de Pessoa" como "Pessoa Física apenas".

Isto é necessário porque é obrigatório o envio de CPF para o PagSeguro, além de que o PagSeguro aceita apenas CPF.

Note que é necessário aprovação do PagSeguro para utilizar o Checkout Transparente, saiba mais em "[Como receber pagamentos pelo PagSeguro](https://pagseguro.uol.com.br/receba-pagamentos.jhtml)".

Pronto, sua loja já pode receber pagamentos pelo PagSeguro.

## Frequently Asked Questions ##

### What is the plugin license? ###

* This plugin is released under a GPL license.

### What is needed to use this plugin? ###

* WooCommerce version 3.0 or latter installed and active.
* Only one account on [PagSeguro](http://pagseguro.uol.com.br/ "PagSeguro") (Seller or Business).

### FAQ em Português: ###

### Qual é a licença do plugin? ###

Este plugin esta licenciado como GPL.

### O que eu preciso para utilizar este plugin? ###

* Ter instalado o plugin WooCommerce 3.0 ou mais recente.
* Possuir uma conta no PagSeguro.
* Gerar um token de segurança no PagSeguro.
* [Autorizar a aplicação](https://r-martins.github.io/PagSeguro-Magento-Transparente/woocommerce/wizard.html) a realizar ações de pagamento na sua conta PagSeguro (app key).
* Desativar a opção "Pagamento via Formulário HTML" em integrações na página do PagSeguro.

### Como funcionam esses descontos? ###

Em 2014 um módulo para Magento foi criado por Ricardo Martins. Pouco depois, uma parceria foi firmada entre eu (Ricardo) e o PagSeguro a fim de dar descontos para os lojistas e ao mesmo tempo sustentar o projeto e o suporte.

Como o número de lojas cresceu, foi possível reduzir as taxas do PagSeguro que também realiza um repasse para este projeto.

Agora trouxe este modelo para usuários do Wordpress e aproveitei o excelente trabalho realizado pelo Claudio Sanches para tornar isso possível mais rapidamente.


### Tenho uma taxa negociada junto ao PagSeguro. Posso usar o módulo? ###

Ao usar este módulo, você passará a pagar as [taxas exibidas no site](https://r-martins.github.io/PagSeguro-Magento-Transparente/woocommerce.html) conforme sua escolha.

Somente transações realizadas com este módulo usarão estas taxas.

Se você tem taxas mais baixas negociadas que estas negociadas junto ao PagSeguro, recomendo que use o [módulo original do Claudio Sanches](http://wordpress.org/plugins/woocommerce-pagseguro/). 

### PagSeguro recebe pagamentos de quais países? ###

No momento o PagSeguro recebe pagamentos apenas do Brasil.

Configuramos o plugin para receber pagamentos apenas de usuários que selecionarem o Brasil nas informações de pagamento durante o checkout.

### Quais são os meios de pagamento que o plugin aceita? ###

São aceitos todos os meios de pagamentos que o PagSeguro disponibiliza, entretanto você precisa ativa-los na sua conta.

Confira os [meios de pagamento e parcelamento](https://pagseguro.uol.com.br/para_voce/meios_de_pagamento_e_parcelamento.jhtml#rmcl).

### Como que plugin faz integração com PagSeguro? ###

Fazemos a integração baseada na documentação oficial do PagSeguro que pode ser encontrada nos "[guias de integração](https://pagseguro.uol.com.br/receba-pagamentos.jhtml)" utilizando a última versão da API de pagamentos.

### Instalei o plugin, mas a opção de pagamento do PagSeguro some durante o checkout. O que fiz de errado? ###

Você esqueceu de selecionar o Brasil durante o cadastro no checkout.

A opção de pagamento pelo PagSeguro funciona apenas com o Brasil.

### É possível enviar os dados de "Número", "Bairro" e "CPF" para o PagSeguro? ###

Sim é possível, basta utilizar o plugin [WooCommerce Extra Checkout Fields for Brazil](http://wordpress.org/plugins/woocommerce-extra-checkout-fields-for-brazil/).

### O pedido foi pago e ficou com o status de "processando" e não como "concluído", isto esta certo? ###

Sim, esta certo e significa que o plugin esta trabalhando como deveria.

Todo gateway de pagamentos no WooCommerce deve mudar o status do pedido para "processando" no momento que é confirmado o pagamento e nunca deve ser alterado sozinho para "concluído", pois o pedido deve ir apenas para o status "concluído" após ele ter sido entregue.

Para produtos baixáveis a configuração padrão do WooCommerce é permitir o acesso apenas quando o pedido tem o status "concluído", entretanto nas configurações do WooCommerce na aba *Produtos* é possível ativar a opção **"Conceder acesso para download do produto após o pagamento"** e assim liberar o download quando o status do pedido esta como "processando".

### Ao tentar finalizar a compra aparece a mensagem "PagSeguro: Um erro ocorreu ao processar o seu pagamento, por favor, tente novamente ou entre em contato para obter ajuda." o que fazer? ###

Esta mensagem geralmente aparece por causa que não foi configurado um **Token válido**.
Gere um novo Token no PagSeguro em "Preferências" > "[Integrações](https://pagseguro.uol.com.br/preferencias/integracoes.jhtml)" e adicione ele nas configurações do plugin.

Outro erro comum é gerar um token e cadastrar nas configurações do plugin um e-mail que não é o proprietário do token, então tenha certeza que estes dados estão realmente corretos!

Note que caso você esteja utilizando a opção de **sandbox** é necessário usar um e-mail e token de testes que podem ser encontrados em "[PagSeguro Sandbox > Dados de Teste](https://sandbox.pagseguro.uol.com.br/vendedor/configuracoes.html)".

Se você tem certeza que o Token e Login estão corretos você deve acessar a página "WooCommerce > Status do Sistema" e verificar se **fsockopen** e **cURL** estão ativos. É necessário procurar ajuda do seu provedor de hospedagem caso você tenha o **fsockopen** e/ou o **cURL** desativados.

Para quem estiver utilizando o **Checkout Transparente** é obrigatório o uso do plugin [WooCommerce Extra Checkout Fields for Brazil](http://wordpress.org/plugins/woocommerce-extra-checkout-fields-for-brazil/) para enviar o CPF ao PagSeguro, caso o contrário será impossível de finalizar o pedido, veja no [guia de instalação](http://wordpress.org/plugins/woo-pagseguro-rm/#installation) como fazer isso.

Por último é possível ativar a opção de **Log de depuração** nas configurações do plugin e tentar novamente fechar um pedido (você deve tentar fechar um pedido para que o log será gerado e o erro gravado nele).
Com o log é possível saber exatamente o que esta dando de errado com a sua instalação.

Caso você não entenda o conteúdo do log não tem problema, você pode me abrir um [tópico no fórum do plugin](https://wordpress.org/support/plugin/woocommerce-pagseguro#postform) com o link do log (utilize o [pastebin.com](http://pastebin.com) ou o [gist.github.com](http://gist.github.com) para salvar o conteúdo do log).

### O status do pedido não é alterado automaticamente? ###

Sim, o status é alterado automaticamente usando a API de notificações de mudança de status do PagSeguro.

Caso os status dos seus pedidos não estiverem sendo alterados siga o tutorial do PagSeguro:

* [Não recebi o POST do retorno automático. O que devo fazer?](https://pagseguro.uol.com.br/atendimento/perguntas_frequentes/nao-recebi-o-post-com-retorno-automatico-o-que-devo-fazer.jhtml)

A seguir uma lista de ferramentas que podem estar bloqueando as notificações do PagSeguro:

* Site com CloudFlare, pois por padrão serão bloqueadas quaisquer comunicações de outros servidores com o seu. É possível resolver isso desbloqueando a lista de IPs do PagSeguro.
* Plugin de segurança como o "iThemes Security" com a opção para adicionar a lista do HackRepair.com no .htaccess do site. Acontece que o user-agent do PagSeguro esta no meio da lista e vai bloquear qualquer comunicação. Você pode remover isso da lista, basta encontrar onde bloquea o user-agent "jakarta" e deletar ou criar uma regra para aceitar os IPs do PagSeguro).
* `mod_security` habilitado, neste caso vai acontecer igual com o CloudFlare bloqueando qualquer comunicação de outros servidores com o seu. Como solução você pode desativar ou permitir os IPs do PagSeguro.

### Funciona com o Lightbox do PagSeguro? ###

Sim, basta ativar esta nas opções do plugin.

### Funciona com o checkout transparente do PagSeguro? ###

Sim, funciona. Você deve ativar nas opções do plugin.
Note que é necessário aprovação do PagSeguro para utilizar o Checkout Transparente, saiba mais em "[Como receber pagamentos pelo PagSeguro](https://pagseguro.uol.com.br/receba-pagamentos.jhtml)".

### Funciona com o Sandbox do PagSeguro? ###

Não. Somente o módulo original do Claudio Sanches suporta o modo Sandbox.

No entanto, você pode fazer testes reais e solicitar o reembolso. Minha sugestão é que crie um cupom de desconto e faça pedidos de valores baixos para evitar estourar seu limite do cartão. ;)

### O total do pedido no WooCommerce é diferente do enviado para o PagSeguro, como eu resolvo isso? ###

Caso você tenha este problema, basta marcar ativar a opção **Enviar apenas o total do pedido** na página de configurações do plugin.

### Quais URLs eu devo usar para configurar "Notificação de transação" e "Página de redirecionamento"? ###

Não é necessário configurar qualquer URL para "Notificação de transação" ou para "Página de redirecionamento", o plugin já diz para o PagSeguro quais URLs serão utilizadas.

### Mais dúvidas relacionadas ao funcionamento do plugin? ###

Por favor, caso você tenha algum problema com o funcionamento do plugin, busque informações na [Central de Ajuda](https://pagsegurotransparente.zendesk.com/hc/pt-br/).
Caso não encontre o que procura, [abra um chamado](https://pagsegurotransparente.zendesk.com/hc/pt-br/requests/new) detalhando suas configurações, anexando arquivos de logs, e qualquer outra informação que julgue relevante para resolver seu problema. 

## Screenshots ##

### 1. Configurações do plugin. ###
![Configurações do plugin.](http://ps.w.org/woocommerce-pagseguro/assets/screenshot-1.png)

### 2. Método de pagamento na página de finalizar o pedido. ###
![Método de pagamento na página de finalizar o pedido.](http://ps.w.org/woocommerce-pagseguro/assets/screenshot-2.png)

### 3. Exemplo do Lightbox funcionando com o Sandbox do PagSeguro. ###
![Exemplo do Lightbox funcionando com o Sandbox do PagSeguro.](http://ps.w.org/woocommerce-pagseguro/assets/screenshot-3.png)

### 4. Pagamento com cartão de crédito usando o Checkout Transparente. ###
![Pagamento com cartão de crédito usando o Checkout Transparente.](http://ps.w.org/woocommerce-pagseguro/assets/screenshot-4.png)

### 5. Pagamento com debito online usando o Checkout Transparente. ###
![Pagamento com debito online usando o Checkout Transparente.](http://ps.w.org/woocommerce-pagseguro/assets/screenshot-5.png)

### 6. Pagamento com boleto bancário usando o Checkout Transparente. ###
![Pagamento com boleto bancário usando o Checkout Transparente.](http://ps.w.org/woocommerce-pagseguro/assets/screenshot-6.png)


## Changelog ##
== Changelog ==

= 3.3.7 - 11/Dec/2021 =
* Melhoria: quando uma mensagem de erro que não temos tradução vier do PagSeguro, mostraremos ela junto com a mensagem de erro padrão a fim de facilitar a resolução


= 3.3.6 - 29/Sep/2021 =
* Correção da constante com o número de versão do módulo. (São muitos lugares pra se alterar a versão no WP e esquecemos deste)


= 3.3.5 - 29/Sep/2021 =

* Compatibilidade: apenas atualizando notas de versão após teste de compatibilidade com Wordpress 5.8.1 e WooCommerce 5.7.1
* Melhoria: alteração em mensagens de erro com linguagem muito informal.

= 3.3.4 - 12/Mai/2021 =

* Melhoria: criamos um espelho (Cloudfront) dos arquivos estáticos do PagSeguro a fim de reduzir indisponibilidade que fazia com que os meios de pagamento transparente nunca terminassem de carregar no checkout de algumas lojas.


= 3.3.3 - 18/Jan/2021 =

* Correção: Erro "Undefined index: method in class-wc-pagseguro.php" aparecia em alguns casos após desativar e reativar o módulo.


= 3.3.2 - 6/Out/2020 =

* Correção: URL de sucesso não era enviado quando meio "Redirect" era usado fazendo com que o usuário não retornasse para loja.


= 3.3.1 - 14/Set/2020 =

* Correção do senderIp sendo enviado vazio quando não conseguia obter o senderIP, causando erro na finalização de pedidos
* Correção de undefined index method que ocorria após instalação do módulo, quando não se tinha os valores de configuração preenchidos e salvos


= 3.3.0 - 07/Set/2020 = 

* Adicionado URL para auto diagnóstico, exibindo principais configurações do módulo
* Melhoria: Agora o IP do cliente é enviado ao PagSegurom, reduzindo transações negadas por suspeita de fraude
* Compatibilidade com Wordpress 5.5.1 e WooCommerce 4.4.1 verificada


= 3.2.7 - 15/Jun/2020 =

* Correção: pedidos feitos informando CNPJ com meio de pagamento Boleto não eram finalizados  


= 3.2.6 - 17/Mai/2020 =

* Módulo duplicado corrigido - O módulo aparecia duplicado para quem fazia a instalação/download pelo site do wordpress ao invés do github.  


= 3.2.5 - 11/Mai/2020 =

* Corrige falha na atualização automática de pedidos, pois os pedidos estavam sendo enviados sem o código de referência, e desta forma não conseguiam ser encontrados quando o PagSeguro tentava atualizá-los.


= 3.2.4 - 5/Mai/2020 =

* Correção de problema em pedidos com mais de um item no carrinho (##172666938
* Testes com WP 5.4 e WC 4.0

= 3.2.3 - 21/Nov/2019 =

* Corrige problema quando produtos ou cliente possuí acento no nome
* Adiciona headers com informações sobre a plataforma e versão do módulo
 
= 3.2.2 - 11/Nov/2019 =

* Corrige problema na URL de notificação enviada ao PagSeguro. Este bug impedia o PagSeguro de atualizar o status dos pedidos na loja, visto que a url de notificação era ignorada.

= 3.2.1 - 30/10/2019 =

* Corrige problema com finalização de pedido quando valor do frete é zero.

= 3.2.0 - 30/10/2019 =

* Agora o link para pagamento de boleto/tef aparece na página de sucesso
* Melhoria no esquema de tradução (espera-se que o marketplace agora exiba que o módulo é traduzido para o portugues)
* Correção nos logs que não exibiam o parâmetros sendo enviados ao pagseguro (mostrava 'Array')


### 3.1.0 - 2019/10/03 ###

* Adicionado suporte ao modelo de aplicações (Por Ricardo Martins) e descontos nas taxas do PagSeguro

### 2.13.1 - 2018/08/03 ###

* Corrigido alerta do PHP sobre variável inexistente.

### 2.13.0 - 2018/08/02 ###

* Força o campo "Bairro" como obrigatório quando checkout transparente está ativado.
* Implementada baixa automática de estoque ao comprar por boleto (funciona apenas no WooCommerce 3 ou superior).
* Estoque é restaurado automaticamente quando alguma notificação do PagSeguro marca o pedido como reembolsado ou cancelado (funciona apenas no WooCommerce 3 ou superior).
* Corrigida a mudança de status do pedido de Cancelado para Processando (funciona apenas no WooCommerce 3 ou superior).
* Adicionadas informações sobre a taxa de intermédio do PagSeguro nos meta dados do pedido.

### 2.12.7 - 2018/06/21 ###

* Removido métodos do Itaú e Banrisul em débito online no checkout transparente, ambos não são mais suportados pelo PagSeguro.

### 2.12.6 - 2018/05/09 ###

* Adicionado valor total ao parcelamento no checkout transparente para tornar mais prático para o cliente a visualização do juros. Mais detalhes em [#75](https://github.com/claudiosanches/woocommerce-pagseguro/pull/75).

### 2.12.5 - 2017/05/11 ###

* Corrigido valor total das parcelas do cartão de crédito no checkout transparente, o valor tinha parado de ser atualizado no WooCommerce 3.0.

### 2.12.4 - 2017/04/12 ###

* Corrigido icones no checkout transparente.

### 2.12.3 - 2017/04/10 ###

* Corrigido `ndash` que aparecia no nome dos itens listados no PagSeguro.

### 2.12.2 - 2017/04/07 ###

* Adicionado suporte ao novo sistema de logs do WooCommerce 3.0, assim permitindo que seja utilizado sistema de logs personalizados.
* Adicionado validação e higienização no código de transação do PagSeguro antes de salvar.

### 2.12.1 - 2017/04/04 ###

* Correção dos títulos dos campos personalizados salvos ao fazer um pedido.

### 2.12.0 - 2017/04/03 ###

* Adicionado suporte ao WooCommerce 3.0.
* Alterado o tipo dos campos para `tel` no Checkout Transparente. (Possível com a ajuda de [Thiago Guimarães](https://github.com/thiagogsr)).
* Correção nas máscaras do campos devido a mudança do plugin no [woocommerce-extra-checkout-fields-for-brazil](https://github.com/claudiosanches/woocommerce-extra-checkout-fields-for-brazil/pull/49). (Possível com a ajuda de [Thiago Guimarães](https://github.com/thiagogsr)).

## Upgrade Notice ##

### 2.13.1 ###

* Força o campo "Bairro" como obrigatório quando checkout transparente está ativado.
* Implementada baixa automática de estoque ao comprar por boleto (funciona apenas no WooCommerce 3 ou superior).
* Estoque é restaurado automaticamente quando alguma notificação do PagSeguro marca o pedido como reembolsado ou cancelado (funciona apenas no WooCommerce 3 ou superior).
* Corrigida a mudança de status do pedido de Cancelado para Processando (funciona apenas no WooCommerce 3 ou superior).
* Adicionadas informações sobre a taxa de intermédio do PagSeguro nos meta dados do pedido.
