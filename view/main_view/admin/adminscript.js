let items = document.querySelectorAll('.admin-menu-item');
items.forEach(item => {
    item.addEventListener('click', function(e){
        if( this.classList.contains('active')){
            return;
        }
        items.forEach(remove_active => {
            remove_active.classList.remove('active');
        });
        this.classList.add('active');
    },)
})

function stop(event){
    event.preventDefault();
}