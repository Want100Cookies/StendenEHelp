<?php

$create = new create;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
        if($create->bedrijf()== True){  
        echo'<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Succes!</strong> Het bedrijf is aangemaakt.</div>';
        ?><p>U wordt terug gestuurd naar de bedrijfs pagina in <span id="counter">5</span> seconden.</p>
        <script type="text/javascript">
        function countdown() {
        var i = document.getElementById('counter');
        if (parseInt(i.innerHTML)<=1) {
        location.href = '/beheerderspaneel/bedrijf/';
    }
    i.innerHTML = parseInt(i . innerHTML) - 1;
}
setInterval(function(){countdown();}, 1000);
</script><?php
} else {
    echo "Helaas, hier is iets mis gegaan. Probeer het later nog eens.";
}
} else
{
echo "Probeer het opnieuw alstublieft.";
}