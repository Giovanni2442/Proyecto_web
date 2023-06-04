// JavaScript code
//function search_instrumentos() {
//    let input = document.getElementById('indxSearch').value
//    input=input.toLowerCase();
//    let x = document.getElementsByClassName('instrumentos');
//      
//    for (i = 0; i < x.length; i++) { 
//        if (!x[i].innerHTML.toLowerCase().includes(input)) {
//            x[i].style.display="none";
//        }
//        else {
//            x[i].style.display="list-item";                 
//        }
//    }
//}

function search_instrumentos() {
    var input = document.getElementById('indxSearch').value.toLowerCase();
    var list = document.getElementById('list');
    var listItems = list.getElementsByTagName('li');

    if (input.length === 0) {
        list.classList.add('list-hidden');
        return;
    }

    var matchingItems = [];

    for (var i = 0; i < listItems.length; i++) {
        var currentItem = listItems[i];
        var itemText = currentItem.innerText.toLowerCase();

        if (itemText.includes(input)) {
            matchingItems.push(currentItem);
            currentItem.style.display = "list-item";
        } else {
            currentItem.style.display = "none";
        }
    }

    if (matchingItems.length > 0) {
        list.classList.remove('list-hidden');
    } else {
        list.classList.add('list-hidden');
    }
}



function showList() {
    var list = document.getElementById("list");
    list.style.display = "block";
}

function hideList() {
    var list = document.getElementById("list");
    list.style.display = "none";
}