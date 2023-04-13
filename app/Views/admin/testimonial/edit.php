<h1>Testimonial Edit Page (admin)</h1>

<!-- Helper form -->
<?= form_open('admin/testimonials/' . $data['id'] . '/update') ?>
    <!-- CSRF Token -->
    <?= csrf_field() ?>
    <input type="text" name="name" value="<?php echo esc(session()->oldValue['name'] ?? $data['name']) ?>" placeholder="Name">
    <br>
    <!-- Displaying error input name -->
    <?php if (isset(session()->error['name'])) echo session()->error['name'] ?>
    <br>
    <br>
    <textarea name="comment" cols="30" rows="10"><?php echo esc(session()->oldValue['comment'] ?? $data['comment']) ?></textarea>
    <br>
    <!-- Displaying error input file -->
    <?php if (isset(session()->error['comment'])) echo session()->error['comment'] ?>
    <br>
    <br>
    Rate: 
    <input id="rate1" type="radio" name="rate" value="1" <?php echo $data['rate'] == 1 ? 'checked' : '' ?> >
    <label for="rate1">*</label>
    <input id="rate2" type="radio" name="rate" value="2" <?php echo $data['rate'] == 2 ? 'checked' : '' ?> >
    <label for="rate2">**</label>
    <input id="rate3" type="radio" name="rate" value="3" <?php echo $data['rate'] == 3 ? 'checked' : '' ?> >
    <label for="rate3">***</label>
    <input id="rate4" type="radio" name="rate" value="4" <?php echo $data['rate'] == 4 ? 'checked' : '' ?> >
    <label for="rate4">****</label>
    <input id="rate5" type="radio" name="rate" value="5" <?php echo $data['rate'] == 5 ? 'checked' : '' ?> >
    <label for="rate5">*****</label>
    <br>
    <?php if (isset(session()->error['rate'])) echo session()->error['rate'] ?>
    <br>
    <br>
    <input type="submit" value="submit">
</form>