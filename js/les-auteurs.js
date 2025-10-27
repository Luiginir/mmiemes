window.addEventListener('DOMContentLoaded', () => {
    const img = document.querySelector('.profile-imgs');
    const infos = document.querySelectorAll('.infos');

    console.log(infos);
    console.log(infos[0], infos[1]);

    img.addEventListener("click", () => {
        if (infos[1].className.includes('hidden')) {
            infos[1].classList.remove('hidden');
            infos[0].classList.add('hidden');
        }
        else {
            infos[0].classList.remove('hidden');
            infos[1].classList.add('hidden');
        }
    })
})