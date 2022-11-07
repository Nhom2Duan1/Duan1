const $= document.querySelector.bind(document)
const $$= document.querySelectorAll.bind(document)

const app = {
   // xử lí sự kiện
   handleEvent: function() {
        const list = $('.list')
        const list2 = $('.list2')
        const list3 = $('.list3')
        const list4 = $('.list4')
        const list5 = $('.list5')
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

   //show menu
     list.onclick = function () {
        const icon = $('.item-show ')
        const listHidden = $('.navbar__lists-hidden')
        icon.classList.toggle('item-show-rotate')
        listHidden.classList.toggle('hidden')
       
      }
      list2.onclick = function () {
        const icon = $('.show2')
        const listHidden = $('.hidden2')
        icon.classList.toggle('item-show-rotate')
        listHidden.classList.toggle('hidden')
   
        
      }
      list3.onclick = function () {
        const icon = $('.show3')
        const listHidden = $('.hidden3')
        icon.classList.toggle('item-show-rotate')
        listHidden.classList.toggle('hidden')
   
        
      }
      list4.onclick = function () {
        const icon = $('.show4')
        const listHidden = $('.hidden4')
        icon.classList.toggle('item-show-rotate')
        listHidden.classList.toggle('hidden')
   
        
      }
      list5.onclick = function () {
        const icon = $('.show5')
        const listHidden = $('.hidden5')
        icon.classList.toggle('item-show-rotate')
        listHidden.classList.toggle('hidden')
   
        
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
   start :  function(){
   this.handleEvent();

   }
}
app.start();
window.addEventListener('beforeunload',(e)=>{
  e.preventDefault();
  e.returnValue="Bạn chắc chắn muốn đóng tab hiện tại"; 
})
