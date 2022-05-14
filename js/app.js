/*(function(){

    const buttons = document.querySelector('.btn')
    const storeImages = document.querySelector('.store-item')

    buttons.forEach((button) => {
        button.addEventListener('click', (e) => {
            e.preventDefault()
            const filter = e.target.dataset.filter

            storeImages.forEach((item) => {
                if(filter === 'all'){
                    item.style.display = 'block'
                }else{
                    if(item.classList.contains(filter)){
                        item.style.display = 'block'
                    }else{
                        item.style.display = 'none';
                    }
                }
            })
        })
    })
})();
*/
