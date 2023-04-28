var kam_loading_puvodni;

function ajax(stranka, kam, loading, method, kam_loading, loading_text, loading_obnovit, after_do) {
    var str = stranka.split("?");
    var lpar = void 0 !== str[1] ? (str[1]).split("&") : [];
    var url = void 0 !== str[0] ? str[0] : "hlavni.php";
    var parametrs = "";

    for (i = 0; i < lpar.length; i++) {
        if (parametrs !== "") {
            parametrs += "&";
        }
        parametrs += lpar[i];
    }

    if (kam_loading !== void 0) {
        kam_loading_puvodni = document.getElementById(kam_loading).innerHTML;
    }

    if (loading === void 0) {
        loading = true;
    }
    if (method === void 0) {
        method = "GET";
    }
    var httpRequest;

    if (typeof window.ActiveXObject !== 'undefined') {
        httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        httpRequest = new XMLHttpRequest();
    }
    if (method === "POST") {
        httpRequest.open(method, url, true);
    } else {
        httpRequest.open(method, url + "?" + parametrs, true);
    }
    if (method === "POST") {
        httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        //httpRequest.setRequestHeader("Content-length", parametrs.length);
        //httpRequest.setRequestHeader("Connection", "close");
    }
    httpRequest.onreadystatechange = function () {
        processRequest(httpRequest, kam, loading, kam_loading, loading_text, loading_obnovit, after_do);
    };
    if (method === "POST") {
        httpRequest.send(parametrs);
    } else {
        httpRequest.send(null);
    }
}


function processRequest(httpRequest, kam, loading, kam_loading, loading_text, loading_obnovit, after_do)
{
    if (loading_obnovit === void 0)
        loading_obnovit = true;
    if (httpRequest.readyState === 4)
    {
        if ((httpRequest.status >= 200 && httpRequest.status < 300) || httpRequest.status === 304)
        {
            if (typeof kam === 'string')
            {
                document.getElementById(kam).innerHTML = httpRequest.responseText;
            }
            if (typeof kam === 'function')
            {
                kam(httpRequest.responseText);
            }

            if (kam_loading !== void 0 && loading_obnovit)
                document.getElementById(kam_loading).innerHTML = kam_loading_puvodni;

            if (after_do !== void 0 && after_do[0] === 1)
                ajax("forum-ajax.php?id=7&kde=" + after_do[1] + "&r=" + after_do[2] + "&a=" + after_do[3] + "&na=" + after_do[5] + "&x=" + after_do[4], "forum_prispevky", false);
        } else {
            alert("Chyba při načítání stránky:\n" + httpRequest.status + " " + httpRequest.statusText);
        }
    } else {
        var kam_final;
        if (kam_loading !== void 0)
            kam_final = kam_loading;
        else
            kam_final = kam;

        if (typeof kam_final === 'string' && kam_final !== '' && loading) {
            if (loading_text === "" || loading_text === void 0)
                document.getElementById(kam_final).innerHTML = "<img style='vertical-align: bottom' src='/assets/img/icons/loading.gif' alt='Načítám...' />";
            else
                document.getElementById(kam_final).innerHTML = "<i>" + loading_text + "</i>";
        }
    }
}