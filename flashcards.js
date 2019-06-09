var currentNumberOfElements = 3;
function addCard() {
    var term = "term";
    var def = "def";
    var label = "label";
    var element = document.getElementById("cards");
    currentNumberOfElements++;

    var div = document.createElement("DIV");
    div.setAttribute("class", "separator");
    div.setAttribute("id", "separateTerms" + currentNumberOfElements);
    element.append(div);
    var termLabel = document.createElement("Label");
    termLabel.setAttribute("for", term + currentNumberOfElements);
    termLabel.setAttribute("id", label + "Term" + currentNumberOfElements);
    termLabel.innerHTML = "Term "+ currentNumberOfElements +": ";
    termLabel.style.fontFamily = "Arial";
    element.appendChild(termLabel);
    var termBox = document.createElement("INPUT");
    termBox.setAttribute("type", "text");
    termBox.setAttribute("id", term + currentNumberOfElements);
    termBox.setAttribute("name", term+currentNumberOfElements);
    element.appendChild(termBox);
    var defLabel = document.createElement("Label");
    defLabel.setAttribute("for", def + currentNumberOfElements);
    defLabel.setAttribute("id", label + "Def" + currentNumberOfElements);
    defLabel.innerHTML = " Defintion " + currentNumberOfElements +": ";
    defLabel.style.fontFamily = "Arial";
    element.appendChild(defLabel);
    var defBox = document.createElement("INPUT");
    defBox.setAttribute("type", "text");
    defBox.setAttribute("id", def + currentNumberOfElements);
    defBox.setAttribute("name", def+currentNumberOfElements);
    element.append(defBox);
}

function deleteCard() {
    if(currentNumberOfElements <= 3) {
        return;
    }
    else {
        var term = "term";
        var def = "def";
        var label = "label";
        document.getElementById(def + currentNumberOfElements).remove();
        document.getElementById(label + "Def" + currentNumberOfElements).remove();
        document.getElementById(term + currentNumberOfElements).remove();
        document.getElementById(label+ "Term" + currentNumberOfElements).remove();
        var element = document.getElementById("separateTerms" + currentNumberOfElements).remove();
        currentNumberOfElements--;
    }
}

function validateCards() {
    var checkTitle = document.forms["flashCardInfo"]["setTitle"].value;
    if(checkTitle == ""){
        alert("Please name your study set");
    }
    var success = 1;
    var i;
    for(i = 0; i < currentNumberOfElements; i++) {
        
        var checkTerm = document.forms["flashCardInfo"]["term" + (i+1)].value;
        var checkDef = document.forms["flashCardInfo"]["def" + (i+1)].value;
        if(checkTerm == "" && checkDef == ""){
             alert("Please fill out the term and definition for card " + (i+1));
        } else if(checkTerm == ""){
            success = 0;
            alert("Please fill out the term for card " + (i+1));
        } else if(checkDef == ""){
            success = 0;
            alert("Please fill out the definition for card " + (i+1));
        }
        console.log(checkTerm);
        console.log(checkDef);
    }
    if(success == 1) {
        document.getElementById("numTerms").value = currentNumberOfElements;
        document.flashCardInfo.submit();
    }

}
