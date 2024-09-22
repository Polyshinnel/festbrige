let container = document.getElementById('header-menu');

document.getElementById('menu-btn').addEventListener('click', function (event) {
    event.preventDefault();

    if (!container.classList.contains('active')) {
        container.classList.add('active');
        container.style.height = 'auto';

        let height = container.clientHeight + "px";

        container.style.height = '0px';

        setTimeout(function () {
            container.style.height = height;
        }, 0);
    } else {
        container.style.height = '0px';

        container.addEventListener('transitionend', function () {
            container.classList.remove('active');
        }, {
            once: true
        });
    }
});

document.addEventListener('DOMContentLoaded', function(){
	let currPath = window.location.href;
    console.log(currPath)

    let mainMenu = document.querySelectorAll('.header-nav a');
    let mobileMenu = document.querySelectorAll('.header-menu li');

    for(let elem of mainMenu){
        elem.classList.remove('active')
        if(elem.href == currPath) {
            elem.classList.add('active')
        }
    }

    for(let elem of mobileMenu){
        let hrefData = elem.querySelector('a').href
        elem.classList.remove('active')
        if(hrefData == currPath){
            elem.classList.add('active')
        }
    }
});

let formBtn = document.querySelector('.send-form');

const fadeIn = (el, timeout, display) => {
    el.style.opacity = 0;
    el.style.display = display || 'block';
    el.style.transition = `opacity ${timeout}ms`;
    setTimeout(() => {
        el.style.opacity = 1;
    }, 10);
};

const fadeOut = (el, timeout) => {
    el.style.opacity = 1;
    el.style.transition = `opacity ${timeout}ms`;
    el.style.opacity = 0;

    setTimeout(() => {
        el.style.display = 'none';
    }, timeout);
};

formBtn.addEventListener('click',function(e){
    e.preventDefault();
    let question = document.getElementById('customer-question').value;
    let name = document.getElementById('customer-name').value;
    let phone = document.getElementById('customer-phone').value;
    let hintList = document.querySelectorAll('.hint');
    let flag = 0;

    for(let elem of hintList){
        elem.style.display = 'none';
    }

    phone = phone.replace(/[^0-9]/g, '');

    if(name.length < 2) {
        document.getElementById('customer-name').parentElement.querySelector('.hint').style.display = 'block'
        flag++;
    }

    if(question.length < 2) {
        document.getElementById('customer-question').parentElement.querySelector('.hint').style.display = 'block'
        flag++;
    }

    if(phone.length < 10) {
        document.getElementById('customer-phone').parentElement.querySelector('.hint').style.display = 'block'
        flag++;
    }

    if(flag == 0) {
        phone = '+'+phone;
        let jsonObj = {
            'name': name,
            'phone': phone,
            'question': question
        }

        let form = document.querySelector('.contacts-form')
        let success = document.querySelector('.success-block')

        fadeOut(form, 300)
        fadeIn(success, 1500, 'flex')

        console.log(jsonObj)

        let xhr = new XMLHttpRequest();
        let body = 'name='+encodeURIComponent(jsonObj.name)+'&phone='+encodeURIComponent(jsonObj.phone)+'&question='+encodeURIComponent(jsonObj.question)
        xhr.open('POST', '/telegram', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(body);
    }
})