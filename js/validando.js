//propiedades del formulario


var pf = 
{
   entradas: document.querySelectorAll("input.form-control"),
   valor: null


}
var mf = 
{
    inicioformulario:function()
    {
        for(var i=0 ; i < pf.entradas.length ; i++)
        {
          pf.entradas[i].addEventListener("focus",mf.enfocar);
          pf.entradas[i].addEventListener("blur",mf.fuerafoco);
        }
    },
    enfocar:function(input)
    {
     pf.valor = input.target.value;
     if(pf.valor == "")
     {
        document.querySelector("#"+input.target.id).style.background = "yellow";
     }
    },
    fuerafoco:function(input)
    {
      pf.valor = input.target.value;
      if(pf.valor == "")
      {
        document.querySelector("#"+input.target.id).style.background="white";
      }        
    },
    validarcampos:function()
    {
        const Nombre = document.querySelector('#txtnombre').value;
        const Cantidad = Number(document.querySelector('#txtvendidos').value);
        const Totalven = Number(document.querySelector('#txttottalvendidos').value);

        //comprobar los campos vacios
        if(Nombre == '' || Cantidad == '' || Totalven == '')
        {
            alert("Todos los campos son obligatorios");
        }else if(Cantidad <= 0 || Totalven <= 0 || isNaN(Cantidad) || isNaN(Totalven))
        {
            alert("Los datos no son correctos");
        }
    }

}
mf.inicioformulario();