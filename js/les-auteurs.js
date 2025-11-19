window.addEventListener('DOMContentLoaded', () => {
    const imgs = document.querySelectorAll('.profile-imgs');
    const infos = document.querySelectorAll('.infos');
    const indicators = document.querySelectorAll('.indicator');


    console.log(infos);
    console.log(infos[0], infos[1]);

    imgs.forEach( img =>
        img.addEventListener("click", () => {
            console.log(window.innerWidth);
            if (window.innerWidth <= 660) {
                if (infos[1].className.includes('hidden')) {
                    infos[1].classList.remove('hidden');
                    infos[0].classList.add('hidden');
                    imgs[1].classList.remove('hidden');
                    imgs[0].classList.add('hidden');
                    indicators[0].classList.remove('active-profile');
                    indicators[1].classList.add('active-profile');
                }
                else {
                    infos[0].classList.remove('hidden');
                    infos[1].classList.add('hidden');
                    imgs[0].classList.remove('hidden');
                    imgs[1].classList.add('hidden');
                    indicators[1].classList.remove('active-profile');
                    indicators[0].classList.add('active-profile');
                }
            }

        })
    )

})