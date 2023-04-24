function addComment() {
    var comment = document.getElementById("comment").value;
    var para = document.createElement("p");
    var node = document.createTextNode(comment);
    para.appendChild(node);
  
    var container = document.getElementById("comments-container");
    container.appendChild(para);
  }
  console.log('hi');