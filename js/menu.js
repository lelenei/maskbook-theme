(function () {
    window.onload = () => {
        let menuOpen = false;
        const menu = document.getElementById('submenu-expand')
        const sub_menu = document.getElementsByClassName('sub-menu')

        function toggle(e) {
            sub_menu[0].style.display = "block"
            stopBubble(e); 

            document.onclick = function () {
                sub_menu[0].style.display = "none";
                document.onclick=null;　
            }
        }
        menu.addEventListener('click', toggle, false)

       

        function stopBubble(e){   
            if(e && e.stopPropagation){
                e.stopPropagation();    
            }else{
                window.event.cancelBubble=true; //IE
            }
        }
    }
})();