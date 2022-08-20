function myFunction(cd) {
    var table="<tr><th>Artist</th><th>Title</th></tr>";
    for (var i = 0; i < cd.length; i++) { 
      table += "<tr><td>" +
      cd[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
      "</td><td>" +
      cd[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
      "</td></tr>";
    }
    document.getElementById("demo").innerHTML = table;
  }