<h1>Article Edit Page (admin)</h1>

<!-- Helper form -->
<?= form_open('admin/articles/' . $data['id'] . '/update') ?>
    <!-- CSRF Token -->
    <?= csrf_field() ?>
    <input type="text" name="title" value="<?php echo esc(session()->oldValue['title'] ?? $data['title']) ?>">
    <br>
    <!-- Displaying error input title -->
    <?php if (isset(session()->error['title'])) echo session()->error['title'] ?>
    <br>
    <br>
    <textarea name="content" cols="30" rows="10"><?php echo esc(session()->oldValue['content'] ?? $data['content']) ?></textarea>
    <br>
    <!-- Displaying error input content -->
    <?php if (isset(session()->error['content'])) echo session()->error['content'] ?>
    <br>
    <br>
    <input type="submit" value="Edit">
</form>