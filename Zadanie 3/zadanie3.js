// Funkcja generująca losowy kolor w formacie heksadecymalnym
function getRandomColor() {
    const letters = "0123456789ABCDEF";
    let color = "#";
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Funkcja zmieniająca kolor tła strony
function changeBackgroundColor() {
    // Pobieranie losowego koloru z fukcji getRandomColor()
    const newColor = getRandomColor();

    // Ustawienie nowego koloru jako tła strony
    document.body.style.backgroundColor = newColor;

}