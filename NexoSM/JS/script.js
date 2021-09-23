
let arrayID = [];

const pintar = (number) =>
{
    $('#ScriptJS').append(`Ingresé al array y tengo el ID: ${number} <br>`);
}

const evento = () =>
{
    const id = $('#ID').val();

    if (id < 10 && (id % 2) == 0)
    {
        pintar(id);
        arrayID.push(id);
        sessionStorage.setItem("arrayID", JSON.stringify(arrayID));
    }

}

if(sessionStorage.getItem("arrayID"))
{
    arrayID = JSON.parse(sessionStorage.getItem("arrayID"));
    for (const iterator of arrayID) {
        pintar(iterator);
    }
}

$('#btnEnviar').click(function(e){
    if ( cancelado ) {
        cancelado = false;
        return;
      }
      e.preventDefault();
    
      evento();
    
      cancelado = true;
      e.dispatchEvent('click');
});