<!doctype html>
<html>

<head>
    <title>todos</title>
    <meta charset="utf-8" />
    <style>

    body{margin:0;padding:0;font-family:sans-serif;--primary-color:#55b;}
    h1{text-align:center;margin-top:50px;}

    .modal{display:none;;width:100vw;height:100vh;position:fixed;top:0;left:0;flex-direction:column;justify-content:space-around;color:white;background-color:rgba(0,0,0,0.8)}
    .modal *{margin:auto;}

    #addBtn{height:50px;width:50px;border-radius:50%;background-color:var(--primary-color);color:white;line-height:50px;font-size:36px;text-align:center;position:fixed;top:50px;right:50px;}

    .closeBtn{display:inline-block;height:50px;width:50px;line-height:50px;font-size:36px;text-align:center;background-color:#111;position:absolute;top:50px;right:50px;}

    #list{margin-top:100px;width:720px;max-width:100%;margin:auto;}

    .pseudoTxtarea{height:250px;overflow:auto;max-width:100%;width:720px;background-color:#ccc;color:#333;font-size:20px;padding:1em;}

    .pseudoBtn{padding:.75em 1.5em;color:white;font-weight:bold;letter-spacing:.5px;background-color:var(--primary-color);}
    #addBtn:hover,.closeBtn:hover,.pseudoBtn:hover{cursor:pointer;}

    </style>
</head>

<body>

<div id="main">
    <h1>Todo list</h1>
    <div id="addBtn" onclick="openCreateDialog()">+</div>
    <div id="list"></div>
    
</div>

<!-- fenêtre de création de nouveau todo -->
<div class="modal" id="modal1">
    <div style="width:100%;text-align:right"><span class="closeBtn" onclick="closeCreateDialog()">X</span></div>
    <h2>-- create new Todo --</h2>
    <p class="pseudoTxtarea" contenteditable id="content">&nbsp;</p>
    <div style="text-align:center;"><span onclick="createTodo()" class="pseudoBtn">Créer</span></div>
</div>

<!-- fenêtre de mise à jour d'un todo existant -->
<div class="modal" id="modal2">
</div>

<script>

function openCreateDialog(){
    document.getElementById("modal1").style.display="flex";
}

function closeCreateDialog(){
    document.getElementById("modal1").style.display="none";
}

function todo2html(todo) {
    var html= '<div class="tdWrap" id="todo-'+todo.id+'">';
    html+= '<div class="tdContent">'+todo.content+'</div>';
    html+= '<div class="tdIcons"><img src="../img/stylo.png"><img src="../img/drapeau.png"><img src="../img/modif_couleur.png"><img src="../img/barrer.png"><img src="../img/supprimer.png" onclick="deleteTodo('+todo.id+')" ></div>';
    html+= '</div>';
    return html;
} 

function todolist2html(todolist) {
    var html='';
    for (var i=0;i<todolist.length;i++ ) {
        html+=todo2html(todolist[i]);
    }
    document.getElementById("list").innerHTML=html; // affichage dans le html de la variable htlm
}

function getBdd() {
    var xhr=new XMLHttpRequest(); //Requette AJAX
    xhr.open("GET","readall.php"); // AJAX va chercher readall.php
    xhr.send();// AJAX Envoi la requete
    xhr.onload=function() { //AJAX charge la fonction
      console.log(xhr.response); // log la reponse de ajax en chaine de caratère
      var jsonResponse = JSON.parse(xhr.response); // transforme la reponse  AJAX en json
      todolist2html(jsonResponse); //lance la fonction 
    } 
}
getBdd();

function deleteTodo(todoId) {
    let ajax = new XMLHttpRequest();
    ajax.open("GET","delete.php?id="+todoId);
    ajax.send();
    ajax.onload= function() {
        console.log(ajax.response);
        document.getElementById("todo-"+todoId).style.display="none";
    }
}

function createTodo() {
    let newContent=document.getElementById("content").innerText;
    let ajax = new XMLHttpRequest();
    ajax.open("GET","create.php?content="+newContent);
    ajax.send();
    ajax.onload= function() {
        let reponse=JSON.parse(ajax.response);
        let newId=reponse.lastId;
        let newTodo={};
        newTodo.id=newId;
        newTodo.content=newContent;
        let newHtml = todo2html(newTodo);
        document.getElementById("list").innerHTML+=newHtml;
        closeCreateDialog();
    }
}


</script>
</body>

</html>
