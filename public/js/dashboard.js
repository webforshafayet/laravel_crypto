const querySelector = selector => document.querySelector(selector);
const classList = selector => querySelector(selector).classList;

let prev = 0;
const menuEffectOnScroll = () => {
    let next = window.scrollY;
    if(next>prev){
        querySelector('header').style.top = '-500px';
        classList('#mainNav').remove('opened');
    }else{
        querySelector('header').style.top = '0';
    }
    prev=next;
}

const menuDesign = () => {
    querySelector('#mainNav').style.height = window.innerHeight - 65 +'px';
    if(window.innerWidth<576){
        classList('.menuList').add('d-none');

        window.addEventListener('scroll', menuEffectOnScroll);

    }else{
        classList('.menuList').remove('d-none');
        window.removeEventListener('scroll', menuEffectOnScroll, false);
    }
}


const toggleOnClick = (clickOn, selector, toggleClass, shouldCngBtnDesign=false) => querySelector(clickOn).addEventListener('click', ()=>{
    classList(selector).toggle(toggleClass);

    if(shouldCngBtnDesign){
        if(classList(selector).contains('d-none')){
            querySelector(clickOn).textContent = '+';
        }else{
            querySelector(clickOn).textContent = 'x';
        }
    }
});


toggleOnClick('#navToggler', '#mainNav', 'opened');
toggleOnClick('#headerMenuToggler', '.menuList', 'd-none', true);
menuDesign();

window.onresize = menuDesign;

