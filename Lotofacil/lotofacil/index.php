<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de Botões</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js" defer></script>
</head>
<body>
<form action="verifica.php" method="GET">
	<?php
	// Inicializa um array vazio para armazenar os valores selecionados
	$valores = array();

			// Verifica se o formulário foi submetido e se os valores foram enviados via POST
			if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["valores"])) {
				$valores = $_GET["valores"];
			}
		?>

	<h1 class='title'>Lotofacil</h1>
<h3 class='subtitle'>Selecione até 15 números</h3>

<div class='cb'>
	<input type='checkbox' name='valores[0]' class='cbs' id='c1' value='1'></input>	
	<input type='checkbox' name='valores[1]' class='cbs' id='c2' value='2'></input>
	<input type='checkbox' name='valores[2]' class='cbs' id='c3' value='3'></input>
	<input type='checkbox' name='valores[3]' class='cbs' id='c4' value='4'></input>
	<input type='checkbox' name='valores[4]' class='cbs' id='c5' value='5'></input>
	<input type='checkbox' name='valores[5]' class='cbs' id='c6' value='6'></input>
	<input type='checkbox' name='valores[6]' class='cbs' id='c7' value='7'></input>
	<input type='checkbox' name='valores[7]' class='cbs' id='c8' value='8'></input>
	<input type='checkbox' name='valores[8]' class='cbs' id='c9' value='9'></input>
	<input type='checkbox' name='valores[9]' class='cbs' id='c10' value='10'></input>
	<input type='checkbox' name='valores[10]' class='cbs' id='c11' value='11'></input>
	<input type='checkbox' name='valores[11]' class='cbs' id='c12' value='12'></input>
	<input type='checkbox' name='valores[12]' class='cbs' id='c13' value='13'></input>
	<input type='checkbox' name='valores[13]' class='cbs' id='c14' value='14'></input>
	<input type='checkbox' name='valores[14]' class='cbs' id='c15' value='15'></input>
	<input type='checkbox' name='valores[15]' class='cbs' id='c16' value='16'></input>
	<input type='checkbox' name='valores[16]' class='cbs' id='c17' value='17'></input>
	<input type='checkbox' name='valores[17]' class='cbs' id='c18' value='18'></input>
	<input type='checkbox' name='valores[18]' class='cbs' id='c19' value='19'></input>
	<input type='checkbox' name='valores[19]' class='cbs' id='c20' value='20'></input>
	<input type='checkbox' name='valores[20]' class='cbs' id='c21' value='21'></input>
	<input type='checkbox' name='valores[21]' class='cbs' id='c22' value='22'></input>
	<input type='checkbox' name='valores[22]' class='cbs' id='c23' value='23'></input>
	<input type='checkbox' name='valores[23]' class='cbs' id='c24' value='24'></input>
	<input type='checkbox' name='valores[24]' class='cbs' id='c25' value='25'></input>
	<input type='checkbox' name='valores[25]' class='cbs' id='c26' value='26'></input>
	<input type='checkbox' name='valores[26]' class='cbs' id='c27' value='27'></input>
	<input type='checkbox' name='valores[27]' class='cbs' id='c28' value='28'></input>
	<input type='checkbox' name='valores[28]' class='cbs' id='c29' value='29'></input>
	<input type='checkbox' name='valores[29]' class='cbs' id='c30' value='30'></input>
	<input type='checkbox' name='valores[30]' class='cbs' id='c31' value='31'></input>
	<input type='checkbox' name='valores[31]' class='cbs' id='c32' value='32'></input>
	<input type='checkbox' name='valores[32]' class='cbs' id='c33' value='33'></input>
	<input type='checkbox' name='valores[33]' class='cbs' id='c34' value='34'></input>
	<input type='checkbox' name='valores[34]' class='cbs' id='c35' value='35'></input>
	<input type='checkbox' name='valores[35]' class='cbs' id='c36' value='36'></input>
	<input type='checkbox' name='valores[36]' class='cbs' id='c37' value='37'></input>
	<input type='checkbox' name='valores[37]' class='cbs' id='c38' value='38'></input>
	<input type='checkbox' name='valores[38]' class='cbs' id='c39' value='39'></input>
	<input type='checkbox' name='valores[39]' class='cbs' id='c40' value='40'></input>
	<input type='checkbox' name='valores[40]' class='cbs' id='c41' value='41'></input>
	<input type='checkbox' name='valores[41]' class='cbs' id='c42' value='42'></input>
	<input type='checkbox' name='valores[42]' class='cbs' id='c43' value='43'></input>
	<input type='checkbox' name='valores[43]' class='cbs' id='c44' value='44'></input>
	<input type='checkbox' name='valores[44]' class='cbs' id='c45' value='45'></input>
	<input type='checkbox' name='valores[45]' class='cbs' id='c46' value='46'></input>
	<input type='checkbox' name='valores[46]' class='cbs' id='c47' value='47'></input>
	<input type='checkbox' name='valores[47]' class='cbs' id='c48' value='48'></input>
	<input type='checkbox' name='valores[48]' class='cbs' id='c49' value='49'></input> 
	<input type='checkbox' name='valores[49]' class='cbs' id='c50' value='50'></input> 
</div>

<div class='cbsWrapper'>
	<div class='loteriaNumbers'>
        <label for='c1' class='lbls'>01</label>
        <label for='c2' class='lbls'>02</label> 
        <label for='c3' class='lbls'>03</label> 
        <label for='c4' class='lbls'>04</label> 
        <label for='c5' class='lbls'>05</label> 
        <label for='c6' class='lbls'>06</label> 
        <label for='c7' class='lbls'>07</label> 
        <label for='c8' class='lbls'>08</label> 
        <label for='c9' class='lbls'>09</label> 
        <label for='c10' class='lbls'>10</label>
        <label for='c11' class='lbls'>11</label>
        <label for='c12' class='lbls'>12</label>
        <label for='c13' class='lbls'>13</label>
        <label for='c14' class='lbls'>14</label>
        <label for='c15' class='lbls'>15</label>
        <label for='c16' class='lbls'>16</label>
        <label for='c17' class='lbls'>17</label>
        <label for='c18' class='lbls'>18</label>
        <label for='c19' class='lbls'>19</label>
        <label for='c20' class='lbls'>20</label>
        <label for='c21' class='lbls'>21</label>
        <label for='c22' class='lbls'>22</label>
        <label for='c23' class='lbls'>23</label>
        <label for='c24' class='lbls'>24</label>
        <label for='c25' class='lbls'>25</label>
        <label for='c26' class='lbls'>26</label>
        <label for='c27' class='lbls'>27</label>
        <label for='c28' class='lbls'>28</label>
        <label for='c29' class='lbls'>29</label>
        <label for='c30' class='lbls'>30</label>
        <label for='c31' class='lbls'>31</label>
        <label for='c32' class='lbls'>32</label>
        <label for='c33' class='lbls'>33</label>
        <label for='c34' class='lbls'>34</label>
        <label for='c35' class='lbls'>35</label>
        <label for='c36' class='lbls'>36</label>
        <label for='c37' class='lbls'>37</label>
        <label for='c38' class='lbls'>38</label>
        <label for='c39' class='lbls'>39</label>
        <label for='c40' class='lbls'>40</label>
        <label for='c41' class='lbls'>41</label>
        <label for='c42' class='lbls'>42</label>
        <label for='c43' class='lbls'>43</label>
        <label for='c44' class='lbls'>44</label>
        <label for='c45' class='lbls'>45</label>
        <label for='c46' class='lbls'>46</label>
        <label for='c47' class='lbls'>47</label>
		<label for='c48' class='lbls'>48</label>
        <label for='c49' class='lbls'>49</label>
        <label for='c50' class='lbls'>50</label>
	</div>
</div>

    <div class="buttonWrapper">
	<input type="submit" value="APOSTAR" class='button' disabled='true'>
        </div>
	</form>
</body>
</html>

<script text='text/javascript'>

const labels = document.querySelectorAll('.lbls');
const checkboxes = document.querySelectorAll('.cbs');
const button = document.querySelector('.button');
let num = 0;

checkboxes.forEach(cb =>{
	cb.addEventListener('change', (e)=>{
	num = document.querySelectorAll('input[type="checkbox"]:checked').length;
	var markedCbs = document.querySelectorAll('input[type="checkbox"]:checked');
	if(num < 16){
	labels[(e.target.value) - 1].classList.toggle('checked');
}

	if(num > 14){
		button.disabled = false;}

	if(num > 15){
		e.target.checked = false;}
	})	
})


</script>