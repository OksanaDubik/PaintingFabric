const TELEGRAM_BOT_TOKEN = '6909770478:AAETbJbL9TvfI7e3eTVXMMFYvmUe7PrNDqY';
const TELEGRAM_CHAT_ID = '-1002037694009';
const API = `https://api.telegram.org/bot${TELEGRAM_BOT_TOKEN}/sendMessage`

async function sendEmailTelegram(event) {
    event.preventDefault();

    const form = event.target;
    const formBtn = document.querySelector('input[name="sab"]');
    const {name1, email1, textar} = Object.fromEntries(new FormData(form).entries());
    const text = `заявка от ${name1}, Email:${email1}, доп. информация:${textar}`;
    if (name1 !== '' && email1 !== '' && textar !== '') {
        try {
            formBtn.value = 'Loading...';

            const response = await fetch(API, {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({
                    chat_id: TELEGRAM_CHAT_ID,
                    text,
                })
            });
            if (response.ok) {
                alert("Форма отправлена")
                form.reset()
            } else {
                throw new Error(response.statusText)
            }
        } catch (error) {
            console.error(error + "Ошибка! Форма не отправлена")
            alert("Ошибка! Форма не отправлена")
        } finally {
            formBtn.textContent = 'Оформить заявку'
        }
    }
}


