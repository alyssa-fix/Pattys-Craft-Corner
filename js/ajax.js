function editCategory(IDAJAX)
      {
      var xmlhttp;
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
          //document.getElementById("SettingsRow" + RoomIDAJAX).innerHTML=xmlhttp.responseText;
          document.getElementById("tablecontainer").innerHTML=xmlhttp.responseText;
          }
        }
    xmlhttp.open("GET","categoryEdit.php?IDAJAX=" + IDAJAX,true);
    xmlhttp.send();
}

function deleteCategory(IDAJAX)
      {
      var xmlhttp;
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
          document.getElementById("tablecontainer").innerHTML=xmlhttp.responseText;
          }
        }
    xmlhttp.open("GET","categoryDelete.php?IDAJAX=" + IDAJAX,true);
    xmlhttp.send();
}

function editOrnament(IDAJAX)
      {
      var xmlhttp;
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
          //document.getElementById("SettingsRow" + RoomIDAJAX).innerHTML=xmlhttp.responseText;
          document.getElementById("tablecontainer").innerHTML=xmlhttp.responseText;
          }
        }
    xmlhttp.open("GET","ornamentEdit.php?IDAJAX=" + IDAJAX,true);
    xmlhttp.send();
}

function deleteOrnament(IDAJAX)
      {
      var xmlhttp;
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
          //document.getElementById("SettingsRow" + RoomIDAJAX).innerHTML=xmlhttp.responseText;
          document.getElementById("tablecontainer").innerHTML=xmlhttp.responseText;
          }
        }
    xmlhttp.open("GET","ornamentDelete.php?IDAJAX=" + IDAJAX,true);
    xmlhttp.send();
}

function editPost(IDAJAX)
      {
      var xmlhttp;
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
          //document.getElementById("SettingsRow" + RoomIDAJAX).innerHTML=xmlhttp.responseText;
          document.getElementById("tablecontainer").innerHTML=xmlhttp.responseText;
          }
        }
    xmlhttp.open("GET","postEdit.php?IDAJAX=" + IDAJAX,true);
    xmlhttp.send();
}

function deletePost(IDAJAX)
      {
      var xmlhttp;
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
          //document.getElementById("SettingsRow" + RoomIDAJAX).innerHTML=xmlhttp.responseText;
          document.getElementById("tablecontainer").innerHTML=xmlhttp.responseText;
          }
        }
    xmlhttp.open("GET","postDelete.php?IDAJAX=" + IDAJAX,true);
    xmlhttp.send();
}