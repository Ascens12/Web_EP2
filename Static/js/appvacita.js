function validacion(){
    if(document.frm1.id_servicio.value.length==0){
        document.getElementById("id_servicio").focus();
        return false;
    }
    if(document.frm1.horario.value.length==0){
        document.getElementById("horario").focus();
        return false;
    }
    frm1.submit();
}
