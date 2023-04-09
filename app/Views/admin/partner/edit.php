<h1>Partner Edit Page</h1>

<!-- Helper form -->
<?= form_open_multipart('admin/partners/' . $data['id'] . '/update') ?>
    <!-- CSRF Token -->
    <?= csrf_field() ?>
    <input type="text" name="name" value="<?= $data['name'] ?>">
    <br>
    <!-- Displaying error input name -->
    <?php if (isset(session()->error['name'])) echo session()->error['name'] ?>
    <br>
    <br>
    <img src="<?= base_url() . $data['path'] . $data['picture'] ?>" alt="<?= $data['picture'] ?>" width="100">
    <input type="file" name="picture" accept="image/*">
    <br>
    <!-- Displaying error input file -->
    <?php if (isset(session()->error['picture'])) echo session()->error['picture'] ?>
    <br>
    <br>
    <input type="submit" value="Edit">
</form>