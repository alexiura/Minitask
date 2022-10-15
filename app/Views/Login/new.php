<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Login<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="p-3 mx-auto" style="width: 400px;">
    <h1>Autentifica-te</h1>

    <?= form_open("/login/create") ?>

        <div    >
            <label for="email">email</label>
            <input type="text" name="email" id="email" value="<?= old('email') ?>">
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        
        <button>Autentifica-te</button>

    </form>
</div>

<?= $this->endSection() ?>