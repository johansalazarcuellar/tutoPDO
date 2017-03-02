function objetoAjax() {
    
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function createRole() {

    var divResult           = document.getElementById('resultNewRole');
    var txtIdRole           = document.getElementById('txtIdRole').value;
    var txtDescRole         = document.getElementById('txtDescRole').value;
    var btnActionNewRole    = document.getElementById('btnActionNewRole').value;
    var Privi               = document.formNewRole.elements['chkMenuListNew[]'];

    if (Privi.length != null) {
        
        var AllPri = [];
        
        for (var i = 0; i < Privi.length; i++) {
            
            if (Privi[i].checked) {
                
                AllPri.push(Privi[i].value);
            }
        }
        
    } else {
        
        if (Privi.checked) {
            
            var AllPri = Privi.value;
        }
    }
    
    ajax = objetoAjax();
    ajax.open("POST", "../controller/ctrlRole.php", true);
    
    ajax.onreadystatechange = function () {
        
        if (ajax.readyState == 4) {

            divResult.innerHTML = ajax.responseText;
        }
    };
    
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //enviando los valores
    ajax.send("txtDescRole=" + txtDescRole +
            "&txtIdRole="    + txtIdRole +
            "&btnAction="    + btnActionNewRole +
            "&Privilegios="  + AllPri);

}



function createProduct() {

    var divResult           = document.getElementById('resultNewProduct');
    var nameProduct         = document.getElementById('nameProductNew').value;
    var descProduct         = document.getElementById('descProductNew').value;
    var categoryProduct     = document.getElementById('categoryProductNew').value;
    var priceProduct        = document.getElementById('priceProductNew').value;
    
    ajax = objetoAjax();
    ajax.open("POST", "../controller/ctrlProduct.php", true);
    
    ajax.onreadystatechange = function () {
        
        if (ajax.readyState == 4) {

            divResult.innerHTML = ajax.responseText;
        }
    };
    
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //enviando los valores
    ajax.send("&btnAction=newProduct" +
              "&nameProductNew=" + nameProduct+
              "&descProductNew=" + descProduct+
              "&categoryProductNew=" + categoryProduct+
              "&priceProductNew=" + priceProduct);

}