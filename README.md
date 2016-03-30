# UFGD-Game-Cup
Template de divulgação do evento UFGD Game Cup

#Instruções
- Habilite para o servidor apache ler .htaccess
- Altere as configurações do arquivo database.json.exemplo de acordo com o banco de dados, e renomeie para database.json
o arquivo se encontra na pasta 'config/'
- Altere a chave do arquivo chavesimetrica.key.exemplo , essa chave é usada para criptografia simétrica (condição: 16 caracteres em hexadecimal), renomeie o arquivo para chavesimetrica.key, um exemplo de uso, é quando solicita o formulario da ficha de inscrição, a solicitação era feita apartir do id gerado pelo banco, agora a solicitação é feita através do id criptografado. O servidor envia o id criptografado, e o cliente solicita o formulário passando o id criptografado via GET.
- Se o servidor for linux de permissão 777 para o diretorio 'resource/reports/gerados'
- Habilite o plugin do PDO caso não consiga se comunicar com o banco de dados

