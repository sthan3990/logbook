var el;
el = document.getElementById('logbooktext');                   
el.addEventListener('keyup', countCharacters, false);

function countCharacters(e) {                                    
  var textEntered, countRemaining, counter;          
  textEntered = document.getElementById('logbooktext').value;  
  counter = (140 - (textEntered.length));
  countRemaining = document.getElementById('charactersRemaining'); 
  countRemaining.textContent = counter;       
}
el = document.getElementById('logbooktext');                   
el.addEventListener('keyup', countCharacters, false);