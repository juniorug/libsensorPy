<?php
//a variavel atual, vai receber o que estiver na variável page
//se não tiver nada, ela recebe o valor: principal“”
$actual = (isset($_GET['isw'])) ? $_GET['isw'] : 'principal';
 
//aqui setamos um diretório onde ficarão as páginas internas do site
$folder = 'pages';
 
//vamos testar se a variável pag possui alguma “/”
//ou seja, caso a url seja: /noticia/2
if (substr_count($actual, '/') > 0) {
	//utilizamos o explode para separar os valores depois de cada “/”
	$actual = explode('/', $actual);
	/*testamos se depois do endereço do site, o valor da página é um arquivo existente
	caso não exista, iremos atribuir o valor “erro” que será uma página de erro
	 personalizada que existirá dentro da pasta '$pasta', esse arquivo será incluido sempre que um endereço invalido for digitado */
	$page = (file_exists("{$folder}/" . $actual[0] . '.php')) ? $actual[0] : 'erro';
	//ao que tiver depois da segunda “/” atribuiremos a variavel $id
	$id = $actual[1];
	//ao que tiver depois da terceira “/” atribuiremos a variavel $busca
	$search = @$actual[2];	
	
} else {
	
	$page = (file_exists("{$folder}/" . $actual . '.php')) ? $actual : 'erro';
	$id = 0;
	$frame=0;
	
}
 
//com o uso de URL amigáveis se torna necessário que arquivos sejam chamados
//com o seu caminho completo, isso porque as imagens levam em consideração a URL
/* ex: <img src="<?=$siteUrl?>/pasta/arquivo.png" /> */
$siteUrl = "http://libsensorpy.com/";
 
?>
