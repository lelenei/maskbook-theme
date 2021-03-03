(function () {
    window.onload = () => {
        let menuOpen = false;
        const menu = document.getElementById('submenu-expand')
        const menu_bar = document.getElementsByClassName('menu-item-has-children')[0];
        console.log(menu_bar);
        console.log(menu);
        const sub_menu = document.getElementsByClassName('sub-menu')

        function sub_menu_toggle(e) {
            sub_menu[0].style.display = "block"
            stopBubble(e); 

            document.onclick = function () {
                sub_menu[0].style.display = "none"
                document.onclick=null;　
            }
        }
        menu.addEventListener('click', sub_menu_toggle, false)
        menu_bar.addEventListener('click', sub_menu_toggle, false);
       
        function stopBubble(e){   
            if(e && e.stopPropagation){
                e.stopPropagation();    
            }else{
                window.event.cancelBubble=true //IE
            }
        }

        // mobile menu
        const mobile_menu_bg = document.getElementById('site-mobiile-navigation-bg')
        const mobile_menu_more = document.getElementById('main-menu-more')

        function mobile_menu_toggle(e) {
            menuOpen = !menuOpen;
            mobile_menu_bg.style.display = menuOpen ? 'block': 'none'
            
            if (menuOpen) {
                mobile_menu_bg.classList.add('show')
                mobile_menu_more.classList.add('close')
            }
            else {
                mobile_menu_bg.classList.remove('show')
                mobile_menu_more.classList.remove('close')
            }
            console.log(menuOpen)
        }
        mobile_menu_more.addEventListener('click', mobile_menu_toggle)
        mobile_menu_bg.addEventListener('click', mobile_menu_toggle)
    }
})();