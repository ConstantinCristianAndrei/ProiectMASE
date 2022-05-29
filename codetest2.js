var post2= document.getElementById("post2");
post2.addEventListener("click", function(){
    var commentBoxValue= document.getElementById("comment-box2").value;
 
    var li = document.createElement("li");
    var text = document.createTextNode(commentBoxValue);
    li.appendChild(text);
    document.getElementById("unordered2").appendChild(li);
 
});