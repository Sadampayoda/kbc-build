<h1>Testimonial Create Page (admin)</h1>

<!-- Helper form -->
<?= form_open('admin/testimonials/insert') ?>
    <!-- CSRF Token -->
    <?= csrf_field() ?>
    <input type="text" name="name" value="<?php if (isset(session()->oldValue['name'])) echo esc(session()->oldValue['name']) ?>" placeholder="Name">
    <br>
    <!-- Displaying error input name -->
    <?php if (isset(session()->error['name'])) echo session()->error['name'] ?>
    <br>
    <br>
    <textarea name="comment" cols="30" rows="10"><?php if (isset(session()->oldValue['comment'])) echo esc(session()->oldValue['comment']) ?></textarea>
    <br>
    <!-- Displaying error input file -->
    <?php if (isset(session()->error['comment'])) echo session()->error['comment'] ?>
    <br>
    <br>
    Rate: 
    <input id="rate1" type="radio" name="rate" value="1">
    <label for="rate1">*</label>
    <input id="rate2" type="radio" name="rate" value="2">
    <label for="rate2">**</label>
    <input id="rate3" type="radio" name="rate" value="3">
    <label for="rate3">***</label>
    <input id="rate4" type="radio" name="rate" value="4">
    <label for="rate4">****</label>
    <input id="rate5" type="radio" name="rate" value="5">
    <label for="rate5">*****</label>
    <br>
    <?php if (isset(session()->error['rate'])) echo session()->error['rate'] ?>
    <br>
    <br>
    <input type="submit" value="submit">
</form>