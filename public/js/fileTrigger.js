const fileInputTrigger = (selector, input) =>{
    const target = document.querySelector(selector);

    if(!target)return;

    const targetInput = document.querySelector(input);

    target.addEventListener('click', ()=>{
        targetInput.click();

        targetInput.addEventListener('change', e=>{
            const reader = new FileReader();
            const file = e.target.files[0];
            if(!file)return;
            reader.readAsDataURL(file);
            e.target.value = '';
            
            reader.onload = e => {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid idImg';

                img.onload = () => {
                    const btn = document.createElement('button');
                    btn.className = 'btn btn-warning rounded-circle position-absolute btn-danger text-white fw-bold border removeImg';
                    btn.textContent = 'X';
                    const parent = target.parentElement;
                    parent.appendChild(img);
                    parent.appendChild(btn);
                    target.classList.add('d-none');
    
                    btn.addEventListener('click', ()=>{
                        parent.removeChild(img);
                        parent.removeChild(btn);
                        target.classList.remove('d-none');
                    });

                }

            }

        })
    });
}