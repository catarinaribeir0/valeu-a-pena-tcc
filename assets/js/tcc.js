function openLink(evt, type) {

    switch(type) {
        case 'show':
            document.getElementById('edit').style.display = "none";
            document.getElementById('depo').style.display = "none";
        case 'depo':
           document.getElementById('edit').style.display = "none"
        case 'edit':
           document.getElementById('depo').style.display = "none"
        default:
            break;
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(type).style.display = "block";
}


function showInput() {
    document.getElementById('cargoOutro').style.display = 'block';
}