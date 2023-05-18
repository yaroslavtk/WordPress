<section data-aos="fade-up" class="feedbacks" id="feedbacks-a">
    <div class="container">

        <div class="title-wrap">
            <h2 class="cream-title section-title">Відгуки</h2>
        </div>

        <div class="feedback-container">
            <div data-aos="fade-up" class="phone-container">
                <ul class="screenshot-list screen-slider">
                    <li class="screenshot-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feedbacks/photo_2022-07-21_19-29-57.jpg"
                            class="screen-img" alt="Відгук">
                    </li>
                    <li class="screenshot-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feedbacks/photo_2022-07-21_19-30-49.jpg"
                            class="screen-img" alt="Відгук">
                    </li>
                    <li class="screenshot-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feedbacks/photo_2022-07-21_19-30-59.jpg"
                            class="screen-img" alt="Відгук">
                    </li>
                </ul>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone_3.png" width="325" height="670"
                    class="phone-img" alt="Phone">
            </div>

            <div data-aos="fade-up" class="onsite-feedback">
                <div class="onsite-feedback-name">Леся Українка</div>
                <div class="onsite-feedback-stars">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                <div class="onsite-feedback-date">23 Квітня 2023</div>
                <div class="onsite-feedback-photo"><img class="onsite-feedback-img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/honey-feedback.jpg" alt=""></div>
                <div class="onsite-feedback-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Inventore quaerat sapiente minus culpa id recusandae deserunt ab architecto sit quia soluta
                    maxime, nihil illo odit facilis atque repudiandae doloremque. Voluptatibus.</div>
                <div class="onsite-feedback-add"><button
                        class="onsite-feedback-button send-feedback btn-add-bin">Залишити відгук</button></div>
            </div>

            <div data-aos="fade-up" class="add-feedback">
                <form class="add-feedback-form" action="" method="post" name="feedback-form"
                    enctype="multipart/form-data">
                    <div class="feedback-form-row">
                        <label for="feedback-name">Ім'я<span class="red-star">*</span></label>
                        <input type="text" name="fb-name" required>
                    </div>
                    <div class="feedback-form-row">
                        <label for="fb-surname">Прізвище</label>
                        <input type="text" name="fb-surname">
                    </div>
                    <div class="feedback-form-row">
                        <label for="fb-email">Email</label>
                        <input type="email" name="fb-email">
                    </div>
                    <div class="feedback-form-row">
                        <label for="fb-phone">Телефон</label>
                        <input type="number" name="fb-phone">
                    </div>
                    <div class="feedback-form-row">
                        <textarea class="feedback-form-textarea" name="fb-text" id="" cols="30" rows="10"
                            placeholder="Ваш відгук" required></textarea>
                    </div>
                    <div class="feedback-form-row">
                        <label for="fb-photo">Фото</label>
                        <input class="fb-photo" type="file" name="fb-photo" accept="image/*">
                    </div>
                    <div class="feedback-form-row">
                        <button class="send-feedback btn-add-bin" name="fb-form-submit"
                            value="submited">Відправити</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>