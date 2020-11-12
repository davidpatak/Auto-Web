//current-day class highlight for openinghours-table
function dayHighlight(){
    var currentDate = new Date();
    var currentDay = currentDate.getDay()

    switch(currentDay){
        case 1: //Hetfo
            var currentDayElement = document.getElementById("Hetfo1");
            currentDayElement.classList.add("current-day");
            var currentDayElement2 = document.getElementById("Hetfo2");
            currentDayElement2.classList.add("current-day");
            var currentDayElement3 = document.getElementById("Hetfo3");
            currentDayElement3.classList.add("current-day");
            var currentDayElement4 = document.getElementById("Hetfo4");
            currentDayElement4.classList.add("current-day");
        break;
        case 2: //Kedd
            var currentDayElement = document.getElementById("Kedd1");
            currentDayElement.classList.add("current-day");
            var currentDayElement2 = document.getElementById("Kedd2");
            currentDayElement2.classList.add("current-day");
            var currentDayElement3 = document.getElementById("Kedd3");
            currentDayElement3.classList.add("current-day");
            var currentDayElement4 = document.getElementById("Kedd4");
            currentDayElement4.classList.add("current-day");
        break;
        case 3: //Szerda
            var currentDayElement = document.getElementById("Szerda1");
            currentDayElement.classList.add("current-day");
            var currentDayElement2 = document.getElementById("Szerda2");
            currentDayElement2.classList.add("current-day");
            var currentDayElement3 = document.getElementById("Szerda3");
            currentDayElement3.classList.add("current-day");
            var currentDayElement4 = document.getElementById("Szerda4");
            currentDayElement4.classList.add("current-day");
        break;
        case 4: //Csutortok
            var currentDayElement = document.getElementById("Csutortok1");
            currentDayElement.classList.add("current-day");
            var currentDayElement2 = document.getElementById("Csutortok2");
            currentDayElement2.classList.add("current-day");
            var currentDayElement3 = document.getElementById("Csutortok3");
            currentDayElement3.classList.add("current-day");
            var currentDayElement4 = document.getElementById("Csutortok4");
            currentDayElement4.classList.add("current-day");
        break;
        case 5: //Pentek
            var currentDayElement = document.getElementById("Pentek1");
            currentDayElement.classList.add("current-day");
            var currentDayElement2 = document.getElementById("Pentek2");
            currentDayElement2.classList.add("current-day");
            var currentDayElement3 = document.getElementById("Pentek3");
            currentDayElement3.classList.add("current-day");
            var currentDayElement4 = document.getElementById("Pentek4");
            currentDayElement4.classList.add("current-day");
        break;
        case 6: //Szombat
            var currentDayElement = document.getElementById("Szombat1");
            currentDayElement.classList.add("current-day");
            var currentDayElement2 = document.getElementById("Szombat2");
            currentDayElement2.classList.add("current-day");
            var currentDayElement3 = document.getElementById("Szombat3");
            currentDayElement3.classList.add("current-day");
            var currentDayElement4 = document.getElementById("Szombat4");
            currentDayElement4.classList.add("current-day");
        break;
        case 7:
            break;
        default: 
            break;
    }
}

//form check, checkboxPriv is checked
function checkForm(form)
{
  if(!form.checkboxPriv.checked) {
    alert("Elküldéshez az adatvédelmi nyilatkozatot el kell fogadnia.");
    form.checkboxPriv.focus();
    return false;
  }
  return true;
}