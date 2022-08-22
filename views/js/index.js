const ul = document.querySelector("ul.squares");

for(let i = 0; i < 11; i++){

    const random = (min, max) => Math.random() * (max - min);

    const li = document.createElement("li");
    const position = random(1, 99);
    const size = Math.floor(random(10, 40));
    const delay = random(20, 4);
    const duration = random(50, 25);
    li.style.width = `${size}px`;
    li.style.height = `${size}px`;
    li.style.bottom = `-${size}px`;

    li.style.left = `${position}%`;

    li.style.animationDelay = `${delay}s`;
    li.style.animationDuration = `${duration}s`;

    ul.appendChild(li);
}


let input = document.querySelector('.inp-2');
let i = document.querySelector('.icon-2');
i.addEventListener('click', () => {
  input.type = input.type == 'text' ? 'password' : 'text';
});