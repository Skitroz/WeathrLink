function typeWriter(span, text, vitesse) {
    const element = document.getElementById(span);
    let i = 0;

    function type() {
        if (i < text.length) {
            element.textContent += text.charAt(i);
            i++;
            setTimeout(type, vitesse);
        }
    }

    type();
}

typeWriter('titre', 'WeathrLink !', 150);