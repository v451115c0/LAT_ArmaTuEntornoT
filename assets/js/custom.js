//Funcionalidad AJAX
function Ajax()
{
    /* Crea el objeto AJAX. Esta funcion es generica para cualquier utilidad de este tipo, por
    lo que se puede copiar tal como esta aqui */
    var xmlhttp=false;
    try
    {
        // Creacion del objeto AJAX para navegadores no IE
        xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch(e)
    {
        try
        {
            // Creacion del objet AJAX para IE
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch(E) { xmlhttp=false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest!="undefined") { xmlhttp=new XMLHttpRequest(); }

    return xmlhttp;
}
//Funcionalidad AJAX

//Solo numeros
function JustNumbers(e)
{
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8) || (keynum == 46))
    return true;

    return /\d/.test(String.fromCharCode(keynum));
}
//Solo numeros

//Cargar header
function Header(environment)
{
    var divMensaje = document.getElementById("header-navbar");
    var ajax = Ajax();

    ajax.onreadystatechange=function()
    {
        if (ajax.readyState == 4 && ajax.status==200)
        {
            var scs=ajax.responseText.extractScript();    //capturamos los scripts
            divMensaje.innerHTML=ajax.responseText
            scs.evalScript();       //ahora si, comenzamos a interpretar todo
            divMensaje.innerHTML=ajax.responseText;
        }
        else
        {
            divMensaje.innerHTML='<br/><img src="img/loading.gif" width="40" height="40" class="center-block"/>';
        }
    }

    ajax.open("POST", "assets/include/page/header.php", true);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("environment=" + environment);
    //ajax.send();
}
//Cargar header

//Cargar condicion
function Condition(environment)
{
    var divMensaje = document.getElementById("condition");
    var ajax = Ajax();

    ajax.onreadystatechange=function()
    {
        if (ajax.readyState == 4 && ajax.status==200)
        {
            var scs=ajax.responseText.extractScript();    //capturamos los scripts
            divMensaje.innerHTML=ajax.responseText
            scs.evalScript();       //ahora si, comenzamos a interpretar todo
            divMensaje.innerHTML=ajax.responseText;
        }
        else
        {
            divMensaje.innerHTML='<br/><img src="img/loading.gif" width="40" height="40" class="center-block"/>';
        }
    }

    ajax.open("POST", "assets/include/page/condition.php", true);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("environment=" + environment);
    //ajax.send();
}
//Cargar condicion

//Cambiar entorno
function Change_environment(environment)
{
    var dataString = "environment=" + environment;
    $.ajax({
        type: 'POST',
        url: 'assets/querys/change-environment.php',
        data: dataString,
        success: function (data)
        {
            if(data == "")
            {
                Header(environment);
                Condition(environment);
                View_product();
            }
        }
    });
}
//Cambiar entorno

//Buscar producto
function Search_product(value)
{
    var divMensaje = document.getElementById("search-product");
    var ajax = Ajax();

    ajax.onreadystatechange=function()
    {
        if (ajax.readyState == 4 && ajax.status==200)
        {
            var scs=ajax.responseText.extractScript();    //capturamos los scripts
            divMensaje.innerHTML=ajax.responseText;
            scs.evalScript();       //ahora si, comenzamos a interpretar todo
            divMensaje.innerHTML=ajax.responseText;
        }
        else
        {
            divMensaje.innerHTML='<br/><img src="img/loading.gif" width="40" height="40" class="center-block"/>';
        }
    }

    ajax.open("POST", "assets/include/page/search-product.php", true);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("value=" + value);
}
//Buscar producto

//Añadir producto
function Add_product(product, environment, group, brand)
{
    var dataString =  'product=' + product + '&environment=' + environment + '&group=' + group + '&brand=' + brand;
    var divMensaje = document.getElementById("search-product");
    divMensaje.innerHTML='<br/><img src="img/loading.gif" width="40" height="40" class="center-block"/>';

    $.ajax({
        type: 'POST',
        url: 'assets/querys/add-product.php',
        data: dataString,
        success: function (data)
        {
            $('#modal-search').modal('hide');
            View_product();
            alertify.success("Producto agregado");

            document.getElementById('search').value = "";
            Search_product("");
        }
    });
}
//Añadir producto

//Eliminar producto
function Delete_product(product, environment)
{
    var dataString =  'product=' + product + '&environment=' + environment;
    var divMensaje = document.getElementById("view-products");
    divMensaje.innerHTML='<br/><img src="img/loading.gif" width="40" height="40" class="center-block"/>';

    $.ajax({
        type: 'POST',
        url: 'assets/querys/delete-product.php',
        data: dataString,
        success: function (data)
        {
            View_product();
            alertify.error("Producto eliminado");
        }
    });
}
//Eliminar producto

//Añadir producto
function Change_quantity(product, quantity)
{
    var dataString =  'product=' + product + '&quantity=' + quantity;
    $.ajax({
        type: 'POST',
        url: 'assets/querys/change-quantity.php',
        data: dataString,
        success: function (data)
        {
            View_product();
        }
    });
}
//Añadir producto

//Mostrar productos
function View_product()
{
    setTimeout(function () 
    {
        var divMensaje = document.getElementById("view-products");
        var ajax = Ajax();

        ajax.onreadystatechange=function()
        {
            if (ajax.readyState == 4 && ajax.status==200)
            {
                var scs=ajax.responseText.extractScript();    //capturamos los scripts
                divMensaje.innerHTML=ajax.responseText;
                scs.evalScript();       //ahora si, comenzamos a interpretar todo
                divMensaje.innerHTML=ajax.responseText;
            }
            else
            {
                divMensaje.innerHTML='<br/><img src="img/loading.gif" width="40" height="40" class="center-block"/>';
            }
        }

        ajax.open("POST", "assets/include/page/products.php", true);
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("");
    }, 1000);
}
//Mostrar productos

//Enviar producto al buscador
function Send_product_search(value)
{
    document.getElementById('search').value = value;
    $('#modal-search').modal('show');
    Search_product(value);
}
//Enviar producto al buscador

//Total
function Total(simbol, total, total_environment, total_vc, total_vc_environment, total_point, total_retail, total_retail_environment, total_vc, total_vc_environment)
{
    var divMensaje = document.getElementById("total");
    var ajax = Ajax();

    ajax.onreadystatechange=function()
    {
        if (ajax.readyState == 4 && ajax.status==200)
        {
            var scs=ajax.responseText.extractScript();    //capturamos los scripts
            divMensaje.innerHTML=ajax.responseText;
            scs.evalScript();       //ahora si, comenzamos a interpretar todo
            divMensaje.innerHTML=ajax.responseText;
        }
        else
        {
            divMensaje.innerHTML='<br/><img src="img/loading.gif" width="40" height="40" class="center-block"/>';
        }
    }

    ajax.open("POST", "assets/include/page/total.php", true);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("simbol=" + simbol + "&total=" + total + "&total_environment=" + total_environment + "&total_vc=" + total_vc + "&total_vc_environment=" + total_vc_environment + "&total_point=" + total_point + "&total_retail=" + total_retail + "&total_retail_environment=" + total_retail_environment + "&total_vc_environment=" + total_vc_environment + "&total_point=" + total_point);
}
//Total

//Cambiar descuento
function Change_discount(value)
{
    var dataString =  'value=' + value;
    $.ajax({
        type: 'POST',
        url: 'assets/querys/change-discount.php',
        data: dataString,
        success: function (data)
        {
            Condition();
            View_product();
        }
    });
}
//Cambiar descuento

//Pagar
function Checkout()
{
    var dataString =  '';
    document.getElementById('btn-process-checkout').disabled = true;
    document.getElementById('btn-process-checkout').innerHTML = '<strong>Espere por favor&nbsp;&nbsp;<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i><span class="sr-only"></span><strong>';

    $.ajax({
        type: 'POST',
        url: 'assets/querys/checkout.php',
        data: dataString,
        success: function (data)
        {
            document.location.href = data;
        }
    });

    return false;
}
//Pagar

//Cotizacion
function Cotizacion()
{
    var dataString =  '';
    document.getElementById('btn-process-cotizacion').disabled = true;
    document.getElementById('btn-process-cotizacion').innerHTML = '<strong>Espere por favor&nbsp;&nbsp;<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i><span class="sr-only"></span><strong>';

    $.ajax({
        type: 'POST',
        url: 'assets/querys/cotizacion.php',
        data: dataString,
        success: function (data)
        {
            document.location.href = data;
        }
    });

    return false;
}
//Cotizacion