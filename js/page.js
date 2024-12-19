// used for the initial setup DOMContebnet can be loaded after the sheets are loaded
document.addEventListener('DOMContentLoaded', function(){
    let stars = document.querySelectorAll('.star');
    stars.forEach(function(star){
        star.addEventListener('click', setRating); 
    });
    
    let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
    let target = stars[rating - 1];
    target.dispatchEvent(new MouseEvent('click'));
});
function setRating(ev){
    let span = ev.currentTarget;
    let stars = document.querySelectorAll('.star');
    let match = false;
    let num = 0;
    stars.forEach(function(star, index){
        if(match){
            star.classList.remove('rated');
        }else{
            star.classList.add('rated');
        }
        //aspan that isa connected 
        if(star === span){
            match = true;
            num = index + 1;
        }
    });
    document.querySelector('.stars').setAttribute('data-rating', num);
}
var dayOfWeek = (new Date).getDay();
    var hours = ["Closed",          // Sunday
        "10 AM to 3 PM",   // Monday
        "11 AM to 4 PM",   // Tuesday
        "12 AM to 1 PM",   // Wednesday
        "11 AM to 2 PM",   // Thursday
        "10 AM to 7 PM",   // Friday
        "12 PM to 6 PM"];  // Saturday
var todaysHours = hours[dayOfWeek];
hourElements = document.getElementsByClassName("hours");
for(el of hourElements) {
    el.innerHTML = todaysHours;
}
datetimeElements = document.getElementsByClassName("datetime");
var dt = new Date();
for(el of datetimeElements) {
    el.innerHTML = dt.toLocaleString();
}