const $= document.querySelector.bind(document)
const $$= document.querySelectorAll.bind(document)

const app = {
   // xử lí sự kiện
   handleEvent: function() {
    const logoIcon = $('.navbar__logo-icon')
    const listHidden = $$('.navbar__lists-hidden')
    const itemUser = $('.item-user')
    
    //show user
    if(itemUser){
    itemUser.onclick = () =>{
            const listUser = $('.header__list-user')
            listUser.classList.toggle('hidden')

    }
    }

    let show=$$('.navbar__lists-main')
    for (let i = 0; i < show.length; i++) {
    const element = show[i];
    element.addEventListener('click', () => {
    element.nextSibling.classList.toggle('show')
    element.firstElementChild.lastElementChild.classList.toggle('item-show-rotate')
    })
    
  }
      logoIcon.onclick = function () {
       const container = $('.container')
       const logo = $('.navbar__logo')
       const itemName = $$('.item-name');
       const icon = $$('.item-show')
       logo.classList.toggle('navbar__logo__hidden')
       container.classList.toggle('container__hidden')
       for (let i = 0; i < listHidden.length; i++) {
        const element = listHidden[i];
        element.classList.toggle('hidden')
        
       }
        for (let i = 0; i < itemName.length; i++) {
                const element = itemName[i];
                element.classList.toggle('hidden')
        }
        for (let i = 0; i < icon.length; i++) {
                const element = icon[i];
                element.classList.toggle('hidden')
                
               }

        
      }
   },
   start : function(){
   this.handleEvent();

   }
}
app.start()
// window.addEventListener('beforeunload',(e)=>{
//   e.preventDefault();
//   e.returnValue="Bạn chắc chắn muốn đóng tab hiện tại"; 
// })
