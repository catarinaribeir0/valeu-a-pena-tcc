function openLink(evt, type) {

    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    switch(type) {
        case 'show':
            document.getElementById('edit').style.display = "none";
            document.getElementById('depo').style.display = "none";
        case 'depo':
           document.getElementById('edit').style.display = "none";
           document.getElementById('show').style.display = "none";
        case 'edit':
           document.getElementById('depo').style.display = "none";
           document.getElementById('show').style.display = "none";
        default:
            break;
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(type).style.display = "block";
    evt.currentTarget.className += " active";
}