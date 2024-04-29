

///////////////////////////////teammember////////////////////////////////////////////////////////
var teamContainer = document.querySelector('.team-container');
var teamMember = document.querySelectorAll('.team-member');

var currentIndex = 0;
var maxIndex = teamMembers.length - 1;

function scrollToNextMember() {
    currentIndex = (currentIndex + 1) % (maxIndex + 1);
    teamMembers[currentIndex].scrollIntoView({
        behaviour: 'smooth'
    });
}

setInterval(scrollToNextMember, 5000)

function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace("w3-show", "");
    }
}

if (window.innerWidth < 480) {
    document.querySelectorAll('.card').forEach(card => {
        card.style.width = '200px';
    });
}
////////////////////////////////////////////////////////////////////////////////////////////////////