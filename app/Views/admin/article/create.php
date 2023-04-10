<h1>Article Create Page (admin)</h1>

<!-- Helper form -->
<?= form_open('admin/articles/insert') ?>
    <!-- CSRF Token -->
    <?= csrf_field() ?>
    <input type="text" name="title" value="<?php if (isset(session()->oldValue['title'])) echo esc(session()->oldValue['title']) ?>">
    <br>
    <!-- Displaying error input name -->
    <?php if (isset(session()->error['title'])) echo session()->error['title'] ?>
    <br>
    <br>
    <textarea name="content" cols="30" rows="10"><?php if (isset(session()->oldValue['content'])) echo esc(session()->oldValue['content']) ?></textarea>
    <br>
    <!-- Displaying error input file -->
    <?php if (isset(session()->error['content'])) echo session()->error['content'] ?>
    <br>
    <br>
    <input type="submit" value="submit">
</form>