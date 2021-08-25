
<form action="{{ url('/castell') }}" method="post" enctype="multipart/form-data">
@csrf
    <label for='Denominació'>Denominació</label>
    <input type='text' name='Denominació' id='Denominació'>
    <br>
    <label for='Nomenclatura'>Nomenclatura</label>
    <input type='text' name='Nomenclatura' id='Nomenclatura'>
    <br>
    <label for='Sobrenom'>Sobrenom</label>
    <input type='text' name='Sobrenom' id='Sobrenom'>
    <br>
    <label for='Gamma'>Gamma</label>
    <input type='text' name='Gamma' id='Gamma'>
    <br>
    <label for='PuntuacióConcursCastellsCarr'>Puntuació Concurs de Castells - carregat</label>
    <input type='text' name='PuntuacióConcursCastellsCarr' id='PuntuacióConcursCastellsCarr'>
    <br>
    <label for='PuntuacióConcursCastellsDesc'>Puntuació Concurs de Castells - descarregat</label>
    <input type='text' name='PuntuacióConcursCastellsDesc' id='PuntuacióConcursCastellsDesc'>
    <br>
    <label for='NumCastellersOptim'>Número de castellers òptim</label>
    <input type='text' name='NumCastellersOptim' id='NumCastellersOptim'>
    <br>
    <label for='AlçadaAproximada'>Alçada aproximada</label>
    <input type='text' name='AlçadaAproximada' id='AlçadaAproximada'>
    <br>
    <label for='PesAproximat'>Pes aproximat</label>
    <input type='text' name='PesAproximat' id='PesAproximat'>
    <br>
    <label for='NumCarregats'>Número de castells carregats</label>
    <input type='text' name='NumCarregats' id='NumCarregats'>
    <br>
    <label for='NumDescarregats'>Número de castells descarregats</label>
    <input type='text' name='NumDescarregats' id='NumDescarregats'>
    <br>
    <label for='NumIntents'>Número de intents</label>
    <input type='text' name='NumIntents' id='NumIntents'>
    <br>
    <label for='NumIntentsDesmuntats'>Número de intents desmuntats</label>
    <input type='text' name='NumIntentsDesmuntats' id='NumIntentsDesmuntats'>
    <br>
    <label for='AnyConsecució'>Any de consecució</label>
    <input type='text' name='AnyConsecució' id='AnyConsecució'>
    <br>
    <label for='NumCollesAssolit'>Número de colles que l'ha assolit</label>
    <input type='text' name='NumCollesAssolit' id='NumCollesAssolit'>
    <br>
    <label for='Imatge'>Imatge</label>
    <input type='file' name='Imatge' id='Imatge'>
    <br>
    <input type='submit' value='Guardar datos'>
</form>
