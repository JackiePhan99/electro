var btn = document.querySelector('.toggle');
var btnst = true;
btn.onclick = function() {
    if(btnst == true) {
        document.querySelector('.toggle i').classList.add('toggle');
        document.getElementById('sidebar').classList.add('sidebarshow');
        btnst = false;
    }else if(btnst == false) {
        document.querySelector('.toggle i').classList.remove('toggle');
        document.getElementById('sidebar').classList.remove('sidebarshow');
        btnst = true;
    }
}