# Zadanie-rekrutacyjne


## Zadanie 1.

**zadanie1a.php** - kod z poprawionym błędem i dodanym zabezpieczeniem przed Cross-site scripting (XSS), bez zabezpieczenia przed SQL injection, ponieważ używane query *"SELECT * FROM users"* jest statyczne tzn. nie przyjmuje danych od użytkownika i nie zmienia się podczas wykonywania programu, co czyni je naturalnie odpornym na SQL injection

**zadanie1b.php** - kod z poprawionym błędem, zabezpieczniem przed Cross-site scripting (XSS), wykorzystujący *prepared statement* do zabezpieczenia przed SQL injection, mimo iż w tym przypadku nie jest to konieczne

**zadanie1c.php** - zmodyfikowany na potrzeby zadania przykład, przyjmujący dane od użytkownika w celu wyświetlenia wiersza o konkretnym ID, zastosowanie *prepared statement* w tym przypadku jest konieczne ze względu na ryzyko wystąpienia SQL injection

**users_db.sql** - przykładowa baza danych stworzona w celach testowania rozwiązania

## Zadanie 2.

**zadanie2.html** - prosty formularz rejestracji użytkownika, stworzony z wykorzystaniem Bootstrapa

## Zadanie 3.

**zadanie3.js** - skrypt JavaScript z funkcjami do wygenerowania losowego koloru w formacie heksadecymalnym i zmiany koloru tła strony

**zadanie3_test.html** - prosta strona z przyciskiem, który wykorzysuje stworzony skrypt

**Komentarz:** Zdecydowałem się na stworzenie skryptu do zmiany koloru w oddzielnym pliku, co ułatwia wykorzystanie go przy wielu stronach/projektach i umożliwia podpięcie funkcji zmiany koloru pod dowolny klikalny element lub wykorzystanie jej w innej sytuacji (np. zmiana koloru po upłynięciu określonego czasu itp.). Skrypt został przetestowany na przeglądarkach: *Google Chrome, Opera, Opera GX, Mozilla Firefox, Brave, Microsoft Edge*.
