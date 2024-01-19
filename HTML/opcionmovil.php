<!DOCTYPE html>
<html>

<head>
    <title>Selecciona tu dispositivo</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="scripts.js"></script>

</head>

<body>
    <h1>¿QUE DISPOSITIVO MOVIL QUIERES?</h1>
    <form method="POST" action="enviado.php">
        <div id="movil" class="opcionesmovil">
            <div onclick="manejarOpciones('mi'); ocultarEnviar()">
                <img id="iphone" class="opcion2" src="src/moviles/iphone.png" alt="">
            </div>
            <div onclick="manejarOpciones('ms'); ocultarEnviar()">
                <img id="samsung" class="opcion2" src="src/moviles/samsumg.png" alt="">
            </div>
            <div onclick="manejarOpciones('mh'); ocultarEnviar()">
                <img id="huawei" class="opcion2" src="src/moviles/Huawei.png" alt="">
            </div>
            <div onclick="manejarOpciones('mx'); ocultarEnviar()">
                <img id="xiaomi" class="opcion2" src="src/moviles/xiaomi.png" alt="">
            </div>
            <div onclick="manejarOpciones('msy'); ocultarEnviar()">
                <img id="sony" class="opcion2" src="src/moviles/sony.png" alt="">
            </div>
            <div onclick="manejarOpciones('mo'); ocultarEnviar()">
                <img id="oppo" class="opcion2" src="src/moviles/oppo.png" alt="">
            </div>
        </div>

        <div onclick="ocultarOpciones('moi')" style="margin-left: 1.5rem;">
            <select name="opcion" id="mi" class="select1" onchange="resetSelect('mi')">
                <option value="" disabled selected>Categoria</option>
                <option value="iPhone 14">iPhone 14</option>
                <option value="iPhone 13">iPhone 13</option>
                <option value="iPhone 12">iPhone 12</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('mai')" style="margin-left: 1.5rem;">
            <select name="opcion1" id="moi" class="select1" onchange="resetSelect1('moi')">
                <option value="" disabled selected>Modelo</option>
                <option value="ProMax">ProMax</option>
                <option value="Pro">Pro</option>
                <option value="Básico">Básico</option>
            </select>
        </div>
        <div onclick="ocultarOpciones('mpi')" style="margin-left: 1.5rem;">
            <select name="opcion2" id="mai" class="select1" onchange="resetSelect2('mai')">
                <option value="" disabled selected>Año</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('ipa')" style="margin-left: 1.5rem;">
            <select name="opcion3" id="mpi" class="select1" onchange="resetSelect3('mpi')">
                <option value="" disabled selected>Pulgada</option>
                <option value="6.7">6.7</option>
                <option value="5.4">5.4</option>
                <option value="4.7">4.7</option>
            </select>
        </div>
        <div onclick="ocultarOpciones('ico')" style="margin-left: 1.5rem;">
            <select name="opcion4" id="ipa" class="select1" onchange="resetSelect4('ipa')">
                <option value="" disabled selected>Pantalla</option>
                <option value="Oled">Oled</option>
                <option value="XDR">XDR</option>
                <option value="LCD">LCD</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('ico')" style="margin-left: 1.5rem;">
            <select name="opcion5" id="ico" class="select1" onchange="resetSelect5('ico'); mostrarEnviar('mostrarEnviar')">
                <option value="" disabled selected>Conectividad</option>
                <option value="5G">5G</option>
                <option value="4G">4G</option>
                <option value="3G">3G</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('mos')" style="margin-left: 17rem;">
            <select name="opcion" id="ms" class="select2" onchange="resetSelect('ms')">
                <option value="" disabled selected>Selecciona un modelo</option>
                <option value="Galaxy S">Galaxy S</option>
                <option value="Galaxy Z">Galaxy Z</option>
                <option value="Galaxy A">Galaxy A</option>
                <option value="Galaxy note">Galaxy note</option>
            </select>
        </div>
        <div onclick="ocultarOpciones('san')" style="margin-left: 17rem;">
            <select name="opcion1" id="mos" class="select2" onchange="resetSelect1('mos')">
                <option value="" disabled selected>Selecciona un modelo</option>
                <option value="Ultra">Ultra</option>
                <option value="Plus">Plus</option>
                <option value="Básico">Básico</option>
            </select>
        </div>
        <div onclick="ocultarOpciones('sapu')" style="margin-left: 17rem;">
            <select name="opcion2" id="san" class="select2" onchange="resetSelect2('san')">
                <option value="" disabled selected>Año</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('sapa')" style="margin-left: 17rem;">
            <select name="opcion3" id="sapu" class="select2" onchange="resetSelect3('sapu')">
                <option value="" disabled selected>Pulgada</option>
                <option value="6.7">6.7</option>
                <option value="5.4">5.4</option>
                <option value="4.7">4.7</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('sac')" style="margin-left: 17rem;">
            <select name="opcion4" id="sapa" class="select2" onchange="resetSelect4('sapa')">
                <option value="" disabled selected>Pantalla</option>
                <option value="Oled">Oled</option>
                <option value="XDR">XDR</option>
                <option value="LCD">LCD</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('sac')" style="margin-left: 17rem;">
            <select name="opcion5" id="sac" class="select2" onchange="resetSelect5('sac'); mostrarEnviar('mostrarEnviar')">
                <option value="" disabled selected>Conectividad</option>
                <option value="5G">5G</option>
                <option value="4G">4G</option>
                <option value="3G">3G</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('moh')" style="margin-left: 33rem;">
            <select name="opcion" id="mh" class="select3" onchange="resetSelect('mh')">
                <option value="" disabled selected>Selecciona un modelo</option>
                <option value="Huawei P30">Huawei P30</option>
                <option value="Huawei Mate 20">Huawei Mate 20</option>
                <option value="Huawei P40">Huawei P40</option>
                <option value="Huawei Mate 30">Huawei Mate 30</option>
                <option value="Huawei P20">Huawei P20</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('han')" style="margin-left: 33rem;">
            <select name="opcion1" id="moh" class="select3" onchange="resetSelect1('moh')">
                <option value="" disabled selected>Selecciona un modelo</option>
                <option value="Ultra">Ultra</option>
                <option value="Lite">Lite</option>
                <option value="Básico">Básico</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('hpu')" style="margin-left: 33rem;">
            <select name="opcion2" id="han" class="select3" onchange="resetSelect2('han')">
                <option value="" disabled selected>Año</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('hpa')" style="margin-left: 33rem;">
            <select name="opcion3" id="hpu" class="select3" onchange="resetSelect3('hpu')">
                <option value="" disabled selected>Pulgada</option>
                <option value="6.7">6.7</option>
                <option value="5.4">5.4</option>
                <option value="4.7">4.7</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('hco')" style="margin-left: 33rem;">
            <select name="opcion4" id="hpa" class="select3" onchange="resetSelect4('hpa')">
                <option value="" disabled selected>Pantalla</option>
                <option value="Oled">Oled</option>
                <option value="XDR">XDR</option>
                <option value="LCD">LCD</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('hco')" style="margin-left: 33rem;">
            <select name="opcion5" id="hco" class="select3" onchange="resetSelect5('hco'); mostrarEnviar('mostrarEnviar')">
                <option value="" disabled selected>Conectividad</option>
                <option value="5G">5G</option>
                <option value="4G">4G</option>
                <option value="3G">3G</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('mox')" style="margin-left: 47rem;">
            <select name="opcion" id="mx" class="select4" onchange="resetSelect('mx')">
                <option value="" disabled selected>Selecciona un modelo</option>
                <option value="Xiaomi Mi 11">Xiaomi Mi 11</option>
                <option value="Xiaomi Mi 10">Xiaomi Mi 10</option>
                <option value="Xiaomi Poco X3">Xiaomi Poco X3</option>
                <option value="Xiaomi Redmi K40">Xiaomi Redmi K40</option>
                <option value="Xiaomi Redmi 9">Xiaomi Redmi 9</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('xan')" style="margin-left: 47rem;">
            <select name="opcion1" id="mox" class="select4" onchange="resetSelect1('mox')">
                <option value="" disabled selected>Selecciona un modelo</option>
                <option value="Ultra">Ultra</option>
                <option value="Lite">Lite</option>
                <option value="Básico">Básico</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('xpu')" style="margin-left: 47rem;">
            <select name="opcion2" id="xan" class="select4" onchange="resetSelect2('xan')">
                <option value="" disabled selected>Año</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('xpa')" style="margin-left: 47rem;">
            <select name="opcion3" id="xpu" class="select4" onchange="resetSelect3('xpu')">
                <option value="" disabled selected>Pulgada</option>
                <option value="6.7">6.7</option>
                <option value="5.4">5.4</option>
                <option value="4.7">4.7</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('xco')" style="margin-left: 47rem;">
            <select name="opcion4" id="xpa" class="select4" onchange="resetSelect4('xpa')">
                <option value="" disabled selected>Pantalla</option>
                <option value="Oled">Oled</option>
                <option value="XDR">XDR</option>
                <option value="LCD">LCD</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('xco')" style="margin-left: 47rem;">
            <select name="opcion5" id="xco" class="select4" onchange="resetSelect5('xco'); mostrarEnviar('mostrarEnviar')">
                <option value="" disabled selected>Conectividad</option>
                <option value="5G">5G</option>
                <option value="4G">4G</option>
                <option value="3G">3G</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('moy')" style="margin-left: 63.5rem;">
            <select name="opcion" id="msy" class="select5" onchange="resetSelect('msy')">
                <option value="" disabled selected>Selecciona un modelo</option>
                <option value="Sony Xperia 1">Sony Xperia 1</option>
                <option value="Sony Xperia 5">Sony Xperia 5</option>
                <option value="Sony Xperia 10">Sony Xperia 10</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('son')" style="margin-left: 63.5rem;">
            <select name="opcion1" id="moy" class="select5" onchange="resetSelect1('moy')">
                <option value="" disabled selected>Selecciona un modelo</option>
                <option value="Plus">Plus</option>
                <option value="II">II</option>
                <option value="Básico">Básico</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('spu')" style="margin-left: 63.5rem;">
            <select name="opcion2" id="son" class="select5" onchange="resetSelect2('son')">
                <option value="" disabled selected>Año</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('spa')" style="margin-left: 63.5rem;">
            <select name="opcion3" id="spu" class="select5" onchange="resetSelect3('spu')">
                <option value="" disabled selected>Pulgada</option>
                <option value="6.7">6.7</option>
                <option value="5.4">5.4</option>
                <option value="4.7">4.7</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('soc')" style="margin-left: 63.5rem;">
            <select name="opcion4" id="spa" class="select5" onchange="resetSelect4('spa')">
                <option value="" disabled selected>Pantalla</option>
                <option value="Oled">Oled</option>
                <option value="XDR">XDR</option>
                <option value="LCD">LCD</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('soc')" style="margin-left: 63.5rem;">
            <select name="opcion5" id="soc" class="select5" onchange="resetSelect5('soc'); mostrarEnviar('mostrarEnviar')">
                <option value="" disabled selected>Conectividad</option>
                <option value="5G">5G</option>
                <option value="4G">4G</option>
                <option value="3G">3G</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('moo')" style="margin-left: 79rem;">
            <select name="opcion" id="mo" class="select6" onchange="resetSelect('mo')">
                <option value="" disabled selected>Selecciona un modelo</option>
                <option value="Oppo Find">Oppo Find</option>
                <option value="Oppo Reno 5">Oppo Reno 5</option>
                <option value="Oppo F19">Oppo F19</option>
                <option value="Oppo A74">Oppo A74</option>
                <option value="Oppo A54">Oppo A54</option>
                <option value="Oppo A15">Oppo A15</option>
                <option value="Oppo F11">Oppo F11</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('oan')" style="margin-left: 79rem;">
            <select name="opcion1" id="moo" class="select6" onchange="resetSelect1('moo')">
                <option value="" disabled selected>Selecciona un modelo</option>
                <option value="Pro">Pro</option>
                <option value="Plus">Plus</option>
                <option value="Lite">Lite</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('opu')" style="margin-left: 79rem;">
            <select name="opcion2" id="oan" class="select6" onchange="resetSelect2('oan')">
                <option value="" disabled selected>Año</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('opa')" style="margin-left: 79rem;">
            <select name="opcion3" id="opu" class="select6" onchange="resetSelect3('opu')">
                <option value="" disabled selected>Pulgada</option>
                <option value="6.7">6.7</option>
                <option value="5.4">5.4</option>
                <option value="4.7">4.7</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('oco')" style="margin-left: 79rem;">
            <select name="opcion4" id="opa" class="select6" onchange="resetSelect4('opa')">
                <option value="" disabled selected>Pantalla</option>
                <option value="Oled">Oled</option>
                <option value="XDR">XDR</option>
                <option value="LCD">LCD</option>
            </select>
        </div>

        <div onclick="ocultarOpciones('oco')" style="margin-left: 79rem;">
            <select name="opcion5" id="oco" class="select6" onchange="resetSelect5('oco'); mostrarEnviar('mostrarEnviar')">
                <option value="" disabled selected>Conectividad</option>
                <option value="5G">5G</option>
                <option value="4G">4G</option>
                <option value="3G">3G</option>
            </select>
        </div>

        <div id="boton1" onclick="mostrarEnviar(); ocultarEnviar()">
            <a href="enviado.php">
                <button class="boton1" type="submit">Enviar</button>
            </a>
        </div>

    </form>
</body>

</html>