let items = document.querySelectorAll('.admin-menu-item');
let content = document.querySelectorAll('.admin-content .fcontent');
items.forEach(item => {
    item.addEventListener('click', function(e){
        if( this.classList.contains('active')){
            return;
        }
        items.forEach(remove_active => {
            remove_active.classList.remove('active');
        });
        content.forEach(remove_active =>{
            remove_active.classList.remove('active');
        })
        this.classList.add('active');
        let show = this.attributes.name.nodeValue
        let showContent = document.getElementsByName(show)
        showContent[1].classList.add('active')
    },)
})