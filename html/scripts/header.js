function loadQuote() {
    var quotes;
    loadJSON(function(response) {
        quotes = JSON.parse(response);
        populateQuote(quotes);
    });    
}

function populateQuote(quotes) {
    let index = Math.floor(Math.random() * quotes.length);
    document.getElementById("quote").innerHTML = "<p><i>\"" + quotes[index]["quote"] + "\" - " + quotes[index]["author"] + "</p></i>";
}

function loadJSON(callback) {
    var xobj = new XMLHttpRequest();
    
    xobj.overrideMimeType("application/json");
    xobj.open('GET', '../data/quotes.json', true);
    xobj.onreadystatechange = function () {
        
        if (xobj.readyState == 4 && xobj.status == "200") {
            // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
            callback(xobj.responseText);
            
        }
        
    };
    xobj.send(null);
    
}
