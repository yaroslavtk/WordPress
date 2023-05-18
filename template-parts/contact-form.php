<section class="contact-form-section">
    <div class="container">
        <div class="wrapper">
            <form class="contact-form" method="post" action="php/contact_form.php" name="contact-form">
                <div class="contact-form-row">
                    <label for="get-name">Ім'я<span class="red-star">*</span></label>
                    <input id="get-name" type="text" name="name" required>
                </div>
                <div class="contact-form-row">
                    <label for="get-surname">Прізвище</label>
                    <input id="get-surname" type="text" name="surname">
                </div>
                <div class="contact-form-row">
                    <label for="get-email">Email<span class="red-star">*</span></label>
                    <input id="get-email" type="email" name="email" required>
                </div>
                <div class="contact-form-row">
                    <label for="get-phone">Телефон</label>
                    <input id="get-phone" type="number" name="phone">
                </div>
                <div class="contact-form-textarea">
                    <textarea class="question-textarea" name="question" placeholder="Ваше запитання" id="get-question"
                        cols="20" rows="5" required></textarea>
                    <button class="send-quseion btn-add-bin" name="contact-form-submit"
                        value="submited">Відправити</button>
                </div>
            </form>
        </div>
    </div>
</section>