<h1>Partner Create Page</h1>

<!-- Helper form -->
<?= form_open_multipart('admin/partners/insert') ?>
    <!-- CSRF Token -->
    <?= csrf_field() ?>
    <input type="text" name="name">
    <br>
    <!-- Displaying error input name -->
    <?php if (isset(session()->error['name'])) echo session()->error['name'] ?> 
    <br>
    <br>
    <input type="file" name="picture" accept="image/*">
    <br>
    <!-- Displaying error input file -->
    <?php if (isset(session()->error['picture'])) echo session()->error['picture'] ?>
    <br>
    <br>
    <input type="submit" value="submit">
</form>