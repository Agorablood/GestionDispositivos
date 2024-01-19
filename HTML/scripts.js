function mostrarOpciones(tipo) {
    // Oculta todas las secciones de opciones
    document.getElementById('inicio').style.display = 'none';
    document.getElementById('movil').style.display = 'flex';
    document.getElementById('pc').style.display = 'flex';
    document.getElementById('mi').style.display = 'none';
    document.getElementById('ms').style.display = 'none';
    document.getElementById('mh').style.display = 'none';
    document.getElementById('mx').style.display = 'none';
    document.getElementById('msy').style.display = 'none';
    document.getElementById('mo').style.display = 'none';

    // Muestra la sección de opciones según el tipo seleccionado
    document.getElementById(tipo).style.display = 'flex';

}
function manejarOpciones(device) {
    ocultarOpciones(device);
    resetSelect(device);
    resetSelect1(device + 'i');
    resetSelect2(device + 'ai');
    resetSelect3(device + 'pi');
    resetSelect4(device + 'pa');
    resetSelect5(device + 'co');
}


function ocultarOpciones(dispositivo) {

    var select = document.getElementById(dispositivo);
    if (select.style.display==('none')) {
        select.style.display = 'block'; // Muestra el select
        
    } else {
        select.style.display = 'block'; // Oculta el select
    }
}
// funcion para la categoria del dispositivo
function resetSelect(opcion){
    if(opcion != "mi"){
        selectDispositivo = document.getElementById('mi');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "ms"){
        selectDispositivo = document.getElementById('ms');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    
    if(opcion != "mh"){
        selectDispositivo = document.getElementById('mh');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "mx"){
        selectDispositivo = document.getElementById('mx');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "msy"){
        selectDispositivo = document.getElementById('msy');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "mo"){
        selectDispositivo = document.getElementById('mo');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }


}
// funcion para el modelo del dispositivo
function resetSelect1(opcion){
    if(opcion != "moi"){
        selectDispositivo = document.getElementById('moi');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "mos"){
        selectDispositivo = document.getElementById('mos');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    
    if(opcion != "moh"){
        selectDispositivo = document.getElementById('moh');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "mox"){
        selectDispositivo = document.getElementById('mox');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "moy"){
        selectDispositivo = document.getElementById('moy');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "moo"){
        selectDispositivo = document.getElementById('moo');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }


}
// funcion para el año del dispositivo
function resetSelect2(opcion){
    if(opcion != "mai"){
        selectDispositivo = document.getElementById('mai');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "san"){
        selectDispositivo = document.getElementById('san');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    
    if(opcion != "han"){
        selectDispositivo = document.getElementById('han');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "xan"){
        selectDispositivo = document.getElementById('xan');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "son"){
        selectDispositivo = document.getElementById('son');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "oan"){
        selectDispositivo = document.getElementById('oan');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }


}
// funcion para el tamaño de las pulgadas del dispositivo
function resetSelect3(opcion){
    if(opcion != "mpi"){
        selectDispositivo = document.getElementById('mpi');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "sapu"){
        selectDispositivo = document.getElementById('sapu');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    
    if(opcion != "hpu"){
        selectDispositivo = document.getElementById('hpu');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "xpu"){
        selectDispositivo = document.getElementById('xpu');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "spu"){
        selectDispositivo = document.getElementById('spu');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "opu"){
        selectDispositivo = document.getElementById('opu');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }


}
// funcion para el tipo de pantalla del dispositivo
function resetSelect4(opcion){
    if(opcion != "ipa"){
        selectDispositivo = document.getElementById('ipa');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "sapa"){
        selectDispositivo = document.getElementById('sapa');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    
    if(opcion != "hpa"){
        selectDispositivo = document.getElementById('hpa');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "xpa"){
        selectDispositivo = document.getElementById('xpa');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "spa"){
        selectDispositivo = document.getElementById('spa');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "opa"){
        selectDispositivo = document.getElementById('opa');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }


}
// funcion para el tipo de conectividad del dispositivo
function resetSelect5(opcion){
    if(opcion != "ico"){
        selectDispositivo = document.getElementById('ico');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "sac"){
        selectDispositivo = document.getElementById('sac');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    
    if(opcion != "hco"){
        selectDispositivo = document.getElementById('hco');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "xco"){
        selectDispositivo = document.getElementById('xco');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "soc"){
        selectDispositivo = document.getElementById('soc');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }
    if(opcion != "oco"){
        selectDispositivo = document.getElementById('oco');
        selectDispositivo.selectedIndex = 0;
        selectDispositivo.style.display = 'none';
    }


}

function mostrarEnviar(boton1) {
    console.info('mostrando boton');
    var enviarb = document.getElementById('boton1');

    enviarb.style.display = 'block'; // Muestra el boton enviar
        
    
}
function ocultarEnviar(boton1) {
    console.info('ocultando boton');
    var enviarb = document.getElementById('boton1');

    enviarb.style.display = 'none'; // Oculta el botón de enviar
}
function hideselect(){
    var hide = document.getElementsByName('opcion')
    hide.style.display = 'none';
}
