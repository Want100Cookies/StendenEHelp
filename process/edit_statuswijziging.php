<?php

$edit = new edit;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$idStatus = $_POST['idStatus'];
	var_dump($edit->StatusWijziging($idStatus));
	if($edit->StatusWijziging($idStatus) == TRUE){
	
	echo'<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Succes!</strong> De status is aangepast.</div>';
        ?><p>U word terug gestuurd naar de ticket pagina in <span id="counter">5</span> seconden.</p>
        <script type="text/javascript">
        function countdown() {
        var i = document.getElementById('counter');
        if (parseInt(i.innerHTML)<=1) {
        location.href = '/rapporten/ticket/';
    }
    i.innerHTML = parseInt(i . innerHTML) - 1;
}
setInterval(function(){countdown();}, 1000);
</script><?php
	
	
	
	}
} else {
	echo "Please post the next time!";
}
?>
