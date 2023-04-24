function addComment() {
    var comment = document.getElementById("comment").value;
    var newparagraphelement = document.createElement("p");
    var newcomment = document.createTextNode(comment);
    newparagraphelement.appendChild(newcomment);
  
    var container = document.getElementById("comments-container");
    container.appendChild(newparagraphelement);
  }
  console.log('ok');