document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section");

    const options = {
        root: null, // obserwujemy względem całego viewport
        rootMargin: "0px",
        threshold: 0.25
    };

    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("in-view"); // Dodanie klasy, gdy sekcja jest w widoku
                observer.unobserve(entry.target); // Zatrzymanie obserwacji po załadowaniu
            }
        });
    }, options);

    sections.forEach(section => {
        observer.observe(section); // Rozpoczęcie obserwacji każdej sekcji
    });
});
